<!DOCTYPE html>
<html>
<head>
	<title>Admin controls</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
</head>

<body class="addback">

<div class="model-dialog text-center">
	
	
				
	

		<div class="admins">
			<form action="add_users" method='get'>
		<button type="submit" id="add_user" name="add_use" class="btn btn-danger">Create User Account</button></form>
		<br/><br/>
		<form action="remove_users" method='get'>
		<button type="submit" id="remove_use" name="remove_use" class="btn btn-danger">Remove User Account
		</button>
		</form>
		<br/><br/>
		<form action="change_admins" method='get'>
		<button type="submit" id="remove_use" name="remove_use" class="btn btn-danger">Change my password
		</button>
		</form>
		<br/><br/>
		</div>
	

			
</div>
	

</body>
</html>