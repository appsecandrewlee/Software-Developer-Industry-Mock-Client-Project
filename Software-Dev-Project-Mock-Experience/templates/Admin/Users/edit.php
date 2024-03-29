<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Holistic Healings</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>

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

<!-- View User Details -->
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Edit account</h1>
                <p class="lead fw-normal text-muted mb-0"><?= $user->email ?></p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?= $this->Form->create($user) ?>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("first_name", array("class" => "form-control", "id" => "first_name", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->name)) ?>
                        <label for="email">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("last_name", array("class" => "form-control", "id" => "last_name", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->last_name)) ?>
                        <label for="email">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("DateofBirth", array("class" => "form-control", "id" => "DateofBirth", "type" => "date", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->DateofBirth->format("Y-m-d"))) ?>
                        <label for="DateofBirth">Date of Birth</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("phone", array("class" => "form-control", "id" => "phone", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->phone)) ?>
                        <label for="email">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("street", array("class" => "form-control", "id" => "street", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->street)) ?>
                        <label for="email">Street</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("suburb", array("class" => "form-control", "id" => "suburb", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->suburb)) ?>
                        <label for="email">Suburb</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("post_code", array("class" => "form-control", "id" => "post_code", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->post_code)) ?>
                        <label for="email">Postcode</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("state", array("class" => "form-control", "id" => "state", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->state)) ?>
                        <label for="email">State</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-lg enabled" id="submitButton" type="submit">Save Changes</button></div>
                    <?= $this->Form->end() ?>
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
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
        </div>
    </div>
</footer>




