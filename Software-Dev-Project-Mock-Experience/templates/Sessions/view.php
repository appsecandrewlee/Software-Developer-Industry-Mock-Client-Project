<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->session_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->session_id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->session_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sessions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Session'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sessions view content">
            <h3><?= h($session->session_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Session Notes') ?></th>
                    <td><?= h($session->session_notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $session->has('employee') ? $this->Html->link($session->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $session->employee->employee_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quote') ?></th>
                    <td><?= $session->has('quote') ? $this->Html->link($session->quote->id, ['controller' => 'Quotes', 'action' => 'view', $session->quote->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $session->has('service') ? $this->Html->link($session->service->service_id, ['controller' => 'Services', 'action' => 'view', $session->service->service_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Session Id') ?></th>
                    <td><?= $this->Number->format($session->session_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Session Date') ?></th>
                    <td><?= h($session->session_date->format('d/m/Y')) ?></td>
                    <td></td>
                </tr>
                <tr>
                    <th><?= __('Session Start') ?></th>
                    <td><?= h($session->session_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Session End') ?></th>
                    <td><?= h($session->session_end) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

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
