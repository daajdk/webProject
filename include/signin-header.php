<?php
    require_once 'login.php';
?>
	<div class="header-container">
            <header class="wrapper clearfix">

                <div class="top-box">                 
                    <form class="signin" name="sign-in" action='login.php' method="post">
                        <input required class="user-input" type="text" placeholder="User Name" <?php if (!empty($_POST['customerID'])) echo "value =" .  $_POST['customerID'] ?> name="customerID"><br>
                        <input required class="user-input" type="password" placeholder="password"   name="password"><br>
                        <?php if(!empty($loginError)) echo $loginError . "<br>"?>
                        <input class="button" type="submit" value="Login" name="submit">
                    </form> <!-- .signin -->
                </div> <!-- .top-box -->

            </header>
     	</div> <!-- .header-container -->

