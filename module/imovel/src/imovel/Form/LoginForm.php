<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 29/11/2014
 * Time: 18:45
 */

namespace imovel\Form;

use Zend\Form\Form;


class LoginForm extends Form {

    public function __constructor(){

        parent::__constructor ($name = null);

        parent::setAttribute('method', 'post');
        parent::setAttribute('action', 'login');


        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'=> 'text',
                'required' => 'required',
                'placeholder' => 'Insira um nome'
            ),
            'options' => array(
                'label' => 'Insira seu nome!'
            )
        ));


        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'=> 'submit',
                'required' => 'required',
            )
        ));


    }

} 