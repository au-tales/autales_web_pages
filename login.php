<!--    Header Starts   -->
<?php require "includes/header.php" ?>

<div class="container page-registration-container">
    <div class="row">
        <div class="col-12">

            <div class="page-registration page-login">

                <?php require "components/partials/register_header_section.php" ?>
                <!--    Header Ends   -->

                <!--    Main Starts   -->

                <main class="login-wrap position-relative">

                    <div class="form-registration login-form mg-auto">

                        <h4 class="form-title">Login</h4>

                        <form class="form" id="signin-form">
                            <div class="form-group">
                                <label for="userEmailSI">Email</label>
                                <input type="email" class="form-control" id="userEmailSI" name="userEmailSI"
                                       placeholder="example@autales.com">
                                <small class="message"></small>
                            </div>
                            <div class="form-group">
                                <label for="userPasswordSI">Password</label>
                                <input type="password" class="form-control" id="userPasswordSI" name="userPasswordSI"
                                       placeholder="********">
                                <small class="message"></small>
                            </div>
                            <div class="">
                                <input type="submit" value="Login" class="btn btn-block btn-secondary">
                            </div>

                            <div class="auth-link-wrap d-flex justify-content-center align-items-center">
                                <a href="#" class="auth-link">Forgot password?</a>
                            </div>

                        </form>

                        <div class="heading-separator">
                            <span class="separator-text">Or Sign in with</span>
                        </div>

                        <div class="social-btn-wrap">
                            <button type="button"
                                    class="btn btn-secondary-revert social-btn d-inline-flex align-items-center">
                                    <span class="icon-wrap">
<!--                                        <img src="assets/images/icon-google.png" alt="Google Icon">-->
                                        <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="19.222" height="19.222"
                                             viewBox="0 0 19.222 19.222">
                                          <defs>
                                            <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                              <stop offset="0" stop-color="#fff" stop-opacity="0.2"/>
                                              <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                                            </linearGradient>
                                          </defs>
                                          <g id="Group_4" data-name="Group 4">
                                            <g id="iconfinder_logo_brand_brands_logos_google_2993685">
                                              <path id="Path_1" data-name="Path 1"
                                                    d="M9.887,4A5.576,5.576,0,0,1,13.32,5.185l2.913-2.779A9.593,9.593,0,0,0,1.386,5.134L4.625,7.691A5.6,5.6,0,0,1,9.887,4Z"
                                                    transform="translate(-0.276 0)" fill="#f44336"/>
                                              <path id="Path_2" data-name="Path 2"
                                                    d="M21.528,12.705a9.532,9.532,0,0,0,.083-1.2,9.64,9.64,0,0,0-.212-2H12v4h5.195a5.664,5.664,0,0,1-2.121,2.659l3.251,2.567A9.6,9.6,0,0,0,21.528,12.705Z"
                                                    transform="translate(-2.389 -1.891)" fill="#2196f3"/>
                                              <path id="Path_3" data-name="Path 3"
                                                    d="M4,10.887a5.583,5.583,0,0,1,.345-1.92L1.11,6.41a9.578,9.578,0,0,0-.022,8.909l3.243-2.561A5.584,5.584,0,0,1,4,10.887Z"
                                                    transform="translate(0 -1.276)" fill="#ffc107"/>
                                              <path id="Path_4" data-name="Path 4"
                                                    d="M9.881,18.071A5.6,5.6,0,0,1,4.6,14.336L1.358,16.9a9.6,9.6,0,0,0,14.848,2.8l-3.251-2.567A5.471,5.471,0,0,1,9.881,18.071Z"
                                                    transform="translate(-0.27 -2.854)" fill="#00b060"/>
                                              <path id="Path_5" data-name="Path 5"
                                                    d="M10.218,23a9.944,9.944,0,0,1-7.17-3.026,9.578,9.578,0,0,0,14.289.056A9.936,9.936,0,0,1,10.218,23Z"
                                                    transform="translate(-0.607 -3.976)" opacity="0.1"/>
                                              <path id="Path_6" data-name="Path 6" d="M12,14.25v.2h5.195l.081-.2Z" transform="translate(-2.389 -2.837)"
                                                    opacity="0.1"/>
                                              <path id="Path_7" data-name="Path 7"
                                                    d="M23.994,12.109c0-.039,0-.078,0-.118,0-.011,0-.022,0-.033C24,12.009,23.994,12.059,23.994,12.109Z"
                                                    transform="translate(-4.777 -2.381)" fill="#e6e6e6"/>
                                              <path id="Path_8" data-name="Path 8" d="M12,9.5v.2h9.439c-.013-.066-.026-.135-.04-.2Z"
                                                    transform="translate(-2.389 -1.891)" fill="#fff" opacity="0.2"/>
                                              <path id="Path_9" data-name="Path 9"
                                                    d="M19.01,7.609h-9.4v4h5.195a5.6,5.6,0,1,1-2.161-6.7c.134.087.273.169.4.267l2.913-2.779-.066-.051A9.571,9.571,0,1,0,19.01,7.609Z"
                                                    transform="translate(0 0)" fill="url(#linear-gradient)"/>
                                              <path id="Path_10" data-name="Path 10"
                                                    d="M13.641,5.316A5.581,5.581,0,0,0,5,10.009c0,.034,0,.06,0,.094a5.58,5.58,0,0,1,8.64-4.586c.134.087.273.169.4.267L16.952,3,14.039,5.583C13.913,5.485,13.775,5.4,13.641,5.316Z"
                                                    transform="translate(-0.995 -0.598)" opacity="0.1"/>
                                              <path id="Path_11" data-name="Path 11"
                                                    d="M9.611.2a9.55,9.55,0,0,1,6.231,2.316l.115-.11-.088-.077A9.474,9.474,0,0,0,9.611,0,9.611,9.611,0,0,0,0,9.611c0,.034,0,.066.005.1A9.608,9.608,0,0,1,9.611.2Z"
                                                    transform="translate(0 0)" fill="#fff" opacity="0.2"/>
                                            </g>
                                          </g>
                                        </svg>

                                    </span>
                                <span class="text-wrap">Sign in with Google</span>
                            </button>
                        </div>

                        <div class="signup-wrap font-weight-light d-flex flex-column align-items-center">
                            <span>Don't have an account?</span>
                            <a href="signup.php" class="">Create</a>
                        </div>


                    </div>

                </main>

                <!--    Main Ends   -->

                <!--    Footer Starts   -->
                <?php require "components/partials/register_footer_section.php" ?>
            </div>

        </div>
    </div>
</div>

<script>
    const elemEmail = document.querySelector('#userEmailSI');
    const elemPassword = document.querySelector('#userPasswordSI');
    const elemSignInForm = document.querySelector('#signin-form');

    const checkEmail = () => {
        let valid = false;
        const email = elemEmail.value.trim();
        if (!isRequired(email)) {
            showError(elemEmail, 'Error: Email cannot be blank');
        } else if (!isEmailValid(email)) {
            showError(elemEmail, 'Error: Wrong Email')
        } else {
            showSuccess(elemEmail);
            valid = true;
        }
        return valid;
    };

    const checkPassword = () => {
        let valid = false;

        const password = elemPassword.value.trim();

        if (!isRequired(password)) {
            showError(elemPassword, 'Error: Password cannot be blank');
        } else if (!isPasswordSecure(password)) {
            showError(elemPassword, 'Error: Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
        } else {
            showSuccess(elemPassword);
            valid = true;
        }

        return valid;
    };

    const isEmailValid = (email) => {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };

    const isPasswordSecure = (password) => {
        const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        return re.test(password);
    };

    const isRequired = value => value !== '';
    const isBetween = (length, min, max) => !(length < min || length > max);


    const showError = (input, message) => {
        // get the form-field element
        const formField = input.parentElement;
        // add the error class
        formField.classList.remove('success');
        formField.classList.add('error');

        // show the error message
        const error = formField.querySelector('small');
        error.textContent = message;
    };

    const showSuccess = (input) => {
        // get the form-field element
        const formField = input.parentElement;

        // remove the error class
        formField.classList.remove('error');
        formField.classList.add('success');

        // hide the error message
        const error = formField.querySelector('small');
        error.textContent = '';
    }

    const debounce = (fn, delay = 500) => {
        let timeoutId;
        return (...args) => {
            // cancel the previous timer
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            // setup a new timer
            timeoutId = setTimeout(() => {
                fn.apply(null, args)
            }, delay);
        };
    };

    elemSignInForm.addEventListener('submit', function (e) {
        // prevent the form from submitting
        e.preventDefault();

        // validate fields
        let isEmailValid = checkEmail(), isPasswordValid = checkPassword();

        let isFormValid = isEmailValid && isPasswordValid;

        // submit to the server if the form is valid
        if (isFormValid) {
        }

    });

    elemSignInForm.addEventListener('input', debounce(function (e) {
        switch (e.target.id) {
            case 'email':
                checkEmail();
                break;
            case 'password':
                checkPassword();
                break;
        }
    }));

</script>
<?php require "includes/footer.php" ?>
<!--    Footer Starts   -->
