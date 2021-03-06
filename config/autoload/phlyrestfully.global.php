<?php

$config = array(
   /*
    * Specify what MIME types the ApiProblemListener will respond to.
    * DEFAULT: application/hal+json,application/api-problem+json,application/json
    */
    //'accept_filter' => 'application/hal+json,application/api-problem+json,application/json',

    'renderer' => array(
       /*
        * Specify a default hydrator if you wish; make sure the hydrator resolves
        * to a registered service.
        */
        // 'default_hydrator' => 'Some\Hydrator\Service',

       /*
        * Specify a map of classname/hydrator service pairs; again, ensure that the
        * hydrator services resolve to registered services.
        */
        // 'hydrators' => array(
        //     'Some\Class\Name' => 'Some\Hydrator\Service',
        // ),
    ),

    'resources' => array(

    //        'controller.name' => array(
        //            'listener'   => 'api.resource-listener.company.subscription',
        //            'route_name' => 'api/company/subscriptions',

        //            'identifier_name'         => 'user_id',
        //            'resource_http_options'   => array('get', 'post', 'delete'),
        //            'collection_http_options' => array('get')
        //        )
    )
);

/* No need to edit below this line */
return array(
    'phlyrestfully' => $config,
);