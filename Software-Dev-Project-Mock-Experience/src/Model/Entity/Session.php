<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property int $session_id
 * @property \Cake\I18n\FrozenDate $session_date
 * @property \Cake\I18n\Time $session_start
 * @property string|null $session_notes
 * @property string $customer_first_name
 * @property string $customer_last_name
 * @property string $customer_email
 * @property string $customer_phone_number
 * @property string $service_name
 * @property int|null $employee_id
 * @property int|null $quote_id
 * @property int|null $service_id
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Quote $quote
 * @property \App\Model\Entity\Service $service
 */
class Session extends Entity
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
        'session_date' => true,
        'session_start' => true,
        'session_notes' => true,
        'customer_first_name' => true,
        'customer_last_name' => true,
        'customer_email' => true,
        'customer_phone_number' => true,
        'service_name' => true,
        'employee_id' => true,
        'quote_id' => true,
        'service_id' => true,
        'employee' => true,
        'quote' => true,
        'service' => true,
    ];
}
