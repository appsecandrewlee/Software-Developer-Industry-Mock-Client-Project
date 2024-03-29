<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Customer Login Portal</title>
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
                                <a class="dropdown-item" <?= $this->Html->link("My Profile", "/client/customers/profile", ['class' => 'nav-link']) ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link("View Bookings", "/client/customers/index", ['class' => 'nav-link']) ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link("Logout", "/client/customers/logout", ['class' => 'nav-link']) ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</main>

<div id="layoutSidenav_content">
    <main>
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="text-center my-5">
                    <h1 class="mt-4">Welcome, NAME OF PERSON </h1>
                    <div class="row justify-content-center">
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header" style="text-align: center;">
                        <i class="fas fa-table me-1"></i>
                        Upcoming Bookings
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Service</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Cost</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Timothy Mooney</td>
                            <td>Timothy Mooney</td>
                            <td>Timothy Mooney</td>
                            <td>Timothy Mooney</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
=======
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 * @var $name
 */
?>
<<<<<<< HEAD
<div class="customers index content">
    <?= $this->Html->link(__('Register user'), ['action' => 'Register'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('DateofBirth') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('suburb') ?></th>
                    <th><?= $this->Paginator->sort('post_code') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->DateofBirth) ?></td>
                    <td><?= h($customer->email) ?></td>
                    <td><?= h($customer->phone) ?></td>
                    <td><?= h($customer->street) ?></td>
                    <td><?= h($customer->suburb) ?></td>
                    <td><?= h($customer->post_code) ?></td>
                    <td><?= h($customer->state) ?></td>
                    <td><?= h($customer->image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
</div>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

=======

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Account</title>
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
                                <a class="dropdown-item" <?= $this->Html->link(__('My Profile'), ['controller' => 'Customers', 'action' => 'profile'], ['class' => 'nav-link']) ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link(__('View Bookings'), ['controller' => 'Customers', 'action' => 'index'], ['class' => 'nav-link']) ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" <?= $this->Html->link(__('Log Out'), ['controller' => 'Customers', 'action' => 'logout'], ['class' => 'nav-link']) ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <header class="bg-light rounded py-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">
                    Welcome,
                    <?= $this->Identity->get("first_name") . " " . $this->Identity->get("last_name") ?>
                </h1>
                <p>Here you can manage your appointment bookings.</p>
            </div>
        </header>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-primary">Upcoming Appointments</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" , id="dataTable">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('session_id', "Session ID") ?></th>
                            <th><?= $this->Paginator->sort('session_date') ?></th>
                            <th><?= $this->Paginator->sort('session_start') ?></th>
                            <th><?= $this->Paginator->sort('session_end') ?></th>
                            <th><?= $this->Paginator->sort('session_notes') ?></th>
                            <!--                        <th>--><?php //= $this->Paginator->sort('service_id') ?><!--</th>-->
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                </div>
            </div>
<!--   Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
</html>
>>>>>>> origin/cindy
