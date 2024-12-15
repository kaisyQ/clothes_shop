<?php

declare(strict_types=1);

namespace Src\Jason\CoreBundle\Application\Factory;

use Src\Jason\CoreBundle\Application\Model\IModel;
use Src\Jason\CoreBundle\Domain\Abstraction\BaseEntity;

abstract class AbstractModelFactory
{
    abstract public static function fromEntity(BaseEntity $entity): IModel;
}
