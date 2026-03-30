# Sistema CRUD com Login em PHP

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

Um sistema completo de Cadastro, Leitura, Atualização e Exclusão (CRUD) de usuários, desenvolvido do zero com PHP e MySQL. O projeto conta com um sistema de autenticação seguro, utilizando proteção por sessões e senhas criptografadas (hash).

## Funcionalidades

* **Autenticação de Administrador:** Tela de login segura para restringir o acesso ao sistema.
* **Segurança Avançada:** Senhas salvas com criptografia (Bcrypt) e páginas protegidas via verificação de sessão (`$_SESSION`).
* **CRUD Completo:**
    * **C**reate: Cadastro de novos usuários.
    * **R**ead: Listagem dinâmica dos usuários cadastrados.
    * **U**pdate: Edição de dados de usuários existentes.
    * **D**elete: Exclusão de usuários do banco de dados.
* **Interface Responsiva:** Visual limpo e amigável criado com HTML5 e Bootstrap 5.

## Tecnologias Utilizadas

* **Back-end:** PHP 8+
* **Banco de Dados:** MySQL
* **Front-end:** HTML, CSS, Bootstrap 5

## Como executar o projeto na sua máquina

Para rodar este projeto localmente, você precisará de um ambiente de desenvolvimento como o [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou WampServer.

### Passo 1: Clone o repositório
```bash
git clone [https://github.com/Mateus-vonRandow/crud.git](https://github.com/Mateus-vonRandow/crud.git)
```

### Passo 2: Configuração do Banco de Dados
1. Abra o seu `phpMyAdmin` (`http://localhost/phpmyadmin`).
2. Crie um banco de dados chamado `crud_sistema`.
3. Importe o arquivo **`crud_sistema.sql`** (que está na raiz deste projeto) para criar as tabelas `usuarios` e `administradores`.

### Passo 3: Configuração da Conexão
Por questões de segurança, o arquivo principal de conexão com o banco não é enviado para o GitHub.
1. Na pasta do projeto, encontre o arquivo `conexao_exemplo.php`.
2. Renomeie este arquivo para **`conexao.php`**.
3. Abra o arquivo e ajuste os dados de usuário e senha do seu servidor MySQL local (por padrão no XAMPP, o usuário é `root` e a senha é em branco `""`).

### Passo 4: Acessando o sistema
Abra o seu navegador e acesse a pasta do projeto (ex: `http://localhost/crud`). 
Você será redirecionado para a tela de login. Use as credenciais de teste abaixo:

* **E-mail:** `admin@meusistema.com`
* **Senha:** `123456`

---
*Desenvolvido por Mateus von Randow.* 