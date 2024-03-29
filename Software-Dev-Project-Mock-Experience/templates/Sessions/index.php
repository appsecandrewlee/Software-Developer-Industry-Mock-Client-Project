<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Session> $sessions
 */
?>
<div class="sessions index content">
    <?= $this->Html->link(__('New Session'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sessions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('session_id') ?></th>
                    <th><?= $this->Paginator->sort('session_date') ?></th>
                    <th><?= $this->Paginator->sort('session_start') ?></th>
                    <th><?= $this->Paginator->sort('session_end') ?></th>
                    <th><?= $this->Paginator->sort('session_notes') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('quote_id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sessions as $session): ?>
                <tr>
                    <td><?= $this->Number->format($session->session_id) ?></td>
                    <td><?= h($session->session_date) ?></td>
                    <td><?= h($session->session_start) ?></td>
                    <td><?= h($session->session_end) ?></td>
                    <td><?= h($session->session_notes) ?></td>
                    <td><?= $session->has('employee') ? $this->Html->link($session->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $session->employee->employee_id]) : '' ?></td>
                    <td><?= $session->has('quote') ? $this->Html->link($session->quote->id, ['controller' => 'Quotes', 'action' => 'view', $session->quote->id]) : '' ?></td>
                    <td><?= $session->has('service') ? $this->Html->link($session->service->service_id, ['controller' => 'Services', 'action' => 'view', $session->service->service_id]) : '' ?></td>
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
