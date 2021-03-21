<!--    Header Starts   -->
<?php require "includes/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-registration page-login">

                <?php require "components/partials/register_header_section.php" ?>
                <!--    Header Ends   -->

                <!--    Main Starts   -->

                <main class="login-wrap">

                    <div class="form-registration login-form">

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
                                        <img src="assets/images/icon-google.png" alt="">
                                    </span>
                                <span class="text-wrap">Sign in with Google</span>
                            </button>
                        </div>

                        <div class="signup-wrap font-weight-light d-flex flex-column align-items-center">
                            <span>Don't have an account?</span>
                            <a href="register.php" class="">Create</a>
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
