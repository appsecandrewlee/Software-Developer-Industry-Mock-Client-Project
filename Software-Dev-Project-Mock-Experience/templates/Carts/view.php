<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cart'), ['action' => 'edit', $cart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cart'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carts view content">
            <h3><?= h($cart->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $cart->has('course') ? $this->Html->link($cart->course->name, ['controller' => 'Courses', 'action' => 'view', $cart->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $cart->quantity === null ? '' : $this->Number->format($cart->quantity) ?></td>
                </tr>
            </table>
        </div>

                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($cart->cost) ?></td>
                </tr>
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
    </div>

