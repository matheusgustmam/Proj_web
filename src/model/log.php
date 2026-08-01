<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tb_log")]
class Log extends GenericModel
{
    #[ORM\Column(type: "string", length: 30)]
    private string $acao;

    #[ORM\Column(type: "integer")]
    private int $comentarioId;

    #[ORM\Column(type: "string", length: 100)]
    private string $usuario;

    #[ORM\Column(type: "datetime")]
    private \DateTime $dataHora;

    public function getAcao(): string
    {
        return $this->acao;
    }

    public function setAcao(string $acao): void
    {
        $this->acao = $acao;
    }

    public function getComentarioId(): int
    {
        return $this->comentarioId;
    }

    public function setComentarioId(int $comentarioId): void
    {
        $this->comentarioId = $comentarioId;
    }

    public function getUsuario(): string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): void
    {
        $this->usuario = $usuario;
    }

    public function getDataHora(): \DateTime
    {
        return $this->dataHora;
    }

    public function setDataHora(\DateTime $dataHora): void
    {
        $this->dataHora = $dataHora;
    }
}