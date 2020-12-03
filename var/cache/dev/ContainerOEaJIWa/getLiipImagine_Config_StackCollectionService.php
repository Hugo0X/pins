<?php

namespace ContainerOEaJIWa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Config_StackCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'liip_imagine.config.stack_collection' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'StackCollection.php';

        return $container->services['liip_imagine.config.stack_collection'] = new \Liip\ImagineBundle\Config\StackCollection(($container->privates['liip_imagine.config.stack_builder'] ?? $container->load('getLiipImagine_Config_StackBuilderService')), $container->parameters['liip_imagine.filter_sets']);
    }
}
