<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Staff</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>

<body class="d-flex flex-column">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Holistic Healings</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                    $currentPage = "";
                    include 'templates/admin_navbar.php' ?>
                </ul>
            </div>
        </div>
    </nav>
</main>

<!-- Add User part -->
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Create Staff Account</h1>
            </div>

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?= $this->Form->create($user) ?>
                    <?= $this->Flash->render() ?>

                    <div class="form-floating mb-3">
                        <?= $this->Form->input("first_name", array("class" => "form-control", "id" => "first_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("last_name", array("class" => "form-control", "id" => "last_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="last_name">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("DateofBirth", array("class" => "form-control", "id" => "DateofBirth", "type" => "date", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="DateofBirth">Date of Birth</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("email", array("class" => "form-control", "id" => "email", "type" => "email", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("phone", array("class" => "form-control", "id" => "phone", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("street", array("class" => "form-control", "id" => "street", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="street">Street</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("suburb", array("class" => "form-control", "id" => "suburb", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                        <label for="suburb">Suburb</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("post_code", array("class" => "form-control", "id" => "post_code", "type" => "text", "placeholder" => " ", "value" => "")) ?>
                        <label for="post_code">Postcode</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("state", array("class" => "form-control", "id" => "state", "type" => "text", "placeholder" => " ",  "value" => "")) ?>
                        <label for="state">State</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "value" => "")) ?>
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("retype_password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ",  "value" => "")) ?>
                        <label for="password">Retype Password</label>
                    </div>
                    <div class="text-center my-5">
                        <div class="column-responsive column-80">
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled', "id" => "submitButton"])?>
                            <?= $this->Form->end() ?>
                        </div>
                        <script>

                        </script>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section>
</body>

</html>

