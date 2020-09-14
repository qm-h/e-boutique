<?php

namespace Container7Pr3TGM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAuthenticationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserAuthenticationController' shared autowired service.
     *
     * @return \App\Controller\UserAuthenticationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\UserAuthenticationController.php';

        $container->services['App\\Controller\\UserAuthenticationController'] = $instance = new \App\Controller\UserAuthenticationController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\UserAuthenticationController', $container));

        return $instance;
    }
}
