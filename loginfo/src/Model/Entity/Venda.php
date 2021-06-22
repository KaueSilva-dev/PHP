<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property string $Nome do Iten
 * @property int $Quantidade
 * @property string $Vendedor
 * @property \Cake\I18n\FrozenDate $Data da Venda
 */
class Venda extends Entity
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
        'Nome do Iten' => true,
        'Quantidade' => true,
        'Vendedor' => true,
        'Data da Venda' => true,
    ];
}
