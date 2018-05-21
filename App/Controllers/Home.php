<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        //View::renderTemplate('Home/index.html', ["a_variable" => 123]);
        View::render('Home/index.php', ["a_variable" => "Default"]);
    }

	/**
     * Show the add page
     *
     * @return void
     */
    public function addAction()
    {
        //View::renderTemplate('Home/index.html', ["a_variable" => 123]);
        View::render('Home/index.php', ["a_variable" => "Add"]);
    }
	
}
