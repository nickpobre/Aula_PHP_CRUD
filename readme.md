# Aula CRUD em PHP

Este projeto é um exemplo de aplicação CRUD (Create, Read, Update, Delete) utilizando PHP e MySQL. A aplicação permite inserir, selecionar, alterar e excluir posts em um banco de dados.

## Estrutura do Projeto

O projeto possui a seguinte estrutura de arquivos:

```
aula 06-03-2025/
    ├── alterar.php
    ├── database.php
    ├── excluir.php
    ├── index.php
    ├── inserir.php
    └── selecionar.php
```

### Arquivos

- `index.php`: Página inicial com links para as operações CRUD.
- `database.php`: Arquivo de configuração para conexão com o banco de dados.
- `inserir.php`: Página para inserir novos posts.
- `selecionar.php`: Página para selecionar e visualizar posts.
- `alterar.php`: Página para alterar posts existentes.
- `excluir.php`: Página para excluir posts.

## Configuração

1. Clone o repositório para o seu ambiente local.
2. Certifique-se de ter o PHP e o MySQL instalados.
3. Crie um banco de dados chamado `blog_db`.
4. No arquivo `database.php`, configure as credenciais do banco de dados:

```php
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "blog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

5. Importe o seguinte script SQL para criar a tabela `posts`:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL
);
```

## Uso

1. Abra o navegador e acesse `index.php` para ver a página inicial.
2. Utilize os links para navegar entre as páginas de inserção, seleção, alteração e exclusão de posts.

## Tecnologias Utilizadas

- PHP
- MySQL
- Tailwind CSS

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
