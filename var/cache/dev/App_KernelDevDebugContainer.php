<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSSb7c5o\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSSb7c5o/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSSb7c5o.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSSb7c5o\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSSb7c5o\App_KernelDevDebugContainer([
    'container.build_hash' => 'SSb7c5o',
    'container.build_id' => '73addd67',
    'container.build_time' => 1613054632,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSSb7c5o');
