<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customer
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Customer Registration</title>
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
                    <?= $this->Html->link("Home", "/", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("About Us", "/about", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("Bookings", "/sessions/add", ['class' => 'nav-link']) ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link("Sign In", "/client/customers/login", ['class' => 'nav-link']) ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link("Register", "/client/customers/add", ['class' => 'nav-link']) ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add User -->
    <section class="py-5 bg-light">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="<?php echo $this->Url->image('login.jpg'); ?>" class="img-fluid"
                                     style="height: 100%;">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-xl-6 text-black">
                                    <div class="text-center mb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                        <p class="text-black-50 mb-5">Please enter your details!</p>
                                    </div>
                                    <div class="row gx-5 justify-content-center">
                                        <div class="col-lg-12 col-xl-9 order-md-last ml-auto">
                                            <?= $this->Form->create($customer) ?>
                                            <?= $this->Flash->render() ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("first_name", array("class" => "form-control", "id" => "first_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="first_name">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("last_name", array("class" => "form-control", "id" => "last_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="last_name">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("DateofBirth", array("class" => "form-control", "id" => "DateofBirth", "type" => "date", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="DateofBirth">Date of Birth</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("email", array("class" => "form-control", "id" => "email", "type" => "email", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("phone", array("class" => "form-control", "id" => "phone", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="phone">Phone Number</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("street", array("class" => "form-control", "id" => "street", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="street">Street</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("suburb", array("class" => "form-control", "id" => "suburb", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="suburb">Suburb</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("post_code", array("class" => "form-control", "id" => "post_code", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="post_code">Postcode</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("state", array("class" => "form-control", "id" => "state", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="state">State</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("retype_password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="password">Retype Password</label>
                                            </div>
                                            <div class="text-center my-5">
                                                <div class="column-responsive column-80">
                                                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled', "id" => "submitButton"]) ?>
                                                    <?= $this->Form->end() ?>
                                                </div>
                                                <script>
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
<div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="<?php echo $this->Url->image('login.jpg'); ?>" class="img-fluid"
                                     style="height: 100%;">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-xl-6 text-black">
                                    <div class="text-center mb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                        <p class="text-black-50 mb-5">Please enter your details!</p>
                                    </div>
                                    <div class="row gx-5 justify-content-center">
                                        <div class="col-lg-12 col-xl-9 order-md-last ml-auto">
                                            <?= $this->Form->create($customer) ?>
                                            <?= $this->Flash->render() ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("first_name", array("class" => "form-control", "id" => "first_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="first_name">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("last_name", array("class" => "form-control", "id" => "last_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="last_name">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("DateofBirth", array("class" => "form-control", "id" => "DateofBirth", "type" => "date", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="DateofBirth">Date of Birth</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("email", array("class" => "form-control", "id" => "email", "type" => "email", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("phone", array("class" => "form-control", "id" => "phone", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="phone">Phone Number</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("street", array("class" => "form-control", "id" => "street", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="street">Street</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("suburb", array("class" => "form-control", "id" => "suburb", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="suburb">Suburb</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("post_code", array("class" => "form-control", "id" => "post_code", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="post_code">Postcode</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-floating mb-3">
                                                        <?= $this->Form->input("state", array("class" => "form-control", "id" => "state", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                        <label for="state">State</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <?= $this->Form->input("retype_password", array("class" => "form-control", "id" => "password", "type" => "password", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                                                <label for="password">Retype Password</label>
                                            </div>
                                            <div class="text-center my-5">
                                                <div class="column-responsive column-80">
                                                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled', "id" => "submitButton"]) ?>
                                                    <?= $this->Form->end() ?>
                                                </div>
                                                <script>
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
