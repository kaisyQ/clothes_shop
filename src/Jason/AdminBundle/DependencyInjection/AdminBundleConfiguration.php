<?php

declare(strict_types=1);

namespace Jason\AdminBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class AdminBundleConfiguration implements ConfigurationInterface
{
    /** @var string */
    private const CONFIG_NAME = 'jason_adminbunle';

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder($this->getConfigName());

        return $treeBuilder;
    }

    public function getConfigName(): string
    {
        return self::CONFIG_NAME;
    }
}
