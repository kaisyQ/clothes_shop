<?php declare(strict_types=1);

namespace Jason\CoreBundle;

use Jason\CoreBundle\DependencyInjection\CoreBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;


class CoreBundle extends AbstractBundle 
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new CoreBundleExtension();
    }
}