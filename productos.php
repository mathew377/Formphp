<?php
$Producto1 = $_POST['Producto1'];
$Producto2 = $_POST['Producto2'];
$Producto3 = $_POST['Producto3'];
$PrecioP1 = $_POST['PrecioP1'];
$PrecioP2 = $_POST['PrecioP2'];
$PrecioP3 = $_POST['PrecioP3'];
$SumaProductos = PrecioP1+PrecioP2+PrecioP3;
$Descuento= SumaProductos*0.16;
$Total= SumaProductos-Descuento;





echo "El producto numero 1 es: " . $Producto1 ;
echo "El producto numero 2 es: " . $Producto2 ;
echo "El producto numero 3 es: " . $Producto3 ;
echo "La Suma de los productos es de: " . $SumaProductos;
echo "El Desucento es de: " . $Decuento;
echo "El Total a pagar es de: " . $Total;

?>
