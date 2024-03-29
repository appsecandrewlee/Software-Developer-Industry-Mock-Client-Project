<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
<<<<<<< HEAD
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
=======
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
>>>>>>> origin/cindy
    <title>Holistic Healings</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>

<<<<<<< HEAD
<!--     Navigation-->
=======
<!-- Navigation-->
>>>>>>> origin/cindy
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
<<<<<<< HEAD
                            <a class="dropdown-item" <?= $this->Html->link("My Profile", "/client/customers/profile", ['class' => 'nav-link']) ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" <?= $this->Html->link("View Bookings", "/client/customers/index", ['class' => 'nav-link']) ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" <?= $this->Html->link("Logout", "/client/customers/logout", ['class' => 'nav-link']) ?></a>
=======
                            <a class="dropdown-item" <?= $this->Html->link(__('My Appointments'), ['controller' => 'Customers', 'action' => 'index'], ['class' => 'nav-link']) ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" <?= $this->Html->link(__('My Profile'), ['controller' => 'Customers', 'action' => 'profile'], ['class' => 'nav-link']) ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" <?= $this->Html->link(__('Log Out'), ['controller' => 'Customers', 'action' => 'logout'], ['class' => 'nav-link']) ?></a>
>>>>>>> origin/cindy
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<<<<<<< HEAD

<!-- View User Details -->
=======
>>>>>>> origin/cindy
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Account Details</h1>
<<<<<<< HEAD
                <!--                <p class="lead fw-normal text-muted mb-0">--><? //= $customer->email ?><!--</p>-->
            </div>
            <!--            <div class="row gx-5 justify-content-center">-->
            <!--                <div class="col-lg-8 col-xl-6">-->
            <!--                    --><? //= $this->Form->create($customer) ?>
            <!--                    <div class="form-floating mb-3">-->
            <!--                        --><? //= $this->Form->input("last_name", array("class" => "form-control", "id" => "last_name", "placeholder" => " ", "data-sb-validations" => "required", "value" => $user->last_name)) ?>
            <!--                        <label for="email">Last Name</label>-->
            <!--                    </div>-->
            <!--                    <div class="d-grid"><button class="btn btn-primary btn-lg enabled" id="submitButton" type="submit">Save Changes</button></div>-->
            <!--                    --><? //= $this->Form->end() ?>
            <!--                </div>-->
            <!--            </div>-->
=======
                <aside class="column">
                    <div class="side-nav">
                    </div>
                </aside>
            </div>
>>>>>>> origin/cindy
        </div>
    </div>
</section>

<<<<<<< HEAD

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
=======
>>>>>>> origin/cindy
