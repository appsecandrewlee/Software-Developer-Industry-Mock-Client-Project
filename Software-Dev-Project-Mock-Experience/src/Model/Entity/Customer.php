<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $street
 * @property string $suburb
 * @property string $post_code
 * @property string $state
 * @property string|null $avatar
 * @property int $role
 * @property string|null $nonce
 * @property \Cake\I18n\FrozenTime|null $nonce_expiry
 */
class Customer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'dob' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'street' => true,
        'suburb' => true,
        'post_code' => true,
        'state' => true,
        'avatar' => true,
        'role' => true,
        'nonce' => true,
        'nonce_expiry' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
