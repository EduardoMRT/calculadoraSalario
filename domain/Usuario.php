<?php

namespace domain;

class Usuario
{
    private int $idUsuario = 0;
    private string $senha = "";
    private Pessoa $pessoa;

    /**
     * @param int $idUsuario
     * @param string $senha
     * @param Pessoa $pessoa
     */
    public function __construct(int $idUsuario, string $senha, Pessoa $pessoa)
    {
        $this->idUsuario = $idUsuario;
        $this->senha = $senha;
        $this->pessoa = $pessoa;
    }

    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario): void
    {
        $this->idUsuario = $idUsuario;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function setPessoa(Pessoa $pessoa): void
    {
        $this->pessoa = $pessoa;
    }

}