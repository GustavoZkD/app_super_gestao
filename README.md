# 📊 App Super Gestão

Aplicação web desenvolvida em Laravel com o objetivo de realizar a gestão de clientes, produtos, pedidos e fornecedores. Este projeto tem fins educacionais e serve como base para aprendizado de conceitos fundamentais do Laravel, como MVC, Eloquent ORM, migrações, relacionamentos, autenticação e muito mais.

## 🚀 Funcionalidades

- Cadastro, listagem, edição e exclusão de:
  - Fornecedores
  - Produtos
  - Clientes
  - Pedidos
- Relacionamento entre produtos e pedidos (N:N)
- Autenticação de usuários (login e registro)
- Layout base com Blade
- Validações de formulários
- Paginação de registros

## 🧰 Tecnologias Utilizadas

- **Linguagem**: PHP 8+
- **Framework**: Laravel 8
- **Banco de Dados**: MySQL
- **Outros**:
  - Blade (motor de templates)
  - Eloquent ORM
  - Bootstrap (estilização)
  - Composer

## ⚙️ Instalação e Execução

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/GustavoZkD/app_super_gestao.git
   cd app_super_gestao
   ```

2. **Instale as dependências:**

   ```bash
   composer install
   ```

3. **Crie o arquivo `.env`:**

   Copie o `.env.example` e configure de acordo com seu ambiente:

   ```bash
   cp .env.example .env
   ```

4. **Gere a chave da aplicação:**

   ```bash
   php artisan key:generate
   ```

5. **Configure o banco de dados:**

   No arquivo `.env`, defina os dados de conexão:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha
   ```

6. **Execute as migrações:**

   ```bash
   php artisan migrate
   ```

7. **Inicie o servidor local:**

   ```bash
   php artisan serve
   ```

   Acesse a aplicação em `http://localhost:8000`.

## 🔐 Autenticação

O sistema utiliza o mecanismo de autenticação básico do Laravel. Usuários precisam estar autenticados para acessar áreas administrativas.

## 📝 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Desenvolvido com 💻 por [Gustavo Rezende Gouveia](https://github.com/GustavoZkD)