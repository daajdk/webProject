	<div class="header-container">
            <header class="wrapper clearfix">

                <div class="top-box">                 
                    <form class="signin" name="sign-in" action="#" method="post">
                        <input required class="user-input" type="text" placeholder="User Name" <?php if (!empty($_POST['login_email'])) echo "value =" .  $_POST['login_email'] ?> name="login_email"><br>
                        <input required class="user-input" type="password" placeholder="password"   name="login_password"><br>
                        <?php if(!empty($loginError)) echo $loginError . "<br>"?>
                        <input class="button" type="submit" value="Login">
                    </form> <!-- .signin -->
                </div> <!-- .top-box -->

            </header>
     	</div> <!-- .header-container -->

