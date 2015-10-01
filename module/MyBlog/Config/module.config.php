<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'MyBlog\Controller\List' => 'MyBlog\Controller\ListController'
         )
     ),
    'view_manager' => array(
      'template_path_stack' => array(
        __DIR__ . '/../view',
      ),
    ),
    'router' => array(
        'routes' => array(
            'post' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/MyBlog',
                    'defaults' => array(
                        'controller' => 'MyBlog\Controller\List',
                        'action'     => 'index',
                    )
                )
            )
        )
    )
);
