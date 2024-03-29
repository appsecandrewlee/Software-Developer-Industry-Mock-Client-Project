<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenDate $start
 * @property \Cake\I18n\Time $start_time
 * @property \Cake\I18n\FrozenDate $end
 * @property \Cake\I18n\Time $end_time
 */
class Event extends Entity
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
        'title' => true,
        'start' => true,
        'start_time' => true,
        'end' => true,
        'end_time' => true,
    ];
}
