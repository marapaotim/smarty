$(document).ready(function(e) {
	$("#myform").submit(function(e) {
    	e.preventDefault();
    	insert();
	}); 
});

function insert(){
		var fname = $('#fname').val();
		var email = $('#email').val();
		var message = $('#message').val(); 
		var type = "insert";

		$.ajax({
			type: 'POST', 
			data:  {type:type,fname:fname,email:email,message:message},
			url: "inc/Message.class.php",
			success: function(result){ 
				$(".alert").show();  
				loadData();
			}
		})
}

function loadData(){
	var type = "viewMessages";
	$.ajax({
			type: 'POST', 
			data:  {type:type},
			url: "inc/Message.class.php",
			success: function(result){  
				$("#myTable").html(result);
				document.getElementById("myform").reset();
			}
		})
}
function paginate_message(x){ 
	var type = "paginate";
	$.ajax({
			type: 'POST', 
			data:  {type:type,pages:x},
			url: "inc/Message.class.php",
			success: function(result){   
				$("#myTable").html(result);
			}
		})
}
