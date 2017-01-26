<?php
$idAula = $_GET['Id'];
$QueryBuscarAgenda = "SELECT * FROM agenda_aulas WHERE id = '$idAula'";
$ExeQrBuscarAgenda = mysql_query($QueryBuscarAgenda);

if (mysql_num_rows($ExeQrBuscarAgenda) > 0) {
    while ($resEventoId = mysql_fetch_assoc($ExeQrBuscarAgenda)) {
        ?>
        <div class="col-md-12">
            Dia da aula: <?php echo date('d/m/Y', strtotime($resEventoId['data'])) ?><br>
            Aula de: <?php echo $resEventoId['materia']; ?><br>
            Professor: <?php echo $resEventoId['prof']; ?>
        </div>
        <?php
    }
}