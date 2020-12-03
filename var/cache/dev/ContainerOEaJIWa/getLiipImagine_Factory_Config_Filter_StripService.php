<?php

namespace ContainerOEaJIWa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Factory_Config_Filter_StripService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.factory.config.filter.strip' shared service.
     *
     * @return \Liip\ImagineBundle\Factory\Config\Filter\StripFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'StripFactory.php';

        return $container->privates['liip_imagine.factory.config.filter.strip'] = new \Liip\ImagineBundle\Factory\Config\Filter\StripFactory();
    }
}
