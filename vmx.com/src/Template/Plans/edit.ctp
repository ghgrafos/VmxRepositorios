<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plan $plan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $plan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plans form large-9 medium-8 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= __('Edit Plan') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('value');
            echo $this->Form->control('description');
            echo $this->Form->control('articles');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
