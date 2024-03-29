<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appointments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments view content">
            <h3><?= h($appointment->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($appointment->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($appointment->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $appointment->has('service') ? $this->Html->link($appointment->service->service_id, ['controller' => 'Services', 'action' => 'view', $appointment->service->service_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appointment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $appointment->cost === null ? '' : $this->Number->format($appointment->cost) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
