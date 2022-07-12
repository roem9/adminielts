<div class="modal modal-blur fade" id="addTes" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tes Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user" id="formAddTes">
                    <div class="form-floating mb-3">
                        <input type="text" name="nama_tes" class="form form-control required">
                        <label>Nama Tes</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="tgl_tes" id="tgl_tes_add" class="form form-control required">
                        <label for="tgl_tes_add">Tgl Tes</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="tgl_pengumuman" id="tgl_pengumuman_add" class="form form-control required">
                        <label for="tgl_pengumuman_edit">Tgl Pengumuman</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="tipe_tes" id="tipe_tes_add" class="form form-control required">
                            <option value="">Pilih Tipe Tes</option>
                            <option value="IELTS Academic">IELTS Academic</option>
                            <option value="General Training">General Training</option>
                        </select>
                        <label for="id_soal_add">Tipe Tes IELTS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="tipe_soal" id="id_soal_add" class="form form-control required">
                            <option value="">Pilih Soal</option>
                            <option value="Soal_002">Soal_002</option>
                            <option value="Soal_GT_002">Soal_GT_002</option>
                            <option value="Soal_003">Soal_003</option>
                            <option value="Soal_GT_003">Soal_GT_003</option>
                            <option value="Soal_Academic_Post_Test">Soal_Academic_Post_Test</option>
                            <option value="Soal_Academic_Pretest">Soal_Academic_Pretest</option>
                            <option value="Soal_General_Post_Test">Soal_General_Post_Test</option>
                            <option value="Soal_General_Pretest">Soal_General_Pretest</option>
                        </select>
                        <label for="id_soal_add">Soal</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="catatan" class="form form-control required" style="height: 100px"></textarea>
                        <label for="" class="col-form-label">Catatan</label>
                    </div>

                    <div class="alert alert-important alert-info alert-dismissible" role="alert">
                    <div class="d-flex">
                            <div>
                                <?= tablerIcon("alert-circle", "alert-icon")?>
                            </div>
                            <div>
                                Pengaturan pesan yang akan tampil setelah menyelesaikan tes
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="mb-3">Pesan Yang Akan Tampil</label>
                        <textarea name="msg" class='ckeditor' id='form-text-add'></textarea>
                        <small class="mt-3">
                            <span class="text-danger">*BERIKUT CARA MENGGUNAKAN VARIABEL YANG BISA DITAMPILKAN PADA PESAN.</span> <br>
                            <b>Tes IELTS : </b><br>
                            $first_name = first name, $last_name = last name, $email = email, $benar_listening = Benar Listening, $benar_reading = Benar Reading, $tes = Nama Tes, $tgl_tes = Tanggal Tes, $tgl_pengumuman = Tanggal Pengumuman<br><br>
                            <b>Contoh Pesan : </b><br>
                            Selamat Anda Telah Menyelesaikan $tes, Berikut Ini Data Diri Anda :<br>
                            Nama        : $first_name $last_name<br>
                            Email       : $email<br><br>
                            Berikut Ini Hasil Ujian Anda :<br>
                            Benar Listening : $benar_listening<br>
                            Benar Reading : $benar_reading<br>
                        </small>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn me-auto mr-3" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btnTambah">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="editTes" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Tes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_tes" class="form">
                <div class="form-floating mb-3">
                    <input type="text" name="nama_tes" class="form form-control required">
                    <label>Nama Tes</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" name="tgl_tes" id="tgl_tes_edit" class="form form-control required">
                    <label for="tgl_tes_edit">Tgl Tes</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" name="tgl_pengumuman" id="tgl_pengumuman_edit" class="form form-control required">
                    <label for="tgl_pengumuman_edit">Tgl Pengumuman</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="tipe_tes" id="tipe_tes_add" class="form form-control required">
                        <option value="">Pilih Tipe Tes</option>
                        <option value="IELTS Academic">IELTS Academic</option>
                        <option value="General Training">General Training</option>
                    </select>
                    <label for="id_soal_add">Tipe Tes IELTS</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="tipe_soal" id="tipe_soal_edit" class="form form-control required">
                        <option value="">Pilih Soal</option>
                        <option value="Soal_002">Soal_002</option>
                        <option value="Soal_GT_002">Soal_GT_002</option>
                        <option value="Soal_003">Soal_003</option>
                        <option value="Soal_GT_003">Soal_GT_003</option>
                        <option value="Soal_Academic_Post_Test">Soal_Academic_Post_Test</option>
                        <option value="Soal_Academic_Pretest">Soal_Academic_Pretest</option>
                        <option value="Soal_General_Post_Test">Soal_General_Post_Test</option>
                        <option value="Soal_General_Pretest">Soal_General_Pretest</option>
                    </select>
                    <label for="id_soal_edit">Soal</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="catatan" class="form form-control required" style="height: 100px"></textarea>
                    <label for="" class="col-form-label">Catatan</label>
                </div>

                <div class="alert alert-important alert-info alert-dismissible" role="alert">
                <div class="d-flex">
                        <div>
                            <?= tablerIcon("alert-circle", "alert-icon")?>
                        </div>
                        <div>
                            Pengaturan pesan yang akan tampil setelah menyelesaikan tes
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="mb-3">Pesan Yang Akan Tampil</label>
                    <textarea name="msg" class='ckeditor' id='form-text-edit'></textarea>
                    <small class="mt-3">
                        <span class="text-danger">*BERIKUT CARA MENGGUNAKAN VARIABEL YANG BISA DITAMPILKAN PADA PESAN.</span> <br>
                        <b>Tes IELTS : </b><br>
                        $first_name = first name, $last_name = last name, $email = email, $benar_listening = Benar Listening, $benar_reading = Benar Reading, $tes = Nama Tes, $tgl_tes = Tanggal Tes, $tgl_pengumuman = Tanggal Pengumuman<br><br>
                        <b>Contoh Pesan : </b><br>
                        Selamat Anda Telah Menyelesaikan $tes, Berikut Ini Data Diri Anda :<br>
                        Nama        : $first_name $last_name<br>
                        Email       : $email<br><br>
                        Berikut Ini Hasil Ujian Anda :<br>
                        Benar Listening : $benar_listening<br>
                        Benar Reading : $benar_reading<br>
                    </small>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn me-auto mr-3" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-success btnEdit">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>