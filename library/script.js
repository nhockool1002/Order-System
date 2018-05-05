$(document).ready(function(){
   $(".option-user").click(function(){
       $(".sidebar-show-option-user").toggle("slowly");
   });
   $.get('ajax/getdata.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.tenbenh;
    });
    var myObj = JSON.stringify(result);
    document.getElementById("test").innerHTML = myObj;
});
});
var myObj;
function viewData(){
    $.ajax({
        url: 'ajax/process.php?p=view',
        method: 'GET'
    }).done(function(data){
        $('tbody').html(data)
        tableData()
    })
}


function tableData(){
    $.get('ajax/getdata.php',function(data){
        var obj = JSON.parse(data);
        var result = {};
        obj.map(function(e){
        result[e.id] = e.tenbenh;
        });
        var myObj = JSON.stringify(result);
        document.getElementById("test").innerHTML = myObj;
   
        $('#tabledit').Tabledit({
            url: 'ajax/process.php',
            eventType: 'dblclick',
            editButton: true,
            deleteButton: true,
            hideIdentifier: false,
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-warning',
                    html: '<span class="glyphicon glyphicon-pencil"></span> Edit',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<span class="glyphicon glyphicon-trash"></span> Trash',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-success',
                    html: 'Save'
                },
                restore: {
                    class: 'btn btn-sm btn-warning',
                    html: 'Restore',
                    action: 'restore'
                },
                confirm: {
                    class: 'btn btn-sm btn-default',
                    html: 'Confirm'
                }
            },
            columns: {
                identifier: [1, 'id'],
                editable: [[2, 'hoten'],[3, 'dienthoai'],[4, 'masokham'],[5, 'thoigiandangky'],[6, 'thoigiandathen'],[7, 'thoigiandenkham'],[8, 'test', myObj ]]
            },
            onSuccess: function(data, textStatus, jqXHR) {
                viewData()
            },
            onFail: function(jqXHR, textStatus, errorThrown) {
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
            onAjax: function(action, serialize) {
                console.log('onAjax(action, serialize)');
                console.log(action);
                console.log(serialize);
            }
        });
    });
}
