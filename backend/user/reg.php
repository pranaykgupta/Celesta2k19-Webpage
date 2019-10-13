<?php include("functions/init.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php
if (logged_in()) {
    redirect("profile.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celesta2k19</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/reg_styles.css">
</head>

<body>
    <canvas id="canvas"></canvas>
    <section class="login-body">
        <div class="row">
            <div class="input-cart col s12 m10 push-m1 z-depth-2">
                <?php display_message() ?>
                <?php login_signup() ?>
                <div class="col s12 m7 signup">
                    <div class="signupForm">
                        <h4 class="center">Sign up</h4>
                        <br>
                        <form id="signup_form" name="signup_form" method="post">
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input type="text" id="first_name" name="first_name" class="validate" required="required" placeholder="First Name">
                                    <label for="name-picked">
                                        <i class="material-icons">person_add</i>
                                    </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input type="text" id="last_name" name="last_name" class="validate" placeholder="Last Name">
                                    <label for="name-picked">
                                        <i class="material-icons">person_add</i>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input type="text" id="phone" name="phone" class="validate" required="required" placeholder="Phone Number">
                                    <label for="phone-picked">
                                        <i class="material-icons">phone</i>
                                    </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input type="text" id="college" name="college" class="validate" required="required" placeholder="School/College">
                                    <label for="phone-picked">
                                        <i class="material-icons">school</i>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input type="text" id="email" name="email" class="validate" required="required" placeholder="Enter your email">
                                    <label for="email">
                                        <i class="material-icons">mail</i>
                                    </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input type="text" id="referral_id" name="referral_id" class="validate" placeholder="Referral ID">
                                    <label for="referral_id">
                                        <i class="material-icons">person</i>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input type="password" id="password" name="password" class="validate" required="required" placeholder="Password">
                                    <label for="pass-picked">
                                        <i class="material-icons">lock</i> </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input type="password" id="confirm_password" name="confirm_password" class="validate" required="required" placeholder="Confirm Password">
                                    <label for="pass-picked">
                                        <i class="material-icons">lock</i> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="switch col s6">
                                    <label>
                                        <input type="checkbox" name="gender" id="male" value="m" checked>
                                        <span class="lever"></span>
                                        Male
                                    </label>
                                    <label>
                                        <input type="checkbox" name="gender" id="female" value="f">
                                        <span class="lever"></span>
                                        Female
                                    </label>
                                </div>
                            </div>


                            <input type="hidden" id="signup" name="signup" value="love_u_atreyee">
                            <div class="row">
                                <button type="submit" name="btn-signup" class="btn blue right waves-effect waves-light">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-toggle center">
                        <h4 class="center">Have No Account ? <a href="#!">Sign Up</a></h4>
                    </div>
                </div>
                <div class="col s12 m5 login">
                    <h4 class="center">Log in</h4>
                    <br>
                    <form id="login_form" name="login_form" method="post" autocomplete="off">
                        <div class="row">
                            <div class="input-field">
                                <input type="text" id="celestaid" name="celestaid" class="validate" required="required" autocomplete="off" placeholder="Celesta ID">
                                <label for="user">
                                    <i class="material-icons">person</i> </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <input type="password" id="password" name="password" class="validate" required="required" placeholder="Password">
                                <label for="pass">
                                    <i class="material-icons">lock</i>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <button type="submit" name="login" id="login" class="btn waves-effect waves-light blue left">Log
                                    in</button>
                            </div>
                            <div class=" col s6">
                                <label><a href="./resend_activation.php">
                                    <span class="btn waves-effect waves-light left">
                                    Resend Activation Link</span></a>
                                </label>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col s12">
                    <br>
                    <div class="legal center">
                    </div>
                    <div class="legal center">
                        <div class="col s12 m7 right">
                            <p class="grey-text policy center">By signing up, you agree on our <a href="#!">Privacy
                                    Policy</a> and <a href="#!">Terms of Use</a>.
                            </p>
                        </div>
                        <div class="col s12 m5">
                            <p class="center grey-text" style="font-size: 14px;">Get TechXiceted : <a href="https://celesta.org.in" class="main-title red-text" target="_blank">Celesta'19</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fixed-action-btn toolbar">
            <a class="btn-floating btn-large amber black-text">
                Menu
            </a>
            <ul>
                <li><a class="indigo center" href="../../">Home</a></li>
                <li><a class="blue center" href="../../events.html">Events</a></li>
                <li><a class="red center" href="../../sponsors.html">Sponsors</a></li>
            </ul>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gl-matrix/2.1.0/gl-matrix.js"></script>
    <script src="./canvas/canvas.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        var male=document.querySelector('#male');
        var female=document.querySelector('#female');
        male.addEventListener('click', () => {
            if( male.checked) {
                female.checked=false;
            }
            if( !male.checked) {
                female.checked=true;
            }
        })
        female.addEventListener('click', () => {
            if( female.checked) {
                male.checked=false;
            }
            if( !female.checked) {
                male.checked=true;
            }
        })
    </script>
</body>

</html>