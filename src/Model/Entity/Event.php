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
 * @property int $parent_id
 * @property int $user_id
 * @property bool $is_share
 * @property int $price_group_id
 * @property int $banner_top_left
 * @property int $banner_top_center
 * @property int $banner_top_right
 * @property int $banner_bottom_left
 * @property int $banner_bottom_center
 * @property int $banner_bottom_right
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
        'is_share' => true,
        'price_group_id' => true,
        'banner_top_left' => true,
        'banner_top_center' => true,
        'banner_top_right' => true,
        'banner_bottom_left' => true,
        'banner_bottom_center' => true,
        'banner_bottom_right' => true,
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
