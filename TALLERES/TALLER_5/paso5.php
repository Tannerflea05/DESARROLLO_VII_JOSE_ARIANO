
<?php
// 1. Crear un string JSON con datos de una tienda en línea
$jsonDatos = '
{
    "tienda": "ElectroTech",
    "productos": [
        {"id": 1, "nombre": "Laptop Gamer", "precio": 1200, "categorias": ["electrónica", "computadoras"]},
        {"id": 2, "nombre": "Smartphone 5G", "precio": 800, "categorias": ["electrónica", "celulares"]},
        {"id": 3, "nombre": "Auriculares Bluetooth", "precio": 150, "categorias": ["electrónica", "accesorios"]},
        {"id": 4, "nombre": "Smart TV 4K", "precio": 700, "categorias": ["electrónica", "televisores"]},
        {"id": 5, "nombre": "Tablet", "precio": 300, "categorias": ["electrónica", "computadoras"]}
    ],
    "clientes": [
        {"id": 101, "nombre": "Ana López", "email": "ana@example.com"},
        {"id": 102, "nombre": "Carlos Gómez", "email": "carlos@example.com"},
        {"id": 103, "nombre": "María Rodríguez", "email": "maria@example.com"}
    ]
}
';

// 2. Convertir el JSON a un arreglo asociativo de PHP
$tiendaData = json_decode($jsonDatos, true);

// Función para imprimir los productos
function imprimirProductos($productos) {
    foreach ($productos as $producto) {
        echo "{$producto['nombre']} - \${$producto['precio']} - Categorías: " . implode(", ", $producto['categorias']) . "\n";
    }
}

echo "Productos de {$tiendaData['tienda']}:\n";
imprimirProductos($tiendaData['productos']);

// Calcular el valor total del inventario
$valorTotal = array_reduce($tiendaData['productos'], function($total, $producto) {
    return $total + $producto['precio'];
}, 0);

echo "\n<br>Valor total del inventario: $$valorTotal\n";

// Encontrar el producto más caro
$productoMasCaro = array_reduce($tiendaData['productos'], function($max, $producto) {
    return ($producto['precio'] > $max['precio']) ? $producto : $max;
}, $tiendaData['productos'][0]);

echo "\n<br>Producto más caro: {$productoMasCaro['nombre']} (\${$productoMasCaro['precio']})\n";

// Filtrar productos por categoría
function filtrarPorCategoria($productos, $categoria) {
    return array_filter($productos, function($producto) use ($categoria) {
        return in_array($categoria, $producto['categorias']);
    });
}

$productosDeComputadoras = filtrarPorCategoria($tiendaData['productos'], "computadoras");
echo "\n<br>Productos en la categoría 'computadoras':\n";
imprimirProductos($productosDeComputadoras);

// Agregar un nuevo producto
$nuevoProducto = [
    "id" => 6,
    "nombre" => "Smartwatch",
    "precio" => 250,
    "categorias" => ["electrónica", "accesorios", "wearables"]
];
$tiendaData['productos'][] = $nuevoProducto;

// Convertir el arreglo actualizado de vuelta a JSON
$jsonActualizado = json_encode($tiendaData, JSON_PRETTY_PRINT);
echo "\n<br>Datos actualizados de la tienda (JSON):\n$jsonActualizado\n";

// TAREA: Implementa una función que genere un resumen de ventas
// Crea un arreglo de ventas (producto_id, cliente_id, cantidad, fecha)
// y genera un informe que muestre:
// - Total de ventas
// - Producto más vendido
// - Cliente que más ha comprado
// Tu código aquí

$ventas = [
    ["producto_id" => 1, "cliente_id" => 101, "cantidad" => 1, "fecha" => "2024-09-01"],
    ["producto_id" => 2, "cliente_id" => 102, "cantidad" => 2, "fecha" => "2024-09-02"],
    ["producto_id" => 3, "cliente_id" => 103, "cantidad" => 3, "fecha" => "2024-09-03"],
    ["producto_id" => 1, "cliente_id" => 101, "cantidad" => 1, "fecha" => "2024-09-04"],
    ["producto_id" => 4, "cliente_id" => 102, "cantidad" => 1, "fecha" => "2024-09-05"]
];


function generarResumenVentas($ventas, $productos, $clientes) {
    $totalVentas = 0;
    $ventasPorProducto = [];
    $comprasPorCliente = [];

    foreach ($ventas as $venta) {
        $producto = array_filter($productos, fn($p) => $p['id'] === $venta['producto_id']);
        $cliente = array_filter($clientes, fn($c) => $c['id'] === $venta['cliente_id']);
        
        if ($producto) {
            $producto = array_values($producto)[0]; 
            $totalVentas += $producto['precio'] * $venta['cantidad'];
            $ventasPorProducto[$producto['nombre']] = ($ventasPorProducto[$producto['nombre']] ?? 0) + $venta['cantidad'];
        }
        
        if ($cliente) {
            $cliente = array_values($cliente)[0]; 
            $comprasPorCliente[$cliente['nombre']] = ($comprasPorCliente[$cliente['nombre']] ?? 0) + $venta['cantidad'];
        }
    }


    $productoMasVendido = array_keys($ventasPorProducto, max($ventasPorProducto))[0];

  
    $clienteMasComprador = array_keys($comprasPorCliente, max($comprasPorCliente))[0];

    return [
        'total_ventas' => $totalVentas,
        'producto_mas_vendido' => $productoMasVendido,
        'cliente_mas_comprador' => $clienteMasComprador
    ];
}


$resumenVentas = generarResumenVentas($ventas, $tiendaData['productos'], $tiendaData['clientes']);
echo "<br>\n<br>Resumen de ventas:\n";
echo "<br>Total de ventas: \$" . $resumenVentas['total_ventas'] . "\n";
echo "<br>Producto más vendido: " . $resumenVentas['producto_mas_vendido'] . "\n";
echo "<br>Cliente que más ha comprado: " . $resumenVentas['cliente_mas_comprador'] . "\n";

?>