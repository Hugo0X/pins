<?php

namespace ContainerML1re1N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_EmLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.em_loader' shared service.
     *
     * @return \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'EntityManager'.\DIRECTORY_SEPARATOR.'EntityManagerLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'EntityManager'.\DIRECTORY_SEPARATOR.'ExistingEntityManager.php';

        return $container->privates['doctrine.migrations.em_loader'] = new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
