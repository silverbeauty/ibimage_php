<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $photoSize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Photo Sizes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="photoSizes form large-9 medium-8 columns content">
    <?= $this->Form->create($photoSize) ?>
    <fieldset>
        <legend><?= __('Add Photo Size') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('is_active');
            echo $this->Form->control('default_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
