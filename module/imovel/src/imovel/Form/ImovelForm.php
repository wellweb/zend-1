<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 21/11/2014
 * Time: 18:21
 */

namespace imovel\Form;

use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use imovel\Form\ImovelFilter;

class ImovelForm extends Form{

    public function __construct(){

        parent::__construct(null);
        $this->setAttribute('method', 'POST');
        $this->setInputFilter(new ImovelFilter());

        // INPUT DESCRICAO
        $nome= new Text('nome');
        $nome->setLabel('Nome')
            ->setAttributes(array(
                'maxlenght' => 200
            ));
        $this->add($nome);

        $senha= new Text('senha');
        $senha->setLabel('Senha')
            ->setAttributes(array(
                'maxlenght' => 200
            ));
        $this->add($senha);

        // BOTAO SUBMIT
        $button= new Button('Submit');
        $button->setLabel('Salvar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn'
            ));
        $this->add($button);

;    }
} 