<?php
$productos = [
    [
        "categoria" => "Café",
        "nombre" => "Latte",
        "descripcion" => "Café con leche espumosa",
        "precio" => 2.50,
        "imagen" => "img/latte.jpg",
        "personalizacion" => "Leche deslactosada, azúcar morena, tamaño grande"
    ],
    [
        "categoria" => "Bebida fría",
        "nombre" => "Frappuccino",
        "descripcion" => "Café frío con crema",
        "precio" => 3.20,
        "imagen" => "img/frappuccino.jpg",
        "personalizacion" => "Extra crema, jarabe de vainilla"
    ],
    [
        "categoria" => "Postre",
        "nombre" => "Cheesecake",
        "descripcion" => "Pastel de queso con fresas",
        "precio" => 3.00,
        "imagen" => "img/cheesecake.jpg",
        "personalizacion" => "Extra fresa, crema batida"
    ],
    [
        "categoria" => "Snack",
        "nombre" => "Sandwich",
        "descripcion" => "Sandwich tradicional",
        "precio" => 2.80,
        "imagen" => "img/sandwich.jpg",
        "personalizacion" => "Pan integral, extra queso"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cafetería - Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Menú de la Cafetería</h1>
    </header>

    <main>
        <div class="contenedor-productos">
            <?php foreach($productos as $producto): ?>
                <div class="producto">
                    <h2><?php echo $producto["nombre"]; ?></h2>
                    <img src="<?php echo $producto["imagen"]; ?>" alt="<?php echo $producto["nombre"]; ?>">
                    <p><strong>Categoría:</strong> <?php echo $producto["categoria"]; ?></p>
                    <p><?php echo $producto["descripcion"]; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $producto["precio"]; ?></p>
                    <p><strong>Opciones:</strong> <?php echo $producto["personalizacion"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <a href="index.php">Volver al inicio</a>
    </footer>
</body>
</html>
