<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailConfig
 *
 * @ORM\Table(name="EMAIL_CONFIG")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\EmailConfigRepository")
 */
class EmailConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EMAIL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="SENHA", type="string", length=200, nullable=false)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="SMTP", type="string", length=100, nullable=false)
     */
    private $smtp;



    /**
     * Get idEmail
     *
     * @return integer
     */
    public function getIdEmail()
    {
        return $this->idEmail;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EmailConfig
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set senha
     *
     * @param string $senha
     *
     * @return EmailConfig
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
     * Set smtp
     *
     * @param string $smtp
     *
     * @return EmailConfig
     */
    public function setSmtp($smtp)
    {
        $this->smtp = $smtp;
    
        return $this;
    }

    /**
     * Get smtp
     *
     * @return string
     */
    public function getSmtp()
    {
        return $this->smtp;
    }
}
