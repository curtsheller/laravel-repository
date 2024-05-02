<?php
namespace CurtSheller\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package CurtSheller\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";
}
