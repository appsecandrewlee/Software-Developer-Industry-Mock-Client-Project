<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Appointment> $appointments
 */
?>
<div class="appointments index content">
    <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Appointments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?= $this->Number->format($appointment->id) ?></td>
                    <td><?= h($appointment->title) ?></td>
                    <td><?= h($appointment->description) ?></td>
                    <td><?= $appointment->cost === null ? '' : $this->Number->format($appointment->cost) ?></td>
                    <td><?= $appointment->has('service') ? $this->Html->link($appointment->service->service_id, ['controller' => 'Services', 'action' => 'view', $appointment->service->service_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
