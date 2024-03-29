<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Content'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="content form content">
            <?= $this->Form->create($content) ?>
            <fieldset>
                <legend><?= __('Add Content') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('image');
                    echo $this->Form->control('description');
                    echo $this->Form->control('cost');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
