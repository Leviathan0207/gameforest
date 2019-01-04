<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */

    // PAGE CONTROLLER
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index', 'home']);
    $routes->connect('/lien-he', ['controller' => 'Pages', 'action' => 'contact']);
    $routes->connect('/cap-nhat', ['controller' => 'Pages', 'action' => 'releases']);
    $routes->connect('/demo', ['controller' => 'Pages', 'action' => 'demo']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    // NEWS CONTROLLER
    $routes->connect('/tin-tuc', ['controller' => 'News', 'action' => 'index']);
    $routes->connect('/:user/post', ['controller' => 'News', 'action' => 'userPublished'])
        ->setPatterns([
            'user' => '[a-zA-Z0-9-_]+',
        ])
        ->setPass(['user']);
    $routes->connect('/:slug.html', ['controller' => 'News', 'action' => 'post'])
        ->setPatterns([
            'slug' => '[a-zA-Z0-9-_]+',
        ])
        ->setPass(['slug']);
    $routes->connect('/tag/*', ['controller' => 'News', 'action' => 'tag']);

    //PROFILES CONTROLLER
    $routes->connect('/:user', ['controller' => 'Profiles', 'action' => 'index'])
        ->setPass(['user']);
    
    //USER CONTROLLER
    $routes->connect('/dang-nhap', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/dang-ky', ['controller' => 'Users', 'action' => 'register']);
    $routes->connect('/dang-nhap-facebook', ['controller' => 'Users', 'action' => 'fblogin']);
    $routes->connect('/users/verification', ['controller' => 'Users', 'action' => 'verification']);

    //FORUM CONTROLLER
    $routes->connect('/dien-dan', ['controller' => 'Forum', 'action' => 'index']);
    $routes->connect('/dien-dan/tao-bai-viet', ['controller' => 'Forum', 'action' => 'createTopic']);
    $routes->connect('/dien-dan/:forumtopic', ['controller' => 'Forum', 'action' => 'forumTopic'])
        ->setPatterns([
            'forumtopic' => '[a-zA-Z0-9-_]+',
        ])
        ->setPass(['forumtopic']);
    $routes->connect('/dien-dan/:topic.html', ['controller' => 'Forum', 'action' => 'viewTopic'])
        ->setPatterns([
            'topic' => '[a-zA-Z0-9-_]+',
        ])
        ->setPass(['topic']);
    
    //GALLERY CONTROLLER Gallery
    $routes->connect('/:user/images', ['controller' => 'Gallery', 'action' => 'index'])
        ->setPatterns([
            'user' => '[a-zA-Z0-9-_]+',
        ])
        ->setPass(['user']); 
    //TEST CONTROLLER
    $routes->connect('/test', ['controller' => 'Posts', 'action' => 'index']);
    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});
