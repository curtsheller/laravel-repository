<?php
namespace CurtSheller\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package CurtSheller\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository);
}
