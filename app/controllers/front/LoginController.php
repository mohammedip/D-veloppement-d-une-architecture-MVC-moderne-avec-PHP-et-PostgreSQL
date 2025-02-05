<?php

namespace App\controllers\front;

use App\core\Controller;

class LoginController extends Controller {


    public function __construct() {
        parent::__construct();
        
    }

    public function login() {
        
         $this->render('front/login');
    }

    public function register() {
        
        $this->render('front/register');
   }
    
}
