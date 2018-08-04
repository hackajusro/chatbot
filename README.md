# chatbot
ChatBot integrado ao Portal do TJRO.
O mesmo ChatBot pode ser integrado com Facebook Messenger, Telegram, Skype e, em breve, Whatsapp.

A principal funcionalidade da solução é facilitar o acesso aos serviços do TJRO através de um chatbot, ou seja, utilizando linguagem natural. A solicitação de serviços passa a ser realizada através de um chat ou diretamente de apps que são amplamente utilizados pela sociedade, como o facebook messenger, telegram, skype, …

Problema a ser resolvido: Acesso à Informação, mais especificamente o acesso à consulta processual, certidão negativa e informações sobre ações judiciais. Procura resolver o problema relacionado à dificuldade de uso das aplicações por grande parte da população. 

Impacto: Além da facilidade na obtenção da informação, a ideia é devolver uma informação mais útil do que é apresentado hoje pelos sistemas, numa linguagem de fácil acesso e criar um canal de comunicação direta entre os usuários e o TJ.

Para o desenvolvimento do POC foram utilizadas as seguinte tecnologias:
Pentaho Data Integration - Importaçao dos Dados
MySQL - Armazenamento dos dados
Serviço Cloud DialogFlow(Google) - ChatBot com IA
PHP - Serviço REST para servir o ChatBot com consultas.

Funções:
Consulta processual (consultar o status do processo, estimativa de prazo, posição na fila para julgamento)
Certidão negativa (download imediato da certidão quando possível. Nos casos que demandam uma consulta manual, o usuário será notificado quando a certidão estiver disponível)
Informações sobre ações judiciais

A funcionalidade do chatbot no portal será apresentada durante o hackajus, as funções acima serão apresentadas de forma reduzida, apenas informando links ou dados fictícios. 

Time:
Desenvolvimento - Frederico, José Nogueira e Rodrigo. Infraestrutura: Daniel e José Nogueira. Analista de Negócio: Daniel, Frederico, José Nogueira e Rodrigo
