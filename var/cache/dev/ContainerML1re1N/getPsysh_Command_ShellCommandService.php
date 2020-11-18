<?php

namespace ContainerML1re1N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPsysh_Command_ShellCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'psysh.command.shell_command' shared service.
     *
     * @return \Fidry\PsyshBundle\Command\PsyshCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'psysh-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'PsyshCommand.php';

        $container->services['psysh.command.shell_command'] = $instance = new \Fidry\PsyshBundle\Command\PsyshCommand(($container->privates['psysh.shell'] ?? $container->load('getPsysh_ShellService')));

        $instance->setName('psysh');

        return $instance;
    }
}
