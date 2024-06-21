<?php
echo "funções";
echo "<BR>";
$TEXTO="2D";
echo ISSET($TEXTO)."<BR>";
echo EMPTY($TEXTO)."<BR>";

// OUTRAS FUNÇÕES AQUI

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
//cos() retorna o cosseno do parâmetro num. O parâmetro num deve estar em radianos.
echo cos(9_78);

//O valor absoluto de num. Se o argumento num for do tipo float, o número retornado também será float, caso contrário será int (pois float normalmente tem uma faixa de valores maior que int). 
var_dump(abs(-4.2));
var_dump(abs(5));
var_dump(abs(-5));

//O argumento a ser processado 
echo exp(12) . "\n";
echo exp(5.7);

//bindec() interpreta todos os valores de binary_string como inteiros sem sinal. Isto é devido a bindec() enxergar o bit mais significativo como uma outra ordem de magnitude e não como um bit de sinal. 
echo bindec('110011') . "\n";
echo bindec('000110011') . "\n";

echo bindec('111');

//O número a ser convertido. Quaisquer caracteres inválidos em num serão ignorados silenciosamente. A partir do PHP 7.4.0, informar caracteres inválidos está defasado. 
$hexadecimal = 'a37334';
echo base_convert($hexadecimal, 16, 2);


// Precisão depende de sua diretiva precision
echo sqrt(9); // 3
echo sqrt(10); // 3.16227766 ...

//O argumento para processar em radianos 
echo tan(M_PI_4); // 1

//O float a ser verificado 
$inf = 1e308 * 2;

var_dump($inf, is_infinite($inf));

$negative_inf = -$inf;

var_dump($negative_inf, is_infinite($negative_inf));


//num1 O dividendo, num2 O divisor



$x = 5.7;
$y = 1.3;
$r = fmod($x, $y);
// $r é igual a 0.5, porque 4 * 1.3 + 0.5 = 5.7


//num Valor do ângulo em graus

echo deg2rad(45); // 0.785398163397
var_dump(deg2rad(45) === M_PI_4); // bool(true)



?>
