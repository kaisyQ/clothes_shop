<?php declare(strict_types=1);

namespace Jason\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class CoreBundleConfiguration implements ConfigurationInterface
{
    private const CONFIG_NAME = "jason_corebunle";
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
