<?php
header('Content-Type: application/json');

//SALVA O JSON QUE FOI RECEBIDO

$recebido = file_get_contents('php://input');
file_put_contents('test.txt', $recebido);


$recebido = json_decode($recebido);
$processo = $recebido->result->parameters->processo;

$query = "select concat('Seu processo de numero  ', p.numero_processo, ', foi autuado no dia ', date_format(p.dt_autuacao,'%d/%m/%Y'),', a ultima movimetação do dia ', date_format(pe.dt_atualizacao, '%d/%m/%Y'), ' com a seguinte descrição: ', descricao,'') descricao from processo_evento pe join processo p on p.codigo_processo=pe.codigo_processo where p.numero_processo='".$processo."' order by pe.codigo_processo_evento desc limit 1";


$link = mysqli_connect("127.0.0.1", "root", "TrGPmUNj2685PuxnaYpp", "hackjus1");
if ($link) {

			$result = $link->query ($query);


		$row = $result->fetch_row();
        $speech =  $row[0];  	
		if ($row[0]=='') {
			$speech =  'Processo não encontrado'; 
		}
	}

$json_response =  '{
  "messages":[
     {
        "speech":"'. $speech . '",
        "type":0
     }
  ],
  "speech":"'. $speech . '"
}';

echo $json_response;
