<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tb_cliente")]
class Cliente extends GenericModel{

    #[ORM\Column(type: 'string')]
    private $nome;

    #[ORM\Column(type: 'string')]
    private $textinho;

    #[ORM\Column(type: 'string')]
    private $email;

    #[ORM\Column(type: "boolean")]
    private bool $aprovado = false;

    public function isAprovado(): bool
    {
        return $this->aprovado;
    }

    public function setAprovado(bool $aprovado): void
    {
        $this->aprovado = $aprovado;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTextinho()
    {
        return $this->textinho;
    }

    public function setTextinho($textinho)
    {
        $this->textinho = $textinho;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}


