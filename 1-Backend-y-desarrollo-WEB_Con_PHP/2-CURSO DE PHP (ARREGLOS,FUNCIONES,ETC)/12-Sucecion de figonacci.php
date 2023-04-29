<!-- La secuencia de Fibonacci es una sucesión infinita de números naturales, descrita por primera vez por el 
matemático italiano Fibonacci en el siglo XIII. Esta serie numérica empieza con 0 y 1, siguiendo con la suma 
de los dos números anteriores hasta el infinito: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233. -->

casos de uso el resultado del siguiente numero sera la suma de el anterior mas el actual
2->1
3->2
4->3
5->5
6->6
7->13
8->21
 <?php
$destinos= 8;
$anterior=0;
$actual=1;
for($i=2; $i<=$destinos; $i++)
{
    $temporal=$actual;
    $actual =$anterior;
    $anterior=$temporal;

}
echo "Hay $actual formas distintas de obtener el numero";
echo "\n";