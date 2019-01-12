<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 15:31
 */

$menu = array(
        array(
                'tyyp' => 'praed',
            'nimi' => 'Šnitsel',
            'hind' => 2.80
        ),
    array(
        'tyyp' => 'praed',
        'nimi' => 'Strooganov',
        'hind' => 2.40
    ),
    array(
        'tyyp' => 'supid',
        'nimi' => 'Borš',
        'hind' => 1.80
    ),
    array(
        'tyyp' => 'magustoidud',
        'nimi' => 'Tiramisu',
        'hind' => 1.30
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Morss',
        'hind' => 0.30
    ),
);

function kuvaMenu($tyyp){
    global $menu;
    foreach ($menu as $roog){
       if($roog['tyyp'] === $tyyp) {
           echo '<li class="list-group-item">
                    <p>'.$roog['nimi'].'<span class="badge badge-primary">'.$roog['hind'].'€</span></p>
                </li>';
       }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sööklamenüü</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">PRAED</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>Šnitsel <span class="badge badge-primary">2,80€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>1/2 Šnitsel <span class="badge badge-primary">1,90€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Strooganov <span class="badge badge-primary">2,30€</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">SUPID</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>Kapsasupp <span class="badge badge-primary">1,50€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Borš <span class="badge badge-primary">1,75€</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">MAGUSTOIDUD</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>Tiramisu <span class="badge badge-primary">1,20€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Kohupiim moosiga <span class="badge badge-primary">0,90€</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">JOOGID</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>Vesi <span class="badge badge-primary">TASUTA</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Piim <span class="badge badge-primary">0,30€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Morss <span class="badge badge-primary">0,25€</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Konjak <span class="badge badge-primary">2,50€</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
