<?php

if(empty($_GET['data'])){//navegaçao entre os meses
    $dia = date('d');
    $month = ltrim(date('m'),"0");
    $ano = date('Y');
}else{
    $data = explode('/',$_GET['data']);//nova data
    $dia = $data[0];
    $month = $data[1];
    $ano = $data[2];
}
    
    echo $dia.'/'.$month;
if($month==1){//mês anterior se janeiro mudar valor
    $mes_ant = 12;
    $ano_ant = $ano - 1;
}else{
    $mes_ant = $month - 1;
    $ano_ant = $ano;
}
if($month==12){//proximo mês se dezembro tem que mudar
    $mes_prox = 1;
    $ano_prox = $ano + 1;
}else{
    $mes_prox = $month + 1;
    $ano_prox = $ano;
}
$hoje = date('j');//função importante pego o dia corrente
$n = '';
switch($month.$n){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
    case 1: $mes = "JANEIRO";
        $n = 31;
        break;
    case 2: $mes = "FEVEREIRO";// todo ano bixesto fev tem 29 dias
        $bi = $ano % 4;//anos multiplos de 4 são bixestos
        if($bi == 0){
            $n = 29;
        }else{
            $n = 28;
        }
        break;
    case 3: $mes = "MARÇO";
        $n = 31;
        break;
    case 4: $mes = "ABRIL";
        $n = 30;
        break;
    case 5: $mes = "MAIO";
        $n = 31;
        break;
    case 6: $mes = "JUNHO";
        $n = 30;
        break;
    case 7: $mes = "JULHO";
        $n = 31;
        break;
    case 8: $mes = "AGOSTO";
        $n = 31;
        break;
    case 9: $mes = "SETEMBRO";
        $n = 30;
        break;
    case 10: $mes = "OUTUBRO";
        $n = 31;
        break;
    case 11: $mes = "NOVEMBRO";
        $n = 30;
        break;
    case 12: $mes = "DEZEMBRO";
        $n = 31;
        break;
}
$pdianu = mktime(0,0,0,$month,1,$ano);//primeiros dias do mes
$dialet = date('D', $pdianu);//escolhe pelo dia da semana
switch($dialet){//verifica que dia cai
    case "Sun": $branco = 0; break;
    case "Mon": $branco = 1; break;
    case "Tue": $branco = 2; break;
    case "Wed": $branco = 3; break;
    case "Thu": $branco = 4; break;
    case "Fri": $branco = 5; break;
    case "Sat": $branco = 6; break;
}
echo '<table class="tabela" >';//construção do calendario
echo '<tr>';
echo '<td class="mes"><a href="?data='.$dia.'/'.$mes_ant.'/'.$ano_ant.'" title="Mês anterior"> << </a></td>';/*mês anterior*/
echo '<td class="mes" colspan="5">'.$mes.'/'.$ano.'</td>';/*mes atual e ano*/
echo '<td class="mes"><a href="?data='.$dia.'/'.$mes_prox.'/'.$ano_prox.'" title="Próximo mês"> >> </a></td>';/*Proximo mês*/
echo '</tr><tr>';
echo '<td class="sem">D</td>';//echoar os dias da semana
echo '<td class="sem">S</td>';
echo '<td class="sem">T</td>';
echo '<td class="sem">Q</td>';
echo '<td class="sem">Q</td>';
echo '<td class="sem">S</td>';
echo '<td class="sem">S</td>';
echo '</tr><tr>';
$dt = 1;
if($branco > 0){
    for($x = 0; $x < $branco; $x++){
        echo '<td>&nbsp;</td>';/*preenche os espaços em branco*/
        $dt++;
    }
}
for($i = 1; $i <= $n; $i++ ){/*agora vamos no banco de dados verificar os evendos*/
    $dtevento = $i."-".$month."-".$ano;
    $sqlag = mysql_query("SELECT * FROM agenda WHERE dtevento = '$dtevento'") or die(mysql_error());
    $num = mysql_num_rows($sqlag);/*quantos eventos tem para o mes*/
    $idev = @mysql_result($sqlag, 0, "dtevento");
    $eve = @mysql_result($sqlag, 0, "evento");
    if($num > 0){/*prevalece qualquer dia especial do calendario, por isso está em primeiro*/
        echo '<td class="evt">';
        echo '<a href="?d='.$idev.'&data='.$dia.'/'.$month.'/'.$ano.'" title="'.$eve.'">'.$i.'</a>';
        echo '</td>';
        $dt++;/*incrementa os dias da semana*/
        $qt++;/*quantos eventos tem no mes*/
    }elseif($i == $hoje){/*imprime os dia corrente*/
        echo '<td class="hj">';
        echo $i;
        echo '</td>';
        $dt++;
    }elseif($dt == 1){/*imprime os domingos*/
        echo '<td class="dom">';
        echo $i;
        echo '</td>';
        $dt++;
    }else{/*imprime os dias normais*/
        echo '<td class="td">';
        echo $i;
        echo '</td>';
        $dt++;
    }
    if($dt > 7){/*faz a quebra no sabado*/
        echo '</tr><tr>';
        $dt = 1;
    }
}
echo '</tr>';
echo '</table>';
if($qt > 0){/*se tiver evento no mês imprime quantos tem */
    echo "Temos ".$qt." evento(s) em ".strtolower($mes)."<br>";/*mudar para caixa baixa as letras do mes*/
}
if(isset($_GET['d'])){/*link dos dias de eventos*/
    $idev = $_GET['d'];
    $sqlev = mysql_query("SELECT * FROM agenda WHERE dtevento = '$idev' ORDER BY hora ASC") or die(mysql_error());
    $numev = mysql_num_rows($sqlev);
    for($j = 0; $j < $numev; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
        $eve = @mysql_result($sqlev, $j, "evento");/*pegando os valores do banco referente ao evento*/
        $dev = @mysql_result($sqlev, $j, "dtevento");
        $dsev = @mysql_result($sqlev, $j, "conteudo");
        $auev = @mysql_result($sqlev, $j, "autor");
        $lev = @mysql_result($sqlev, $j, "local");
        $psev = @mysql_result($sqlev, $j, "data");
        $nowev = date('d/m/Y - H:i', strtotime($psev));/*transforma a data para data padrão brazil*/
        $hev = @mysql_result($sqlev, $j, "hora");
        echo '<table width="300" cellspacing="0" cellpadding="0">';/*monta a tabela de eventos*/
        echo '<tr><td class="show">'.$dev.' - '.$eve.'</td></tr>';
        echo '<tr><td class="linha"><b>Hora: </b>'.$hev.'hs</td></tr>';
        echo '<tr><td class="linha"><b>Local: </b>'.$lev.'</td></tr>';
        echo '<tr><td class="linha"><b>Descrição: </b>'.nl2br($dsev).'</td></tr>';/*mantem o quebra da linha para dascriçao do evento*/
        echo '<tr><td class="linha"><b>Postado: </b><small>'.$nowev.'hs por '.$auev.'</small></td></tr>';
        echo '</table>';
    }
}