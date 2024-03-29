<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

?>
<div class="container login">
    <div class="row">
        <div class="column column-50 column-offset-25">
            <div class="users form content">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Reset Your Password') ?></legend>
                    <?= $this->Flash->render() ?>
                    <?php
                    echo $this->Form->control('password', [
                        'type' => 'password',
                        'label' => 'New Password',
                        'required' => true,
                        'autofocus' => true,
                        'value' => ''
                    ]);
                    echo $this->Form->control('password_confirm', [
                        'type' => 'password',
                        'label' => 'Repeat New Password',
                        'required' => true,
                        'value' => ''
                    ]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Reset Password')) ?>
                <?= $this->Form->end() ?>
                <hr class="hr-between-buttons">
                <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline']) ?>
            </div>
        </div>
    </div>
</div>
