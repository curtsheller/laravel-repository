<?php
namespace CurtSheller\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package CurtSheller\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityDeleted extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleted";
}
