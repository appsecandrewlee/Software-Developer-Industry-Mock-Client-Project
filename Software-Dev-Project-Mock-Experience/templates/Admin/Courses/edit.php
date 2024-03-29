<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
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
                <h1 class="fw-bolder">Edit Course</h1>
                <p class="lead fw-normal text-muted mb-0"><?= $course->name ?></p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?= $this->Form->create($course, ['type' => 'file']) ?>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("name", array("class" => "form-control", "id" => "name", "placeholder" => " ", "data-sb-validations" => "required", "value" => $course->name)) ?>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("description", array("class" => "form-control", "id" => "description", "placeholder" => " ", "data-sb-validations" => "required", "value" => $course->description)) ?>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <?= $this->Form->input("cost", array("class" => "form-control", "id" => "cost", "placeholder" => " ", "data-sb-validations" => "required", "value" => $course->cost)) ?>
                        <label for="cost">Cost</label>
                    </div>
                    <div class="form-floating mb-3 text-center">
                        <div id="drop-zone">
                            Drop or Upload image
                            <div id="clickHere">
                                <?= $this->Form->input("image", array("class" => "form-control", "id" => "image", "type" => "file", "data-sb-validations" => "required", "value" => $course->image)) ?>
                            </div>
                        </div>
                    </div>
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
</html>
