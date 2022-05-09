<div class="modal modal-blur fade" id="editPeserta" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form" name="id" id="id">
                <div class="form-floating mb-3">
                    <input type="text" name="first_name" class="form form-control required">
                    <label>First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="last_name" class="form form-control required">
                    <label>Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="email" class="form form-control required">
                    <label>Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nilai_listening" class="form form-control required" readonly>
                    <label>Benar Listening</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nilai_reading" class="form form-control required" readonly>
                    <label>Benar Reading</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nilai_writing" class="form form-control required">
                    <label>Nilai writing</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nilai_speaking" class="form form-control required">
                    <label>Nilai Speaking</label>
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