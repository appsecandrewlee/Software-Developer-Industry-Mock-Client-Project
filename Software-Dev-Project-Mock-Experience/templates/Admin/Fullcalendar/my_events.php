<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Bookings Calendar</title>
    <!-- Favicon-->
    <?= $this->Html->meta('icon', 'assets/favicon.ico') ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css('styles.css') ?>

    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js') ?>

    <!--fullcalendar plugin files -->
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js') ?>
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
                    $currentPage = 'Calendar';
                    include 'templates/admin_navbar.php' ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div id="calendar"></div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    let calendar = $('#calendar').fullCalendar({
                        defaultView: 'agendaDay',
                        scrollTime: '08:00:00',
                        displayEventTime: false,
                        editable: false,
                        selectable: true,
                        selectHelper: true,
                        events: <?= json_encode($events) ?>,
                        select: function(start) {
                            let startDate = start.format("DD-MM-YYYY")
                            let startTime = start.format("HH:mm:ss");
                            window.location.href = "../../Events?startTime="+startTime+"&startDate="+startDate;
                        },
                        eventClick: function(event) {
                            window.location.href = "../Sessions/view/"+event.id;
                        },
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
<!-- Bootstrap core JS-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>-->
<!-- Core theme JS-->
<!--<script src="js/scripts.js"></script>-->
</body>
</html>
