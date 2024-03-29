<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Sessions Calendar</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
                    <?= $this->Html->link("Home", "/", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link("About Us", "/about", ['class' => 'nav-link']) ?>
                    <b style="color: white;"><?= $this->Html->link("Bookings", "/fullcalendar", ['class' => 'nav-link']) ?></b>
                    <?= $this->Html->link("Purchase Courses", "/Carts/Add", ['class' => 'nav-link']) ?>
                    <?= $this->Html->link(__('See Review'), ['controller' => 'Reviews', 'action' => '/'], ['class' => 'nav-link']) ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h2 class="fw-bolder mb-3">Holistics Healing Sessions Calendar</h2>
                    </div>
                <div id="calendar"></div>
                </div>
            </div>

        <script>
            $(document).ready(function() {
                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: "/event",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function(event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        window.location.href = "../Sessions/add";
                    },
                    eventDrop: function(event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        $.ajax({
                            url: '/eventAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function(response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function(event) {
                        var decision = confirm("Do you really want to delete?");
                        if (decision) {
                            $.ajax({
                                type: "POST",
                                url: '/fullcalendar/ajax',
                                data: {
                                    id: event.id,
                                    type: 'delete'
                                },
                                success: function(response) {
                                    if (response.status === 1) {
                                        displayMessage(response.message);
                                        calendar.fullCalendar('removeEvents', event.id);
                                    } else {
                                        displayMessage(response.message);
                                    }
                                },
                                error: function(xhr, status, error) {
                                    displayMessage('An error occurred while deleting the event.');
                                }
                            });
                        }
                    }
                });
            });

            function displayMessage(message) {
                toastr.success(message, 'Event');
            }

            function openPopup(url) {
                var popup = window.open(url, '_blank', 'width=800, height=600');
                popup.focus();
            }
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
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
</html>
