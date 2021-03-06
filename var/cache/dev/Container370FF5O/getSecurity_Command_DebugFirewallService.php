<?php

namespace Container370FF5O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.ZESlRdx'] ?? $container->get_ServiceLocator_ZESlRdxService()), ($container->privates['.service_locator.v61N7Rr'] ?? $container->load('get_ServiceLocator_V61N7RrService')), ['registration' => [], 'login' => [0 => ($container->privates['security.authenticator.json_login.login'] ?? $container->load('getSecurity_Authenticator_JsonLogin_LoginService'))], 'api' => [0 => ($container->privates['security.authenticator.jwt.api'] ?? $container->load('getSecurity_Authenticator_Jwt_ApiService'))], 'main' => []], true);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
