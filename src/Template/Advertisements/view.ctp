<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $advertisement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advertisement'), ['action' => 'edit', $advertisement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advertisement'), ['action' => 'delete', $advertisement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Advertisements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="advertisements view large-9 medium-8 columns content">
    <h3><?= h($advertisement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($advertisement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($advertisement->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($advertisement->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ads Url') ?></th>
            <td><?= h($advertisement->ads_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text1') ?></th>
            <td><?= h($advertisement->text1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ads Type') ?></th>
            <td><?= h($advertisement->ads_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($advertisement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $advertisement->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
