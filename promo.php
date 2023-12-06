<?php

function promo_productos(){

    return [
        [
            'id'=>'1',
            'nombre'=> 'Andes Rubia',
            'descripción'=> 'Lata 473 cc',
            'precio'=> 540.77,
            'imagen'=> './beer/andes.jpg'

        ],
        [
            'id'=>'2',
            'nombre'=> 'Antares Honey',
            'precio'=> 924.72,
            'descripción'=> 'Lata 473 cc',
            'imagen'=> './beer/antares.jpg'
        ],
        [
            'id'=>'3',
            'nombre'=> 'Budweiser Pilsener',
            'precio'=> 727.07,
            'descripción'=> 'Lata 473 cc',
            'imagen'=> './beer/budweiser.jpg'
        ],
        [
            'id'=>'4',
            'nombre'=> 'Imperial Golden',
            'precio'=> 579.46,
            'descripción'=> 'Lata 473 cc',
            'imagen'=> './beer/imperial.jpg'

        ],
        [
            'id'=>'5',
            'nombre'=> 'Patagonia Amber Lager',
            'precio'=> 1316.90,
            'descripción'=> 'Lata 473 cc',
            'imagen'=> './beer/patagonia.jpg'
        ]
    ];
    
}

$datospromo = promo_productos();

?>