📦 CRUD Básico com Laravel e Bootstrap

Um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido em Laravel e estilizado com Bootstrap 5, ideal para quem está aprendendo o framework ou precisa de uma base para sistemas de gerenciamento.
🚀 Funcionalidades

✔ Cadastro de produtos (nome, descrição, preço, quantidade)
✔ Listagem em tabela responsiva
✔ Edição e exclusão de registros
✔ Validação de formulários (campos obrigatórios, tipos de dados)
✔ Mensagens de feedback (sucesso, erro)
🛠 Tecnologias Utilizadas

    Backend:

        PHP 8+

        Laravel 10

        Eloquent ORM

        MySQL

    Frontend:

        Bootstrap 5 (estilização responsiva)

        Blade Templates

⚙️ Como Executar o Projeto
Pré-requisitos

    PHP 8.0+

    Composer

    MySQL

    Git (opcional)

Passo a Passo

    Clone o repositório
    bash

git clone https://github.com/seu-usuario/laravel-crud-bootstrap.git
cd laravel-crud-bootstrap

Instale as dependências
bash

composer install

Configure o banco de dados

    Crie um banco MySQL

    Copie .env.example para .env e edite:
    ini

    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

Execute as migrations e seeders (opcional)
bash

php artisan migrate
# Se quiser dados de teste:
php artisan db:seed

Inicie o servidor
bash

    php artisan serve

    Acesse: http://localhost:8000/produtos

📂 Estrutura do Projeto

laravel-crud-bootstrap/
├── app/
│   ├── Models/Produto.php          # Model do produto
│   └── Http/Controllers/ProdutoController.php  # Lógica CRUD
├── database/
│   ├── migrations/                 # Tabela de produtos
│   └── seeders/                    # Dados fictícios (opcional)
├── resources/
│   ├── views/
│   │   ├── produtos/               # Páginas do CRUD
│   │   └── layouts/app.blade.php   # Template base
├── routes/web.php                  # Rotas
└── public/                         # Assets (CSS/JS)

📌 Aprendizados e Desafios

🔹 Validação de dados: Ajustes em regras como required vs require.
🔹 Tratamento de erros: Mensagens claras para o usuário.
🔹 Bootstrap + Blade: Integração eficiente para um frontend limpo.
🔗 Links Úteis

    Documentação do Laravel

    Bootstrap 5 Docs

📜 Licença

MIT License. Sinta-se à vontade para usar e modificar!

🌟 Dúvidas ou sugestões? Abra uma issue ou contribua com um PR!

#Laravel #PHP #CRUD #Bootstrap #OpenSource# crud_laravel
