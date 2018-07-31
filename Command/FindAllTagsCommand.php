<?php

namespace Aa\Bundle\ProjectDiscoveryBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FindAllTagsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('aa:project:tags');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $tags = $this->getContainer()->get('aa_project_discovery.registry.tag')->getTags();

        sort($tags);

        foreach ($tags as $tag) {
            $output->writeln($tag);
        }
    }

}
