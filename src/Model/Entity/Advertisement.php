<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Advertisement Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image_url
 * @property string $ads_url
 * @property string $text1
 * @property string $ads_type
 * @property bool $is_active
 */
class Advertisement extends Entity
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
        'image_url' => true,
        'ads_url' => true,
        'text1' => true,
        'ads_type' => true,
        'is_active' => true
    ];
}
