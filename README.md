Projeto feito com Laravel 12 e PHP 8.2. Sistema Operacional: Ubuntu 22.04.

Instruções para instalação:

### Entrar na pasta em que o projeto deve ser clonado
cd /var/www/html/

### Clonar o repositório
git clone https://github.com/janrochasn/teste.git

### Fazer o build
docker-compose up -d --build

### Executar as migrations para criação das tabelas no container do back-end
cd /var/www/html/teste/backend
php artisan migrate --force

### Executar os seeds para popular as tabelas de categorias e produtos
php artisan db:seed --force

### Abrir o front-end
http://localhost:3000/cadastrar