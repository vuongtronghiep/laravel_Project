$(function(){
	$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
	$('input[type=checkbox]').filter(':first').prop('checked', true);
	$(window).bind("scroll", function(e) {
        var top = $(window).scrollTop();
      if (top> 10) { //Khoảng cách đã đo được
        $(".header-top-menu").addClass("aa");
      } else {
        $(".header-top-menu").removeClass("aa");

      } 
    });

	$(".updateCart").click(function() {
		var rowId = $(this).attr('id');
		var qty = $(this).parent().parent().find('.qty').val();
		var token = $('input[name=_token]').val();

		$.ajax({
			url: 'cap-nhat/'+rowId+'/'+qty,
			type: 'GET',
			cache: false,
			data: {"_token": token, "id":rowId, "qty":qty},
			success: function (data){
				if(data == "Thành công"){
					window.location = "gio-hang"
				}
			}
		});
	});
});