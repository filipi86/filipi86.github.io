<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST["username"]))
    {
        $user_name = $_POST["username"];
    }
    if (isset($_POST["password"]))
    {
        $pass = $_POST["password"];
    }   
$sql = "SELECT username FROM admin WHERE username = '$user_name' AND password = '$pass'";
$count=$conn->prepare($sql);
$count->execute();
$no=$count->rowCount();
if ($no > 0)
    {
        $yourURL="http://localhost/admin/welcome.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
else
    {
        print("<h1>Access Denied...!!!</h1>");
    }
}
?>
<html>
<div align="center">
<h1>Login</h1>
<body>
 <form action='logincheck.php' method='post'>
    <table>
            <tr><td>Username:<input type="text" name="username" /></td></tr><br />
            <tr><td>Password:<input type="password" name="password" /></td></tr><br />
            <tr><td><input type='submit' value='Login' /></td></tr><br />
    </table>
  </form>
 </div>
</body>
</html>