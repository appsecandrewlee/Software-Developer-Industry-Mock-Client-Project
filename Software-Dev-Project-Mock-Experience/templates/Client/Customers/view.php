<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($customer->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($customer->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($customer->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($customer->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($customer->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Code') ?></th>
                    <td><?= h($customer->post_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($customer->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($customer->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateofBirth') ?></th>
                    <td><?= h($customer->DateofBirth) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
