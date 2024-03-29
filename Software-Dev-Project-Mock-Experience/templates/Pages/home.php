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
                    $currentPage = "Home";
                    include 'templates/navbar.php';
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
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
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top"
                                     src="<?php echo $this->Url->image("services_img/healing.jpg"); ?>" alt="..."/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name and price-->
                                        <h5 class="fw-bolder">Spiral Journey</h5>
                                        <h6>$120</h6>
                                        <!-- Product description-->
                                        Embark on a transformative and enriching adventure of personal growth.
                                        Through this journey, you will develop a greater understanding of yourself,
                                        discover your true purpose in life, and build more meaningful relationships.
                                        Join us on this journey and unlock your full potential!
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
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top"
                                     src="<?php echo $this->Url->image("services_img/HDR.jpeg"); ?>" alt="..."
                                     width="450"
                                     height="180"/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Human Design Reading</h5>
                                        <h6>$150</h6>
                                        <!-- Product description-->
                                        Discover your unique blueprint with a Human Design Reading. Gain insight
                                        into your strengths and weaknesses, improve relationships, increase
                                        self-awareness, and promote overall well-being. Book your reading today!
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
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top"
                                     src="<?php echo $this->Url->image("services_img/acupuncture.jpg"); ?>"
                                     alt="..."/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Acupuncture</h5>
                                        <h6>$200</h6>
                                        <!-- Product description-->
                                        Acupuncture is a safe and effective alternative for pain management, stress
                                        reduction, and overall wellness. By balancing the body's energy flow, it can
                                        promote healing and restore physical and emotional balance. Improve your
                                        quality of life with our personalised acupuncture services.
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
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top"
                                     src="<?php echo $this->Url->image("services_img/massage.jpg"); ?>" alt="..."/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Remedial Massage</h5>
                                        <h6>$90</h6>
                                        <!-- Product description-->
                                        A natural and non-invasive therapy that targets the root cause of pain and
                                        discomfort. This massage technique can help improve circulation, reduce
                                        stress, and promote overall wellbeing. Experience the transformative
                                        benefits of our remedial massage and restore balance to your mind, body, and
                                        soul.
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
                    </div>
                </div>
            </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                                           src="<?php echo $this->Url->image('homepage_images/about_us_image.jpg'); ?>"
                                           alt="Holistic Image"/></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">More about holistics</h2>
                    <p class="lead fw-normal text-muted mb-4">Holistic living is about caring for the mind, body, and
                        spirit for optimal health. It also involves respecting the environment and personal growth as an
                        ongoing journey. Cultivating love, compassion, and mindfulness can lead to inner peace and
                        positive relationships while aligning with personal values.</p>
                    <br>
                    <a class="btn btn-outline-dark mt-auto" href="/about">More about us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <!--Section 2
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo $this->Url->image('homepage_images/holistic_products.jpg'); ?>" alt="Holistic Image"/></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Our Products</h2>
                    <p class="lead fw-normal text-muted mb-0">Our products can support overall health and wellbeing by using natural, non-toxic ingredients that nourish the body and avoid harmful chemicals. These products can be gentler on the skin, improve overall health, and reduce the risk of negative side effects.</p>
                    <br>
                    <a class="btn btn-outline-dark mt-auto" href="#">Browse our Products</a>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- Team members section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Our team</h2>
                <p class="lead fw-normal text-muted mb-5">Dedicated to self-discovery and well-being.</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                             src="https://img.freepik.com/premium-photo/portrait-beautiful-female-psychologist-with-diary-pen-sitting-chair-front-blue-wall-looking-camera_23-2148036615.jpg?w=150"
                             alt="Image of Jean"/>
                        <h5 class="fw-bolder">Jean</h5>
                        <div class="fst-italic text-muted">Founder &amp; CEO</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                             src="<?php echo $this->Url->image('homepage_images/josephine_smith.png'); ?> "
                             alt="Image of Josephine Smith"/>
                        <h5 class="fw-bolder">Josephine Smith</h5>
                        <div class="fst-italic text-muted">Client</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                             src="<?php echo $this->Url->image('homepage_images/andy_chan.png'); ?>"
                             alt="Image of Andy Chan"/>
                        <h5 class="fw-bolder">Andy Chan</h5>
                        <div class="fst-italic text-muted">Holistic Staff</div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                             src="<?php echo $this->Url->image('homepage_images/angela_tucker.png'); ?>"
                             alt="Image of Angela Tucker"/>
                        <h5 class="fw-bolder">Angela Tucker</h5>
                        <div class="fst-italic text-muted">Holistic Staff</div>
                    </div>
                </div>
            </div>
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
