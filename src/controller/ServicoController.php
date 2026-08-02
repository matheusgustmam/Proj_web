<?php

namespace controller;

class ServicoController
{
    public function miniJardins()
    {
        require __DIR__ . '/../view/servicos/pag-mini-jardins.php';
    }
    public function colheita()
    {
        require __DIR__ . '/../view/servicos/pag-colheita.php';
    }
}