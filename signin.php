<?php
    require_once('conn.php');
    session_start();
    if (isset($_POST['login'])){
        $MAIL=$_POST['email'];
        $PW=$_POST['pw'];
        $SQL_LOGIN="SELECT `user`.ID FROM `user` WHERE `user`.`User` =  '$MAIL' AND `user`.Pass =  '$PW';";
        $result_login = mysqli_query($con, $SQL_LOGIN);
		$resultCheck_login = mysqli_num_rows($result_login);
		if ($resultCheck_login > 0) {
			while ($row_login = mysqli_fetch_assoc($result_login)){
                $_SESSION['user']=$MAIL;
                header("Location: ./index.php?sig=success");
			}
		}else{
            header("Location: ./page-login.html?error=pw");
        }
    }

?>