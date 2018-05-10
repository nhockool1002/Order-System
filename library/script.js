$(document).ready(function(){
   $(".option-user").click(function(){
       $(".sidebar-show-option-user").toggle("slowly");
   });
   $("td#details-td div img").click(function(){
    var id = $(this).data("id");
    alert("OK");
});
   /* AJAX KIỂM TRA ADD BỆNH */
   $(".kiemtra-addbenh").click(function(e){
    e.preventDefault();
    var tenbenh = $('.tenbenh').val();
    $.get("ajax/check-addbenh.php",{tenbenh:tenbenh},function(data){
        if(data == "2"){
            $('.state-message-loaibenh').html('<span class="red-message"> Vui lòng điền hơn 3 ký tự để có thể kiểm tra</span>');
        }
        if(data == "0"){
            $('.state-message-loaibenh').html('<span class="green-message"> Dữ liệu tên bệnh này chưa có, có thể thêm tên này</span>');
            $('.submit-addbenh').removeAttr("disabled");
            $('.tenbenh').focus(function(){
                $('.submit-addbenh').attr("disabled", true);
            });
        }
        if(data == "1"){
            $('.state-message-loaibenh').html('<span class="blue-message"> Dữ liệu này có vẻ như giống với một số dữ liệu khác, vui lòng thử lại tên khác</span>');
        }
    });
   });
   /* AJAX THÊM LOẠI BỆNH */
   $('.submit-addbenh').click(function(e){
    e.preventDefault();
    var tenbenh = $('.tenbenh').val();
    $.get("ajax/ajax-addbenh.php",{tenbenh:tenbenh},function(data){
        if(data == 1){
            $('.state-message-loaibenh').html('<span class="purple-message"> Đã thêm dữ liệu này vào Cơ sở dữ liệu</span>');
            setTimeout(function(){
                window.location.replace("index.php?page=themloaibenh");
            },1000);
        }
    });
   });
   /* DELETE AJAX LOAI BENH  */
   $('.delete-loaibenh').click(function(){
       var id = $(this).data('id');
       $.get("ajax/delete-loaibenh.php",{id:id},function(data){
            if(data == 1){
                $('.box-alert').css('display','block');
                $('.box-alert').html('<p> Hệ thông đã XÓA dữ liệu bạn vừa chọn !');
                setTimeout(function(){
                    window.location.replace("index.php?page=themloaibenh");
                },2000);
            }
       });
   });
   /* DELETE AJAX BACSI  */
   $('.delete-bacsi').click(function(){
    var id = $(this).data('id');
    $.get("ajax/delete-bacsi.php",{id:id},function(data){
         if(data == 1){
             $('.box-alert').css('display','block');
             $('.box-alert').html('<p> Hệ thông đã XÓA dữ liệu bạn vừa chọn !');
             setTimeout(function(){
                 window.location.replace("index.php?page=thembacsi");
             },2000);
         }
    });
});

/* AJAX KIỂM TRA ADD BACSI */
$(".kiemtra-addbacsi").click(function(e){
    e.preventDefault();
    var tenbacsi = $('.tenbacsi').val();
    $.get("ajax/check-addbacsi.php",{tenbacsi:tenbacsi},function(data){
        if(data == "2"){
            $('.state-message-bacsi').html('<span class="red-message"> Vui lòng điền hơn 3 ký tự để có thể kiểm tra</span>');
        }
        if(data == "0"){
            $('.state-message-bacsi').html('<span class="green-message"> Bác sĩ này chưa có, có thể thêm tên này</span>');
            $('.submit-addbacsi').removeAttr("disabled");
            $('.tenbacsi').focus(function(){
                $('.submit-addbacsi').attr("disabled", true);
            });
        }
        if(data == "1"){
            $('.state-message-bacsi').html('<span class="blue-message"> Dữ liệu này có vẻ như giống với một số dữ liệu khác, vui lòng thử lại tên khác</span>');
        }
    });
   });
   /* AJAX THÊM BACSI */
   $('.submit-addbacsi').click(function(e){
    e.preventDefault();
    var tenbacsi = $('.tenbacsi').val();
    $.get("ajax/ajax-addbacsi.php",{tenbacsi:tenbacsi},function(data){
        if(data == 1){
            $('.state-message-bacsi').html('<span class="purple-message"> Đã thêm dữ liệu này vào Cơ sở dữ liệu</span>');
            setTimeout(function(){
                window.location.replace("index.php?page=thembacsi");
            },1000);
        }
    });
   });
   /* DELETE AJAX NGUON DEN  */
   $('.delete-nguonden').click(function(){
    var id = $(this).data('id');
    $.get("ajax/delete-nguonden.php",{id:id},function(data){
         if(data == 1){
             $('.box-alert').css('display','block');
             $('.box-alert').html('<p> Hệ thông đã XÓA dữ liệu bạn vừa chọn !');
             setTimeout(function(){
                 window.location.replace("index.php?page=themnguonden");
             },2000);
         }
    });
});
/* AJAX KIỂM TRA ADD NGUONDEN */
$(".kiemtra-addnguonden").click(function(e){
    e.preventDefault();
    var tennguonden = $('.tennguonden').val();
    $.get("ajax/check-addnguonden.php",{tennguonden:tennguonden},function(data){
        if(data == "2"){
            $('.state-message-nguonden').html('<span class="red-message"> Vui lòng điền hơn 3 ký tự để có thể kiểm tra</span>');
        }
        if(data == "0"){
            $('.state-message-nguonden').html('<span class="green-message"> Tên nguồn này chưa có, có thể thêm tên này</span>');
            $('.submit-addnguonden').removeAttr("disabled");
            $('.tennguonden').focus(function(){
                $('.submit-addnguonden').attr("disabled", true);
            });
        }
        if(data == "1"){
            $('.state-message-nguonden').html('<span class="blue-message"> Dữ liệu này có vẻ như giống với một số dữ liệu khác, vui lòng thử lại tên khác</span>');
        }
    });
   });
   /* AJAX THÊM NGUONDEN */
   $('.submit-addnguonden').click(function(e){
    e.preventDefault();
    var tennguonden = $('.tennguonden').val();
    $.get("ajax/ajax-addnguonden.php",{tennguonden:tennguonden},function(data){
        if(data == 1){
            $('.state-message-nguonden').html('<span class="purple-message"> Đã thêm dữ liệu này vào Cơ sở dữ liệu</span>');
            setTimeout(function(){
                window.location.replace("index.php?page=themnguonden");
            },1000);
        }
    });
   });
      /* DELETE AJAX PHUONG THUC  */
      $('.delete-phuongthuc').click(function(){
        var id = $(this).data('id');
        $.get("ajax/delete-phuongthuc.php",{id:id},function(data){
             if(data == 1){
                 $('.box-alert').css('display','block');
                 $('.box-alert').html('<p> Hệ thông đã XÓA dữ liệu bạn vừa chọn !');
                 setTimeout(function(){
                     window.location.replace("index.php?page=themphuongthuc");
                 },2000);
             }
        });
    });
    /* AJAX KIỂM TRA ADD PHUONG THUC */
    $(".kiemtra-addphuongthuc").click(function(e){
        e.preventDefault();
        var tenphuongthuc = $('.tenphuongthuc').val();
        $.get("ajax/check-addphuongthuc.php",{tenphuongthuc:tenphuongthuc},function(data){
            if(data == "2"){
                $('.state-message-phuongthuc').html('<span class="red-message"> Vui lòng điền hơn 3 ký tự để có thể kiểm tra</span>');
            }
            if(data == "0"){
                $('.state-message-phuongthuc').html('<span class="green-message"> Tên phương thức này chưa có, có thể thêm tên này</span>');
                $('.submit-addphuongthuc').removeAttr("disabled");
                $('.tenphuongthuc').focus(function(){
                    $('.submit-addphuongthuc').attr("disabled", true);
                });
            }
            if(data == "1"){
                $('.state-message-phuongthuc').html('<span class="blue-message"> Dữ liệu này có vẻ như giống với một số dữ liệu khác, vui lòng thử lại tên khác</span>');
            }
        });
       });
       /* AJAX THÊM PHUONG THUC */
       $('.submit-addphuongthuc').click(function(e){
        e.preventDefault();
        var tenphuongthuc = $('.tenphuongthuc').val();
        $.get("ajax/ajax-addphuongthuc.php",{tenphuongthuc:tenphuongthuc},function(data){
            if(data == 1){
                $('.state-message-phuongthuc').html('<span class="purple-message"> Đã thêm dữ liệu này vào Cơ sở dữ liệu</span>');
                setTimeout(function(){
                    window.location.replace("index.php?page=themphuongthuc");
                },1000);
            }
        });
       });
});

$(document).ready( function () {
    $('#table_id').DataTable({
        "lengthChange": false,
        "aLengthMenu": [[5, 20, 45, -1], [5, 20, 45, "All"]],
        "iDisplayLength": 5,
        "order": [[ 0, "desc" ]]
    });
} );
