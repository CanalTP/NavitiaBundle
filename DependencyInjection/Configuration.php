<?php

namespace CanalTP\NavitiaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('canal_tp_navitia');

        $rootNode
        ->children()
            ->arrayNode('configuration')
                ->info('Navitia configuration')
                ->children()
                    ->scalarNode('url')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                    ->scalarNode('format')
                        ->info('This value accepts: json or object.')
                        ->defaultValue('object')
                    ->end()
                    ->scalarNode('token')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
