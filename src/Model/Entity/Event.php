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
        'parent_id' => true,
        'user_id' => true,
        'team1' => true,
        'team2' => true,
        'division' => true,
        'association' => true,
        'gender' => true,
        'field_num' => true,

        'user' => true,
        'event_metas' => true,
        'event_shares' => true,
        'photo_shares' => true,
        'photos' => true
    ];

    public function _getStarted($started) {
        $started = new \DateTime($started);
        return $started->format('Y-m-d H:i');
    }

    public function _getEnded($ended) {
        $ended = new \DateTime($ended);
        return $ended->format('Y-m-d H:i');
    }
}
