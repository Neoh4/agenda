<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLRlUkkz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLRlUkkz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLRlUkkz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLRlUkkz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLRlUkkz\App_KernelDevDebugContainer([
    'container.build_hash' => 'LRlUkkz',
    'container.build_id' => 'ad25ff8f',
    'container.build_time' => 1712231806,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLRlUkkz');