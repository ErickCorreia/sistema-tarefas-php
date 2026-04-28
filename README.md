# sistema-tarefas-php
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white)

 --To-Do List PHP - Sistema de Gestão de Tarefas
Este é um sistema de gerenciamento de tarefas (To-Do List) desenvolvido como parte de uma avaliação técnica. O projeto permite que usuários autenticados criem, editem, visualizem, concluam e excluam tarefas de forma organizada.

 --Funcionalidades
Autenticação Segura: Sistema de login com proteção de sessão e senhas criptografadas em MD5.

CRUD Completo: Criação, Leitura, Atualização e Exclusão de tarefas.

Gestão de Status: Alternância entre tarefas "Pendentes" e "Concluídas".

Layout Responsivo: Interface moderna construída com Tailwind CSS.

Segurança de Dados: Consultas ao banco de dados utilizando PDO e Prepared Statements para prevenir SQL Injection.

 --Tecnologias Utilizadas
Linguagem: PHP 8.x

Banco de Dados: MySQL

Estilização: Tailwind CSS (via CDN)

Ícones/Componentes: Componentes nativos do Tailwind (Badges, Cards, Tabelas)

 --Pré-requisitos
Para rodar o projeto localmente, você precisará de um ambiente de servidor local, como:

XAMPP

WAMP

Ou o servidor embutido do PHP + MySQL instalado.

 --Instalação e Configuração
Clonar o Repositório:

--Bash
git clone https://github.com/ErickCorreia/sistema-tarefas-php
--Configurar o Banco de Dados:

Acesse o phpMyAdmin ou seu terminal MySQL.

Crie um banco de dados chamado tarefas.

Importe o arquivo database.sql presente na raiz deste projeto.

Configurar a Conexão:

Abra o arquivo conexao.php.

Verifique se o usuário (root) e a senha do seu banco de dados local estão corretos.

Acessar o Projeto:

Mova a pasta para o diretório htdocs (se estiver no XAMPP).

Acesse no seu navegador: http://localhost/sistema-tarefas-php/login.php.

 --Credenciais de Teste
Para avaliar o sistema, utilize o usuário padrão já cadastrado no banco de dados:

Usuário: admin

Senha: 123456

 --Estrutura de Arquivos
 
login.php / logout.php: Controle de acesso.

index.php: Painel principal com a listagem de tarefas.

nova.php / editar.php: Formulários de manipulação de dados.

concluir.php / excluir.php: Scripts de processamento lógico.

layout.php: Estrutura visual global (Header/Navbar/Footer).

conexao.php: Configuração de conexão PDO.
