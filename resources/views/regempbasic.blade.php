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
				
	
				<form action="base2" method='get'>
	

		<div class="form-group">
		<input type="text" name="eid" class="form-control" placeholder="Enter employee ID here">
		</div>
		<div class="form-group">
		<input type="text" name="epf_no" class="form-control" placeholder="Enter EPF number here">
		</div>
		<div class="form-group">
		<input type="text" name="fname" class="form-control" placeholder="Enter first name here">
		</div>
		<div class="form-group">
		<input type="text" name="lname" class="form-control" placeholder="Enter last name here">
		</div>
		<br/>
		<button type="submit" name="next01" class="btn btn-success">Next</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	
	

</body>
</html>