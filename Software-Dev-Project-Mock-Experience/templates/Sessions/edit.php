<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
 * @var string[]|\Cake\Collection\CollectionInterface $employees
 * @var string[]|\Cake\Collection\CollectionInterface $quotes
 * @var string[]|\Cake\Collection\CollectionInterface $services
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $session->session_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $session->session_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sessions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sessions form content">
            <?= $this->Form->create($session) ?>
            <fieldset>
                <legend><?= __('Edit Session') ?></legend>
                <?php
                    echo $this->Form->control('session_date');
                    echo $this->Form->control('session_start');
                    echo $this->Form->control('session_end');
                    echo $this->Form->control('session_notes');
                    echo $this->Form->control('employee_id', ['options' => $employees, 'empty' => true]);
                    echo $this->Form->control('quote_id', ['options' => $quotes, 'empty' => true]);
                    echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
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
