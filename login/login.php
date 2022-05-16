<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:memcenter.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="all">
        <div class="header">會員登入</div>
        <div>
            <?php
            if (!empty($_GET['error'])) {
                echo "<h3 style='color:red'>{$_GET['error']}</h3>";
            }
            ?>
        </div>
        <form action="chklogin.php" method="post">
            <table>
                <tr>
                    <td>帳號:</td>
                    <td><input type="text" name="acc" id=""></td>
                </tr>
                <tr>
                    <td>密碼:</td>
                    <td><input type="password" name="pw" id=""></td>
                </tr>
            </table>
            <div class="buttom">
                <input type="submit" value="登入">
                <input type="reset" value="重置">
            </div>
        </form>
    </div>
</body>

</html>