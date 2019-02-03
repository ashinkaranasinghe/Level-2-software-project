<!DOCTYPE html>
<html>
<head>
	<title>Create user accounts</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
</head>
<body class="addback">

<div class="model-dialog text-center">
	<div class="col-sm-9 main_section_admin_add">
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="" method="post">
	

		<div class="form-group">
		<input type="text" name="eid" class="form-control" placeholder="Enter employee ID here">
		</div>
		<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Enter User name here">
		</div>
		<div class="form-group">
		<input type="email" name="e-mail" class="form-control" placeholder="Enter e-mail here">
		</div>
		<div class="form-group">
		<input type="password" name="pass1" class="form-control" placeholder="Enter Password here">
		</div>
		<div class="form-group">
		<input type="password" name="pass2" class="form-control" placeholder="Re-enter Password here">
		</div>
		
		<button type="submit" name="register" class="btn btn-success">Register</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	

</body>
</html>