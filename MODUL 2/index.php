

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>	
</head>
<body>
	<h1>LOGIN</h1>
	<form action="login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"placeholder="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo ("Error: Username harus lebih dari 7 huruf<br>");
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Error: Password harus mengandung 1 huruf kapital<br>";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "Error: Password harus mengandung 1 huruf kecil<br>";
            $x = true;
        }
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "Error: Password harus mengandung 1 special character<br>";
            $x = true;      
        }
        if (!preg_match("/[0-9]/", $password)) {
            echo "Error: Password harus mengandung 1 digit<br>";
            $x = true;
        }
        if($pass>10){
            echo "Error: Password harus lebih dari 10<br>";
            $x = true;
        }
        if( $x == false ){
            echo "Login berhasil";
        }
    }
?>