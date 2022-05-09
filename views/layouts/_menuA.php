<?php
return [
    ['label' => 'Usuarios', 'url' => ['/usuario']],
    ['label' => 'Localización', 'items'=>[
        ['label' => 'Fincas', 'url' => ['/finca']],
        ['label' => 'Parcela', 'url' => ['/parcela']],
        ['label' => 'Sectores', 'url' => ['/sector']],
    ]],
    ['label' => 'Clientes', 'url' => ['/cliente']],
    ['label' => 'Seguimiento', 'items'=>[
        ['label' => 'Órdenes', 'url' => ['/orden']],
        ['label' => 'Pedidos', 'url' => ['/pedido']],
        ['label' => 'Pedido info', 'url' => ['/pedidoinfo']],
        ['label' => 'Órden Pedido info', 'url' => ['/orden-pedidoinfo']],
    ]],
    ['label' => 'Uva', 'items'=>[
        ['label' => 'Etiquetas', 'url' => ['/etiqueta']],
        ['label' => 'Cajas', 'url' => ['/caja']],
        ['label' => 'Tipos de Caja', 'url' => ['/tipocaja']],
        ['label' => 'Variedad', 'url' => ['/variedad']],
    ]],
];
