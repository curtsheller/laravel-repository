<?php namespace CurtSheller\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use CurtSheller\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package CurtSheller\Repository\Transformer
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
