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
   
      $routes->connect('/', ['controller' => 'users', 'action' => 'login']);
    //$routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    
    $routes->connect('/questions/', ['controller' => 'questions', 'action' => 'index']);
    $routes->connect('/questions/add', ['controller' => 'questions', 'action' => 'add']);
    $routes->connect('/pages/', ['controller' => 'Pages', 'action' => 'display']);
    $routes->connect('/users/login', ['controller' => 'users', 'action' => 'login']);
    $routes->connect('/users/register', ['controller' => 'users', 'action' => 'register']);
    $routes->connect('/users/logout', ['controller' => 'users', 'action' => 'logout']);
    $routes->connect('/users/resetpassword', ['controller' => 'users', 'action' => 'resetpassword']);
    $routes->connect('/users/forgotpassword', ['controller' => 'users', 'action' => 'forgotpassword']);
    $routes->connect('/files/', ['controller' => 'Files', 'action' => 'index']);
    $routes->connect('/files/upload', ['controller' => 'Files', 'action' => 'upload']);
   $routes->connect('admin/users/view', ['controller' => 'users', 'action' => 'view']);
    $routes->connect('/admin/users/add', ['controller' => 'users', 'action' => 'add']);
    $routes->connect('/admin/questions/', ['controller' => 'questions', 'action' => 'index']);
    $routes->connect('/admin/questions/edit', ['controller' => 'questions', 'action' => 'edit']);
    $routes->connect('/admin/questions/delete', ['controller' => 'questions', 'action' => 'delete']);
    $routes->connect('/admin/questions/add', ['controller' => 'questions', 'action' => 'add']);
    $routes->connect('/pages/', ['controller' => 'Pages', 'action' => 'display']);
    $routes->connect('/admin/users/login', ['controller' => 'users', 'action' => 'login']);
    $routes->connect('/admin/users/register', ['controller' => 'users', 'action' => 'register']);
    $routes->connect('/admin/users/logout', ['controller' => 'users', 'action' => 'logout']);
    $routes->connect('/admin/users/resetpassword', ['controller' => 'users', 'action' => 'resetpassword']);
    $routes->connect('/admin/users/forgotpassword', ['controller' => 'users', 'action' => 'forgotpassword']);
    $routes->connect('/admin/files/', ['controller' => 'Files', 'action' => 'index']);
    $routes->connect('/admin/files/upload', ['controller' => 'Files', 'action' => 'upload']);
    $routes->connect('/admin/files/download', ['controller' => 'Files', 'action' => 'download']);
    $routes->connect('/admin/files/delete', ['controller' => 'Files', 'action' => 'delete']);
    $routes->connect('/admin/answers/', ['controller' => 'answers', 'action' => 'index']);
    $routes->connect('/admin/answers/add', ['controller' => 'answers', 'action' => 'add']);
    $routes->connect('/admin/answers/view', ['controller' => 'answers', 'action' => 'view']);
    $routes->connect('/admin/answers/edit', ['controller' => 'answers', 'action' => 'edit']);
    $routes->connect('/admin/answers/delete', ['controller' => 'answers', 'action' => 'delete']);
    $routes->connect('/admin/tags/add', ['controller' => 'tags', 'action' => 'add']);
    $routes->connect('/admin/tags/view', ['controller' => 'tags', 'action' => 'view']);
    $routes->connect('/admin/tags/delete', ['controller' => 'tags', 'action' => 'delete']);
    $routes->connect('/admin/tags/edit', ['controller' => 'tags', 'action' => 'edit']);
    $routes->connect('/admin/tags/index', ['controller' => 'tags', 'action' => 'index']);
    $routes->connect('/admin/users/index', ['controller' => 'users', 'action' => 'index']);
    
    
    
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
    $routes->fallbacks('DashedRoute');
});

Router::prefix('admin', function($routes){
    $routes->connect('/', ['controller' => 'admin', 'action' => 'index']);
     
    
    $routes->fallbacks(DashedRoute::class);
    
    Plugin::routes();
});



