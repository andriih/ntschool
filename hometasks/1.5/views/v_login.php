<form method="post">
        Login<br>
        <input type="text" name="login" value="<?= $_POST['login']; ?>"><br>
        Password<br>
        <input type="password" name="password" value=""><br>
       	<input type="checkbox" name="remember">Remember me<br>
        <input type="submit" value="Login">
 </form>
<?= $msg; ?>