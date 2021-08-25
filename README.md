# Sistema de previsão de demanda e controle de estoque
<p>Inicialmente a previsão de demanda baseada no modelo matemático mmq foi implementado em linguagem C e agora está sendo implementado em PHP com uma intergace mais moderna e com maiores recursos. Tudo está sendo desenvolvido a título de aprendizado da linguagem PHP utilizando o framework codeigniter</p>

<h2>Processo de instalação</h2>

<ol>
  <li>
    Baixe o sistema e faça a extração na pasta que contém os sites do seu servidor web ("htdocs" no xampp ou "/var/www/html" no lamp).
  </li>
  <li>
    Importe o banco de dados que está na pasta "sql" do sistema.
  </li>
  <li>
    No arquivo "/application/config/config.php" faça a alteração do "$config['base_url']" adicionando o domínio do seu site ou o ip correspondente (exemplo caso o servidor seja local: "$config['base_url'] = 'http://localhost/NOME_DA_PASTA_ONDE_ESTÁ_O_SISTEMA/';").
  </li>
  <li>
    No arquivo "/application/config/database.php" faça a alteração dos dados do seu banco de dados (principalmente o nome do usário do SGBD 'username', a senha desse usuário 'password' e o nome do banco de dados 'database').
  </li>
  <li>
    IMPORTANTE
    A base de dados está sendo atualizada diretamente no arquivo mmq.sql na pasta SQL disponível na raiz do projeto. Caso realize um fork do repositório, gentileza sempre restaurar o backup atualizado utilizando o arquivo
  </li>
</ol>
