<?php

namespace ContainerML1re1N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CacheClearService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CacheClearCommand.php';

        $container->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($container->services['cache_clearer'] ?? $container->load('getCacheClearerService')), ($container->services['filesystem'] ?? ($container->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }
}
