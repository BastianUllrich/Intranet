<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBcvxyc3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBcvxyc3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBcvxyc3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBcvxyc3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBcvxyc3\appDevDebugProjectContainer([
    'container.build_hash' => 'Bcvxyc3',
    'container.build_id' => 'a3e3ed8a',
    'container.build_time' => 1574083082,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBcvxyc3');
