<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tes_model extends MY_Model {

    public function loadTes(){
        $config = $this->config();

        $this->datatables->select("id_tes, tgl_tes, tgl_pengumuman, nama_tes, status, catatan, password, tipe_soal, tipe_tes
        ");
        $this->datatables->from("tes");
        $this->datatables->where("hapus", 0);

        $this->datatables->add_column("peserta", '$1', 'peserta_ielts(id_tes)');
        $this->datatables->add_column('action','
                <span class="dropdown">
                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                        '.tablerIcon("menu-2", "me-1").'
                        Menu
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item editTes" href="#editTes" data-bs-toggle="modal" data-id="$1">
                            '.tablerIcon("info-circle", "me-1").'
                            Detail Tes
                        </a>
                        <a class="dropdown-item" href="'.base_url().'tes/hasil/$2" target="_blank">
                            '.tablerIcon("award", "me-1").'
                            Hasil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item hapusTes" href="javascript:void(0)" data-id="$1">
                            '.tablerIcon("trash", "me-1").'
                            Hapus
                        </a>
                    </div>
                </span>', 'id_tes, md5(id_tes)');

            $this->datatables->add_column('link_listening_reading', '
                <button class="copy btn btn-success" data-clipboard-text="'.$config[1]['value'].'/soal/id/$1">
                    '.tablerIcon("copy", "me-1").'
                    Salin Link
                </button>
            ', 'md5(id_tes), id_tes');

            $this->datatables->add_column('link_writing', '
                <button class="copy btn btn-success" data-clipboard-text="'.$config[1]['value'].'/soal/writing/$1">
                    '.tablerIcon("copy", "me-1").'
                    Salin Link
                </button>
            ', 'md5(id_tes), id_tes');
            
        $this->datatables->edit_column("tgl_tes", '$1', 'tgl_indo(tgl_tes, lengkap)');
        $this->datatables->edit_column("tgl_pengumuman", '$1', 'tgl_indo(tgl_pengumuman, lengkap)');
        return $this->datatables->generate();
    }

    public function loadHasil($id){
        $config = $this->config();

        $this->datatables->select("id, id_tes, first_name, last_name, email, nilai_listening, nilai_reading, nilai_writing, nilai_speaking, sertifikat, no_doc");
        $this->datatables->from("peserta_ielts");
        $this->datatables->where("md5(id_tes)", $id);

        $this->datatables->add_column('full', '
            <a href="'.base_url().'tes/sertifikat/$1" target="_blank" class="btn btn-info">'.tablerIcon("award", "me-1").'</a>
        ', 'md5(id)');
        $this->datatables->add_column('action','
                <span class="dropdown">
                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                        '.tablerIcon("menu-2", "me-1").'
                        Menu
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item editPeserta" href="#editPeserta" data-bs-toggle="modal" data-id="$1">
                            '.tablerIcon("info-circle", "me-1").'
                            Detail Peserta
                        </a>
                        <a class="dropdown-item" href="'.base_url("tes/jawaban/$2").'" target="_blank" data-id="$1">
                            '.tablerIcon("info-circle", "me-1").'
                            Jawaban Peserta
                        </a>
                        <a class="dropdown-item" href="'.$config[1]['value'].'/sertifikat/no/$2" target="_blank">
                            '.tablerIcon("award", "me-1").'
                            Link Sertifikat
                        </a>
                    </div>
                </span>', 'id, md5(id)');
        return $this->datatables->generate();
    }

    public function add_tes(){
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $this->input->post($key);
        }

        $query = $this->add_data("tes", $data);
        if($query) return 1;
        else return 0;
    }

    public function get_tes(){
        $id_tes = $this->input->post("id_tes");

        $data = $this->get_one("tes", ["id_tes" => $id_tes]);
        return $data;
    }

    public function edit_tes(){
        $id_tes = $this->input->post("id_tes");
        unset($_POST['id_tes']);

        $query = $this->edit_data("tes", ["id_tes" => $id_tes], $_POST);
        if($query) return 1;
        else return 0;
    }

    public function change_status(){
        $id_tes = $this->input->post("id_tes");

        $status = $this->input->post("status");
        $data = $this->edit_data("tes", ["id_tes" => $id_tes], ["status" => $status]);

        if($data) return 1;
        else return 0;
    }

    public function hapus_tes(){
        $id_tes = $this->input->post("id_tes");

        $data = $this->edit_data("tes", ["id_tes" => $id_tes], ["hapus" => 1, "status" => "Selesai"]);
        if($data){
            return 1;
        } else {
            return 0;
        }
    }

    public function edit_peserta_ielts(){
        $id = $this->input->post("id");
        unset($_POST['id']);
        
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $this->input->post($key);
        }

        $data = $this->edit_data("peserta_ielts", ["id" => $id], $data);
        if($data) return 1;
        else return 0;
    }

    public function get_peserta_ielts(){
        $id = $this->input->post("id");
        $data = $this->get_one("peserta_ielts", ["id" => $id]);
        return $data;
    }

    public function upload_logo(){
        if(isset($_FILES['file']['name'])) {

            $id = $this->input->post("id_tes");

            $nama_file = $_FILES['file'] ['name']; // Nama Audio
            $size        = $_FILES['file'] ['size'];// Size Audio
            $error       = $_FILES['file'] ['error'];
            $tipe_audio  = $_FILES['file'] ['type']; //tipe audio untuk filter
            $folder      = "./assets/logo/"; //folder tujuan upload
            $valid       = array('png', 'PNG'); //Format File yang di ijinkan Masuk ke server
            
            if(strlen($nama_file)){   
                 // Perintah untuk mengecek format gambar
                 list($txt, $ext) = explode(".", $nama_file);
                 if(in_array($ext,$valid)){   

                     // Perintah untuk mengupload file dan memberi nama baru
                    switch ($tipe_audio) {
                        case 'image/jpeg':
                            $tipe_audio = "jpg";
                            break;
                        case 'image/png':
                            $tipe_audio = "png";
                            break;
                        case 'image/gif':
                            $tipe_audio = "gif";
                            break;
                        default:
                            break;
                    }

                     $img_peserta = $id.".".$tipe_audio;

                     $tmp = $_FILES['file']['tmp_name'];
                    
                     
                    if(move_uploaded_file($tmp, $folder.$img_peserta)){
                        return 1;
                        
                    } else { // Jika Audio Gagal Di upload 
                        return 0;
                    }
                 } else{ 
                    return 2;
                }
        
            }
            
        }
    }

    public function add_sertifikat_toefl(){
        $config = $this->config();

        $id = $this->input->post("id");

        $peserta = $this->get_one("peserta_ielts", ["id" => $id]);
        $tes = $this->get_one("tes", ["id_tes" => $peserta['id_tes']]);
        
        $date_year = date('Y', strtotime($tes['tgl_tes']));
        $date_month = date('m', strtotime($tes['tgl_tes']));

        $this->db->select("CONVERT(no_doc, UNSIGNED INTEGER) AS num");
        $this->db->from("peserta_ielts as a");
        $this->db->join("tes as b", "a.id_tes = b.id_tes");
        $this->db->where("YEAR(tgl_tes)", $date_year);
        $this->db->where("MONTH(tgl_tes)", $date_month);
        $this->db->order_by("num", "DESC");
        $data = $this->db->get()->row_array();

        if($data) $no = $data['num']+1;
        else $no = 1;

        if($no > 0 && $no < 10) $no_doc = "00".$no;
        elseif($no >= 10 && $no < 100) $no_doc = "0".$no;
        elseif($no >= 100) $no_doc = $no;
        
        $this->load->library('qrcode/ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name=$id.'.png'; //buat name dari qr code sesuai dengan nim

        $params['data'] = $config[1]['value']."/sertifikat/no/".md5($id); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


        $data = $this->edit_data("peserta_ielts", ["id" => $id], ["no_doc" => $no_doc]);
        if($data) return 1;
        else return 0;
    }
}

/* End of file Tes_model.php */
