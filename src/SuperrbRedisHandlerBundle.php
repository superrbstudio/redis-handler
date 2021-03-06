<?php

namespace Superrb\RedisHandlerBundle;

use Superrb\RedisHandlerBundle\DependencyInjection\SuperrbRedisHandlerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SuperrbRedisHandlerBundle
 * @package Superrb\RedisHandlerBundle
 */
class SuperrbRedisHandlerBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new SuperrbRedisHandlerExtension());
    }
}
