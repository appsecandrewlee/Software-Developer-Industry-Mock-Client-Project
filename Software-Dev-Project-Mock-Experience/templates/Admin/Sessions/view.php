
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
 */
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
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

<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Booking Details</h1>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->session_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->session_id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->session_id), 'class' => 'side-nav-item']) ?>
<!--            --><?php //= $this->Html->link(__('List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
<!--            --><?php //= $this->Html->link(__('New Session'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sessions view content">
            <table>
<!--                <tr>-->
<!--                    <th>--><?php //= __('Session ID') ?><!--</th>-->
<!--                    <td>--><?php //= $this->Number->format($session->session_id) ?><!--</td>-->
<!--                </tr>-->
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= $session->session_date->format('d/m/Y') ?></td>
                </tr>
                <tr>
                    <th><?= __('Start') ?></th>
                    <td><?= h($session->session_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notes') ?></th>
                    <td><?= h($session->session_notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($session->customer_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($session->customer_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($session->customer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($session->customer_phone_number) ?></td>
                </tr>
<!--                <tr>-->
<!--                    <th>--><?php //= __('Employee') ?><!--</th>-->
<!--                    <td>--><?php //= $session->has('employee') ? $this->Html->link($session->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $session->employee->employee_id]) : '' ?><!--</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th>--><?php //= __('Quote') ?><!--</th>-->
<!--                    <td>--><?php //= $session->has('quote') ? $this->Html->link($session->quote->id, ['controller' => 'Quotes', 'action' => 'view', $session->quote->id]) : '' ?><!--</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th>--><?php //= __('Service') ?><!--</th>-->
<!--                    <td>--><?php //= $session->has('service') ? $this->Html->link($session->service->service_id, ['controller' => 'Services', 'action' => 'view', $session->service->service_id]) : '' ?><!--</td>-->
<!--                </tr>-->

            </table>
        </div>
    </div>
</div>
</section>
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
        </div>
    </div>
</footer>
