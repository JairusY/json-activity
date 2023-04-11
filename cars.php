<?php
    header('Access-Control-Allow_Origin: *');
    //root

    $cars = [
        [
            "img" => "toyotaConquest.jpg",
            "brand" => "Toyota",
            "type" => "Pickup",
            "model" => "CONQUEST 2.8 4X4",
            "engine" => "2.8L Diesel, 4-Cylinder, 16-Valve DOHC Variable Nozzle Turbo with Air-cooled Intercooler",
            "transmission" => ["Power Transmission: 6-speed A/T","Brakes: Ventilated Discs/ Drum type","Tyres: 265/60 R18 tyres"]
        ],
        [
            "img" => "SkylineGTR.jpg",
            "brand" => "Nissan",
            "type" => "Sports",
            "model" => "Nissan Skyline GTR R34",
            "engine" => "2.6 L twin-turbocharged RB26DETT I6 2.8 L twin-turbocharged RB28DETT I6 (Z-Tune",
            "transmission" => ["Power Transmission: Six-speed manual, four-wheel drive, active rear rear LSD", "Brakes: Multi-link, coil springs, passive dampers, anti-roll bar", "Tyres: 245/45 ZR18 front and rear"]
        ],
        [
            "img" => "toyota-fortuner-2021.jpg",
            "brand" => "Toyota",
            "type" => "SUV",
            "model" => "Toyota Fortuner 2021",
            "engine" => "4-Cylinder, In-line, 16-Valve DOHC Variable Nozzle Turbo with Air-cooled Intercooler",
            "transmission" => ["Power Transmission: 6-Speed A/T","Brakes: Ventilated Discs/ Drum Type","Tyres: 265/60 R18"]
        ],
        [
            "img" => "aventador.jpg",
            "brand" => "Lamborghini",
            "type" => "Super Car",
            "model" => "Aventador",
            "engine" => "V12, 60°, MPI Petrol Engine",
            "transmission" => ["Power Transmission: 6-Speed A/T","Brakes: Carbon Ceramic Brake","Tyres: 255/35 R19 96Y"]
        ],
        [
            "img" => "ford-mustang-s550.jpg",
            "brand" => "Ford",
            "type" => "Muscle",
            "model" => "Mustang S550",
            "engine" => "2.3 L EcoBoost",
            "transmission" => ["Power Transmission: 6-Speed manual (Tremec TR-3160)","Brakes: Ventilated Discs/ Drum Type","Tyres: 265/60 R18"]
        ],
    
    ];

    $data = json_encode($cars);
    echo $data;
?>