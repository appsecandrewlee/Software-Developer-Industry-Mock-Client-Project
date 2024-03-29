<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>

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
                    aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?= $this->Html->link(__('Bookings'), ['controller' => 'Sessions', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('Accounts'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
                </ul>
            </div>
        </div>
    </nav>
</main>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $review->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $review->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reviews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reviews form content">
            <?= $this->Form->create($review) ?>
            <fieldset>
                <legend><?= __('Edit Review') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                    echo $this->Form->control('rating');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

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
