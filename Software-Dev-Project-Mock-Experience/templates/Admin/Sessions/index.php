<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Bookings List</title>
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
                    $currentPage = "Bookings";
                    include 'templates/admin_navbar.php' ?>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-light rounded py-5">
        <div class="text-center text-black">
            <h1 class="display-4 fw-bolder">
                Welcome,
                <?= $this->Identity->get("first_name") . " " . $this->Identity->get("last_name") ?>
            </h1>
        </div>
    </header>

    <?php
    /**
     * @var \App\View\AppView $this
     * @var iterable<\App\Model\Entity\Session> $sessions
     */
    ?>


    <div id="layoutSidenav_content">
        <main>
            <div class="container px-8">
                <div class="row justify-content-center">
                    <div class="card mb-4">
                        <div class="card-header" style="text-align: center;">
                            <i class="fas fa-table me-1"></i>
                            Bookings
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
<!--                                <th>--><?php //= $this->Paginator->sort('session_id', "Session ID") ?><!--</th>-->
                                <th><?= $this->Paginator->sort('date') ?></th>
                                <th><?= $this->Paginator->sort('start') ?></th>
                                <th><?= $this->Paginator->sort('notes') ?></th>
                                <th><?= $this->Paginator->sort('service_name') ?></th>
                                <th><?= $this->Paginator->sort('first_name') ?></th>
                                <th><?= $this->Paginator->sort('last_name') ?></th>
                                <th><?= $this->Paginator->sort('email') ?></th>
                                <th><?= $this->Paginator->sort('phone_number') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <?php foreach ($sessions as $session): ?>
                                <tr>
<!--                                    <td>--><?php //= $this->Number->format($session->session_id) ?><!--</td>-->
                                    <td><?= h($session->session_date->format("d/m/Y")) ?></td>
                                    <td><?= h($session->session_start) ?></td>
                                    <td><?= h($session->session_notes) ?></td>
                                    <td><?= h($session->service_name) ?></td>
                                    <td><?= h($session->customer_first_name) ?></td>
                                    <td><?= h($session->customer_last_name) ?></td>
                                    <td><?= h($session->customer_email) ?></td>
                                    <td><?= h($session->customer_phone_number) ?></td>
<!--                                    <td>--><?php //= $session->has('service_id') ? $this->Html->link($session->service->service_id, ['controller' => 'Services', 'action' => 'view', $session->service->service_id]) : '' ?><!--</td>-->
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $session->session_id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->session_id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->session_id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->session_id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
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
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Holistic Healings 2023</div></div>
            </div>
        </div>
    </footer>
</body>
</html>

