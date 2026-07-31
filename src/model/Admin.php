<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "admin")]
class Admin extends GenericModel
{
    #[ORM\Column(type: "string", length: 100)]
    private string $usuario;

    #[ORM\Column(type: "string", length: 255)]
    private string $senha;

    #[ORM\Column(type:"string", length:20)]
    private string $nivel;

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}