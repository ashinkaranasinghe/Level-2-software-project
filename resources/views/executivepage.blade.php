<!DOCTYPE html>
<html>
<head>
	<title>Executive controls</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
</head>
<body class="addback2">

<div class="model-dialog text-center">
	
	
				
	

		<div class="admins">

			<form action="create_admin" method='get'>
		<button type="submit"  name="add_admin" class="btn btn-danger">Create Admin Account</button>
		</form>

		<br/><br/>

		<form action="remove_admin" method='get'>
		<button type="submit"  name="remove_admin" class="btn btn-danger">Remove Admin Account
		</button>
		</form>

		</div>
	

			
</div>
	
	

</body>
</html>