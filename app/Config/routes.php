<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'users', 'action' => 'login'));
	
	//set url customers
	Router::connect('/CustomerDashboard/*',array('controller' => 'Costomers', 'action' => 'view'),array('CustomerDashboard' => '[a-zA-Z]+'));
	Router::connect('/CustomerDashboardA/*',array('controller' => 'Costomers', 'action' => 'view_pur'),array('CustomerDashboardA' => '[a-zA-Z]+'));
	Router::connect('/CustomerDashboardAB/*',array('controller' => 'Costomers', 'action' => 'view_refer'),array('CustomerDashboardAB' => '[a-zA-Z]+'));
	Router::connect('/CustomerDashboardABC/*',array('controller' => 'Costomers', 'action' => 'view_setting'),array('CustomerDashboardABC' => '[a-zA-Z]+'));
	Router::connect('/CustomerSetting/*',array('controller' => 'Costomers', 'action' => 'own_update'),array('CustomerSetting' => '[a-zA-Z]+'));
	
	Router::connect('/shop/*',array('controller' => 'Costomers', 'action' => 'link'),array('shop' => '[a-zA-Z]+'));
	Router::connect('/customer/*',array('controller' => 'Costomers', 'action' => 'index'),array('customer' => '[a-zA-Z]+'));
	
	Router::connect('/list_user/*',array('controller' => 'Users', 'action' => 'index'),array('list_user' => '[a-zA-Z]+'));
	Router::connect('/update/*',array('controller' => 'Users', 'action' => 'edit'),array('update' => '[a-zA-Z]+'));
	
	//set url clients
	
	Router::connect('/dashboard/*',array('controller' => 'Clients', 'action' => 'view'),array('dashboard' => '[a-zA-Z]+'));
	Router::connect('/dashboardA/*',array('controller' => 'Clients', 'action' => 'view_pur'),array('dashboardA' => '[a-zA-Z]+'));
	Router::connect('/dashboardB/*',array('controller' => 'Clients', 'action' => 'view_refer'),array('dashboardB' => '[a-zA-Z]+'));
	Router::connect('/dashboardC/*',array('controller' => 'Clients', 'action' => 'view_setting'),array('dashboardC' => '[a-zA-Z]+'));
	Router::connect('/setting/*',array('controller' => 'Clients', 'action' => 'own_update'),array('setting' => '[a-zA-Z]+'));
	
	/*Router::connect('/costomers/view?cid=:cid&type=:type&page=:page', 
   array('controller' => 'costomers', 'action' => 'view'),
   array(
      'pass' => array('cid', 'type', 'page')
   )
);*/
	
//Router::connect('/test/*', array('controller' => 'Costomers', 'action' => 'view_refer'),array('id' => '[0-9]+'));

	
	//Router::connect('/', array('controller' => 'costomers', 'action' => 'login'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	//Router::connect('/dashboard', array('controller' => 'users', 'action' => 'index'));
	//Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	//Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	//Router::connect('/dashboard/*', array('controller' => 'costomers', 'action' => 'index'));
	//Router::connect('/login', array('controller' => 'costomers', 'action' => 'login'));
	//Router::connect('/logout', array('controller' => 'costomers', 'action' => 'logout'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
