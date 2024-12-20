<?php

declare(strict_types=1);

namespace Src\Jason\CoreBundle\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Src\Jason\CoreBundle\Domain\Abstraction\BaseEntity;
use Src\Jason\CoreBundle\Domain\Abstraction\IRepository;

/**
 * Class with base repository functionality.
 */
abstract class AbstractEntityRepository extends ServiceEntityRepository implements IRepository
{
    public function create(BaseEntity $entity): void
    {
        $em = $this->getEntityManager();

        $em->persist($entity);
        $em->flush();
    }

    public function remove(BaseEntity $entity): void
    {
        $em = $this->getEntityManager();

        $em->remove($entity);
        $em->flush();
    }
}
