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
                <?= $this->Html->link(__('Bookings'), ['controller' => 'Sessions', 'action' => 'index'], ['class' => 'nav-link']) ?>
                <b style="color: white;"><?= $this->Html->link(__('Accounts'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></b>
                <?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index'], ['class' => 'nav-link']) ?>
                <?= $this->Html->link(__('Content Block'), ['controller' => 'Content', 'action' => 'index'], ['class' => 'nav-link']) ?>
                <?= $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Account Details</h1>
                <aside class="column">
                    <div class="side-nav">
                        <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
                        <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                    </div>
                </aside>

            </div>

            <table>
                <tr>
                    <th>
                        <?= __('User ID') ?>
                    </th>
                    <td>
                        <?= h($user->id) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('First Name') ?>
                    </th>
                    <td>
                        <?= h($user->first_name) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Last Name') ?>
                    </th>
                    <td>
                        <?= h($user->last_name) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Date of Birth') ?>
                    </th>
                    <td>
                        <?= h($user->DateofBirth->format("d/m/Y")) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Email') ?>
                    </th>
                    <td>
                        <?= h($user->email) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Phone') ?>
                    </th>
                    <td>
                        <?= h($user->phone) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Street') ?>
                    </th>
                    <td>
                        <?= h($user->street) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Suburb') ?>
                    </th>
                    <td>
                        <?= h($user->suburb) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Post Code') ?>
                    </th>
                    <td>
                        <?= h($user->post_code) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('State') ?>
                    </th>
                    <td>
                        <?= h($user->state) ?>
                    </td>
                </tr>
            </table>
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
</section>
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
        </div>
    </div>
</footer>
