<?php
$conexao = new Mongo();
//$conn = new Mongo("127.0.0.1:27017");

//Se a base não existir, ela é criada - portanto certifique-se do nome da base
$db = $conexao->selectDB('teste');

//Fazendo ajustes para mudar o conteudo do arquivo

$clientes = array(
'nome'		=> "Ari Stopassola Junior",
'endereco'	=> "Dona Carlinda, 933",
'cidade'		=> "Gramado",
'UF'			=> "Rio Grande do Sul",
'CEP'			=> "95670-000"
);

//$db->addresses->insert($clientes);

//$colecao = $db->addresses;
//alternativamente

$colecao = $conexao->teste->addresses;

//Inserção assincrona - comportamento default
$colecao->insert($clientes);

$id = $colecao->getTimestamp();
echo $id;

//$colecao->insert($clientes, array('safe'=>true));

//Finaliza a conexão - dispara o __destructor da classe Mongo()
//$conexao = null;
?>
