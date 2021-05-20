<!--    Header Starts   -->
<?php require "includes/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-registration page-signup">

                <?php require "components/partials/register_header_section.php" ?>
                <!--    Header Ends   -->

                <!--    Main Starts   -->

                <main class="login-wrap">

                    <div class="form-registration signup-form">

                        <h4 class="form-title">Sign up</h4>

                        <form class="form" id="signup-form">
                            <div class="form-group">
                                <label for="userEmailSU">Email</label>
                                <input type="email" class="form-control" id="userEmailSU" name="userEmailSU"
                                       placeholder="example@autales.com">
                                <small class="message"></small>
                            </div>

                            <div class="form-group">
                                <label for="userPasswordSU">Password</label>
                                <input type="password" class="form-control" id="userPasswordSU" name="userPasswordSU"
                                       placeholder="********">
                                <small class="message"></small>
                            </div>

                            <div class="form-group">
                                <label for="userCPasswordSU">Confirm Password</label>
                                <input type="password" class="form-control" id="userCPasswordSU" name="userCPasswordSU"
                                       placeholder="********">
                                <small class="message"></small>
                            </div>

                            <div class="dob-wrap">
                                <label for="userDOB">Date of Birth</label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-group wp-30">
                                        <label for="userDobDay" class="sr-only">Day</label>
                                        <select class="form-control" id="userDobDay" name="userDobDay">
                                            <option selected disabled>Day</option>
                                            <?php
                                            for ($d = 1; $d <= 31; ++$d) {
                                                echo "<option value='$d'>$d</option>";
                                            }
                                            ?>

                                        </select>
                                        <small class="message"></small>
                                    </div>
                                    <div class="form-group wp-34">
                                        <label for="userDobMonth" class="sr-only">Day</label>
                                        <select class="form-control" id="userDobMonth" name="userDobMonth">
                                            <option selected disabled>Month</option>
                                            <?php
                                            $curr_month = date('F', mktime(0, 0, 0, date('n')));
                                            $months = array();
                                            for ($m = 1; $m <= 12; ++$m) {
                                                $months[] = date('F', mktime(0, 0, 0, $m, 1));
                                            }

                                            foreach ($months as $key => $month) {
                                                echo "<option value='$month'>$month</option>\n";
                                            }

                                            ?>
                                        </select>
                                        <small class="message"></small>
                                    </div>
                                    <div class="form-group wp-30">
                                        <label for="userDobYear" class="sr-only">Day</label>
                                        <select class="form-control" id="userDobYear" name="userDobYear">
                                            <option selected disabled>Year</option>
                                            <?php
                                            for ($y = 1970; $y <= date('Y'); ++$y) {
                                                echo "<option value='$y'>$y</option>";
                                            }
                                            ?>
                                        </select>
                                        <small class="message"></small>
                                    </div>

                                </div>
                            </div>

                            <div class="">
                                <input type="submit" value="Sign up" class="btn btn-block btn-secondary">
                            </div>

                        </form>
                        <div class="spacer"></div>
                        <div class="heading-separator">
                            <span class="separator-text">Or Sign up with</span>
                        </div>

                        <div class="social-btn-wrap">
                            <button type="button"
                                    class="btn btn-secondary-revert social-btn d-inline-flex align-items-center">
                                    <span class="icon-wrap">
                                        <img src="assets/images/icon-google.png" alt="Google Icon">
                                    </span>
                                <span class="text-wrap">Sign in with Google</span>
                            </button>
                        </div>

                        <div class="signup-wrap font-weight-light d-flex flex-column align-items-center">
                            <span>Don't have an account?</span>
                            <a href="login.php" class="">Create</a>
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
    const elemEmail = document.querySelector('#userEmailSU');
    const elemPassword = document.querySelector('#userPasswordSU');
    const elemPasswordC = document.querySelector('#userCPasswordSU');

    const elemDobDay = document.querySelector('#userDobDay');
    const elemDobMonth = document.querySelector('#userDobMonth');
    const elemDobYear = document.querySelector('#userDobYear');

    const elemSignInForm = document.querySelector('#signup-form');

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

    const checkConfirmPassword = () => {
        let valid = false;
        // check confirm password
        const confirmPassword = elemPasswordC.value.trim();
        const password = elemPassword.value.trim();

        if (!isRequired(confirmPassword)) {
            showError(elemPasswordC, 'Error: Please enter the password again');
        } else if (password !== confirmPassword) {
            showError(elemPasswordC, 'Error: The password does not match');
        } else {
            showSuccess(elemPasswordC);
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

    const checkDobDay = () => {
        let valid = false;
        const day = elemDobDay.value.trim();
        if (!isRequired(day)) {
            showError(elemDobDay, 'Error: Email cannot be blank');
        } else {
            showSuccess(elemDobDay);
            valid = true;
        }
        return valid;
    };

    const checkDobMonth = () => {
        let valid = false;
        const month = elemDobMonth.value.trim();
        if (!isRequired(month)) {
            showError(elemDobMonth, 'Error: Email cannot be blank');
        } else {
            showSuccess(elemDobMonth);
            valid = true;
        }
        return valid;
    };

    const checkDobYear = () => {
        let valid = false;
        const year = elemDobYear.value.trim();
        if (!isRequired(year)) {
            showError(elemDobYear, 'Error: Email cannot be blank');
        } else {
            showSuccess(elemDobYear);
            valid = true;
        }
        return valid;
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
        let isEmailValid = checkEmail(),
            isPasswordValid = checkPassword(),
            isConfirmPasswordValid = checkConfirmPassword(),
            isDayValid = checkDobDay(),
            isMonthValid = checkDobMonth(),
            isYearValid = checkDobYear();

        let isFormValid = isEmailValid && isPasswordValid && isConfirmPasswordValid && isDayValid && isMonthValid && isYearValid;

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
            case 'confirm-password':
                checkConfirmPassword();
                break;
        }
    }));
</script>
<?php require "includes/footer.php" ?>
<!--    Footer Starts   -->
