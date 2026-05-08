<?php

class Genero
{
    // Atributos
    private $id;
    private $nome;

    // Métodos Get e Set

    // id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id !== null ? (int)$id : null;
    }

    // nome
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = trim((string)$nome);
    }

    // Métodos Gerais
    public static function fromArray($dados)
    {
        $genero = new self();
        $genero->setId($dados['id'] ?? null);
        $genero->setNome($dados['nome'] ?? null);

        return $genero;
    }
}