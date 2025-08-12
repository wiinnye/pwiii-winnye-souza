**#Aula02 - 11/08**

*Na aula criamos um projeto novo para a segunda aula, com o Laravel.*

Passo a Passo de como se criar um projeto no laravel:

 - **obs:** Clonar o repositório dentro da pasta xampp > htdocs. 
 - [ 1 ] Consultamos a documentação do Laravel: [https://laravel.com/docs](https://laravel.com/docs/12.x/installation)
 - [ 2 ] Verificamos se o Xampp está funcionando, sem ele o laravel não funcionará.
 - [ 3 ] Instalar o composer, caso não houver, ele é o gerenciador de pacotes do PHP: [https://getcomposer.org/](https://getcomposer.org/)
 - [ 4 ] No menu inicial vamos procurar por *"Windows Powershell"* e ir na opção *"Executar como Administrador"*.
 - [ 5 ] Em seguida colocar o comando descrito na documentação do Laravel.    
 - [ 6 ] Após isso entrar no repositório – abrir novo **windows  powershell** e criar um novo projeto.
    > - laravel new nome-projeto
    > - None
    > - Sqlite
    > - yes
    >  - cd  example-app
    >  - code .

**#Configuração**

Arquivo .env = environment ( Ambiente )

O .env é um arquivo que nunca se soube para o github, por conter dados sensíveis.

 1. Criar um duplicar do **".env.example** e renomear  a cópia apenas como o **".env"**.
 2.  Dentro do projeto, executar o comando "composer  install", ele    instala dependências do PHP e gera pasta vendor.
 3. Gerar e instalar a dependência do node js com o comando "npm     install " ou "npm I".
 4.  Após o npm  install, usar o comando *"npm build"*, ele irá    transformar o arquivo de forma que a máquina ira entender. (building).
 5. O *"php  artisan  key:generate"*, O comando irá gerar uma chave criptografia.
   -   *php  artisan* : tem todos os comandos;
 6. Database: migrations - ORM é mapeamento de objeto gerenciado, ele    trabalha com linguagem alternativa. O comando "php  artisan  migrate", ele cria o banco de dado,  "database.sqlite" na pasta database.
 7.  Por fim, rodar o comando *"composer run dev"*, para iniciar o projeto.
