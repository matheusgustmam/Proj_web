<?php

namespace model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tb_log")]
class Log extends GenericModel
{
    #[ORM\Column(type: "string", length: 150)]
    private string $emailComentario;

    #[ORM\Column(type: "text")]
    private string $textoComentario;

    #[ORM\Column(type: "integer")]
    private int $adminId;
    #[ORM\Column(type: "text", nullable: true)]
    private ?string $userAgent = null;
    #[ORM\Column(type: "string", length: 20)]
    private string $nivel;

    #[ORM\Column(type: "string", length: 100)]
    private string $autorComentario;

    #[ORM\Column(type: "string", length: 45)]
    private string $ip;
    #[ORM\Column(type: "string", length: 30)]
    private string $acao;

    #[ORM\Column(type: "integer")]
    private int $comentarioId;

    #[ORM\Column(type: "string", length: 100)]
    private string $usuario;

    #[ORM\Column(type: "datetime")]
    private \DateTime $dataHora;

    public function getEmailComentario(): string
    {
        return $this->emailComentario;
    }

    public function setEmailComentario(string $emailComentario): void
    {
        $this->emailComentario = $emailComentario;
    }

    public function getTextoComentario(): string
    {
        return $this->textoComentario;
    }

    public function setTextoComentario(string $textoComentario): void
    {
        $this->textoComentario = $textoComentario;
    }

    public function getAdminId(): int
    {
        return $this->adminId;
    }

    public function setAdminId(int $adminId): void
    {
        $this->adminId = $adminId;
    }
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }
    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function getAutorComentario(): string
    {
        return $this->autorComentario;
    }

    public function setAutorComentario(string $autorComentario): void
    {
        $this->autorComentario = $autorComentario;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }
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