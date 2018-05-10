<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WaterMark Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $hover_text
 * @property string $image_url
 * @property string $fb_image_url
 * @property string $tw_image_url
 * @property string $it_image_url
 * @property string $sn_image_url
 * @property string $pt_image_url
 * @property bool $is_active
 */
class WaterMark extends Entity
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
        'hover_text' => true,
        'image_url' => true,
        'fb_image_url' => true,
        'tw_image_url' => true,
        'it_image_url' => true,
        'sn_image_url' => true,
        'pt_image_url' => true,
        'is_active' => true
    ];
}
