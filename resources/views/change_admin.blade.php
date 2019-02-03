<!DOCTYPE html>
<html>
<head>
	<title>Change Admin password</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
</head>
<body class="addback">

<div class="model-dialog text-center">
	<div class="col-sm-9 main-section_changepass">
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form>
	

		<div class="form-group">
		<input type="password" name="opass" class="form-control" placeholder="Enter Current Password here">
		</div>
		<div class="form-group">
		<input type="password" name="npass1" class="form-control" placeholder="Enter New Password here">
		</div>
		<div class="form-group">
		<input type="password" name="npass2" class="form-control" placeholder="Re-enter New Password here">
		</div>
		<br/>
		<button type="submit" name="change" class="btn btn-success">Save Changes</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	
</body>
</html>