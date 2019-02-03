<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Here</title>
	
	
	
	<link rel="stylesheet" href={{asset("btp/bootstrap.min.css")}}>
	<link rel="stylesheet" href={{asset("custom/style.css")}}>
    <link rel="stylesheet" href={{asset("backs.css")}}>
	
	
	
</head>
<body>

<div class="model-dialog text-center">
	<div class="col-lg-12 col-md-12 col-sm-11 col-10 main-section">
		<div class="model-content">
			<div class=" user-img ">
				<img src="{{asset("images/Admin.png")}}">
			</div>
			<div class="col-12 form-input">
				
	
				<form>
	<div class="form-group">
	<select class="form-control">
		
		<option name="" disabled selected hidden>Select the Post</option>
		<option name="ceo">Executive</option>
		<option name="super_user">HRM Manager</option>
		<option name="user">HRM Executive</option>

	</select>
	</div>

		<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Username/E-mail">
		</div>
		<div class="form-group">
		<input type="password" name="pass" class="form-control" placeholder="Password">
		</div>
		
		<button type="submit" name="login" class="btn btn-success">Login</button>
	
	</form>

			</div>
			<div class="col-12 forgot">
            <br/>
            <a href="">Forgot password?</a>
            
    
        </div>
	
		</div>
	</div>
</div>
	

</body>
</html>