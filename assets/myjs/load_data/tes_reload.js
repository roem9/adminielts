var datatable = $('#dataTable').DataTable({ 
    initComplete: function() {
        var api = this.api();
        $('#mytable_filter input')
            .off('.DT')
            .on('input.DT', function() {
                api.search(this.value).draw();
        });
    },
    oLanguage: {
    sProcessing: "loading..."
    },
    processing: true,
    serverSide: true,
    ajax: {"url": url_base+"tes/loadTes", "type": "POST"},
    columns: [
        {"data": "nama_tes"},
        {"data": "tgl_tes"},
        {"data": "tipe_soal"},
        {"data": "peserta", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "status", render : function(data, row, iDisplayIndex){
            (data == 'Berjalan' ? status = "checked" : status = "");
            
            if(jQuery.browser.mobile == true) 
                return `<label class="form-switch">
                    <input class="form-check-input" type="checkbox" name="id_tes" value="`+iDisplayIndex.id_tes+`" `+status+`>
                </label>`
            else 
                return `<center>
                    <label class="form-switch">
                        <input class="form-check-input" type="checkbox" name="id_tes" value="`+iDisplayIndex.id_tes+`" `+status+`>
                    </label>
                </center>`
        }},
        {"data": "action", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "link_listening_reading", "className": "none text-wrap"},
        {"data": "link_writing", "className": "none text-wrap"},
        {"data": "catatan", "className": "none text-wrap"},
    ],
    order: [[0, 'desc']],
    rowCallback: function(row, data, iDisplayIndex) {
        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        $('td:eq(0)', row).html();
    },
    "columnDefs": [
    { "searchable": false, "targets": "" },  // Disable search on first and last columns
    { "targets": [2,3,4,5], "orderable": false},
    ],
    "rowReorder": {
        "selector": 'td:nth-child(0)'
    },
    "responsive": true
});