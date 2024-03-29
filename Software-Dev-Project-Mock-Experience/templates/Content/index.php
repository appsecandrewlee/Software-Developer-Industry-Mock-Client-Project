<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Content> $content
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
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
    <!-- navigation bar -->
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
                    $currentPage = "Home";
                    include 'templates/navbar.php';
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Treatment for your mind, body and spirit.</h1>
                    <p class="lead fw-normal text-muted mb-0">Booking a holistic treatment can promote physical, mental,
                        and emotional wellbeing by addressing the whole person, not just individual symptoms. It can
                        help alleviate stress, improve sleep, and enhance overall quality of life.</p>
                    <!-- Section-->
                    <br><br>

                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php foreach ($content as $item): ?>
                            <?php if ($item->id !== 8 && $item->id !== 10 && $item->id !== 11 && $item->id !== 12 && $item->id !== 14): ?>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <?= $this->Html->image($item->image, ['class' => 'card-img-top', 'style' => 'width: auto; height: 178px;']) ?>
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name and price-->
                                                <h5 class="fw-bolder"><?= h($item->name) ?></h5>
                                                <h6>$<?= $this->Number->format($item->cost) ?></h6>
                                                <!-- Product description-->
                                                <?= h($item->description) ?>
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a
                                                    class="btn btn-outline-dark mt-auto"<?= $this->Html->link("Book now", "/events", ['class' => 'btn btn-outline-dark mt-auto']) ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <?php foreach ($content as $item): ?>
                    <?php if ($item->id === 8): ?>
                    <div class="col-md-6">
                        <?= $this->Html->image($item->image, ['class' => 'img-fluid rounded mb-5 mb-lg-0', 'alt' => $item->name]) ?>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder"><?= h($item->name) ?></h2>
                        <p class="lead fw-normal text-muted mb-4"> <?= h($item->description) ?></p>
                        <?= $this->Html->link("More About Us", ['controller' => 'About', 'action' => 'index', $item->id], ['class' => 'btn btn-outline-dark mt-auto']) ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </section>


        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder">Our team</h2>
                    <p class="lead fw-normal text-muted mb-5">Dedicated to self-discovery and well-being.</p>
                </div>

                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <?php foreach ($content as $item): ?>
                        <?php if (in_array($item->id, [10, 11, 12, 14])): ?>
                            <div class="col mb-5 mb-5 mb-xl-0">
                                <div class="text-center">
                                    <?= $this->Html->image($item->image, ['class' => 'img-fluid rounded-circle mb-4 px-4']) ?>
                                    <h5 class="fw-bolder"><?= h($item->name) ?></h5>
                                    <div class="fst-italic text-muted"><?= h($item->description) ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </header>
</main>

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
</html>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

