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
	<div class="col-sm-9 main_section_emp_other">
		<h1>Official Information</h1>
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="finance" action='get'>
	

		<div class="form-group">

	<select class="form-control">
		
		<option name="" disabled selected hidden>Select the Department</option>
		<option name="od">Operational Department</option>
		<option name="md">Marketing Department</option>
		<option name="itd">IT Department</option>
		<option name="fd">Finance Department</option>
		<option name="rd">Research and development Department</option>


	</select>
</div>
	<div class="form-group">
	<select class="form-control">
		
		<option name="" disabled selected hidden>Select the Branch</option>
		<option name="cb">Colombo</option>
		<option name="gl">Galle</option>
		<option name="mtr">Matara</option>
		<option name="kndy">Kandy</option>
		<option name="jffna">Jaffna</option>

	</select>
</div>

<div class="form-group">
	<select class="form-control">
		
		<option name="" disabled selected hidden>Select the Post</option>
		<option name="ch">Chairman</option>
		<option name="gm">Genaral manager</option>
		<option name="se">Software Engineeres</option>
		<option name="qa">Quntity Assistance</option>
		<option name="ca">Charted accountance</option>
		<option name="clk">Clerk</option>

	</select>
</div>
		<br/>
		<button type="submit" name="next03" class="btn btn-success">Next</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	
</body>
</html>