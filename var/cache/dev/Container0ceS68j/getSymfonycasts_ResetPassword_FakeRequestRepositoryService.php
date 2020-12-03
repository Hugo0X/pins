<?php

namespace Container0ceS68j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_ResetPassword_FakeRequestRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'symfonycasts.reset_password.fake_request_repository' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Persistence\Fake\FakeResetPasswordInternalRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'reset-password-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ResetPasswordRequestRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'reset-password-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Fake'.\DIRECTORY_SEPARATOR.'FakeResetPasswordInternalRepository.php';

        return $container->privates['symfonycasts.reset_password.fake_request_repository'] = new \SymfonyCasts\Bundle\ResetPassword\Persistence\Fake\FakeResetPasswordInternalRepository();
    }
}
