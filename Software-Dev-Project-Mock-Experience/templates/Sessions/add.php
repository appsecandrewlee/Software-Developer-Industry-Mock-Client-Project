<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
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
                    <?= $this->Html->link("Purchase Courses", "/Courses", ['class' => 'nav-link']) ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Add Booking part -->
    <section class="py-5">
        <div class="container px-5">
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Book a session</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <?= $this->Form->create($session, ['onsubmit' => 'return check();']); ?>
                        <?= $this->Flash->render() ?>
                        <h6>Session Information</h6>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("session_date", array("class" => "form-control", "id" => "session_date", "type" => "date",'required','default'=>date('Y-m-d',strtotime('+1 day')),'min'=>date('Y-m-d',strtotime('+1 day')), "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="session_date">Session Date</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input(
                                'session_start',
                                [
                                    'class' => 'form-control',
                                    'id' => 'session_start',
                                    'type' => 'select',
                                    'options' => [
                                        '09:00' => '09:00 AM',
                                        '10:00' => '10:00 AM',
                                        '11:00' => '11:00 AM',
                                        '12:00' => '12:00 PM',
                                        '13:00' => '01:00 PM',
                                        '14:00' => '02:00 PM',
                                        '15:00' => '03:00 PM',
                                        '16:00' => '04:00 PM',
                                        '17:00' => '05:00 PM',
                                    ],
                                    'label' => 'Session Start',
                                    'empty' => 'Select start time', // Optional, adds an empty option at the beginning
                                    'required' => true,
                                ]
                            ) ?>
                            <label for="session_start">Session Start</label>
                        </div>

                        <!-- Session End Dropdown -->
                        <div class="form-floating mb-3">
                            <?= $this->Form->input(
                                'session_end',
                                [
                                    'class' => 'form-control',
                                    'id' => 'session_end',
                                    'type' => 'select',
                                    'options' => [
                                        '09:00:00' => '09:00 AM',
                                        '10:00:00' => '10:00 AM',
                                        '11:00:00' => '11:00 AM',
                                        '12:00:00' => '12:00 PM',
                                        '13:00:00' => '01:00 PM',
                                        '14:00:00' => '02:00 PM',
                                        '15:00:00' => '03:00 PM',
                                        '16:00:00' => '04:00 PM',
                                        '17:00:00' => '05:00 PM',
                                    ],
                                    'label' => 'Session End',
                                    'empty' => 'Select end time', // Optional, adds an empty option at the beginning
                                    'required' => true,
                                ]
                            ) ?>
                            <label for="session_end">Session End</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->select(
                                'service_name',
                                $serviceTitles,
                                ['class' => 'form-control', 'id' => 'service_name', 'empty'=> 'Select service']
                            ) ?>
                            <label for="service_name">Service</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("session_notes", array("class" => "form-control", "id" => "session_notes", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="session_end">Session Notes</label>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-6">
                        <h6>Customer Information</h6>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("customer_first_name", array("class" => "form-control", "id" => "customer_first_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="customer_first_name">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("customer_last_name", array("class" => "form-control", "id" => "customer_last_name", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="customer_last_name">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("customer_email", array("class" => "form-control", "id" => "customer_email", "type" => "email", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="customer_email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?= $this->Form->input("customer_phone_number", array("class" => "form-control", "id" => "customer_phone_number", "type" => "text", "placeholder" => " ", "data-sb-validations" => "required", "value" => "")) ?>
                            <label for="customer_phone_number">Phone Number</label>
                        </div>
                    </div>
                    <div class="column-responsive column-80">
                        <?= $this->Form->button(__('Book Now'), ['class' => 'btn btn-primary btn-lg enabled', "id" => "submitButton"])?>
                        <?= $this->Form->end() ?>
                        <script>
                            function check() {
                                const s = document.getElementById("session_start").value;
                                const e = document.getElementById("session_end").value;
                                const st = new Date().setHours(hr(s), min(s), 0);
                                let et = new Date(st);

                                et = et.setHours(hr(e), min(e), 0);

                                if (st > et) {
                                    alert("Starting time is greater than ending time, please try to book again!");
                                    return false;
                                }
                                if (st == et) {
                                    alert("Starting time is the same as ending time, please try to book again!");
                                    return false;
                                }

                                return true;
                            }

                            function hr(d) {
                                var h = parseInt(d.split(':')[0]);
                                if (d.split(':')[1].split(' ')[1] === "PM") {
                                    h = h + 12;
                                }
                                return h;
                            }

                            function min(d) {
                                return parseInt(d.split(':')[1].split(' ')[0]);
                            }
                        </script>
                    </div>
                </div>
            </div>
    </section>
</main>
</body>

</html>

