<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNQhm0Hq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNQhm0Hq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNQhm0Hq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNQhm0Hq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNQhm0Hq\App_KernelDevDebugContainer([
    'container.build_hash' => 'NQhm0Hq',
    'container.build_id' => '4d802b99',
    'container.build_time' => 1683131687,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNQhm0Hq');
