
# Projeto "Workflow de aprovação de documentos"
## Informações Gerais
O projeto foi desenvolvido utilizando as seguintes tecnologias e metodologias:

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
- Para instalar a autenticação com jetstream livewire foi necessário instalar o composer (globalmente) no container do php e executar pelo bash (Mais informações em breve)
- Executar as migrations: docker-compose run artisan migrate
### Obrigado!

