<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $place
 * @property \Cake\I18n\FrozenTime $started
 * @property \Cake\I18n\FrozenTime $ended
 * @property bool $is_approved
 * @property int $parent
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EventMeta[] $event_metas
 * @property \App\Model\Entity\EventShare[] $event_shares
 * @property \App\Model\Entity\PhotoShare[] $photo_shares
 * @property \App\Model\Entity\Photo[] $photos
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'place' => true,
        'started' => true,
        'ended' => true,
        'is_approved' => true,
        'parent' => true,
        'user_id' => true,
        'user' => true,
        'event_metas' => true,
        'event_shares' => true,
        'photo_shares' => true,
        'photos' => true
    ];
}
