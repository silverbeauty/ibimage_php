<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventSlider Entity
 *
 * @property int $event_id
 * @property int $advertisement_id
 * @property bool $is_active
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Advertisement $advertisement
 */
class EventSlider extends Entity
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
        'is_active' => true,
        'event' => true,
        'advertisement' => true
    ];
}
