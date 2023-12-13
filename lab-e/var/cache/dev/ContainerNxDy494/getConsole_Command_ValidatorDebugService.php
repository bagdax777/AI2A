<?php

namespace ContainerNxDy494;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_ValidatorDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.validator_debug' shared service.
     *
     * @return \Symfony\Component\Validator\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.validator_debug'] = $instance = new \Symfony\Component\Validator\Command\DebugCommand(($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)));

        $instance->setName('debug:validator');
        $instance->setDescription('Display validation constraints for classes');

        return $instance;
    }
}
