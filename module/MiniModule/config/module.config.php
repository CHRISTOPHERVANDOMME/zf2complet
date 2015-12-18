<?php
<<<<<<< HEAD
=======
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace MiniModule;
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

return array(
    'router' => array(
        'routes' => array(
<<<<<<< HEAD
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'index'
                    )
                )
            ),
            'default' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                  'route' => '/:action',
                    'constraints' => array(),
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'index'
                    ),
                ),
            ),
            'login' => array(
                'type'=> 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/login',
                        'constraints' => array(),
                        'defaults' => array(
                            'controller' => 'MiniModule\Controller\Affiche',
                            'action' => 'login'
                        ),
                ),
            ),
        )
    ),

    'view_manager' => array(
        'template_map' => array(
            '404' => __DIR__ . '/../view/404.phtml',
            'error' => __DIR__ . '/../view/error.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'layout/form-auth' => __DIR__ . '/../view/layout/formAuth.phtml',
            'layout/info-auth' => __DIR__ . '/../view/layout/infoAuth.phtml',
         ),
        // voir zend-mvc/src/Service/ViewTemplatePathStack
        'template_path_stack' => array( __DIR__.'/../view/', ),

    ),

    'controllers' => array(
        'invokables' => array(
            'MiniModule\Controller\Index' => 'MiniModule\Controller\IndexController',
            'MiniModule\Controller\Affiche' => 'MiniModule\Controller\AfficheController',
        )
    ),

    'service_manager' => array(
        'factories' => array(
            'MiniModule\Form\Authentification' => 'MiniModule\Form\AuthentificationFormFactory',
            'MiniModule\Form\NewUser' => 'MiniModule\Form\NewUserFormFactory',
            'MiniModule\Form\DbAdapter' => 'MiniModule\Form\DbAdapterFormFactory',
        ),
        'services' => array(
            'session' => new \Zend\Session\Container('minimodule'),
            'mini-module\form\config' => include __DIR__.'/form.config.php',
        ),
    ),
);
=======
            'index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action'     => 'index',
                   )
                 )
           ),
           'default' => array(
               'type' => 'Zend\Mvc\Router\Http\Segment',
               'options' => array(
                 'route' => '/:action',
                   'constraints' => array(),
                   'defaults' => array(
                      'controller' => 'MiniModule\Controller\Index',
                      'action' => 'index'
                   ),
              ),
          ),
          /*'default' => array(
              'type' => 'Zend\Mvc\Router\Http\Segment',
              'options' => array(
                  'route' => '/',
                  'defaults' => array(
                      'controller' => 'MiniModule\Controller\Index',
                      'action' => 'index'
                    ),
                ),
            ),*/
       )
   ),
    'controllers' => array(
        'invokables' => array(
            'MiniModule\Controller\Index' => Controller\IndexController::class,
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'minimodule/index/index' => __DIR__ . '/../view/minimodule/index/index.phtml',
            'error'             => __DIR__ . '/../view/error.phtml',
            'minimodule/index/form'=> __DIR__.'/../view/minimodule/index/form.phtml',
            'minimodule/index/traite'=> __DIR__.'/../view/minimodule/index/traite.phtml',
            'minimodule/index/gmaps'=> __DIR__.'/../view/minimodule/index/gmaps.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    
);
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
