<?php

namespace Aa\Bundle\ProjectDiscoveryBundle;

use Aa\Bundle\ProjectDiscoveryBundle\DependencyInjection\Compiler\FindAllTagsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AaProjectDiscoveryBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $container
            ->addCompilerPass(new FindAllTagsPass());
    }
}
