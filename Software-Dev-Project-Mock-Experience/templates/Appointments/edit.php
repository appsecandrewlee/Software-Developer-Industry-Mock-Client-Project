<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $services
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appointment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Appointments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments form content">
            <?= $this->Form->create($appointment) ?>
            <fieldset>
                <legend><?= __('Edit Appointment') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('service_id', ['options' => $services]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
