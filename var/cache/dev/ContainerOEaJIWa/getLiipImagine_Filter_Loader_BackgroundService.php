<?php

namespace ContainerOEaJIWa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_BackgroundService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.filter.loader.background' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Imagine'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'BackgroundFilterLoader.php';

        return $container->privates['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(($container->privates['liip_imagine.gd'] ?? $container->load('getLiipImagine_GdService')));
    }
}
