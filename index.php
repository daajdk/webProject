<?php require 'include/header.php'; ?>
<?php require 'include/signin-header.php'; ?>

	<div class="main-container">
            <div class="main wrapper clearfix">
                <div class="signup-box">
                    <h2>The Store Title Here</h2>
            
                    <div class="content-box"> 
                        <p>Enter your information below to get started today!</p>
                        
                        <form class="signup" name="sign-up" action="#" method="post">
                            <input required class="user-input" type="text" placeholder="First Name"  name="firstname"><br>
                            <input required class="user-input" type="text" placeholder="Last Name"  name="lastname"><br>
                            <input required class="user-input" id = "city" type="text" placeholder="City"  name="city"><br>			    
			    <input required class="user-input" type="tel" placeholder="Phone Number"  name="phone"><br>
                            <input required class="user-input" type="text" placeholder="User Name"  name="customerID"><br>
                            <input required class="user-input" type="password" placeholder="Password"  name="password"><br>
                            <input required class="user-input" type="password" placeholder="Confirm Password" name="confirmpassword"><br>
                            <input class="button" type="submit" value="Register" name="register">
                        </form> 
                    </div> <!-- .content-box -->
                </div> <!-- .signup-box -->

            </div> <!-- .main -->
        </div> <!-- .main-container -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script src="js/autoComplete.js"></script>

<?php require 'include/footer.php'; ?>
