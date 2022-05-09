<?php
return  [
    [
        'class' => 'yii\rest\UrlRule',
        'pluralize' => false,
        'controller' => [
            'caja',
            'cliente',
            'etiqueta',
            'finca',
            'orden',
            'orden-pedidoinfo',
            'parcela',
            'pedido',
            'pedidoinfo',
            'sector',
            'tipocaja',
            'usuario',
            'pedido-devuelto',
            'variedad'
        ],
    ],
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => ['user'],
        'pluralize' => false,
        'extraPatterns' => [
            'POST authenticate' => 'authenticate',
            'OPTIONS authenticate' => 'authenticate',
        ]
    ]

];
