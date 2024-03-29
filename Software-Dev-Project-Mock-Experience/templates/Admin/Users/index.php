<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 * @var $name
 */
?>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Staff Accounts</title>
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
                    $currentPage = "Accounts";
                    include 'templates/admin_navbar.php' ?>
                </ul>
            </div>
        </div>
    </nav>
<!---->
<!--    <div style="display: flex; flex-direction: row; align-items: center; justify-content: start; padding: 10px;">-->
<!--        <h4>Colour Theme</h4>-->
<!--        <input type="color" id="color-picker" style="margin-right: 10px">-->
<!--        <button onclick="changeColor()" class="btn btn-primary btn-lg enabled">Change Colour</button>-->
<!--    </div>-->
<!---->
<!--    <script>-->
<!--        document.addEventListener("DOMContentLoaded", function () {-->
<!--            window.addEventListener("load", function () {-->
<!--                var bgColor = localStorage.getItem("bgColor");-->
<!--                if (bgColor) {-->
<!--                    document.querySelector("body").style.background = bgColor;-->
<!--                    i = color.indexOf(bgColor);-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!---->
<!--    <script>-->
<!--        function changeColor() {-->
<!--            var colorPicker = document.getElementById("color-picker");-->
<!--            var newColor = colorPicker.value;-->
<!--            var styleElement = document.createElement('style');-->
<!--            styleElement.type = 'text/css';-->
<!--            var newRule = '.bg-dark { --bs-bg-opacity: 1; background-color: ' + newColor + ' !important; }';-->
<!--            styleElement.appendChild(document.createTextNode(newRule));-->
<!--            document.head.appendChild(styleElement);-->
<!--            localStorage.setItem('bgColor', newColor);-->
<!--        }-->
<!--    </script>-->

    <div class="users index content">
        <div class="text-center my-4">
            <h1 class="fw-bolder">Staff Accounts</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <?php if ($this->Identity->Isloggedin()): ?>
                        <?= $this->Form->create(null, ['type' => 'get']) ?>
                        <div
                            style="display: flex; flex-direction: row; align-items: center; justify-content: end; padding: 10px;">
                            <?= $this->Form->control('key', ['label' => '', 'placeholder' => 'Search', 'style' => 'margin-right: 10px;']) ?>
                            <?= $this->Form->submit('Search', array("class" => "btn btn-primary btn-lg enabled", "id" => "submitButton")) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    <?php endif; ?>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <div class="container px-8">
                    <div class="row justify-content-center">
                        <div class="card mb-4">
                            <div class="card-header" style="text-align: center;">
                                <i class="fas fa-table me-1"></i>
                                Staff Accounts
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <?= $this->Paginator->sort('id', 'ID') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('first_name') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('last_name') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('DateofBirth', 'Date of Birth') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('email') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('phone') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('street') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('suburb') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('post_code') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('state') ?>
                                    </th>
                                    <th style="color: #BEA9DF;">
                                        <?= __('Actions') ?>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td>
                                            <?= $this->Number->format($user->id) ?>
                                        </td>
                                        <td>
                                            <?= h($user->first_name) ?>
                                        </td>
                                        <td>
                                            <?= h($user->last_name) ?>
                                        </td>
                                        <td>
                                            <?= h($user->DateofBirth->format('d/m/Y')) ?>
                                        </td>
                                        <td>
                                            <?= h($user->email) ?>
                                        </td>
                                        <td>
                                            <?= h($user->phone) ?>
                                        </td>
                                        <td>
                                            <?= h($user->street) ?>
                                        </td>
                                        <td>
                                            <?= h($user->suburb) ?>
                                        </td>
                                        <td>
                                            <?= h($user->post_code) ?>
                                        </td>
                                        <td>
                                            <?= h($user->state) ?>
                                        </td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                            <?php
                                            if ($user->id != 1) {
                                                echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]);
                                            }
                                            ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-auto mb-3">
                            <?= $this->Html->link(__('Create Staff Account'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-success ml-3', 'style' => "background-color: #371F76; border-color: #371F76;"]) ?>
                        </div>
                        <div class="paginator" style="text-align: center;">
                            <ul class="pagination"
                                style="display: flex; justify-content: center; align-items: center; list-style: none; padding: 0; margin: 0;">
                                <li><?= $this->Paginator->first('<< ' . __('first')) ?></li>
                                <li style="margin: 0 5px;"><?= $this->Paginator->prev('< ' . __('previous')) ?></li>
                                <?= $this->Paginator->numbers() ?>
                                <li style="margin: 0 5px;"><?= $this->Paginator->next(__('next') . ' >') ?></li>
                                <li><?= $this->Paginator->last(__('last') . ' >>') ?></li>
                            </ul>
                            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
        </div>
    </div>
</footer>
</body>

