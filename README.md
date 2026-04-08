# aula_php_bd

# Sistema de Cadastro de Funcionários

## 📌 Descrição

Este projeto consiste em um **mini sistema web para cadastro e gerenciamento de funcionários**, desenvolvido utilizando **PHP, HTML, CSS e banco de dados PostgreSQL**.

O sistema permite realizar operações básicas como **login de usuário, cadastro de funcionários, listagem, busca e exclusão**, simulando o funcionamento de um sistema administrativo simples.

Este trabalho foi desenvolvido como atividade acadêmica da disciplina de desenvolvimento web.

---

# 🚀 Tecnologias Utilizadas

* HTML5
* CSS3
* PHP
* PostgreSQL
* XAMPP
* Visual Studio Code
* GitHub

---

# ⚙️ Funcionalidades do Sistema

✔ Login de usuário
✔ Recuperação de senha (esqueci minha senha)
✔ Cadastro de funcionários
✔ Listagem de funcionários cadastrados
✔ Busca de funcionários pelo nome
✔ Exclusão de funcionários
✔ Controle de situação (Ativo / Inativo)

---

# 📂 Estrutura do Projeto

```
stevan
│
├── dbconexao.php
├── login.php
├── home.php
├── esqueci.php
├── style.css
│
├── cadastro.php
├── listar.php
├── salvar.php
├── excluir.php
│
└── README.md
```

---

# 🗄️ Banco de Dados

O sistema utiliza **PostgreSQL**.

Principais tabelas:

### Tabela de usuários

Responsável pelo login do sistema.

Campos:

* id
* usuario
* senha

---

### Tabela de funcionários

Responsável por armazenar os dados cadastrados.

Campos:

* id
* nome
* cargo
* email
* telefone
* situacao

---

# ▶️ Como Executar o Projeto

1. Instalar **XAMPP**
2. Iniciar **Apache**
3. Iniciar **PostgreSQL**
4. Clonar ou baixar este repositório
5. Colocar a pasta dentro de:

```
C:\xampp\htdocs\
```

6. Criar o banco de dados no PostgreSQL
7. Executar o sistema acessando:

```
http://localhost/stevan/login.php
```

---

# 👨‍💻 Autor

**Stevan Anemberg**

Projeto desenvolvido para fins acadêmicos.

---

# 📄 Licença

Este projeto foi desenvolvido apenas para fins educacionais.
