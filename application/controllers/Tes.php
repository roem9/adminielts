<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends MY_Controller {
    public function index(){
        // navbar and sidebar
        $data['menu'] = "Tes";

        // for title and header 
        $data['title'] = "List Tes";

        // for modal 
        $data['modal'] = [
            "modal_tes",
            "modal_setting"
        ];
        
        // javascript 
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
            "modules/setting.js",
            "load_data/tes_reload.js",
            "modules/tes.js",
        ];

        $this->load->view("pages/tes/list", $data);
    }

    public function hasil($id){
        $tes = $this->tes->get_one("tes", ["md5(id_tes)" => $id]);

        $data['menu'] = "Hasil";
        $data['id'] = $id;

        // for title and header 
        $data['title'] = "Hasil ".$tes['nama_tes'];

        // for modal 
        $data['modal'] = [
            "modal_hasil_tes",
            "modal_setting"
        ];
        
        // javascript 
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
            "modules/setting.js",
            "load_data/hasil_tes_toefl_reload.js",
            "modules/hasil_tes_toefl.js",
        ];

        $this->load->view("pages/tes/list-hasil-toefl", $data);
    }

    public function jawaban($id){
        $peserta = $this->tes->get_one("peserta_ielts", ["md5(id)" => $id]);
        $tes = $this->tes->get_one("tes", ["id_tes" => $peserta['id_tes']]);

        $data = explode("|||", $peserta['text_listening_reading']);

        $jawaban = [];
        foreach ($data as $i => $data) {
            $jawaban['listening_reading'][$i] = explode("&&&", $data);
        }

        $jawaban['writing'] = explode("|||", $peserta['text_writing']);
        $jawaban['peserta'] = $peserta;

        $jawaban['title'] = "Jawaban " . $peserta['first_name'] . " " .$peserta['last_name'];
        
        // var_dump($jawaban['listening_reading']);

        if($tes['tipe_soal'] == "Soal_002"){
            $this->load->view("pages/soal/soal-ielts-002", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_GT_002"){
            $this->load->view("pages/soal/soal-ielts-gt-002", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_GT_003"){
            $this->load->view("pages/soal/soal-ielts-gt-003", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_003"){
            $this->load->view("pages/soal/soal-ielts-003", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_Academic_Post_Test"){
            $this->load->view("pages/soal/soal-ielts-academic-post-test", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_Academic_Pretest"){
            $this->load->view("pages/soal/soal-ielts-academic-pretest", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_General_Post_Test"){
            $this->load->view("pages/soal/soal-ielts-general-post-test", $jawaban);
        } else if($tes['tipe_soal'] == "Soal_General_Pretest"){
            $this->load->view("pages/soal/soal-ielts-general-pretest", $jawaban);
        }
    }

    // excel
        public function export($file, $id_tes){
            $tes = $this->tes->get_one("tes", ["md5(id_tes)" => $id_tes]);
            $tahun = date('y', strtotime($tes['tgl_tes']));
            
            $spreadsheet = new Spreadsheet;

            if($file == "hasil"){
                $semua_peserta = $this->tes->get_all("peserta_ielts", ["id_tes" => $tes['id_tes']]);
                $file_data = "Hasil Keseluruhan";
            } else if($file == "sertifikat"){
                $semua_peserta = $this->tes->get_all("peserta_ielts", ["id_tes" => $tes['id_tes'], "no_doc <> " => ""], "(no_doc + 0)");
                $file_data = "Sertifikat";
            }

            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A1', 'LIST PESERTA ' . $tes['nama_tes'])
                        ->setCellValue('A2', 'No')
                        ->setCellValue('B2', 'No. Sertifikat')
                        ->setCellValue('C2', 'First Name')
                        ->setCellValue('D2', 'Last Name')
                        ->setCellValue('E2', 'Email')
                        ->setCellValue('F2', 'Benar Listening')
                        ->setCellValue('G2', 'Nilai Listening')
                        ->setCellValue('H2', 'Benar Reading')
                        ->setCellValue('I2', 'Nilai Reading')
                        ->setCellValue('J2', 'Nilai Writing')
                        ->setCellValue('K2', 'Nilai Speaking')
                        ->setCellValue('L2', 'SKOR IELTS')
                        ->setCellValue('M2', 'Pembulatan SKOR IELTS');

            $spreadsheet->getActiveSheet()
                        ->mergeCells('A1:M1');
            
            $kolom = 3;
            $nomor = 1;
            foreach($semua_peserta as $peserta) {

                if($peserta['no_doc'] != "") $no_doc = "{$tahun}/{$peserta['no_doc']}";
                else $no_doc = "-";

                    $skor_listening = ielts_listening($peserta['nilai_listening']);
                    $skor_reading = ielts_reading($peserta['nilai_reading'], $tes['tipe_tes']);
                    $skor_ielts = skor_ielts($skor_listening, $skor_reading, $peserta['nilai_writing'], $peserta['nilai_speaking']);
                    $pembulatan_skor_ielts = pembulatan_skor_ielts($skor_listening, $skor_reading, $peserta['nilai_writing'], $peserta['nilai_speaking']);

                    $spreadsheet->setActiveSheetIndex(0)
                                ->setCellValue('A' . $kolom, $nomor)
                                ->setCellValue('B' . $kolom, $no_doc)
                                ->setCellValue('C' . $kolom, $peserta['first_name'])
                                ->setCellValue('D' . $kolom, $peserta['last_name'])
                                ->setCellValue('E' . $kolom, $peserta['email'])
                                ->setCellValue('F' . $kolom, $peserta['nilai_listening'])
                                ->setCellValue('G' . $kolom, $skor_listening)
                                ->setCellValue('H' . $kolom, $peserta['nilai_reading'])
                                ->setCellValue('I' . $kolom, $skor_reading)
                                ->setCellValue('J' . $kolom, $peserta['nilai_writing'])
                                ->setCellValue('K' . $kolom, $peserta['nilai_speaking'])
                                ->setCellValue('L' . $kolom, $skor_ielts)
                                ->setCellValue('M' . $kolom, $pembulatan_skor_ielts);
    
                    $kolom++;
                    $nomor++;
    
            }

            foreach(range('A','M') as $columnID) {
                $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
                    ->setAutoSize(true);
            }

            $writer = new Xlsx($spreadsheet);

            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="'.$tes['nama_tes'].' '.$file_data.'.xlsx"');
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
        }
    // excel
    
    public function loadTes(){
        header('Content-Type: application/json');
        $output = $this->tes->loadTes();
        echo $output;
    }

    public function add_tes(){
        $data = $this->tes->add_tes();
        echo json_encode($data);
    }
    
    public function get_tes(){
        $id_tes = $this->input->post("id_tes");

        $data = $this->tes->get_one("tes", ["id_tes" => $id_tes]);
        echo json_encode($data);
    }

    public function loadHasil($id){
        header('Content-Type: application/json');
        $output = $this->tes->loadHasil($id);
        echo $output;
    }
    // load 
    
    public function get_peserta_ielts(){
        $data = $this->tes->get_peserta_ielts();
        echo json_encode($data);
    }

    public function edit_tes(){
        $data = $this->tes->edit_tes();
        echo json_encode($data);
    }

    public function change_status(){
        $data = $this->tes->change_status();
        echo json_encode($data);
    }

    public function edit_peserta_ielts(){
        $data = $this->tes->edit_peserta_ielts();
        echo json_encode($data);
    }

    public function hapus_tes(){
        $data = $this->tes->hapus_tes();
        echo json_encode($data);
    }

    public function upload_logo(){
        $data = $this->tes->upload_logo();
        echo json_encode($data);
    }

    public function add_sertifikat_toefl(){
        $data = $this->tes->add_sertifikat_toefl();
        echo json_encode($data);
    }
    
    public function sertifikat($id){
        $peserta = $this->tes->get_one("peserta_ielts", ["md5(id)" => $id]);
        $tes = $this->tes->get_one("tes", ["id_tes" => $peserta['id_tes']]);
        $peserta['nama'] = $peserta['first_name'] .' '. $peserta['last_name'];
        // $peserta['t4_lahir'] = ucwords(strtolower($peserta['t4_lahir']));
        $data['peserta'] = $peserta;
        $data['hari'] = date('d', strtotime($tes['tgl_tes']));
        $data['tahun'] = date('y', strtotime($tes['tgl_tes']));
        $data['bulan'] = getHurufBulan(date('m', strtotime($tes['tgl_tes'])));
        $data['tgl_tes'] = $tes['tgl_tes'];
        $data['tipe_tes'] = $tes['tipe_tes'];
        
        // $data['no_doc'] = "I.{$peserta['no_doc']}{$peserta['hari']}{$peserta['bulan']}{$peserta['tahun']}";
        
        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [210, 297], 'orientation' => 'P',
        // , 'margin_top' => '43', 'margin_left' => '25', 'margin_right' => '25', 'margin_bottom' => '35',
            'fontdata' => $fontData + [
                'rockb' => [
                    'R' => 'ROCKB.TTF',
                ],'rock' => [
                    'R' => 'ROCK.TTF',
                ],
                'arial' => [
                    'R' => 'arial.ttf',
                    'useOTL' => 0xFF,
                    'useKashida' => 75,
                ],
                'bodoni' => [
                    'R' => 'BOD_R.TTF',
                ],
                'calibri' => [
                    'R' => 'CALIBRI.TTF',
                ],
                'cambria' => [
                    'R' => 'CAMBRIAB.TTF',
                ],
                'callighraphy' => [
                    'R' => 'LCALLIG.TTF'
                ]
            ], 
        ]);

        $mpdf->SetTitle("{$peserta['first_name']} {$peserta['last_name']}");
        $mpdf->WriteHTML($this->load->view('pages/tes/sertifikat-ielts', $data, TRUE));
        $mpdf->Output("{$peserta['first_name']} {$peserta['last_name']}.pdf", "I");
    }
    
    public function nilai(){
        $this->tes->add_data("nilai_toefl", ["soal" => 0, "poin" => 24, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 1, "poin" => 25, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 2, "poin" => 26, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 3, "poin" => 27, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 4, "poin" => 28, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 5, "poin" => 29, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 6, "poin" => 30, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 7, "poin" => 31, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 8, "poin" => 32, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 9, "poin" => 32, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 10, "poin" => 33, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 11, "poin" => 35, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 12, "poin" => 37, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 13, "poin" => 37, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 14, "poin" => 38, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 15, "poin" => 41, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 16, "poin" => 41, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 17, "poin" => 42, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 18, "poin" => 43, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 19, "poin" => 44, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 20, "poin" => 45, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 21, "poin" => 45, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 22, "poin" => 46, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 23, "poin" => 47, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 24, "poin" => 47, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 25, "poin" => 48, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 26, "poin" => 48, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 27, "poin" => 49, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 28, "poin" => 49, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 29, "poin" => 50, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 30, "poin" => 51, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 31, "poin" => 51, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 32, "poin" => 52, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 33, "poin" => 52, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 34, "poin" => 53, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 35, "poin" => 54, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 36, "poin" => 54, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 37, "poin" => 55, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 38, "poin" => 56, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 39, "poin" => 57, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 40, "poin" => 57, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 41, "poin" => 58, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 42, "poin" => 59, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 43, "poin" => 60, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 44, "poin" => 61, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 45, "poin" => 62, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 46, "poin" => 63, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 47, "poin" => 65, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 48, "poin" => 66, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 49, "poin" => 67, "tipe" => "Listening"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 50, "poin" => 68, "tipe" => "Listening"]);

        
        $this->tes->add_data("nilai_toefl", ["soal" => 0, "poin" => 20, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 1, "poin" => 20, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 2, "poin" => 21, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 3, "poin" => 22, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 4, "poin" => 23, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 5, "poin" => 25, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 6, "poin" => 26, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 7, "poin" => 27, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 8, "poin" => 29, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 9, "poin" => 31, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 10, "poin" => 33, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 11, "poin" => 35, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 12, "poin" => 36, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 13, "poin" => 37, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 14, "poin" => 38, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 15, "poin" => 40, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 16, "poin" => 40, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 17, "poin" => 41, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 18, "poin" => 42, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 19, "poin" => 43, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 20, "poin" => 44, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 21, "poin" => 45, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 22, "poin" => 46, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 23, "poin" => 47, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 24, "poin" => 48, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 25, "poin" => 49, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 26, "poin" => 50, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 27, "poin" => 51, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 28, "poin" => 52, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 29, "poin" => 53, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 30, "poin" => 54, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 31, "poin" => 55, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 32, "poin" => 56, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 33, "poin" => 57, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 34, "poin" => 58, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 35, "poin" => 60, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 36, "poin" => 61, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 37, "poin" => 63, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 38, "poin" => 65, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 39, "poin" => 67, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 40, "poin" => 68, "tipe" => "Structure"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 0, "poin" => 24, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 1, "poin" => 25, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 2, "poin" => 26, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 3, "poin" => 27, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 4, "poin" => 28, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 5, "poin" => 29, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 6, "poin" => 30, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 7, "poin" => 31, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 8, "poin" => 32, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 9, "poin" => 32, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 10, "poin" => 33, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 11, "poin" => 35, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 12, "poin" => 37, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 13, "poin" => 37, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 14, "poin" => 38, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 15, "poin" => 41, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 16, "poin" => 41, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 17, "poin" => 42, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 18, "poin" => 43, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 19, "poin" => 44, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 20, "poin" => 45, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 21, "poin" => 45, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 22, "poin" => 46, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 23, "poin" => 47, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 24, "poin" => 47, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 25, "poin" => 48, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 26, "poin" => 48, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 27, "poin" => 49, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 28, "poin" => 49, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 29, "poin" => 50, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 30, "poin" => 51, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 31, "poin" => 51, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 32, "poin" => 52, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 33, "poin" => 52, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 34, "poin" => 53, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 35, "poin" => 54, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 36, "poin" => 54, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 37, "poin" => 55, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 38, "poin" => 56, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 39, "poin" => 57, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 40, "poin" => 57, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 41, "poin" => 58, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 42, "poin" => 59, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 43, "poin" => 60, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 44, "poin" => 61, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 45, "poin" => 62, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 46, "poin" => 63, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 47, "poin" => 65, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 48, "poin" => 66, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 49, "poin" => 67, "tipe" => "Reading"]);
        $this->tes->add_data("nilai_toefl", ["soal" => 50, "poin" => 68, "tipe" => "Reading"]);
    }
}

/* End of file Tes.php */
