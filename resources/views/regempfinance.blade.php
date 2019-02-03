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
		<h1>Financial Information</h1>
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="logs" method='get'>
	

		<div class="form-group">

	<select class="form-control">
		
		<option name="" disabled selected hidden>Select the Bank</option>
		<option name="boc">BOC</option>
		<option name="cb">Commercial Bank</option>
		<option name="pb">Peoples Bank</option>
		<option name="hnb">HNB</option>
		<option name="sb">Sampath Bank</option>


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
	<input type="text" name="acc" class="form-control" placeholder="Enter employee Account number">
</div>
<br/>
		<button type="submit" name="next03" class="btn btn-success">Done</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	
</body>
</html>