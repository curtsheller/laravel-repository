<?php
namespace CurtSheller\Repository\Contracts;

/**
 * Interface Transformable
 * @package CurtSheller\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface Transformable
{
    /**
     * @return array
     */
    public function transform();
}
