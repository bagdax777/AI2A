<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK9Mxpc1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK9Mxpc1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerK9Mxpc1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerK9Mxpc1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerK9Mxpc1\App_KernelDevDebugContainer([
    'container.build_hash' => 'K9Mxpc1',
    'container.build_id' => 'ca3c2beb',
    'container.build_time' => 1702425079,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK9Mxpc1');
