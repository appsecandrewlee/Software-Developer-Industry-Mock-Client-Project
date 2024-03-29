<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 * @var \App\Model\Entity\Session $session
 * @var iterable<\App\Model\Entity\Event> $events
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Book a session</title>
    <!-- Favicon-->
    <?= $this->Html->meta('icon', 'assets/favicon.ico') ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css('styles.css') ?>
    <!-- jQuery-->
    <?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
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
                    $currentPage = 'Bookings';
                    include 'templates/navbar.php';
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container px-5">
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Booking</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <?= $this->Form->create($session, ['method' => 'post']) ?>
                        <?php
                        $startTime = $_GET['startTime'] ?? '';
                        $startDate = $_GET['startDate'] ?? '';
                        ?>
                        <h6>Booking Information</h6>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input(
                                'session_date',
                                [
                                    'value' => $startDate,
                                    'class' => 'form-control',
                                    'id' => 'session_date',
                                    'type' => 'select',
                                    'data-sb-validations' => 'required',
                                    'options' => $dateOptions,
                                    'empty' => 'Select date',
                                    'required' => true,
                                    'onchange' => 'fetchTime()',
                                ]
                            ); ?>
                            <script>
                                $(document).ready(function() {
                                    setDefaultStartDate();
                                });

                                function setDefaultStartDate() {
                                    let sessionDate = $('#session_date');
                                    let startDate = '<?= $startDate; ?>';

                                    if (sessionDate.length > 0) {
                                        for (let i = 0; i < sessionDate[0].options.length; i++) {
                                            if (sessionDate[0].options[i].value === startDate) {
                                                sessionDate[0].selectedIndex = i;
                                                break;
                                            }
                                        }
                                    }

                                    fetchTime();
                                }

                                function setDefaultStartTime() {
                                    let sessionTime = $('#session_start');
                                    let startTime = '<?= $startTime; ?>';

                                    if (sessionTime.length > 0) {
                                        for (let i = 0; i < sessionTime[0].options.length; i++) {
                                            if (sessionTime[0].options[i].value === startTime.slice(0, -3)) {
                                                sessionTime[0].selectedIndex = i;
                                                break;
                                            }
                                        }
                                    }
                                }

                                function fetchTime() {
                                    let selectedDate = $('#session_date').find(':selected').text();
                                    let sessionStart = $('#session_start');

                                    if (selectedDate !== "Select date") {
                                        $.ajax({
                                            type: 'POST',
                                            url: 'Events/index',
                                            data: { selected_date: selectedDate },
                                            success: function(response) {
                                                sessionStart.empty();
                                                sessionStart.append($('<option>').val("").text("Select time"));

                                                for (let i = 0; i < response.length; i++) {
                                                    let option = $('<option>').val(response[i][0]).text(response[i][0]);
                                                    sessionStart.append(option);
                                                }

                                                setDefaultStartTime();
                                            }
                                        });
                                    } else {
                                        sessionStart.empty();
                                        sessionStart.append($('<option>').val("").text("Select time"));
                                    }
                                }
                            </script>
                            <label for="session_date">Session Date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input(
                                'session_start',
                                [
                                    'value' => $startTime,
                                    'class' => 'form-control',
                                    'id' => 'session_start',
                                    'type' => 'select',
                                    'empty' => 'Select time',
                                    'required' => true,
                                ]
                            ) ?>
                            <label for="session_start">Session Start</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->select(
                                'service_name',
                                $serviceTitles,
                                ['class' => 'form-control', 'id' => 'service_name', 'empty' => 'Select service']
                            ) ?>
                            <label for="service_name">Service</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input('session_notes', ['class' => 'form-control', 'id' => 'session_notes', 'type' => 'text', 'placeholder' => ' ', 'data-sb-validations' => 'required']) ?>
                            <label for="session_notes">Additional Information</label>
                        </div>
                    </div>
                    <div class="col-lg -8 col-xl-6">
                        <h6>Customer Information</h6>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input('customer_first_name', ['class' => 'form-control', 'id' => 'customer_first_name', 'type' => 'text', 'placeholder' => ' ', 'data-sb-validations' => 'required']) ?>
                            <label for="customer_first_name">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input('customer_last_name', ['class' => 'form-control', 'id' => 'customer_last_name', 'type' => 'text', 'placeholder' => ' ', 'data-sb-validations' => 'required']) ?>
                            <label for="customer_last_name">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input('customer_email', ['class' => 'form-control', 'id' => 'customer_email', 'type' => 'email', 'placeholder' => ' ', 'data-sb-validations' => 'required']) ?>
                            <label for="customer_email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input('customer_phone_number', ['class' => 'form-control', 'id' => 'customer_phone_number', 'type' => 'text', 'placeholder' => ' ', 'data-sb-validations' => 'required']) ?>
                            <label for="customer_phone_number">Phone Number</label>
                        </div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-lg enabled" id="submitButton" type="submit">Book Now</button></div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
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
</body>
</html>
