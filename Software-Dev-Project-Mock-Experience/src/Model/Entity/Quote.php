<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quote Entity
 *
 * @property int $id
 * @property string $cost
 * @property \Cake\I18n\FrozenTime|null $dates
 * @property int $cust_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Session[] $sessions
 */
class Quote extends Entity
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
        'cost' => true,
        'dates' => true,
        'cust_id' => true,
        'customer' => true,
        'sessions' => true,
    ];
}
