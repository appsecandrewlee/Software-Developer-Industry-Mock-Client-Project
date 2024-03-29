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
                    $currentPage = "About Us";
                    include 'templates/navbar.php';
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="card-img-top mb-5 mb-md-0"
                                           src="<?php echo $this->Url->image('Therapy-Room.jpg')?>"
                                           alt="Holistic Image"/></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder mb-3">About Holistics</h2>
                    <p class="lead fw-normal text-muted mb-4">Our approach to healing is based on providing life
                        transformations though removing blocks
                        and limiting beliefs. We offer a range of services that are designed to support your
                        overall well-being, including spiral journey sessions, human design readings,
                        acupuncture, and massage therapy. Our team is committed to providing you with
                        personalised care that is tailored to your unique needs and goals. </p>
                    <p class="lead fw-normal text-muted mb-4">Whether you are seeking relief from a specific
                        health condition or simply want to improve
                        your overall quality of life, we are here to support you on your journey to optimal
                        health. Thank you for choosing Holistic Healings as your partner in wellness!</p>
                    <br>
                </div>
            </div>
        </div>
        <center>
            <a class="btn btn-outline-dark mt-auto" <?= $this->Html->link('Make a booking with us',
                ['controller' => 'Events', 'action' => 'index'], ['class' => 'button']) ?></a>
        </center>
    </section>
    </div>
    </section>
</main>

<!-- Footer-->
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
</body>

</html>
