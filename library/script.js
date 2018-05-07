$(document).ready(function(){
   $(".option-user").click(function(){
       $(".sidebar-show-option-user").toggle("slowly");
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
   $('.submit-addbenh').click(function(){
    e.preventDefault();
    var tenbenh = $('.tenbenh').val();
    $.get("ajax/ajax-addbenh.php",{tenbenh:tenbenh},function(data){
        if(data == 1){
            $('.state-message-loaibenh').html('<span class="purple-message"> Đã thêm dữ liệu này vào Cơ sở dữ liệu</span>');
            header( "Refresh:2; url=index.php", true, 303);
        }
    });
   });
});