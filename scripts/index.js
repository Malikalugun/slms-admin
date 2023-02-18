$(document).ready(function(){
//Admin Login Start.
   $("#btnLogin").click(function(){


   $("#btnLogin").html("Log In ...");
   var username=$("#username").val();
   var password=$("#password").val(); 
	
		$.ajax({
			 type:'post',
			 url: 'index-action.php',
			 data: {'username':username,'password':password },
			 success: function(data)
			 {	 
				
				 var x=data;
				 if(x== "1")
				 {
				 	window.location="./dashboard.php";
				 }
				 else
				 { 
				 $("#btnLogin").html("Login");
				 $("#msg").html(data); 
				 $("#msg").slideDown("slow");
				 $("#msg").slideUp(8000); 
			     }
				 
			}
		 });
	
  });

//Admin Login End.

//Change Password Start.
	$("#btn_passchange").click(function(){
		$("#changepasstext").html("Loading...");
		var oldPass=$("#oldPass").val();
		var newpass=$("#newpass").val(); 
		var repass=$("#repass").val();
			$.ajax({
				 type:'post',
				 url: 'change-password-action.php',
				 data: {'oldPass':oldPass,'newpass':newpass,'repass':repass},
				 success: function(data)
				 {     $("#changepasstext").html("Save");
					   $("#errorChangePassword").html(data); 
					   $("#errorChangePassword").slideDown("slow");
					   $("#errorChangePassword").slideUp(3000,function(){
					       location.reload();
						 });
				
				 }
				
			 });
			
  	});
//Change Password End

});
 




