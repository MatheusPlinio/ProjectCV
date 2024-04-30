# Projeto XYZ

## Pré-requisitos

Certifique-se de ter os seguintes componentes instalados em seu ambiente de desenvolvimento:

- PHP 8.1
- Composer 2.7.4
- MySQL
- SMTP configurado (pode ser um serviço disponível ou um de teste)

## Instalação

1. Clone o repositório:

    ```bash
    git clone <URL_DO_REPOSITÓRIO>
    ```

2. Navegue até a pasta raiz do projeto e execute o seguinte comando para instalar as dependências:

    ```bash
    composer install
    ```

3. Configure o arquivo `.env` conforme o exemplo em `.env.example`.

4. Execute as migrações do banco de dados com o comando:

    ```bash
    php artisan migrate
    ```

## Execução

Para executar a aplicação em ambiente de desenvolvimento, utilize o seguinte comando:

```bash
php artisan serve
