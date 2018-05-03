<?php
/*
Empezaremos definiendo la jerarquia de clases
*/
class classPoligono
{
  function calculo()
  {
  echo 'El area depende del tipo de poligono';
  }
}

class classCuadrado extends classPoligono
{
  function calculo()
  {
  echo 'area de un cuadrado : a=l*l<br>';
  }
}

class classRectangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un rectangulo : a=b*h<br>';
  }
}

class classTriangulo extends classPoligono
{
  function calculo()
  {
  echo 'area de un triangulo : a=(b*h)/2<br>';
  }
}
/* fin definicion de la jerarquia de clases */

/* 
definition of the function in charge of making the calls 
polymorphic to the "calculation" method
To emphasize that in the definition of the function we define the type 
parameter that we pass by reference, this is not obligatory 
in PHP, but it helps us to understand the concept and to be able to apply it. 
in other, stricter languages.
 */
function area(classPoligono $obj)
{
  $obj->calculo();
}

/*
Creamos los objetos necesarios
*/
$cuadrado = new classCuadrado;
$rectangulo = new classRectangulo;
$triangulo = new classTriangulo;

/*
We execute the function in charge 
to make the polymorphic call
*/
area($cuadrado);
area($rectangulo);
area($triangulo);
/*
 * refers to the ability to access multiple functions through the same interface. 
 * That is to say that the same identifier, or function can have different behaviors depending on the context in which it is executed.
 
 */
?>