<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MetaKey $metaKey
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Meta Key'), ['action' => 'edit', $metaKey->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Meta Key'), ['action' => 'delete', $metaKey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $metaKey->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meta Keys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meta Key'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="metaKeys view large-9 medium-8 columns content">
    <h3><?= h($metaKey->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meta Key') ?></th>
            <td><?= h($metaKey->meta_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($metaKey->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($metaKey->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $metaKey->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
