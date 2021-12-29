<?php

namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 */
class Configuration implements ConfigurationInterface
{
    /** @param bool $debug Whether to use the debug mode */
    public function __construct(bool $debug)
    {
    }

    public function getConfigTreeBuilder(): TreeBuilder
    {
        return new TreeBuilder('doctrine');
    }
}
