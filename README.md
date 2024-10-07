# Sistema de Gestão de Livros

Este repositório contém a implementação de um sistema simples de gestão de livros e pessoas, utilizando conceitos de orientação a objetos em PHP. O sistema inclui classes para representar pessoas e livros, bem como uma interface para definir as operações que podem ser realizadas em publicações.

## Estrutura do Projeto

### 1. Classe `Pessoa`

A classe `Pessoa` representa uma pessoa e contém os seguintes atributos e métodos:

- **Atributos:**
  - `nome`: Nome da pessoa.
  - `idade`: Idade da pessoa.
  - `sexo`: Sexo da pessoa.

- **Métodos:**
  - `__construct($nome, $idade, $sexo)`: Construtor que inicializa os atributos.
  - `fazerAniver()`: Método que incrementa a idade da pessoa em 1.
  - Métodos `get` e `set` para cada atributo (`getNome()`, `setNome($nome)`, etc.).

### 2. Interface `Publicacao`

A interface `Publicacao` define as operações que podem ser realizadas em uma publicação (como um livro). Os métodos definidos são:

- `abrir()`: Abre a publicação.
- `fechar()`: Fecha a publicação.
- `folhear($p)`: Folheia a publicação até uma página específica.
- `avancarPag()`: Avança para a próxima página.
- `voltarPag()`: Volta para a página anterior.

### 3. Classe `Livro`

A classe `Livro` implementa a interface `Publicacao` e representa um livro. A classe contém os seguintes atributos e métodos:

- **Atributos:**
  - `titulo`: Título do livro.
  - `autor`: Autor do livro.
  - `totPaginas`: Total de páginas do livro.
  - `pagAtual`: Página atual sendo lida.
  - `aberto`: Estado indicando se o livro está aberto ou fechado.
  - `leitor`: Um objeto da classe `Pessoa` que representa o leitor do livro.

- **Métodos:**
  - `__construct($titulo, $autor, $totPaginas, $leitor)`: Construtor que inicializa os atributos.
  - `detalhes()`: Exibe detalhes sobre o livro.
  - Métodos `get` e `set` para cada atributo (`getTitulo()`, `setTitulo($titulo)`, etc.).
  - Métodos para gerenciar o estado do livro (`abrir()`, `fechar()`, `folhear($p)`, `avancarPag()`, `voltarPag()`).

## Como Usar

1. **Instalação**: Certifique-se de que o PHP está instalado em sua máquina.
2. **Uso**: Crie instâncias das classes `Pessoa` e `Livro`, e utilize os métodos disponíveis para gerenciar os dados.

### Exemplo de Uso

O exemplo de uso mostra como criar instâncias das classes `Pessoa` e `Livro`, e realizar operações com elas:

1. **Criação de Pessoas**: Crie instâncias da classe `Pessoa` para representar os leitores.
2. **Criação de Livros**: Crie instâncias da classe `Livro`, associando cada livro a um dos leitores.
3. **Operações com o Livro**:
   - Abra o livro e folheie para uma página específica.
   - Utilize o método `detalhes()` para exibir informações sobre o livro, como título, autor e a página atual.

Para visualizar o exemplo completo, consulte o arquivo `index.php` que contém a implementação.

## Conclusão

Este projeto demonstra conceitos de orientação a objetos em PHP, incluindo classes, herança, interfaces e encapsulamento. Sinta-se à vontade para expandir e personalizar as classes conforme necessário.

## Autor

**Feito por Railton Araujo**
