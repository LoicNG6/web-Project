<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWaXzoo1\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWaXzoo1/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWaXzoo1.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWaXzoo1\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWaXzoo1\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WaXzoo1',
    'container.build_id' => '0e236ea5',
    'container.build_time' => 1612310380,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWaXzoo1');
