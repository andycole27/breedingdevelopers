<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property int $application_id
 * @property int $user_id
 * @property string $name
 * @property string $filename
 * @property string $description
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Application $application
 * @property \App\Model\Entity\User $user
 */
class Document extends Entity
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
        'application_id' => true,
        'user_id' => true,
        'name' => true,
        'filename' => true,
        'description' => true,
        'modified' => true,
        'created' => true,
        'application' => true,
        'user' => true
    ];
}
