
var url = window.location.href;
var id_tes = url.substring(url.indexOf("hasil/") + 6);

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
    ajax: {"url": url_base+"tes/loadHasil/"+id_tes, "type": "POST"},
    columns: [
        {"data": "first_name", render: function(row, data, iDisplayIndex){
            return iDisplayIndex.first_name + ` ` + iDisplayIndex.last_name
        }},
        {"data": "email"},
        {"data": "nilai_listening", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "nilai_reading", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "nilai_writing", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "nilai_speaking", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
        {"data": "action", render : function (data) {
            if(jQuery.browser.mobile == true) return data
            else return "<center>"+data+"</center>"
        }},
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
    { "targets": [4], "orderable": false},
    ],
    "rowReorder": {
        "selector": 'td:nth-child(0)'
    },
    "responsive": true,
});