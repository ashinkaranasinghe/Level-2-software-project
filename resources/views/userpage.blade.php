<!DOCTYPE html>
<html>
<head>
	<title>Users controls</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>

	
	
</head>

<body class="addback03">

<div class="model-dialog text-center">
	
	
				
	

		<div class="admins">
			<form action="add_emp" method='get'>
		<button type="submit" id="add_emp" name="add_emp" class="btn btn-danger">Create User Account</button></form>
		<br/><br/>
		<form action="remove_emp" method='get'>
		<button type="submit" id="remove_emp" name="remove_emp" class="btn btn-danger">Remove User Account
		</button>
		</form>
		<br/><br/>
		<form action="change_emp" method='get'>
		<button type="submit" id="change_emp" name="change_emp" class="btn btn-danger">Change my password
		</button>
		</form>
		<br/><br/>
		</div>
	

			
</div>
	
</body>
</html>