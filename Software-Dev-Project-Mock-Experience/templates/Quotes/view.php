<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quote $quote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quotes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quotes view content">
            <h3><?= h($quote->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($quote->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cust Id') ?></th>
                    <td><?= $this->Number->format($quote->cust_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dates') ?></th>
                    <td><?= h($quote->dates) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
