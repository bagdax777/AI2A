<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBwcFlM5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBwcFlM5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBwcFlM5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBwcFlM5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBwcFlM5\App_KernelDevDebugContainer([
    'container.build_hash' => 'BwcFlM5',
    'container.build_id' => 'e9841022',
    'container.build_time' => 1702477535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBwcFlM5');