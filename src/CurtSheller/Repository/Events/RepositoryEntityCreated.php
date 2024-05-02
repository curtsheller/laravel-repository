<?php
namespace CurtSheller\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package CurtSheller\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
