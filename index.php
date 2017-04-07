<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/jquery.validate.min.js"></script>
</head>
<body id="pagelogin">
	<div id="loginpleca"></div>
	<div id="logohome">
		<img src="img/logo.png" alt="" class="m0auto">
	</div>
	<div id="login" class="col-md-4 col-md-offset-4 clearfix">
	<form method="post" class="form-signin" action="api/login" id="form">
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw fa-2x"></i></span>
            <input class="input-text form-control" name="usr" type="text" placeholder="Usuario"  minlength="2" type="text" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-fw fa-2x"></i></span>
            <input class="input-text form-control" name="psw" type="password" placeholder="Contaseña"  minlength="2" type="text" required>
        </div>
		<button class="btn btn-lg btn-primary btn-block login-btn" type="submit">Entrar</button>
		<p class="tac mensaje"><?php echo base64_decode(htmlentities($_GET['m'])) ?></p>
	</form>
</div>
	<script>
		$(document).ready(function(){
			$('#form').validate();
		})
	</script>
</body>
</html>