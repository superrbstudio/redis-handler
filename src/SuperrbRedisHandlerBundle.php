<?php

namespace Superrb\RedisHandlerBundle;

use Superrb\RedisHandlerBundle\DependencyInjection\SuperrbRedisHandlerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MemcachedHandlerBundle
 * @package Superrb\MemcachedHandlerBundle
 */
class SuperrbRedisHandlerBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new SuperrbMemcachedHandlerExtension());
    }
}
