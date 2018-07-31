<?php

namespace Aa\Bundle\ProjectDiscoveryBundle\Discovery;

class TagRegistry
{
    /**
     * @var array
     */
    private $tags;

    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}
