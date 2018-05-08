<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PriceGroupValue Entity
 *
 * @property int $price_group_id
 * @property int $photo_size_id
 * @property float $price
 * @property int $is_active
 *
 * @property \App\Model\Entity\PriceGroup $price_group
 * @property \App\Model\Entity\PhotoSize $photo_size
 */
class PriceGroupValue extends Entity
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
        'price' => true,
        'is_active' => true,
        'price_group_id' => true,
        'photo_size_id' => true,
        'price_group' => true,
        'photo_size' => true
    ];
}
