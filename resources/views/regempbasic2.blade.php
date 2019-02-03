<!DOCTYPE html>
<html>
<head>
	<title>Register Employee</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
</head>
<body class="addback03">

<div class="model-dialog text-center">
	<div class="col-sm-9 main_section_emp_add1">
		<h1>Basic Information</h1>
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="office" method='get'>
	

		<div class="form-group">
		<input type="text" name="addl1" class="form-control" placeholder="Address:House number">
		</div>
		<div class="form-group">
		<input type="text" name="addl2" class="form-control" placeholder="Address:Street">
		</div>
		<div class="form-group">
		<input type="text" name="addl3" class="form-control" placeholder="Address:Town">
		</div>
		<div class="form-group">
		<input type="text" name="addl4" class="form-control" placeholder="Address:City">
		</div><br/>
		<button type="submit" name="next02" class="btn btn-success">Next</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	
</body>
</html>