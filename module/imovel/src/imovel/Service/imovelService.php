<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 29/11/2014
 * Time: 18:04
 */

namespace imovel\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class imovelService extends AbstractService {

    public function __construct (EntityManager $em){

        $this->entity= 'imovel\Entity\Usuario';
        parent::__construct($em);

    }

} 