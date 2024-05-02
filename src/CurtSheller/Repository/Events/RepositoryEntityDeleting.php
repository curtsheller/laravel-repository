<?php
namespace CurtSheller\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package CurtSheller\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityDeleting extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleting";
}
