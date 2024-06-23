# alpha

Requer:
- PHP 8
- MySQL
- Servidor Apache (xampp, Lamp ou qualquer outro)
----------------------------------------------------------------------
- Para instalar basta clonar ou descompactar o reposítório em uma pasta no servidor (normalmente www/alpha htdocs/alpha)
- Depois disso é necessario criar o banco de dados em sua instalação MYSQL
- Com o banco de dados criado é hora de configurar as variáveis:
  - Na raiz do projeto abra o arquivo config.php
  - Configure as váriaveis, segue um exemplo:
      ```
      $base_url = '/alpha'; // aqui é a pasta em que foi criado o projeto no servidor apache

      $dbHost = 'localhost'; // host do banco
      $dbName = 'alpha2'; //nome do banco
      $dbUser = 'root'; //usuário do banco
      $dbPassword = ''; //senha do banco

      ```
- Agora que configurou é só executar a url install.php exemplo: http://localhost/alpha/install.php
  - Quando carregar a tela clique em 'Instalar DB', se tudo correu bem vai aparecer a mensagem 'Instalação Concluída com sucesso'
  - Obs: caso precise existe um arquivo sql na pasta _utl/alpha.sql

- Se tudo correu bem agora é rodar a aplicação, exemplo: http://localhost/alpha/ - Deve aperecer uma tela parecida com essa https://prnt.sc/yKPOY_PpGuRw

Jorge Luiz  - 19 99229-0105 - luiz2000web@gmail.com
