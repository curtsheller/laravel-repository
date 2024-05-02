<?php
namespace CurtSheller\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package CurtSheller\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
