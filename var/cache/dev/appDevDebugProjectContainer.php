<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4sxrlqn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4sxrlqn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4sxrlqn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4sxrlqn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container4sxrlqn\appDevDebugProjectContainer(array(
    'container.build_hash' => '4sxrlqn',
    'container.build_id' => '50bcee0d',
    'container.build_time' => 1531739881,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4sxrlqn');
