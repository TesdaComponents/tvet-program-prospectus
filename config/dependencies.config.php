<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use Tesda\Factory\Repository\TrainingProgramRepositoryFactory;
use Tesda\Repository\Catalog\TrainingProgramRepository;

return [
    'invokables'            => [
        
    ],
    'factories'             => [
        TrainingProgramRepository::class => TrainingProgramRepositoryFactory::class
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
