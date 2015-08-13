
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body id="background">
<div id="main">
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<input id="name" name="username" placeholder="Username" type="text">
<input id="password" name="password" placeholder="Password" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>

</body>
</html>
