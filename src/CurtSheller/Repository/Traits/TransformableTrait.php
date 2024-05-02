<?php

namespace CurtSheller\Repository\Traits;

/**
 * Class TransformableTrait
 * @package CurtSheller\Repository\Traits
 * @author Anderson Andrade <contato@andersonandra.de>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
