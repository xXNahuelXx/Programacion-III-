<?php

/*La clase Punto ha de tener dos atributos privados con acceso de sólo lectura (sólo con getters), 
que serán las coordenadas del punto. Su constructor recibirá las coordenadas del punto. 
La clase Rectangulo tiene los atributos privados de tipo Punto _vertice1, _vertice2, _vertice3 y 
_vertice4 (que corresponden a los cuatro vértices del rectángulo). 
La base de todos los rectángulos de esta clase será siempre horizontal. Por lo tanto, debe tener un 
constructor para construir el rectángulo por medio de los vértices 1 y 3. 
Los atributos ladoUno, ladoDos, área y perímetro se deberán inicializar una vez construido el 
rectángulo. 
Desarrollar una aplicación que muestre todos los datos del rectángulo y lo dibuje en la página.*/

include_once "./Rectangle.php";

$vertice1 = new Dot(3, 3);
$vertice3 = new Dot(8, 4);
$rectangulo = new Rectangle($vertice1, $vertice3);
echo "Vertice 1: ({$rectangulo->GetVertex1()->GetX()}, {$rectangulo->GetVertex1()->GetY()})<br>";
echo "Vertice 2: ({$rectangulo->GetVertex2()->GetX()}, {$rectangulo->GetVertex2()->GetY()})<br>";
echo "Vertice 3: ({$rectangulo->GetVertex3()->GetX()}, {$rectangulo->GetVertex3()->GetY()})<br>";
echo "Vertice 4: ({$rectangulo->GetVertex4()->GetX()}, {$rectangulo->GetVertex4()->GetY()})<br>";
echo "Lado uno: {$rectangulo->GetSideOne()}<br>";
echo "Lado dos: {$rectangulo->GetSideTwo()}<br>";
echo "Area: {$rectangulo->getArea()}<br>";
echo "Perimetro: {$rectangulo->GetPerimeter()}<br><br>";

$rectangulo->Draw();
