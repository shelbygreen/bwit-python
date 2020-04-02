$('#contact_form').submit(function() {
		var email = $("#email").val();
var dataString = 'email=' + email;
		$.ajax({
			type : "POST",
			url : "save.php",
			data : dataString,
			cache : false,
			success : function() {				
					$("#contact_form").fadeOut(300);
                                        $("#notice").fadeIn(400);
			}
		});
  return false;
});
