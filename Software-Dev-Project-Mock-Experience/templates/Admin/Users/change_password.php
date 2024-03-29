<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Change User Password - Users');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Change Password</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>
<body class="d-flex flex-column">
<main class="flex-shrink-0">
    <!--     Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Holistic Healings</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Change password for <?= h($user->first_name) ?> <?= h($user->last_name) ?></h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div id="contactForm">

                            <?= $this->Form->create($user) ?>
                            <fieldset>
                                <div class="row">
                                    <?php
                                    echo $this->Form->control('password', [
                                        'label' => 'New Password: ',
                                        'value' => '',  // Ensure password is not sending back to the client side
                                        'templateVars' => ['container_class' => 'column'],
                                        'class' => 'form-control'

                                    ]);
                                    // Validate password by repeating it
                                    echo $this->Form->control('password_confirm', [
                                        'type' => 'password',
                                        'value' => '',  // Ensure password is not sending back to the client side
                                        'label' => 'Retype New Password: ',
                                        'templateVars' => ['container_class' => 'column'],
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </fieldset>
                        </div>
                        <br>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg enabled', 'id' => 'submitButton']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
