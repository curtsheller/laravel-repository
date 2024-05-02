<?php

namespace CurtSheller\Repository\Events;

use Illuminate\Database\Eloquent\Model;
use CurtSheller\Repository\Contracts\RepositoryInterface;

/**
 * Class RepositoryEntityCreated
 *
 * @package CurtSheller\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "creating";

    public function __construct(RepositoryInterface $repository, array $model)
    {
        parent::__construct($repository);
        $this->model = $model;
    }
}
