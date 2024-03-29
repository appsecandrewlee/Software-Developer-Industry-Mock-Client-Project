<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookings view content">
            <h3><?= h($booking->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($booking->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($booking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start') ?></th>
                    <td><?= h($booking->start) ?></td>
                </tr>
                <tr>
                    <th><?= __('End') ?></th>
                    <td><?= h($booking->end) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
