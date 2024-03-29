<?php
/**
 * @var \App\View\AppView $this
<<<<<<< HEAD
<<<<<<< HEAD
 * @var \App\Model\Entity\User $user
 */
?>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content/>
    <meta name="author" content/>
    <title>Holistic Healings</title>
    <!-- Favicon-->
    <?= $this->Html->meta("icon", "assets/favicon.ico") ?>
    <!-- Bootstrap icons-->
    <?= $this->Html->css("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") ?>
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("styles.css") ?>
</head>

<!--     Navigation-->
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
                <?= $this->Html->link("Bookings", "/sessions/add", ['class' => 'nav-link']) ?>
                <?= $this->Html->link("Purchase Courses", "/Carts", ['class' => 'nav-link']) ?>
            </ul>
        </div>
    </div>
</nav>



<div id="layoutSidenav_content">
    <div class="text-center my-4">
        <h1 class="fw-bolder">Carts</h1>
    </div>
    <main>
        <div class="container px-8">
            <div class="row justify-content-center">
                <div class="card mb-4">
                    <div class="card-header" style="text-align: center;">
                        <i class="fas fa-table me-1"></i>
                        Carts
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                            <th><?= $this->Paginator->sort('course_id') ?></th>
                            <th><?= $this->Paginator->sort('quantity') ?></th>
                            <th>Costs</th>
                            <th style="color: #371F76;"> Action </th>
                        </tr>
                        </thead>
                        <?php foreach ($carts as $cart): ?>
                            <tr>
                                <td><?= $this->Number->format($cart->id) ?></td>
                                <td><?= $cart->has('course') ? $this->Html->link($cart->course->name, ['controller' => 'Courses', 'action' => 'view', $cart->course->id]) : '' ?></td>
                                <td><?= $cart->quantity === null ? '' : $this->Number->format($cart->quantity) ?></td>
                                <td><?= $this->Number->format($cart->cost) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $cart->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cart->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mb-5"><a
                        class="btn btn-outline-dark mt-auto"<?= $this->Html->link(__('Add more'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                    </a>
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
