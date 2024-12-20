<?php

declare(strict_types=1);

namespace Jason\AdminBundle;

use Jason\AdminBundle\DependencyInjection\AdminBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AdminBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new AdminBundleExtension();
    }
}
