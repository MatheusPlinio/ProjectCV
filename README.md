ProjectCV
Pré-requisitos
Certifique-se de ter os seguintes componentes instalados em seu ambiente de desenvolvimento:

PHP 8.1
Composer 2.7.4
MySQL
SMTP configurado (pode ser um serviço disponível ou um de teste)
Instalação
Clone o repositório:
bash
git clone <https://github.com/MatheusPlinio/ProjectCV.git>
Navegue até a pasta raiz do projeto e execute o seguinte comando para instalar as dependências:
bash
composer install
Configure o arquivo .env conforme o exemplo em .env.example.
Execute as migrações do banco de dados com o comando:
bash
php artisan migrate
Execução
Para executar a aplicação em ambiente de desenvolvimento, utilize o seguinte comando:

bash
php artisan serve
A aplicação estará disponível em localhost:8000 no seu navegador web.

Testando
Após iniciar o servidor, abra seu navegador e acesse localhost:8000 para testar a aplicação.

Este README fornece instruções claras e concisas para configurar e executar o projeto em seu ambiente local. Se houver qualquer dúvida ou problema, não hesite em entrar em contato.