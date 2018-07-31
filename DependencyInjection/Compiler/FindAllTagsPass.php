<?php

namespace Aa\Bundle\ProjectDiscoveryBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FindAllTagsPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('aa_project_discovery.registry.tag')) {
            return;
        }

        $registry = $container->getDefinition('aa_project_discovery.registry.tag');

        $tags = $container->findTags();

        $registry->addMethodCall('setTags', [$tags]);
    }
}
