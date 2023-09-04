<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <title>El Punto del Sabor | Carrito</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

   <!-- Page Preloder -->
   <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Responsive Burger Begin -->
    <?php require('./layout/burger.php')  ?>
    <!-- Responsive Burger End -->

    <!-- Header Section Begin -->
    <?php require('./layout/header.php')  ?>
    <!-- Header Section End -->

     <!-- Sidebar Section Begin -->
     <?php require('./layout/sidebar2.php')  ?>
    <!-- Sidebar Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/puntosaborbanner.png" style="margin-top: -3%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>El Punto del Sabor</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Inicio</a>
                            <span>Carrito</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <form action="carrito2.php" method="POST">
                            <thead>
                                <tr>
                                    <th class="shoping__product">Productos</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $usuario = $_SESSION["usuario"];
                            $cantidad_items = 0;
                            $contador = 0;
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM carrito WHERE usuario='$usuario'";
                        $result=mysqli_query($conexion,$sql);
                        $items_id = array();
                        while($mostrar=mysqli_fetch_array($result)){
                            $cantidad_items++;
                            $id = $mostrar['id'];
                            $producto = $mostrar['producto'];
                            $precio = $mostrar['precio'];
                            $ubicacion = $mostrar['ubicacion'];
                            $cantidad = $mostrar['cantidad'];
                            $carrito_id =  array_push($items_id, $id);
                            $contador++;
                            
                            
                        ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo $ubicacion; ?>" alt="">
                                        <h5><?php echo $producto; ?></h5>
                                        <input type="hidden" name="producto<?php echo $cantidad_items?>" id="producto<?php echo $cantidad_items?>" value="<?php echo $producto ?>">

                                    </td>
                                    <td id="precio<?php echo $cantidad_items?>" class="shoping__cart__price monto">
                                        $<?php echo $precio; ?>
                                    </td>
                                    <input type="hidden" name="precio<?php echo $cantidad_items?>" id="precio<?php echo $cantidad_items?>" value="<?php echo $precio ?>">
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" min="1" value="<?php echo $cantidad ?>" id="cantidad-input<?php echo $cantidad_items?>" name="cantidad<?php echo $cantidad_items?>">
                                            </div>
                                        </div>
                                    </td>
                                    <input type="hidden" name="cantidad_productos" id="cantidad_productos" value="<?php echo $cantidad_items ?>">
                                    <td class="shoping__cart__item__close">

                                        <p><span class="icon_close" onclick="confirmacion(<?php echo $id ?>);"></span></p>
                                    </td>
                                     <input type="hidden" name="carrito_id<?php echo $cantidad_items ?>" id="carrito_id<?php echo $cantidad_items ?>" value="<?php echo $items_id[$contador-1]; ?>">
                        <?php
                        

                         } ?>
                       
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Carrito Total</h5>
                        <ul>
                            <li>Total <span class="subtotal" id="subtotal"></span></li>
                            <input type="hidden" id="subtotal-input" name="subtotal" value="">
                        </ul>
                        <button type="submit" class="primary-btn" style="width: 300px; margin: 0 auto;">FINALIZAR COMPRA</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php require('./layout/footer.php')  ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function confirmacion(id) {
    pregunta = confirm("¿Está seguro que desea eliminar este producto del carrito?");
    if (pregunta){
        window.location= 'quitarproducto.php?id=' + id;
    }
}
    </script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    const cantidad_item = <?php echo $cantidad_items; ?>;

if(cantidad_item == 2){
  const cantidadInput1 = document.getElementById('cantidad-input1');
  const precioElement1 = document.getElementById('precio1');
  const cantidadInput2 = document.getElementById('cantidad-input2');
  const precioElement2 = document.getElementById('precio2');
  const subtotalElement = document.getElementById('subtotal');
  const subtotalInput = document.getElementById('subtotal-input');

  // Obtener el precio como número
  const precio1 = parseFloat(precioElement1.innerText.replace('$',''));
  const precio2 = parseFloat(precioElement2.innerText.replace('$',''));
  // Obtener la cantidad como número
    const cantidad1 = parseInt(cantidadInput1.value);
    const cantidad2 = parseInt(cantidadInput2.value);

    // Calcular el subtotal como el precio multiplicado por la cantidad
    const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2);

    // Mostrar el subtotal en la página HTML
    subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

    // Asignar el valor del subtotal al campo de entrada oculto
    subtotalInput.value = subtotal.toFixed(2);

  // Escuchar los cambios en el campo de entrada de cantidad
  cantidadInput1.addEventListener('input', () => {
    // Obtener la cantidad como número
    const cantidad1 = parseInt(cantidadInput1.value);
    const cantidad2 = parseInt(cantidadInput2.value);

    // Calcular el subtotal como el precio multiplicado por la cantidad
    const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2);

    // Mostrar el subtotal en la página HTML
    subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

    // Asignar el valor del subtotal al campo de entrada oculto
    subtotalInput.value = subtotal.toFixed(2);
  });

  cantidadInput2.addEventListener('input', () => {
    // Obtener la cantidad como número
    const cantidad1 = parseInt(cantidadInput1.value);
    const cantidad2 = parseInt(cantidadInput2.value);

    // Calcular el subtotal como el precio multiplicado por la cantidad
    const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2);

    // Mostrar el subtotal en la página HTML
    subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

    // Asignar el valor del subtotal al campo de entrada oculto
    subtotalInput.value = subtotal.toFixed(2);
  });



}else if(cantidad_item == 1){
const cantidadInput1 = document.getElementById('cantidad-input1');
const precioElement1 = document.getElementById('precio1');
const subtotalElement = document.getElementById('subtotal');
const subtotalInput = document.getElementById('subtotal-input');

// Obtener el precio como número
const precio1 = parseFloat(precioElement1.innerText.replace('$',''));
const cantidad1 = parseInt(cantidadInput1.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
// Escuchar los cambios en el campo de entrada de cantidad
cantidadInput1.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});




}else if(cantidad_item == 3){
const cantidadInput1 = document.getElementById('cantidad-input1');
const precioElement1 = document.getElementById('precio1');
const cantidadInput2 = document.getElementById('cantidad-input2');
const precioElement2 = document.getElementById('precio2');
const cantidadInput3 = document.getElementById('cantidad-input3');
const precioElement3 = document.getElementById('precio3');
const subtotalElement = document.getElementById('subtotal');
const subtotalInput = document.getElementById('subtotal-input');

// Obtener el precio como número
const precio1 = parseFloat(precioElement1.innerText.replace('$',''));
const precio2 = parseFloat(precioElement2.innerText.replace('$',''));
const precio3 = parseFloat(precioElement2.innerText.replace('$',''));
// Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
// Escuchar los cambios en el campo de entrada de cantidad
cantidadInput1.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput2.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput3.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});




}else if(cantidad_item == 4){
const cantidadInput1 = document.getElementById('cantidad-input1');
const precioElement1 = document.getElementById('precio1');
const cantidadInput2 = document.getElementById('cantidad-input2');
const precioElement2 = document.getElementById('precio2');
const cantidadInput3 = document.getElementById('cantidad-input3');
const precioElement3 = document.getElementById('precio3');
const cantidadInput4 = document.getElementById('cantidad-input4');
const precioElement4 = document.getElementById('precio4');
const subtotalElement = document.getElementById('subtotal');
const subtotalInput = document.getElementById('subtotal-input');

// Obtener el precio como número
const precio1 = parseFloat(precioElement1.innerText.replace('$',''));
const precio2 = parseFloat(precioElement2.innerText.replace('$',''));
const precio3 = parseFloat(precioElement3.innerText.replace('$',''));
const precio4 = parseFloat(precioElement4.innerText.replace('$',''));
 // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
// Escuchar los cambios en el campo de entrada de cantidad
cantidadInput1.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput2.addEventListener('input', () => {
 // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput3.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput4.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});




}else if(cantidad_item == 5){
const cantidadInput1 = document.getElementById('cantidad-input1');
const precioElement1 = document.getElementById('precio1');
const cantidadInput2 = document.getElementById('cantidad-input2');
const precioElement2 = document.getElementById('precio2');
const cantidadInput3 = document.getElementById('cantidad-input3');
const precioElement3 = document.getElementById('precio3');
const cantidadInput4 = document.getElementById('cantidad-input4');
const precioElement4 = document.getElementById('precio4');
const cantidadInput5 = document.getElementById('cantidad-input5');
const precioElement5 = document.getElementById('precio5');
const subtotalElement = document.getElementById('subtotal');
const subtotalInput = document.getElementById('subtotal-input');

// Obtener el precio como número
const precio1 = parseFloat(precioElement1.innerText.replace('$',''));
const precio2 = parseFloat(precioElement2.innerText.replace('$',''));
const precio3 = parseFloat(precioElement3.innerText.replace('$',''));
const precio4 = parseFloat(precioElement4.innerText.replace('$',''));
const precio5 = parseFloat(precioElement5.innerText.replace('$',''));
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
// Escuchar los cambios en el campo de entrada de cantidad
cantidadInput1.addEventListener('input', () => {
  // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput2.addEventListener('input', () => {
 // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput3.addEventListener('input', () => {
 // Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput4.addEventListener('input', () => {
// Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});
cantidadInput5.addEventListener('input', () => {
// Obtener la cantidad como número
  const cantidad1 = parseInt(cantidadInput1.value);
  const cantidad2 = parseInt(cantidadInput2.value);
  const cantidad3 = parseInt(cantidadInput3.value);
  const cantidad4 = parseInt(cantidadInput4.value);
  const cantidad5 = parseInt(cantidadInput5.value);

  // Calcular el subtotal como el precio multiplicado por la cantidad
  const subtotal = (precio1 * cantidad1) + (precio2 * cantidad2) + (precio3 * cantidad3) + (precio4 * cantidad4) + (precio5 * cantidad5);

  // Mostrar el subtotal en la página HTML
  subtotalElement.innerText = `$${subtotal.toFixed(2)}`;

  // Asignar el valor del subtotal al campo de entrada oculto
  subtotalInput.value = subtotal.toFixed(2);
});




}});



</script>

</body>

</html>