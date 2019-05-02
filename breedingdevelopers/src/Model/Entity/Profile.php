<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string $uniquehandle
 * @property int $position
 * @property string $current_institution
 * @property string $website
 * @property string $region
 * @property string $skills
 * @property string $about
 * @property string $link1
 * @property string $link2
 * @property string $link3
 * @property string $link4
 * @property string $link5
 *
 * @property \App\Model\Entity\User[] $users
 */
class Profile extends Entity
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
        'uniquehandle' => true,
        'position' => true,
        'current_institution' => true,
        'website' => true,
        'region' => true,
        'skills' => true,
        'about' => true,
        'link1' => true,
        'link2' => true,
        'link3' => true,
        'link4' => true,
        'link5' => true,
        'users' => true
    ];
}
