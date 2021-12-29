<?php

namespace Doctrine\Bundle\DoctrineBundle\Tests\DependencyInjection;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Configuration;
use Doctrine\Common\Proxy\AbstractProxyFactory;
use PHPUnit\Framework\TestCase;
use function class_exists;

class ConfigurationTest extends TestCase
{
    /**
     * Whether or not this test should preserve the global state when
     * running in a separate PHP process.
     *
     * PHPUnit hack to avoid currently loaded classes to leak to
     * testGetConfigTreeBuilderDoNotUseDoctrineCommon that is run in separate process.
     *
     * @var bool
     */
    protected $preserveGlobalState = false;

    /** @runInSeparateProcess */
    public function testGetConfigTreeBuilderDoNotUseDoctrineCommon(): void
    {
        $configuration = new Configuration(true);
        $configuration->getConfigTreeBuilder();
        class_exists(AbstractProxyFactory::class, false);
    }
}
