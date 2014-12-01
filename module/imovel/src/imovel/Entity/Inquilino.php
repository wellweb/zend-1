<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inquilino
 *
 * @ORM\Table(name="INQUILINO")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\InquilinoRepository")
 */
class Inquilino
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INQUILINO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInquilino;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="CPF", type="decimal", precision=11, scale=0, nullable=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="FIADOR", type="string", length=100, nullable=true)
     */
    private $fiador;

    /**
     * @var string
     *
     * @ORM\Column(name="CONJUGUE", type="string", length=100, nullable=true)
     */
    private $conjugue;

    /**
     * @var string
     *
     * @ORM\Column(name="RG", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_NASC", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $dataNasc;

    /**
     * @var string
     *
     * @ORM\Column(name="CADASTRO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $cadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="ENDERECO", type="string", length=120, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="BAIRRO", type="string", length=80, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="CIDADE", type="string", length=80, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="CONJUGUE_CPF", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $conjugueCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="FIADOR_CPF", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $fiadorCpf;



    /**
     * Get idInquilino
     *
     * @return integer
     */
    public function getIdInquilino()
    {
        return $this->idInquilino;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Inquilino
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
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Inquilino
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    
        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set fiador
     *
     * @param string $fiador
     *
     * @return Inquilino
     */
    public function setFiador($fiador)
    {
        $this->fiador = $fiador;
    
        return $this;
    }

    /**
     * Get fiador
     *
     * @return string
     */
    public function getFiador()
    {
        return $this->fiador;
    }

    /**
     * Set conjugue
     *
     * @param string $conjugue
     *
     * @return Inquilino
     */
    public function setConjugue($conjugue)
    {
        $this->conjugue = $conjugue;
    
        return $this;
    }

    /**
     * Get conjugue
     *
     * @return string
     */
    public function getConjugue()
    {
        return $this->conjugue;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return Inquilino
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set dataNasc
     *
     * @param string $dataNasc
     *
     * @return Inquilino
     */
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    
        return $this;
    }

    /**
     * Get dataNasc
     *
     * @return string
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * Set cadastro
     *
     * @param string $cadastro
     *
     * @return Inquilino
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;
    
        return $this;
    }

    /**
     * Get cadastro
     *
     * @return string
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Inquilino
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    
        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Inquilino
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    
        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Inquilino
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set conjugueCpf
     *
     * @param string $conjugueCpf
     *
     * @return Inquilino
     */
    public function setConjugueCpf($conjugueCpf)
    {
        $this->conjugueCpf = $conjugueCpf;
    
        return $this;
    }

    /**
     * Get conjugueCpf
     *
     * @return string
     */
    public function getConjugueCpf()
    {
        return $this->conjugueCpf;
    }

    /**
     * Set fiadorCpf
     *
     * @param string $fiadorCpf
     *
     * @return Inquilino
     */
    public function setFiadorCpf($fiadorCpf)
    {
        $this->fiadorCpf = $fiadorCpf;
    
        return $this;
    }

    /**
     * Get fiadorCpf
     *
     * @return string
     */
    public function getFiadorCpf()
    {
        return $this->fiadorCpf;
    }
}
