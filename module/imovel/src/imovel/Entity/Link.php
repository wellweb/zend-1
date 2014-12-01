<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="LINK")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\LinkRepository")
 */
class Link
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LINK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLink;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRICAO", type="string", length=220, nullable=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMOVEL", type="integer", nullable=false)
     */
    private $idImovel;



    /**
     * Get idLink
     *
     * @return integer
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Link
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    
        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set idImovel
     *
     * @param integer $idImovel
     *
     * @return Link
     */
    public function setIdImovel($idImovel)
    {
        $this->idImovel = $idImovel;
    
        return $this;
    }

    /**
     * Get idImovel
     *
     * @return integer
     */
    public function getIdImovel()
    {
        return $this->idImovel;
    }
}
