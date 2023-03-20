
  SUPER USUÁRIO:
  Login: master@gmail.com
  senha: master
 
  Usuário limitado:
  Login: comum@gmail.com
  senha: comum@gmail.com
 

 

- Tela de Login  
	- Responssivo  
	- 3 tentativas, bloqueio por 60 segundos
	- sesão aplicadas em todas as páginas
	- nível de acesso
	- serviço externo para capturar ip https://api.ipify.org
	- capturando senha com base64_encode() para codificar a senha no banco
	- utulizando addSlesh nos inputs para evitar SQL injection
	- permitindo cadastro de novos usuários para testes
	- botão para deslogar
	

- Banco
	- O uso de forenkey causa lentidão ao banco, preferi fazer o link de relação pelo código
	- senha do banco: manypass
	- arquivo sql para importação na pasta docs do projeto
	- respeitada as regras de acesso ao banco do codeignite


- Auteração de tabelas
	- cinza para itens inativos
	- bloqueados para auteração
	- adicionando novos itens

- versionamento 
	- desenvolvido na branch develop e emergido para a principal no fim do projeto
	- gitHub  https://github.com/skymarkos7
	


- Web Service
	- http://localhost/ci/index.php/ws
	- autenticao de

