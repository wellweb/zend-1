<?php
namespace imovel\Entity {

    use Zend\StdLib\Hydrator\ClassMethods;

    abstract class AbstractEntity{

        public function __construct(Array $options = array()){

            $hydrator= new ClassMethods();
            $hydrator->hydrate($options, $this);
        }

        /**
         * @return array
         */
        public function toArray(){
            $hydrator= new ClassMethods();
            return $hydrator->extract($this);
        }

    }

}?>