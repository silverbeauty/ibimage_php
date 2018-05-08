<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MetaKey $metaKey
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Meta Keys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="metaKeys form large-9 medium-8 columns content">
    <?= $this->Form->create($metaKey) ?>
    <fieldset>
        <legend><?= __('Add Meta Key') ?></legend>
        <?php
            echo $this->Form->control('meta_key');
            echo $this->Form->control('description');
            echo $this->Form->control('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
