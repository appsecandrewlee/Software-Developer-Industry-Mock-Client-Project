<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->service_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->service_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->service_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($service->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($service->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $service->cost === null ? '' : $this->Number->format($service->cost) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
