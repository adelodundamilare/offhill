    <section class="footer">
        <div class="wrap">
            <div class="footer__company-info">
                <div class="footer__company-info__logo">
                    <img src="img/offhill-logo.png" alt="Offhill footer Logo">
                </div>
                <ul class="footer__company-info__smedia">Follow us:
                    <li><a href=""><i class="ion-social-facebook"></i></a></li>
                    <li><a href=""><i class="ion-social-twitter"></i></a></li>
                    <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="footer__links">
            </div>
            <div class="footer__subscribe-div">
                <p>Get the latest consumer news, products tests and advice with our free newsletter</p>
                <form action="#" method="POST" class="footer__subscribe">
                    <input type="email" placeholder="Enter your email to sign up" naame="email" required>
                    <input type="submit" name="subscribe-submit" value="Sign up">
                </form>
            </div>
            <div class="footer__copyright">
                <p>&copy; Copyright <?php echo date('Y'); ?>  All Rights Reserved</p>
            </div>
        </div>
    </section>
    
    <section class="login-section hide">
        <div class="login-popup">
            <button class="login-popup__close"><i class="ion-close-round"></i></button>
            <ul class="login-popup__ul">
                <li class="login-popup__ul__create-account">Create Account</li>
                <li class="login-popup__ul__sign-in">Sign In</li>
            </ul>
            
            <div>
                <div class="create-account"></div>
                <div class="sign-in">
                    <p>Sign in to get instant access to millions of brand reviews</p>
                    <ul>
                        <li class="facebook-enter">Facebook</li>
                        <li class="google-enter">Google+</li>
                    </ul>
                    <p class="sign-in__or">Or </p>
                    <form action="" class="sign-in-form">
                        <input type="email" name="email" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <a href="#">Forgot Password</a>
                        <input type="submit" value="Sign In" name="sign-in">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="comp/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="comp/scripts.js"></script>
    <script>
    </script>
</body>
</html>