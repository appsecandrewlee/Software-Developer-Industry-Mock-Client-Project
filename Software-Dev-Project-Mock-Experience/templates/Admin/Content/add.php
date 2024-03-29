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
            <?= $this->Form->create($content,['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Content') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('image',['type'=>'file',"onchange"=>"image_checker(event)"]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('cost');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    function image_checker(event) {
        let file_is_valid = true;

        let file = event.target.files[0];

        // Test file size
        let size = file.size;
        if (size > 2000000) {
            file_is_valid = false;
            event.target.setCustomValidity("File is too big! The size must be smaller than 2MB");
        }
        let filetype = file.type;
        if (!(['image/jpeg', 'image/png', 'image/gif'].includes(filetype))) {
            file_is_valid = false;
            event.target.setCustomValidity("File must be JPEG, PNG or GIF formatted images");
        }

        if (file_is_valid) {
            event.target.setCustomValidity("");
        }
    }
</script>


