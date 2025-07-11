# 📊 App Super Gestão

Aplicação web desenvolvida em Laravel com o objetivo de realizar a gestão de clientes, produtos, pedidos e fornecedores. Este projeto tem fins educacionais e serve como base para aprendizado de conceitos fundamentais do Laravel, como MVC, Eloquent ORM, migrações, relacionamentos, autenticação e muito mais.

<img width="2529" height="1398" alt="image" src="https://github.com/user-attachments/assets/83ba4281-76f0-44b6-958a-34237b1d7435" />
<img width="2465" height="1094" alt="image" src="https://github.com/user-attachments/assets/574726fd-1b63-44c5-9850-d30302c7f3a2" />
<img width="2448" height="687" alt="image" src="https://github.com/user-attachments/assets/7bfe5fa7-3dbc-460f-ba9a-173bcc047c94" />
<img width="2511" height="630" alt="image" src="https://github.com/user-attachments/assets/1fc2bebc-547f-4d91-b5f3-d5f966a0b3d9" />
<img width="2500" height="511" alt="image" src="https://github.com/user-attachments/assets/19ad319f-8538-47cc-9376-45ccf84585ab" />
<img width="2486" height="595" alt="image" src="https://github.com/user-attachments/assets/0a851023-dfa9-4456-824f-37c49910627c" />
<img width="2470" height="994" alt="image" src="https://github.com/user-attachments/assets/0c3c9c65-df8a-4df5-8356-8ae52cdac761" />




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
