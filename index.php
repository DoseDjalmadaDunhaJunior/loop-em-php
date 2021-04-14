<?php
# rodar o comando php -S localhost:8082 no terminal
#while
$i = 0;
while ($i < 10){
    echo 'por enquanto é menor que 10<br/>';
    $i++;
}
echo 'agora é 10 <br/>';
echo '======================<br/>';

#do while
$i = 0;
do{
    echo 'voltamos a imprimir ';
    echo $i;
    echo '<br/>';
    $i++;
}while($i < 10);

#for
echo '======================<br/>';

for ($i = 0; $i < 10; $i++){
    echo 'voltamos a imprimir ';
    echo $i;
    echo '<br/>';
}

#foreach é usado para vetores
echo '======================<br/>';
$i = [1,2,3,4,5,6,7,8,9];
foreach ($i as $j){
    echo 'voltamos a imprimir ';
    echo $j;
    echo '<br/>';
}

