<!-- por ser classe, o arquivo começa com letra maiúscula -->
<?php

class Livro
{
    // Atributos
    private $id;
    private $titulo;
    private $ano;
    private $generoId;
    private $generoNome;
    private $quantidade;
    private $statusLivro;

    // Métodos Get e Set

    // Id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        // se id for diferente de nulo atribua ao int id, senão é igual a null
        $this->id = $id !== null ? (int)$id : null;
    }

    // Titulo
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        // trim -> tira os espaços
        $this->titulo = trim((string)$titulo);
    }

    // Ano
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = (int)$ano;
    }

    // Genero ID
    public function getGeneroId()
    {
        return $this->generoId;
    }
    public function setGeneroId($generoId)
    {
        $this->generoId = (int)$generoId;
    }

    // Genero Nome
    public function getGeneroNome()
    {
        return $this->generoNome;
    }
    public function setGeneroNome($generoNome)
    {
        // número inteiro não tem espaço, por isso o trim
        $this->generoNome = trim((string)$generoNome);
    }

    // Quantidade
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = (int)$quantidade;
    }

    // StatusLivro
    public function getStatusLivro()
    {
        return $this->statusLivro;
    }
    public function setStatusLivro($statusLivro)
    {
        // === -> exatamente igual 
        $this->statusLivro = $statusLivro === 'inativo' ? 'inativo' : 'ativo';
    }

    // Métodos Gerais
    public static function fromArray($dados)
    {
        //ARRAY
        // variavel do tipo self (objeto do tipo livro)
        $livro = new self();
        $livro->setId($dados['id'] ?? null);
        $livro->setTitulo($dados['titulo'] ?? '');
        $livro->setAno($dado['ano'] ?? '');
        $livro->setGeneroId($dados['genero_id'] ?? '');
        $livro->setGeneroNome($dados['genero_nome'] ?? '');
        $livro->setQuantidade($dados['quantidadee'] ?? '');
        $livro->setStatusLivro($dados['status_livro'] ?? '');

        return $livro;

    }
}
