<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Metas'), ['controller' => 'EventMetas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Meta'), ['controller' => 'EventMetas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Shares'), ['controller' => 'EventShares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Share'), ['controller' => 'EventShares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photo Shares'), ['controller' => 'PhotoShares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo Share'), ['controller' => 'PhotoShares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($event->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($event->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent') ?></th>
            <td><?= $this->Number->format($event->parent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Started') ?></th>
            <td><?= h($event->started) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ended') ?></th>
            <td><?= h($event->ended) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Approved') ?></th>
            <td><?= $event->is_approved ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Event Metas') ?></h4>
        <?php if (!empty($event->event_metas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Meta Key') ?></th>
                <th scope="col"><?= __('Meta Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->event_metas as $eventMetas): ?>
            <tr>
                <td><?= h($eventMetas->id) ?></td>
                <td><?= h($eventMetas->event_id) ?></td>
                <td><?= h($eventMetas->meta_key) ?></td>
                <td><?= h($eventMetas->meta_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventMetas', 'action' => 'view', $eventMetas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventMetas', 'action' => 'edit', $eventMetas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventMetas', 'action' => 'delete', $eventMetas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventMetas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Event Shares') ?></h4>
        <?php if (!empty($event->event_shares)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->event_shares as $eventShares): ?>
            <tr>
                <td><?= h($eventShares->id) ?></td>
                <td><?= h($eventShares->event_id) ?></td>
                <td><?= h($eventShares->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventShares', 'action' => 'view', $eventShares->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventShares', 'action' => 'edit', $eventShares->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventShares', 'action' => 'delete', $eventShares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventShares->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Photo Shares') ?></h4>
        <?php if (!empty($event->photo_shares)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Share Type') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Emails') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Users') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Photo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->photo_shares as $photoShares): ?>
            <tr>
                <td><?= h($photoShares->id) ?></td>
                <td><?= h($photoShares->share_type) ?></td>
                <td><?= h($photoShares->password) ?></td>
                <td><?= h($photoShares->emails) ?></td>
                <td><?= h($photoShares->link) ?></td>
                <td><?= h($photoShares->users) ?></td>
                <td><?= h($photoShares->event_id) ?></td>
                <td><?= h($photoShares->photo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PhotoShares', 'action' => 'view', $photoShares->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PhotoShares', 'action' => 'edit', $photoShares->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhotoShares', 'action' => 'delete', $photoShares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photoShares->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Photos') ?></h4>
        <?php if (!empty($event->photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Thumbnail Path') ?></th>
                <th scope="col"><?= __('Preview Path') ?></th>
                <th scope="col"><?= __('Source Path') ?></th>
                <th scope="col"><?= __('Tags') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Event Place') ?></th>
                <th scope="col"><?= __('Photo Created') ?></th>
                <th scope="col"><?= __('Event Name') ?></th>
                <th scope="col"><?= __('Event Started') ?></th>
                <th scope="col"><?= __('Event Ended') ?></th>
                <th scope="col"><?= __('Event Division') ?></th>
                <th scope="col"><?= __('Event Gender') ?></th>
                <th scope="col"><?= __('Event Fieldname') ?></th>
                <th scope="col"><?= __('Event Fieldnumber') ?></th>
                <th scope="col"><?= __('Photograper Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->photos as $photos): ?>
            <tr>
                <td><?= h($photos->id) ?></td>
                <td><?= h($photos->name) ?></td>
                <td><?= h($photos->thumbnail_path) ?></td>
                <td><?= h($photos->preview_path) ?></td>
                <td><?= h($photos->source_path) ?></td>
                <td><?= h($photos->tags) ?></td>
                <td><?= h($photos->event_id) ?></td>
                <td><?= h($photos->user_id) ?></td>
                <td><?= h($photos->category_id) ?></td>
                <td><?= h($photos->event_place) ?></td>
                <td><?= h($photos->photo_created) ?></td>
                <td><?= h($photos->event_name) ?></td>
                <td><?= h($photos->event_started) ?></td>
                <td><?= h($photos->event_ended) ?></td>
                <td><?= h($photos->event_division) ?></td>
                <td><?= h($photos->event_gender) ?></td>
                <td><?= h($photos->event_fieldname) ?></td>
                <td><?= h($photos->event_fieldnumber) ?></td>
                <td><?= h($photos->photograper_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
