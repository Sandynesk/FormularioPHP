# Documentação do Projeto: Página de Cadastro em PHP

## Visão Geral
Este projeto consiste em uma página de cadastro simples desenvolvida em HTML e PHP, solicitada pelo professor Leandro para analisar nossas competências na nova linguagem trabalhada em sala. A página permite que os usuários simulem a criação de uma conta, fornecendo informações básicas. O formulário coleta dados como nome completo, e-mail, data de nascimento, gênero e biografia.

## Estrutura do Projeto
- **HTML**: A estrutura da página é definida usando HTML.
- **CSS**: O estilo da página é aplicado através de um arquivo CSS externo (`index.css`).
- **PHP**: O formulário é enviado para um script PHP (`index.php`) que processará os dados do usuário.

## Detalhes da Implementação

### 1. Estrutura HTML
A estrutura HTML da página é composta por:
- Um `<div>` com a classe `box` que envolve todos os elementos.
- Uma imagem representativa do formulário.
- Um formulário que coleta as informações do usuário.

#### Elementos do Formulário
- **Nome Completo**:
  - Tipo: `text`
  - ID: `nome`
  - Nome: `nome`
  
- **E-mail**:
  - Tipo: `email`
  - ID: `email`
  - Nome: `email`
  - Requerido: sim
  
- **Data de Nascimento**:
  - Tipo: `date`
  - ID: `data-nascimento`
  - Nome: `data-nascimento`
  - Requerido: sim
  
- **Gênero**:
  - Tipo: `select`
  - ID: `genero`
  - Nome: `genero`
  - Opções: Masculino, Feminino, Outros
  - Requerido: sim
  
- **Biografia**:
  - Tipo: `textarea`
  - ID: `biografia`
  - Nome: `biografia`
  - Placeholder: "Escreva uma breve biografia"

- **Botão de Envio**:
  - Tipo: `submit`
  - Texto: "Cadastrar"

### 2. Arquivos Associados
- `index.css`: Contém estilos personalizados para melhorar a aparência do formulário.
- `index.php`: Script PHP que processará os dados enviados pelo formulário.

### 3. Funcionalidade
- O usuário preenche o formulário e clica no botão "Cadastrar".
- Os dados são enviados via método POST para o script `index.php`, onde podem ser processados (armazenados em um banco de dados, etc.). Atualmente, ele apenas verifica se os dados estão preenchidos corretamente e se não há nenhum campo vazio.

## Instruções de Uso
### Pré-requisitos:
- Um servidor web com suporte a PHP (por exemplo, XAMPP, WAMP ou um servidor remoto).

### Configuração:
- Coloque todos os arquivos (HTML, CSS, PHP) na pasta do servidor web.
- Verifique se a estrutura de pastas está correta, especialmente a pasta `Css` e `Fotos`.

### Acesso:
- Acesse a página pelo navegador, utilizando o URL correspondente ao local onde os arquivos estão armazenados.

### Processamento dos Dados:
- O arquivo `index.php` deve ser implementado para lidar com os dados recebidos do formulário.

## Considerações Finais
Esta página de cadastro foi uma boa iniciativa, na minha opinião, para me introduzir ao PHP. Inclusive, gostei muito do que desenvolvi no CSS dela e irei reaproveitar em projetos futuros. Realmente, é uma linguagem muito interessante quando se trata de praticidade. Fiz alguns testes anteriores, e a ligação e interação com o banco de dados são algo muito simples e prático de se fazer. Esse projetinho abriu muitas portas; ele pode ser facilmente expandido com funcionalidades adicionais, como validação de dados, integração com banco de dados e implementação de autenticação de usuários.
