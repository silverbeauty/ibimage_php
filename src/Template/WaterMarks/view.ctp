<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $waterMark
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Water Mark'), ['action' => 'edit', $waterMark->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Water Mark'), ['action' => 'delete', $waterMark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $waterMark->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Water Marks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Water Mark'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="waterMarks view large-9 medium-8 columns content">
    <h3><?= h($waterMark->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($waterMark->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($waterMark->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hover Text') ?></th>
            <td><?= h($waterMark->hover_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($waterMark->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fb Image Url') ?></th>
            <td><?= h($waterMark->fb_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tw Image Url') ?></th>
            <td><?= h($waterMark->tw_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('It Image Url') ?></th>
            <td><?= h($waterMark->it_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sn Image Url') ?></th>
            <td><?= h($waterMark->sn_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Image Url') ?></th>
            <td><?= h($waterMark->pt_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($waterMark->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $waterMark->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
