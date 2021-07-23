<?php

$i = date("m");
$i = intval($i);

/* Verificar qual o mês atual conforme servidor onde o portal está hospedado,
em seguida, para o mês, será */


if($i == 1){
    echo $resultado . "<a href='/cores'><div height='35' style='border-style: solid;border-width: 1px;border-color: gray;background: #FFFFFF;line-height: 35px;text-align: center;font-color:#000000;'>Janeiro Branco - Alerta sobre a saúde mental</div></a>";
}
elseif($i == 2){
    echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(128,0,128,1) 32%, rgba(255,165,0,1) 59%); ;line-height: 35px;text-align: center;font-color:#000000;'>Fevereiro Roxo e Laranja - Conscientização sobre lúpus, fibromialgia e mal de alzheimer e leucemia</div></a>";
}
elseif($i == 3){
    echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(200,162,200,1) 44%, rgba(30,144,255,1) 67%);line-height: 35px;text-align: center;font-color:#000000;'>Março Lilás e Azul - Conscientização e prevenção ao câncer do colo do útero e prevenção ao câncer colorretal</div></a>";
}
elseif($i == 4){
        echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(34,139,34,1) 35%, rgba(30,144,255,1) 67%);line-height: 35px;text-align: center;font-color:#000000;'>Abril Verde e Azul - Mês de prevenção ao acidente de trabalho e Conscientização sobre o autismo</div></a>";
}
elseif($i == 5){
    echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(255,255,0,1) 47%, rgba(255,0,0,1) 58%);line-height: 35px;text-align: center;font-color:#000000;'>Maio Amarelo e Vermelho - Mês da prevenção ao acidente de trânsito e Conscientização sobre a Hepatite</div></a>";
}
elseif($i == 6){
    echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(255,0,0,1) 39%, rgba(255,165,0,1) 59%); ;line-height: 35px;text-align: center;font-color:#000000;'>Junho Vermelho e Laranja - Mês de conscientização sobre a anemia, leucemia e doação de sangue </div></a>";
}
elseif($i == 7){
        echo $resultado . "<a href='/cores'><div height='35' style='background-color: #FFF000;line-height: 35px;text-align: center;font-color:#000000;'>Julho Amarelo - Mês do combate às hepatites virais</div></a>";
}
elseif($i == 8){
    echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(255,165,0,1) 44%, rgba(255,215,0,1) 72%);line-height: 35px;text-align: center;font-color:#000000;'>Agosto Laranja e Dourado - Informar e conscientizar sobre a esclerose múltipla e o aleitamento materno</div></a>";
}
elseif($i == 9){
        echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(34,139,34,1) 45%, rgba(255,255,0,1) 58%);line-height: 35px;text-align: center;font-color:#000000;'>Setembro Verde e Amarelo - Prevenção do câncer de intestino, Conscientização sobre a doação de órgãos e Prevenção do suicídio</div></a>";
}
elseif($i == 10){
        echo $resultado . "<a href='/cores'><div height='35' style='background-color:#FF1493;line-height: 35px;text-align: center;font-color:#000000;'>Outubro Rosa - Mês de prevenção ao câncer de mama</div></a>";
}
elseif($i == 11){
        echo $resultado . "<a href='/cores'><div height='35' style='background-color:#1E90FF;line-height: 35px;text-align: center;font-color:#000000;'>Novembro Azul - Mês de prevenção ao câncer de próstata</div></a>";
}
elseif($i == 12){
        echo $resultado . "<a href='/cores'><div height='35' style='background: linear-gradient(90deg, rgba(255,0,0,1) 32%, rgba(255,165,0,1) 59%);line-height: 35px;text-align: center;font-color:#000000;'>Dezembro Vermelho e Laranja - Mês de prevenção a AIDS e Combate ao câncer de pele</div></a>";
}


?>
