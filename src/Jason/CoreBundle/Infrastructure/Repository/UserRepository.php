<?php

declare(strict_types=1);

namespace Src\Jason\CoreBundle\Infrastructure\Repository;

use Doctrine\Persistence\ManagerRegistry;
use Src\Jason\CoreBundle\Domain\Entity\User;

class UserRepository extends AbstractEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
}
