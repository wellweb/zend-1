<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace imovel\Controller;

use Base\Controller\AbstractController;
//use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractController
{

    /**
     *
     */

    // FOI TROCADO A TABELA DE IMOVEIS POR USUARIO

    function __construct()
    {
        //echo 'hello world';
        $this->form= 'imovel\Form\ImovelForm';
        $this->controller= 'imovel';
        $this->route= 'imovel';
        $this->service= 'imovel\service\imovelService';
        $this->entity= 'imovel\Entity\Usuario';

    }



/*
    public  function indexAction(){
        return new ViewModel();
    }
*/

}
