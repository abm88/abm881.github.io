<!DOCTYPE html>
<html>
<head>
	<title>Feculty</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<br />
	<br />
	<h2 align="center">
	Add Remove input fields </h2>
	<div class="form-group">
		<form name="add_name" id="add_name">
			<table class="table table-bordered" id="dynamic_field">
				<tr>
				<td><input type="text" name="name[]" id="name" placeholder="Enter name " class="form-control name_list">
				</td><td><button type="button" name="add" id="add" class="btn btn-success">Add more</button></td>
				</tr>
			</table>
			<input type="button" name="submit" id="submit" value="submit" class="button btn-info">
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		var i = 1;
		$('#add').click(function(){ 
			
			i++;
			$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="Enter name" class="form-control name_list" /> </td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove"> X </button</td></tr> '); 
		});
		$(document).on('click', '.btn_remove', function(){ 
			var button_id = $(this).attr("id");
			$("#row"+button_id+'').remove();
		});
		$('#submit').click(function(){ 
			$.ajax({ 
				url:"test.php",
				method: "POST",
				data:$('#add_name').serialize(),
				success:function(data){
					alert(data)
					$('#add_name')[0].reset();
				}		
			 });
		});
	});
</script>