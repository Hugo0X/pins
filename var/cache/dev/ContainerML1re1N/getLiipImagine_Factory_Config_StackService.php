<?php

namespace ContainerML1re1N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Factory_Config_StackService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.factory.config.stack' shared service.
     *
     * @return \Liip\ImagineBundle\Factory\Config\StackFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackFactory.php';

        return $container->privates['liip_imagine.factory.config.stack'] = new \Liip\ImagineBundle\Factory\Config\StackFactory();
    }
}
