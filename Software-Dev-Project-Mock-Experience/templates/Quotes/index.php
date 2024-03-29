<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quote> $quotes
 */
?>
<div class="quotes index content">
    <?= $this->Html->link(__('New Quote'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quotes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('dates') ?></th>
                    <th><?= $this->Paginator->sort('cust_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quotes as $quote): ?>
                <tr>
                    <td><?= $this->Number->format($quote->id) ?></td>
                    <td><?= $this->Number->format($quote->cost) ?></td>
                    <td><?= h($quote->dates) ?></td>
                    <td><?= $this->Number->format($quote->cust_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quote->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?>
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
