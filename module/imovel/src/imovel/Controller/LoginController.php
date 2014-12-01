<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 29/11/2014
 * Time: 18:52
 */

namespace imovel\Controller;


use Base\Controller\AbstractController;
use imovel\Form\LoginForm;
use Zend\View\Helper\ViewModel;

class LoginController extends AbstractController {

    function  indexAction(){

        echo 'novo heloo';
        $loginform= new LoginForm();
        $view= new ViewModel(array('form' => $loginform));
        return $view;


    }

} 