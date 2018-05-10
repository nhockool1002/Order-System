function viewData(){
    var trang = window.location.search.substr(2);
    $.get('ajax/process.php?p=view&trang='+trang,function(data){
        $('tbody').html(data);
        tableData();
    });
    // $.ajax({
    //     url: 'ajax/process.php?p=view',
    //     type: 'GET',
    //     data:{trang:trang},
    //     method: 'GET'
    // }).done(function(data){
    //     $('tbody').html(data)
    //     tableData()
    // })
}
window.ObjLoaiBenh;
$.get('ajax/getdata-loaibenh.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.tenbenh;
    });
    window.ObjLoaiBenh = JSON.stringify(result);
});
window.ObjBacSi;
$.get('ajax/getdata-bacsi.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.tenbacsi;
    });
    window.ObjBacSi = JSON.stringify(result);
});
window.ObjNguoiDung;
$.get('ajax/getdata-nguoidung.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.user;
    });
    window.ObjNguoiDung = JSON.stringify(result);
});
window.ObjNguonDen;
$.get('ajax/getdata-nguonden.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.tennguonden;
    });
    window.ObjNguonDen = JSON.stringify(result);
});
window.ObjPhuongThuc;
$.get('ajax/getdata-phuongthuc.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.tenphuongthuc;
    });
    window.ObjPhuongThuc = JSON.stringify(result);
});
window.ObjTrangThai;
$.get('ajax/getdata-trangthai.php',function(data){
    var obj = JSON.parse(data);
    var result = {};
    obj.map(function(e){
    result[e.id] = e.trangthai;
    });
    window.ObjTrangThai = JSON.stringify(result);
});
function tableData(){
    
        $('#tabledit').Tabledit({
            url: 'ajax/process.php',
            eventType: 'dblclick',
            editButton: true,
            deleteButton: true,
            hideIdentifier: false,
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-warning',
                    html: '<i class="fa fa-pencil-square-o"></i> Edit',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<i class="fa fa-bitbucket"></i> Trash',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-success',
                    html: '<i class="fa fa-check-circle"></i> Save'
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
                editable: [[2, 'hoten'],
                [3, 'dienthoai'],
                [4, 'masokham'],
                [6, 'thoigiandathen'],
                [7, 'thoigiandenkham'],
                [8, 'loaibenh', window.ObjLoaiBenh],
                [9, 'bacsi', window.ObjBacSi],
                [11, 'nguonden', window.ObjNguonDen],
                [12, 'phuongthuc', window.ObjPhuongThuc],
                [13, 'chiphi'],
                [14, 'trangthai', window.ObjTrangThai]
            ]
            },
            onSuccess: function(data, textStatus, jqXHR) {
                viewData().reload();              
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
            },
            onDraw: function() {
                // Select all inputs of second column and apply datepicker each of them
                $('table tr td:nth-child(7) input').each(function() {
                    $(this).datepicker({
                      dateFormat: 'yy-mm-dd 09:00:00',
                      todayHighlight: true
                    });
                  });
                  $('table tr td:nth-child(8) input').each(function() {
                    $(this).datepicker({
                      dateFormat: 'yy-mm-dd 09:00:00',
                      todayHighlight: true
                    });
                  });
              }
        });
}
