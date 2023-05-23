<?php

namespace Container9uXdL2X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationPush_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_push.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.translation_push.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:push', [], 'Push translations to a given provider.', false, #[\Closure(name: 'console.command.translation_push', class: 'Symfony\\Component\\Translation\\Command\\TranslationPushCommand')] function () use ($container): \Symfony\Component\Translation\Command\TranslationPushCommand {
            return ($container->privates['console.command.translation_push'] ?? $container->load('getConsole_Command_TranslationPushService'));
        });
    }
}
