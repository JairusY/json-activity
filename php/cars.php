<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    //root

    $cars = array(
        array(
            "img" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh7KAEnHkWlR8hJ786SidET0yYpYY2smH7DPrPlgevWuuqTV7t7GrcrMZVhNuIU22pnyb8iM1oVzvkUjtMHHkT1sh05Ad1sqt65I9soZ1ayVOhzNbC7AD7daSy8gyKM1emLpN36AK1NHx6lBE-QnZxBZHkXsmChawaXFo35SBdjDHR8vCwD2pPCbVi0Uw/s1024/2022_toyota_hilux_conquest_4x4_00.jpg",
            "brand" => "Toyota",
            "type" => "Pickup",
            "model" => "CONQUEST 2.8 4X4",
            "engine" => "2.8L Diesel, 4-Cylinder, 16-Valve DOHC Variable Nozzle Turbo with Air-cooled Intercooler",
            "transmission" => "Power Transmission: 6-speed A/T","Brakes: Ventilated Discs/ Drum type","Tyres: 265/60 R18 tyres",
        ),
        array(
            "img" => "http://speedhunters-wp-production.s3.amazonaws.com/wp-content/uploads/2019/02/28092226/trust_r34_gtr_dino_dalle_carbonare_23-1200x800.jpg",
            "brand" => "Nissan",
            "type" => "Sports",
            "model" => "Nissan Skyline GTR R34",
            "engine" => "2.6 L twin-turbocharged RB26DETT I6 2.8 L twin-turbocharged RB28DETT I6 (Z-Tune",
            "transmission" => "Power Transmission: Six-speed manual, four-wheel drive, active rear rear LSD", "Brakes: Multi-link, coil springs, passive dampers, anti-roll bar", "Tyres: 245/45 ZR18 front and rear",
        ),
        array(
            "img" => "https://1.bp.blogspot.com/-6YErx6JJ328/YLxI3wh2a5I/AAAAAAABWaQ/HByzBee8coEbJ3_WIPh5g-EOYAKtuku6wCLcBGAsYHQ/s1024/2021_toyota_fortuner_g_00.jpg",
            "brand" => "Toyota",
            "type" => "SUV",
            "model" => "Toyota Fortuner 2021",
            "engine" => "4-Cylinder, In-line, 16-Valve DOHC Variable Nozzle Turbo with Air-cooled Intercooler",
            "transmission" => "Power Transmission: 6-Speed A/T","Brakes: Ventilated Discs/ Drum Type","Tyres: 265/60 R18",
        ),
        array(
            "img" => "https://images.drive.com.au/caradvice/image/private/c_fill,f_auto,g_auto,h_540,q_auto:good,w_960/f9a55d5527f7d067ea2329ac38d3d171",
            "brand" => "Lamborghini",
            "type" => "Super Car",
            "model" => "Aventador",
            "engine" => "V12, 60°, MPI Petrol Engine",
            "transmission" => "Power Transmission: 6-Speed A/T","Brakes: Carbon Ceramic Brake","Tyres: 255/35 R19 96Y",
        ),
        array(
            "img" => "https://momo.com/wp-contents/uploads/2020/05/silver-ford-mustang-s550-momo-lightweight-flow-forged-wheels-mesh-spoke-rims-b.jpg",
            "brand" => "Ford",
            "type" => "Muscle",
            "model" => "Mustang S550",
            "engine" => "2.3 L EcoBoost",
            "transmission" => "Power Transmission: 6-Speed manual (Tremec TR-3160)","Brakes: Ventilated Discs/ Drum Type","Tyres: 265/60 R18",
        ),
    
    );

    echo json_encode(array("cars" => $cars))
?>