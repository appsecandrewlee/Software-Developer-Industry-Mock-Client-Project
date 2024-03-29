
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Courses</title>
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
                    $currentPage = "Courses";
                    include 'templates/admin_navbar.php' ?>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-light rounded py-5">
        <div class="text-center text-black">
            <h1 class="display-4 fw-bolder">
                Courses
            </h1>
        </div>
    </header>


    <div id="layoutSidenav_content">

        <main>
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="text-center my-5">
                        <?= $this->Flash->render() ?>
                        <br>
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                            <?php foreach ($courses as $course): ?>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" style="width: auto; height: 178px;"
                                             src="/img/courses_uploads/<?= ($course->image) ?>" alt="..."/>
                                        <!-- Prodwuct details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name and price-->
                                                <h5 class="fw-bolder"><?= h($course->name) ?></h5>
                                                <h6>$<?= $this->Number->format($course->cost) ?></h6>
                                                <!-- Product description-->
                                                <?= h($course->description) ?>
                                                <br>
                                                <h7>
                                                    <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
                                                </h7>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <div class="text-center my-3"><a
                            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'btn btn-success ml-3', 'style' => "background-color: #371F76; border-color: #371F76;"]) ?>
                            </a>
                        </div>
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
        </main>
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
</body>
