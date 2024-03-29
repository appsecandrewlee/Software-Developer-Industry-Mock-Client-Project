<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Holistic Healings</title>
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
                $currentPage = "Cart";
                include 'templates/navbar.php';
                ?>
            </ul>
        </div>
    </div>
</nav>

    <section class="py-5">
<div class="row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-6">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <?= $this->Form->create($cart) ?>
            <fieldset>
                <legend><?= __('Add Cart') ?></legend>
                <?php
                echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true, 'class' => 'form-control', 'placeholder' => ' ']);

                echo $this->Form->control('quantity', ['type' => 'select', 'options' => range(1,1), 'class' => 'form-control', 'placeholder' => ' ']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled']) ?>
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
    </section>
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
        </div>
    </div>
</footer>
