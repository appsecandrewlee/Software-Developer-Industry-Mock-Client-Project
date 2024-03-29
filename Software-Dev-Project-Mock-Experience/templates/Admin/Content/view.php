<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>View Course</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?= $this->Html->link(__('Bookings'), ['controller' => 'Sessions', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('Accounts'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    <b style="color: white;"><?= $this->Html->link(__('Content Block'), ['controller' => 'Content', 'action' => 'index'], ['class' => 'nav-link']) ?></b>
                    <?= $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
                </ul>
            </div>
        </div>
    </nav>
</main>
</body>
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Content Details</h1>
                <aside class="column">
                    <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Content'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Content'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
            </div>
    <div class="column-responsive column-80">
        <div class="content view content">
            <h3><?= h($content->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($content->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><img
                            src="/img/homepage_images/<?= ($content->image) ?>" alt="Content Image" width="200" /></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($content->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($content->cost) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($content->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
</section>
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
