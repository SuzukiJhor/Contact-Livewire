
### 📇 Projeto Contact Livewire

Aplicação desenvolvida com Laravel e Livewire, executada em um ambiente isolado via Docker.
Integração entre front-end e back-end utilizando componentes reativos do Livewire, permitindo o cadastro e listagem dinâmica de contatos em uma página.


### 🚀 Tecnologias utilizadas

- Laravel – Framework PHP para back-end robusto e escalável
- Livewire – Criação de interfaces dinâmicas sem uso direto de JavaScript
- Docker – Ambiente containerizado para fácil configuração e execução
- PHP 8.3 – Versão moderna e compatível com atributos nativos
- MySQL – Banco de dados relacional
- Bootstrap – Estilização simples e responsiva

### 🐳 Como rodar o projeto localmente
Clone Repositório
```sh
git clone https://github.com/ThiagolFPereira/setup-docker-laravel-11.git
```
```sh
cd setup-docker-laravel-11
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)
