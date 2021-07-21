# Projeto "Workflow de aprovação de Reembolsos" (W.I.P.)
Implementação de workflows através de solicitações via formulário. Implementação inicial de "Fluxo de Solicitação de Reembolso".
Inicialmente pensado para servir exclusivamente como Solicitação de Reembolso, o sistema está sendo construído para permitir a criação de diversos fluxos distintos através de parametrizações.
## Informações Gerais
O projeto está sendo desenvolvido utilizando as seguintes tecnologias e metodologias:

 - PHP
 - Framework Laravel
 - MySQL
 - Composer (gerenciador de dependências)
 - Docker
 - NPM

## Instalação

- Download do Repositório
- Build do Docker: docker-compose up -d --build
- Build do Laravel: docker-compose run composer create-project --prefer-dist laravel/laravel
- Executar as migrations: docker-compose run artisan migrate
- Executar as seeders: docker-compose run artisan db:seed --class=StepSeeder
### Obrigado!
