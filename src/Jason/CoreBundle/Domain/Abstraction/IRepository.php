<?php

declare(strict_types=1);

namespace Src\Jason\CoreBundle\Domain\Abstraction;

/**
 * The base contract for every repository.
 */
interface IRepository
{
    public function create(BaseEntity $entity): void;

    public function remove(BaseEntity $entity): void;
}
