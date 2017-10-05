<?php
session_start();

if($_SESSION['admin']){
	header("Location: adminalash.php");
	exit;
}

$admin = 'admin';
$pass = 'admin';
if($_POST['submit']){
	if($admin == trim(stripslashes(htmlspecialchars($_POST['user']))) AND $pass == trim(stripslashes(htmlspecialchars($_POST['pass'])))){
		$_SESSION['admin'] = $admin;
		header("Location: adminalash.php");
		exit;
	}else echo '<p>Логин или пароль неверны!</p>';
}

?>
<div style="text-align: center; margin-top: 20vh">
    <form method="post" style="padding: 30px; border: 5px double #d5ba7f; border-radius: 10px; display: inline-block; box-shadow: 0px 0px 10px rgba(82,57,0,0.5); background: url(img/zzzz.jpg) ">
        <table>
            <tr><td>Username:</td><td> <input type="text" name="user" style="border-radius: 5px;" /></td></tr>
	       <tr><td>Password:</td><td> <input type="password" name="pass" style="border-radius: 5px;" /></td></tr>
            <tr><td colspan=2 align=center><input type="submit" name="submit" value="Войти" style="border-radius: 5px; border: 1px solid #674805; padding: 3px 7px 3px 7px; margin-top: 3px"/></td></tr>
        </table>
    </form>
</div>