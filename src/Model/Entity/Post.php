<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $PostID
 * @property string $PostTitle
 * @property \Cake\I18n\FrozenTime $PostDate
 * @property string $PostAuthor
 * @property string $PostContent
 * @property string $PostDesc
 * @property string $PostThread
 * @property string $PostSlug
 */
class Post extends Entity
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
        'PostTitle' => true,
        'PostDate' => true,
        'PostAuthor' => true,
        'PostContent' => true,
        'PostDesc' => true,
        'PostThread' => true,
        'PostSlug' => true
    ];
}
