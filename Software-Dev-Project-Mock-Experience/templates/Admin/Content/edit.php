<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
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
                <?= $this->Html->link(__('Accounts'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?>
                <?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index'], ['class' => 'nav-link']) ?>
                <b style="color: white;"><?= $this->Html->link(__('Content Block'), ['controller' => 'Content', 'action' => 'index'], ['class' => 'nav-link']) ?></b>
                <?= $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
            </ul>
        </div>
    </div>
</nav>

<!-- View User Details -->
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Edit Content</h1>
                <aside class="column">
                    <div class="side-nav">
                        <h4 class="heading"><?= __('Actions') ?></h4>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $content->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'class' => 'side-nav-item']
                        ) ?>
                        <?= $this->Html->link(__('List Content'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>
                </aside>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <?= $this->Form->create($content) ?>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("name", array("class" => "form-control", "id" => "name", "placeholder" => " ", "data-sb-validations" => "required", "value" => $content->name)) ?>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3 text-center">
                            <div id="drop-zone">
                                Drop or Upload image
                                <div id="clickHere">
                                    <?= $this->Form->input("image", array("class" => "form-control", "id" => "image", "type" => "file", "data-sb-validations" => "required", "value" => $content->image)) ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("description", array("class" => "form-control", "id" => "description", "placeholder" => " ", "data-sb-validations" => "required", "value" => $content->description)) ?>
                            <label for="description">Description</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("cost", array("class" => "form-control", "id" => "cost", "placeholder" => " ", "data-sb-validations" => "required", "value" => $content->cost)) ?>
                            <label for="cost">Cost</label>
                        </div>
                    <div class="text-center my-5">
                        <div class="column-responsive column-80">
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled', "id" => "submitButton"]) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
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

