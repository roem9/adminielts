// profil agency 
$(document).on("click", ".editPeserta", function(){
    let form = "#editPeserta";

    let id = $(this).data("id");
    let data = {id: id};
    let result = ajax(url_base+"tes/get_peserta_ielts", "POST", data)
    
    $.each(result, function(key, value){
        $(form+" [name='"+key+"']").val(value);
    })
})

// edit peserta
$(document).on("click", "#editPeserta .btnEdit", function(){
    Swal.fire({
        icon: 'question',
        text: 'Yakin akan mengubah data peserta?',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then(function (result) {
        if (result.value) {
            let form = "#editPeserta";
            
            let formData = {};
            $(form+" .form").each(function(index){
                formData = Object.assign(formData, {[$(this).attr("name")]: $(this).val()})
            })

            let eror = required(form);
            
            if( eror == 1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'lengkapi isi form terlebih dahulu'
                })
            } else {
                data = formData;
                
                let result = ajax(url_base+"tes/edit_peserta_ielts", "POST", data);

                if(result == 1){
                    loadData();

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        text: 'Berhasil mengubah data peserta',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'terjadi kesalahan'
                    })
                }
            }
        }
    })
})