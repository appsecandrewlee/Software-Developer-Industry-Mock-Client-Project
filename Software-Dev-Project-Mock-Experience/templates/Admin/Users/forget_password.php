<?php
/**
 * @var \App\View\AppView $this
 */

$this->layout = 'login';
$this->assign('title', 'Forget Password');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Forgot password</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div id="contactForm">
                            <?= $this->Form->create() ?>
                            <?= $this->Flash->render() ?>
                            <p>Enter your email address registered with our system below to reset your password: </p>
                            <?php
                            echo $this->Form->control('email', [
                                'type' => 'email',
                                'required' => true,
                                'autofocus' => true,
                                'label' => false,
                                'class' => 'form-control'
                            ]);
                            ?>
                            </fieldset>
                            <br>
                            <?= $this->Form->button(__('Send verification email'), ['class' => 'btn btn-primary btn-lg enabled', 'id' => 'submitButton']) ?>
                            <?= $this->Form->end() ?>
                            <hr class="hr-between-buttons">
                            <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>


<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div>
            </div>
            <div class="col-auto">
                <a class="link-light small" href="#">Privacy Policy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#">Terms and Conditions</a>
            </div>
        </div>
    </div>
</footer>
