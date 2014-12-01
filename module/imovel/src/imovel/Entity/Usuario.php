<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;
use imovel\Entity\AbstractEntity;

/**
 * Usuario
 *
 * @ORM\Table(name="USUARIO")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\UsuarioRepository")
 */
class Usuario extends  AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="SENHA", type="string", length=150, nullable=false)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="HORA", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="ACESSO_DATA", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $acessoData;

    /**
     * @var string
     *
     * @ORM\Column(name="ACESSO_HORA", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $acessoHora;



    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Usuario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set senha
     *
     * @param string $senha
     *
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    
        return $this;
    }

    /**
     * Get senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Usuario
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set hora
     *
     * @param string $hora
     *
     * @return Usuario
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    
        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set acessoData
     *
     * @param string $acessoData
     *
     * @return Usuario
     */
    public function setAcessoData($acessoData)
    {
        $this->acessoData = $acessoData;
    
        return $this;
    }

    /**
     * Get acessoData
     *
     * @return string
     */
    public function getAcessoData()
    {
        return $this->acessoData;
    }

    /**
     * Set acessoHora
     *
     * @param string $acessoHora
     *
     * @return Usuario
     */
    public function setAcessoHora($acessoHora)
    {
        $this->acessoHora = $acessoHora;
    
        return $this;
    }

    /**
     * Get acessoHora
     *
     * @return string
     */
    public function getAcessoHora()
    {
        return $this->acessoHora;
    }
}
