<?php
return [
    'service_manager' => [
        'factories' => [
            \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceResource::class => \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryResource::class => \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationResource::class => \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationResource::class => \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeResource::class => \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationResource::class => \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualResource::class => \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingResource::class => \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishResource::class => \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerResource::class => \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerResourceFactory::class,
            \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalResource::class => \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'apigility-o2o-service-trade.rest.service' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/service[/:service_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.service-category' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/service-category[/:service_category_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceCategory\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.service-specification' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/service[/:service_id]/specification[/:service_specification_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.occupation' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/occupation[/:occupation_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Occupation\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.organization-type' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/organization-type[/:organization_type_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\OrganizationType\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.organization' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/organization[/:organization_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Organization\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.individual' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/individual[/:individual_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.booking' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/booking[/:booking_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.publish' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/publish[/:publish_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Publish\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.customer' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/customer[/:customer_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller',
                    ],
                ],
            ],
            'apigility-o2o-service-trade.rest.appraisal' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/o2oservicetrade/appraisal[/:appraisal_id]',
                    'defaults' => [
                        'controller' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Appraisal\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apigility-o2o-service-trade.rest.service',
            1 => 'apigility-o2o-service-trade.rest.service-category',
            2 => 'apigility-o2o-service-trade.rest.service-specification',
            4 => 'apigility-o2o-service-trade.rest.occupation',
            5 => 'apigility-o2o-service-trade.rest.organization-type',
            6 => 'apigility-o2o-service-trade.rest.organization',
            7 => 'apigility-o2o-service-trade.rest.individual',
            8 => 'apigility-o2o-service-trade.rest.booking',
            9 => 'apigility-o2o-service-trade.rest.publish',
            10 => 'apigility-o2o-service-trade.rest.customer',
            11 => 'apigility-o2o-service-trade.rest.appraisal',
        ],
    ],
    'zf-rest' => [
        'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.service',
            'route_identifier_name' => 'service_id',
            'collection_name' => 'service',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'type',
                1 => 'service_category_id',
                2 => 'owner_organization_id',
                3 => 'provider_organization_id',
                4 => 'owner_individual_id',
                5 => 'provider_individual_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceCollection::class,
            'service_name' => 'service',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceCategory\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.service-category',
            'route_identifier_name' => 'service_category_id',
            'collection_name' => 'service_category',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'service_category_id',
            ],
            'page_size' => '25',
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryCollection::class,
            'service_name' => 'serviceCategory',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.service-specification',
            'route_identifier_name' => 'service_specification_id',
            'collection_name' => 'service_specification',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationCollection::class,
            'service_name' => 'ServiceSpecification',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Occupation\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.occupation',
            'route_identifier_name' => 'occupation_id',
            'collection_name' => 'occupation',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationCollection::class,
            'service_name' => 'Occupation',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\OrganizationType\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.organization-type',
            'route_identifier_name' => 'organization_type_id',
            'collection_name' => 'organization_type',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeCollection::class,
            'service_name' => 'OrganizationType',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Organization\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.organization',
            'route_identifier_name' => 'organization_id',
            'collection_name' => 'organization',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'service_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationCollection::class,
            'service_name' => 'Organization',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.individual',
            'route_identifier_name' => 'individual_id',
            'collection_name' => 'individual',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'service_id',
                1 => 'user_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualCollection::class,
            'service_name' => 'Individual',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.booking',
            'route_identifier_name' => 'booking_id',
            'collection_name' => 'booking',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [
                0 => 'user_id',
                1 => 'individual_id',
                2 => 'status',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingCollection::class,
            'service_name' => 'Booking',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Publish\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.publish',
            'route_identifier_name' => 'publish_id',
            'collection_name' => 'publish',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'category_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishCollection::class,
            'service_name' => 'Publish',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [
                0 => 'individual_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerCollection::class,
            'service_name' => 'Customer',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Appraisal\\Controller' => [
            'listener' => \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalResource::class,
            'route_name' => 'apigility-o2o-service-trade.rest.appraisal',
            'route_identifier_name' => 'appraisal_id',
            'collection_name' => 'appraisal',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [
                0 => 'user_id',
                1 => 'booking_id',
                2 => 'service_id',
                3 => 'individual_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalEntity::class,
            'collection_class' => \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalCollection::class,
            'service_name' => 'Appraisal',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceCategory\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Occupation\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\OrganizationType\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Organization\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Publish\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'ApigilityO2oServiceTrade\\V1\\Rest\\Appraisal\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceCategory\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Occupation\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\OrganizationType\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Organization\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Publish\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Appraisal\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceCategory\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Occupation\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\OrganizationType\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Organization\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Publish\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Appraisal\\Controller' => [
                0 => 'application/vnd.apigility-o2o-service-trade.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service',
                'route_identifier_name' => 'service_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Service\ServiceCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service',
                'route_identifier_name' => 'service_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service-category',
                'route_identifier_name' => 'service_category_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\ServiceCategory\ServiceCategoryCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service-category',
                'route_identifier_name' => 'service_category_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service-specification',
                'route_identifier_name' => 'service_specification_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\ServiceSpecification\ServiceSpecificationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.service-specification',
                'route_identifier_name' => 'service_specification_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.occupation',
                'route_identifier_name' => 'occupation_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Occupation\OccupationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.occupation',
                'route_identifier_name' => 'occupation_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.organization-type',
                'route_identifier_name' => 'organization_type_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\OrganizationType\OrganizationTypeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.organization-type',
                'route_identifier_name' => 'organization_type_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.organization',
                'route_identifier_name' => 'organization_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Organization\OrganizationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.organization',
                'route_identifier_name' => 'organization_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.individual',
                'route_identifier_name' => 'individual_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Individual\IndividualCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.individual',
                'route_identifier_name' => 'individual_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.booking',
                'route_identifier_name' => 'booking_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Booking\BookingCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.booking',
                'route_identifier_name' => 'booking_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.publish',
                'route_identifier_name' => 'publish_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Publish\PublishCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.publish',
                'route_identifier_name' => 'publish_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Customer\CustomerCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.appraisal',
                'route_identifier_name' => 'appraisal_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \ApigilityO2oServiceTrade\V1\Rest\Appraisal\AppraisalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apigility-o2o-service-trade.rest.appraisal',
                'route_identifier_name' => 'appraisal_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Controller' => [
            'input_filter' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Validator',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Controller' => [
            'input_filter' => 'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Validator',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => [
            'input_filter' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Validator',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => [
            'input_filter' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Validator',
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Controller' => [
            'input_filter' => 'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ApigilityO2oServiceTrade\\V1\\Rest\\Service\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'type',
                'description' => '服务类型',
                'field_type' => 'int',
                'error_message' => '请输入服务类型',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'title',
                'description' => '服务的标题',
                'field_type' => 'string',
                'error_message' => '请输入服务标题',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'image',
                'description' => '服务的主题图片',
                'error_message' => '请输入服务的主题图片',
                'field_type' => 'string',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'description',
                'description' => '服务的描述',
                'field_type' => 'string',
                'error_message' => '请输入服务的描述',
            ],
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\ServiceSpecification\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
                'description' => '规格名',
                'field_type' => 'string',
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'price',
                'description' => '价格',
                'field_type' => 'float',
            ],
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'service_specification_id',
                'description' => '要购买的服务规格',
                'error_message' => '请输入要购买的服务规格',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'quantity',
                'description' => '购买数量',
                'error_message' => '请输购买数量',
                'field_type' => 'int',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'booking_data',
                'description' => '预订所附加的数据，使用json格式，字段任意扩展',
                'field_type' => 'string',
            ],
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'occupation_id',
                'description' => '职业',
                'error_message' => '请输入职业',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'field_type' => 'int',
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'organization_id',
                'description' => '机构',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'field_type' => 'int',
                'error_message' => '请输入机构',
            ],
        ],
        'ApigilityO2oServiceTrade\\V1\\Rest\\Customer\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'field_type' => 'int',
            ],
            1 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'remark',
                'description' => '备注',
                'field_type' => 'string',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => '请输入客户备注',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'ApigilityO2oServiceTrade\\V1\\Rest\\Booking\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'ApigilityO2oServiceTrade\\V1\\Rest\\Individual\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => true,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
