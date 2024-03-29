<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property \Cake\I18n\FrozenDate|null $DateofBirth
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $street
 * @property string|null $suburb
 * @property string|null $post_code
 * @property string|null $state
 * @property string|null $password
 * @property string|null $nonce
 * @property \Cake\I18n\FrozenTime|null $nonce_expiry
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
     * @var array<string, bool>
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'DateofBirth' => true,
        'email' => true,
        'phone' => true,
        'street' => true,
        'suburb' => true,
        'post_code' => true,
        'state' => true,
        'password' => true,
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

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}

