<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $role
 * @property bool $is_active
 * @property string $telephone
 *
 * @property \App\Model\Entity\EventShare[] $event_shares
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Photo[] $photos
 */
class User extends Entity
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
        'full_name' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'role' => true,
        'is_active' => true,
        'telephone' => true,
        'event_shares' => true,
        'events' => true,
        'photos' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
