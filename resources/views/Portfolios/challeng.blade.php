<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">
    <title>Desafio</title>
</head>

<body>

    <div class="container-sm">
    <a href=" {{route('home.index')}}">voltar</a>
                <h1>Desafios do projeto</h1>
                <p>
                    __Olá tudo bem com vocês,vou mensionar aqui minha opinião sobre esse framwork incrivel que é o Laravel,e essa foi a primeira vez,  Que eu tive contato com esse framwork,
                   assisti alguns tuturiais no youtube,sobre rotas, class,views,blade,e sistema M V C do Laravel que,   ajuda muito divide as reponsabilidades M de models, V views, C Controller, 
                   as views é a parte visual que o suário vai interagir,Controller fica regra de negocios onde fica todos metados declarados nas Roatas chamando o Controller expecífico,e os Models 
                   são referenciados com as migrates e também se define no model quais campos da tabela poden ser preenchidos ex:   protected $fillable = [
        'name',
        'email',
        'password',
    ]; assim você define que compo name, email, passoword poden ser preenchido,uma proteção de segurança do Laravel,mais uma medida de segurança é o token que é gerado pelo Laravel
    atrávéz da diretiva '@-csrf' que tem que ser acrecentado no form para que ele saibá que realmente a requisição esta partindo daquele determinado form,mensionei sobre as migrates a cima, então elas facilitão principalmente 
    se tiver trabalhando com equipe porque sempre que alguén de sua equipe rodar as migrates vai saber exatamente o que o outro da equipe mudou, mas as migrates não é exclusiva do Laravel , no Laravel são criadas com comando php artisan
     make:migrate "nome da migrate" ou  php artisan make:model "nome do model" -m já vai criar o model e migrate jutos, o Models vai ser criado dentro de app/Models,e a migrate vai ser criada database/migrations,quando você começa um projeto Laravel
     ele cria toda essa strutura para voçê todas as pastas separadas e pasta public é a pasta web accessible,que siginifica que é a pasta que vai estar publica acessivel a web:<br>
     __Sobre esse comando php artisan que serve para rodar as migrate criar diretorios,class,Controllers,Models e muito mais coisas no meu caso ele é excultado dentro no workspace do laradock,
     ,dentro do container que esta rodando o workspace do laradock no caso depois de subir os containers eu dou sudo docker exec -it laradock_workspace_1 bash e pronto ele dar algo assim root@e4d0f1efb3cb:/var/www# ,e aqui dentro posso execultar php artisan,
     com esse comando ele já te mostra toda lista de comando que ele posui:Available commands:
  clear-compiled        Remove the compiled class file
  completion            Dump the shell completion script
  db                    Start a new database CLI session
  down                  Put the application into maintenance / demo mode
  env                   Display the current framework environment
  help                  Display help for a command
  inspire               Display an inspiring quote
  list                  List commands
  migrate               Run the database migrations
  optimize              Cache the framework bootstrap files
  serve                 Serve the application on the PHP development server
  test                  Run the application tests
  tinker                Interact with your application
  up                    Bring the application out of maintenance mode
 adminlte
  adminlte:install      Install all the required files for AdminLTE, and additional resources
  adminlte:plugins      Manages the installation and removal of additional AdminLTE plugins
  adminlte:status       Checks the installation status of the AdminLTE resources
  adminlte:update       Update all the required assets for AdminLTE
 auth
  auth:clear-resets     Flush expired password reset tokens
 cache
  cache:clear           Flush the application cache
  cache:forget          Remove an item from the cache
  cache:table           Create a migration for the cache database table
 config
  config:cache          Create a cache file for faster configuration loading
  config:clear          Remove the configuration cache file
 db
  db:seed               Seed the database with records
  db:wipe               Drop all tables, views, and types
 event
  event:cache           Discover and cache the application's events and listeners
  event:clear           Clear all cached events and listeners
  event:generate        Generate the missing events and listeners based on registration
  event:list            List the application's events and listeners
 key
  key:generate          Set the application key
 make
  make:cast             Create a new custom Eloquent cast class
  make:channel          Create a new channel class
  make:command          Create a new Artisan command
  make:component        Create a new view component class
  make:controller       Create a new controller class
  make:event            Create a new event class
  make:exception        Create a new custom exception class
  make:factory          Create a new model factory
  make:job              Create a new job class
  make:listener         Create a new event listener class
  make:mail             Create a new email class
  make:middleware       Create a new middleware class
  make:migration        Create a new migration file
  make:model            Create a new Eloquent model class
  make:notification     Create a new notification class
  make:observer         Create a new observer class
  make:policy           Create a new policy class
  make:provider         Create a new service provider class
  make:request          Create a new form request class
  make:resource         Create a new resource
  make:rule             Create a new validation rule
  make:seeder           Create a new seeder class
  make:test             Create a new test class
 migrate
  migrate:fresh         Drop all tables and re-run all migrations
  migrate:install       Create the migration repository
  migrate:refresh       Reset and re-run all migrations
  migrate:reset         Rollback all database migrations
  migrate:rollback      Rollback the last database migration
  migrate:status        Show the status of each migration
 model
  model:prune           Prune models that are no longer needed
 notifications
  notifications:table   Create a migration for the notifications table
 optimize
  optimize:clear        Remove the cached bootstrap files
 package
  package:discover      Rebuild the cached package manifest
 queue
  queue:batches-table   Create a migration for the batches database table
  queue:clear           Delete all of the jobs from the specified queue
  queue:failed          List all of the failed queue jobs
  queue:failed-table    Create a migration for the failed queue jobs database table
  queue:flush           Flush all of the failed queue jobs
  queue:forget          Delete a failed queue job
  queue:listen          Listen to a given queue
  queue:monitor         Monitor the size of the specified queues
  queue:prune-batches   Prune stale entries from the batches database
  queue:prune-failed    Prune stale entries from the failed jobs table
  queue:restart         Restart queue worker daemons after their current job
  queue:retry           Retry a failed queue job
  queue:retry-batch     Retry the failed jobs for a batch
  queue:table           Create a migration for the queue jobs database table
  queue:work            Start processing jobs on the queue as a daemon
 route
  route:cache           Create a route cache file for faster route registration
  route:clear           Remove the route cache file
  route:list            List all registered routes
 sail
  sail:install          Install Laravel Sail's default Docker Compose file
  sail:publish          Publish the Laravel Sail Docker files
 schedule
  schedule:clear-cache  Delete the cached mutex files created by scheduler
  schedule:list         List the scheduled commands
  schedule:run          Run the scheduled commands
  schedule:test         Run a scheduled command
  schedule:work         Start the schedule worker
 schema
  schema:dump           Dump the given database schema
 session
  session:table         Create a migration for the session database table
 storage
  storage:link          Create the symbolic links configured for the application
 stub
  stub:publish          Publish all stubs that are available for customization
 vendor
  vendor:publish        Publish any publishable assets from vendor packages
 view
  view:cache            Compile all of the application's Blade templates
  view:clear            Clear all compiled view files
root@e4d0f1efb3cb:/var/www# ;<br>
__Vamos falar agora sobre laradock,ferramenta ecencial para trabalhar com docker


   


     

                </p>
            
    
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>