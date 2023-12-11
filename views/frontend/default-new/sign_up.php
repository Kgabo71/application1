<?php if(get_frontend_settings('recaptcha_status')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<!---------- Header Section End  ---------->
<section class="sign-up my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center">
                <img width="65%" src="<?php echo site_url('assets/frontend/default-new/image/login-security.gif') ?>">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
                <div class="sing-up-right">
                    <h3><?php echo get_phrase('Sign Up'); ?><span>!</span></h3>
                    <p><?php echo get_phrase('Explore, learn, and grow with us. Enjoy a seamless and enriching educational journey. Lets begin!') ?></p>

                    
                    <form id="signupForm" action="<?php echo site_url('login/register') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                            <h5><?php echo get_phrase('First Name'); ?></h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="first_name" type="text" name="first_name" placeholder="<?php echo get_phrase('Enter your first name'); ?>" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5><?php echo get_phrase('Last Name'); ?></h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="last_name" type="text" name="last_name" placeholder="<?php echo get_phrase('Enter your last name'); ?>" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5><?php echo get_phrase('Your email'); ?></h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="email" type="email" name="email" placeholder="<?php echo get_phrase('Enter your email'); ?>" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5><?php echo get_phrase('Password') ?></h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-key"></i>
                                <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                <input class="form-control" id="password" type="password" name="password" placeholder="<?php echo get_phrase('Enter your valid password'); ?>" required>
                            </div>
                        </div>

                        <?php if(get_settings('allow_instructor')): ?>
                         
                            <div id="become-instructor-fields" class="<?php echo isset($_GET['instructor']) ?  '':'d-hidden'; ?>">
                                <div class="mb-4">
                                    <h5><?php echo get_phrase('Phone'); ?></h5>
                                    <div class="position-relative">
                                        <i class="fas fa-phone"></i>
                                        <input class="form-control" id="phone" type="phone" name="phone" placeholder="<?php echo get_phrase('Enter your phone number'); ?>">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h5><?php echo get_phrase('Document'); ?> <small>(doc, docs, pdf, txt, png, jpg, jpeg)</small></h5>
                                    <div class="position-relative">
                                        <input class="form-control" id="document" type="file" name="document">
                                        <small><?php echo get_phrase('Provide some documents about your qualifications'); ?></small>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h5><?php echo get_phrase('message'); ?></h5>
                                    <div class="position-relative">
                                        <textarea class="form-control" name="message" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(get_frontend_settings('recaptcha_status')): ?>
                            <div class="g-recaptcha" data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
                        <?php endif; ?>
                        
                        <div class="log-in">
                        <button type="submit" id="signupButton" class="btn btn-primary">
                        <?php echo get_phrase('Sign Up') ?>
                        </button>   
                        </div>
                    </form>

                    <div class="another text-center">
                        <p>
                            <?php echo get_phrase('Already you have an account?') ?>
                            <a href="<?php echo site_url('login') ?>"><?php echo get_phrase('Log In') ?></a>
                        </p>
                     
                    </div>
                    <div class="social-media">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- <button type="button" class="btn btn-primary"><a href="#"><img src="image/facebook.png"> Facebook</a></button> -->
                                <?php if(get_settings('fb_social_login')) include "facebook_login.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* CSS for the pop-up */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Light shadow */
        position: auto;
        max-width: 800px; /* Set the maximum width */
        margin: 0 auto;
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .popup-buttons {
        margin-top: 20px;
}
 #proceedButton {
        background-color: #4caf50; /* Green */
    }

    #cancelButton {
        background-color: #f44336; /* Red */
    }
  button {
        padding: 10px 20px;
        margin: 0 10px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
    }
    
</style>

<script>
    // JavaScript functions
    function showSignupPopup() {
        document.getElementById("signupPopup").style.display = "block";
    }

    function closeSignupPopup() {
        document.getElementById("signupPopup").style.display = "none";
    }

    function signUpNow() {
        // You can place your sign-up logic here
        // For example, submit the form to sign up the user
        // If the sign-up is successful, proceed to the next page
        document.getElementById("signupForm").submit();
        // Optionally, you can add further logic after sign-up success
        closeSignupPopup();
    }

    function cancelSignUp() {
        closeSignupPopup();
    }
    
    // Add an event listener to the "Sign Up" button
    document.getElementById("signupButton").addEventListener("click", function(event) {
        event.preventDefault();
        showSignupPopup();
    });
</script>

<!-- HTML for the sign-up pop-up -->
<div id="signupPopup" class="popup-overlay">
    <div class="popup-content">
        <span class="popup-close" onclick="closeSignupPopup()">X</span>
        <h2>Thank you for signing up!</h2>
	<br></br>
         <h4>DATA PRIVACY AGREEMENT </h4>
	<br></br>

	<p>By Clicking the Accept button you agree and acknowledge that FBK Online Services can collect and process
		personal information, such as name, email address , contact details and all other information required to make
		the services provided by online services granted to you, in accordance with the Protection of Personal
		Information (POPI) Act.
	<br></br>
		FBk Online Services will use personal information for legitimate business purposes only and will not disclose it to
		external parties without proper authorization, except as required by law. FBK Online Services will implement
		security measures to protect personal information and will retain it only as required by law or for legitimate
		business purposes.
	<br></br>
		By acknowledging this Agreement, both parties agree to the terms and conditions regarding personal information
		processing in compliance with the POPI Act.
	</p>
        <div class="popup-buttons">
            <button id="proceedButton" onclick="signUpNow()">Accept</button>
            <button id="cancelButton" onclick="cancelSignUp()">Cancel</button>
        </div>
    </div>
</div>

<style>
  </style>
