<?php

/* * ********************************
 * Criação do DB por dia de aula
 * *********************************
 * Verificar a existência da tabela do dia inserido
 */
$tabelaDataAgendamento = date('d_m_Y', strtotime($dataAula));
$tabelaDataAgendamentoSala1 = date('d_m_Y', strtotime($dataAula)) . "_sala1";
$tabelaDataAgendamentoSala2 = date('d_m_Y', strtotime($dataAula)) . "_sala2";
$tabelaDataAgendamentoSala3 = date('d_m_Y', strtotime($dataAula)) . "_sala3";
$tabelaDataAgendamentoSala4 = date('d_m_Y', strtotime($dataAula)) . "_sala4";
$tabelaDataAgendamentoSala5 = date('d_m_Y', strtotime($dataAula)) . "_sala5";
$tabelaDataAgendamentoSala6 = date('d_m_Y', strtotime($dataAula)) . "_sala6";
$resultAgDataBase = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamento'");
$ResultAgDataSala1 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala1'");
$ResultAgDataSala2 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala2'");
$ResultAgDataSala3 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala3'");
$ResultAgDataSala4 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala4'");
$ResultAgDataSala5 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala5'");
$ResultAgDataSala6 = mysql_query("SHOW TABLES LIKE '$tabelaDataAgendamentoSala6'");

/*
 * Exibição da quantidade de horas
 */
echo "Tempo de Aula: " . $tempoDeAula;
echo "<br>";
echo "Sala: " . $salaDeAula = date('d_m_Y', strtotime($dataAula)) . "_" . $salaDeAula;
echo "<br>";
echo "Dia da Aula: " . $dataAula;
echo "<br>";
/*
 * Verificação da existência das tabelas
 */
$tabelaExistsDiaBase = mysql_num_rows($resultAgDataBase) > 0;
$tabelaExistsDiaBaseSala1 = mysql_num_rows($ResultAgDataSala1) > 0;
$tabelaExistsDiaBaseSala2 = mysql_num_rows($ResultAgDataSala2) > 0;
$tabelaExistsDiaBaseSala3 = mysql_num_rows($ResultAgDataSala3) > 0;
$tabelaExistsDiaBaseSala4 = mysql_num_rows($ResultAgDataSala4) > 0;
$tabelaExistsDiaBaseSala5 = mysql_num_rows($ResultAgDataSala5) > 0;
$tabelaExistsDiaBaseSala6 = mysql_num_rows($ResultAgDataSala6) > 0;

//Criação das tabelas para o dia agendado
include_once 'pages/extra/CreateTableSalaBase.php';
include_once 'pages/extra/CreateTableSala1.php';
include_once 'pages/extra/CreateTableSala2.php';
include_once 'pages/extra/CreateTableSala3.php';
include_once 'pages/extra/CreateTableSala4.php';
include_once 'pages/extra/CreateTableSala5.php';
include_once 'pages/extra/CreateTableSala6.php';

echo "Verificando o a tabela no Banco de dados para o dia: <b>" . $tabelaDataAgendamento . "</b>...<br>";

if ($tabelaExistsDiaBase && $tabelaExistsDiaBaseSala1 && $tabelaExistsDiaBaseSala2 && $tabelaExistsDiaBaseSala3 && $tabelaExistsDiaBaseSala4 && $tabelaExistsDiaBaseSala5 && $tabelaExistsDiaBaseSala6) {
    echo "Já existem as tabelas<br>";
    $tempoAula = $tempoDeAula;
    echo $salaDeAula;
    echo "<br>";
    include_once 'pages/extra/switchUpdateSala.php';
} else {
    echo "Não existem as tabelas, criando...<br>";
    $CriarATabela = mysql_query($CriarTabelaDoDiaAgendado);
    $CriarATabela1 = mysql_query($CriarTabelaDoDiaAgendadoSala1);
    $CriarATabela2 = mysql_query($CriarTabelaDoDiaAgendadoSala2);
    $CriarATabela3 = mysql_query($CriarTabelaDoDiaAgendadoSala3);
    $CriarATabela4 = mysql_query($CriarTabelaDoDiaAgendadoSala4);
    $CriarATabela5 = mysql_query($CriarTabelaDoDiaAgendadoSala5);
    $CriarATabela6 = mysql_query($CriarTabelaDoDiaAgendadoSala6);
    /*
     * Inserir os Registros nas tabelas das salas de aulas
     */
    include_once 'pages/extra/InserirRegistrosDasSalas.php';
    if ($CriarATabela && $tabelaDataAgendamento) {
        echo "Sala Base Criada, todos os registros serão armazenados aqui <br>";
    }
    if ($CriarATabela1 && $registrosSala1) {
        echo "Sala 1 Criada <br>";
    }
    if ($CriarATabela2 && $registrosSala2) {
        echo "Sala 2 Criada <br>";
    }
    if ($CriarATabela3 && $registrosSala3) {
        echo "Sala 3 Criada <br>";
    }
    if ($CriarATabela4 && $registrosSala4) {
        echo "Sala 4 Criada <br>";
    }
    if ($CriarATabela5 && $registrosSala5) {
        echo "Sala 5 Criada <br>";
    }
    if ($CriarATabela6 && $registrosSala6) {
        echo "Sala 6 Criada <br>";
    }
    /*
     * Atualizar o Registro dentro da sala escolhida
     */
    $tempoAula = $tempoDeAula;
    echo $salaDeAula;
    echo "<br>";
    include_once 'pages/extra/switchUpdateSala.php';
}