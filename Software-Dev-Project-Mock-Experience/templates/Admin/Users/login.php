<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Staff Portal</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>
<body class="d-flex flex-column">
<main class="flex-shrink-0">
    <!--     Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Holistic Healings</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Staff Portal</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div id="contactForm">
                            <?= $this->Form->create() ?>
                            <?= $this->Flash->render() ?>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <?= $this->Form->input("email", array("class" => "form-control", "id" => "email", "type" => "email", "placeholder" => " ", "data-sb-validations" => "required, email", "value" => "")) ?>
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <?= $this->Form->input("password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "data-sb-validations" => "required", "value" => ""))?>
                                <label for="password">Password</label>
                                <div class="password-toggle" onclick="eyes.onClick()">
                                    <img src="<?php echo $this->Url->image('homepage_images/eye-open.png'); ?>" id="eyecon" style="width: 30px; height: 25px;"/>
                                </div>
                            </div>

                            <style>
                                .password-field {
                                    position: relative;
                                }
                                .password-field input[type="eyes"] {
                                    background-image: url('<?php echo $this->Url->image('homepage_images/eye-open.png'); ?>');
                                    background-position: right center;
                                    background-repeat: no-repeat;
                                    padding-right: 35px;
                                    text-indent: -9999px;
                                }
                                .password-toggle {
                                    position: absolute;
                                    right: 10px;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                let eyes = document.getElementById("eyecon");
                                let password = document.getElementById("password")

                                eyes.onclick = function(){
                                    if(password.type === "password"){
                                        password.type = "text";
                                        eyes.src = "<?php echo $this->Url->image('homepage_images/eye-close.png'); ?>"
                                    }else{
                                        password.type = "password";
                                        eyes.src = "<?php echo $this->Url->image('homepage_images/eye-open.png'); ?>"
                                    }
                                }
                            </script>
                            <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.
                            </div>
                        </div>
                        <div>
                        <!-- Remember Me-->
                        <?= $this->Form->control('remember me', ['type' => 'checkbox'])?>
                        </div>
                        <!-- Forgot my Password-->
                        <div>
                            <?= $this->Html->link(__('Forget password?'), ['controller' => 'Users', 'action' => 'forgetPassword']) ?>
                        </div>
                        <br>
                        <div class="d-grid">
                            <?= $this->Form->submit("Login", array("class" => "btn btn-primary btn-lg enabled", "id" => "submitButton")) ?>
                        </div>
                        <?= $this->Form->end() ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener("load", function() {
                var bgColor = localStorage.getItem("bgColor");
                if (bgColor) {
                    document.querySelector("body").style.background = bgColor;
                    i = color.indexOf(bgColor);
                }
            });
        });
    </script>
</main>


<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
            <div class="col-auto">
                <a class="link-light small" href="#">Privacy Policy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#">Terms and Conditions</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
