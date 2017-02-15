<?php
/**
 * This file is part of the WrikeBundle package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\Bundle\WrikeBundle\Tests\DependencyInjection\Fixtures;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * YamlZibiosWrikeExtensionTest
 */
class YamlZibiosWrikeExtensionTest extends FixtureZibiosWrikeExtensionTestCase
{
    /**
     * @param ContainerBuilder $container
     * @param string $fixture
     */
    protected function loadFixture(ContainerBuilder $container, $fixture)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/yml'));
        $loader->load($fixture.'.yml');
    }
}