<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class ProductCategory extends BaseConfig
{
    public $categories = [

        'hydraulic-machines' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Hydraulic Machines',
            'products' => [
                ['name' => 'C Frame Hydraulic Press Machine', 'slug' => 'cframe-hydraulic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-01.png'],
                ['name' => 'H Type Hydraulic Press Machine', 'slug' => 'h-type', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-13.png'],
                ['name' => 'Automatic H Frame Hydraulic Press Machine', 'slug' => 'automatic-h-frame', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-29.png'],
                ['name' => 'Semi-Automatic C Frame Hydraulic Press Machine', 'slug' => 'semi-automatic-c-frame', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-30.png'],
                ['name' => 'Mild Steel C Frame Hydraulic Press', 'slug' => 'mild-steel-c-frame', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-31.png'],
                ['name' => 'Four Pillar Type Hydraulic Press Machine', 'slug' => 'four-pillar-press', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-32.png'],
                ['name' => 'Semi-Automatic Hydro Pneumatic Press', 'slug' => 'semi-Automatic-pneumatic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-33.png'],
                ['name' => 'Deep Draw Power Press', 'slug' => 'deep-draw', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-02.png'],
                ['name' => 'Single Phase Hydraulic Press Machine', 'slug' => 'singlephase-hydraulic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-04.png'],
                ['name' => 'Hydro Pneumatic Press', 'slug' => 'hydro-neumatic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-05.png'],
                ['name' => 'Mild Steel Hydraulic Press Machine', 'slug' => 'mildsteel-hydraulic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-06.png'],
                ['name' => 'Automatic Hydro Pneumatic Press', 'slug' => 'automatic-hydro-pneumatic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-08.png'],
                ['name' => 'Hydraulic Dish Forming Press', 'slug' => 'hydraulic-dish-forming', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-09.png'],
                ['name' => 'Fully Automatic Hydraulic Deep Drawing Press', 'slug' => 'fully-automatic-hydraulic', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-10.png'],
                ['name' => 'Industrial Wood Splitter Machine', 'slug' => 'industrial-wood-splitter', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-07.png'],
                ['name' => 'Mild Steel Wood Splitter Machine', 'slug' => 'mildsteel-wood-splitter', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-11.png'],
                ['name' => 'Wood Splitter Machine', 'slug' => 'woodsplitter-machine', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-03.png'],
                ['name' => 'Hydraulic Wood Splitter Machine', 'slug' => 'hydraulic-wood-splitter', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-12.png'],
                ['name' => 'Two Pillar Wood Splitting Machine', 'slug' => 'twopillar-wood-splitter', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-12_1.png'],
                ['name' => 'Hydraulic Pet Bottle Baling Press Machine', 'slug' => 'pet-bottle', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-14.png'],
                ['name' => 'Hydraulic Scrap Baling Press Machine', 'slug' => 'scrap-balingpress', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-15.png'],
                ['name' => 'Hydraulic Goods Lift', 'slug' => 'hydraulic-lift', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-16.png'],
                ['name' => 'Hydraulic Concrete Block Making Machine', 'slug' => 'concrete-block', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-17.png'],
                ['name' => 'Interlocking Brick Making Machine', 'slug' => 'interlock-brick', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-18.png'],
                ['name' => 'Hydraulic Interlock Bricks Machine', 'slug' => 'interlockbricks-machine', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-19.png'],
                ['name' => 'Fly Ash Brick Making Machine', 'slug' => 'flyash-brickM', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-20.png'],
                ['name' => 'Fly Ash Brick Making Machine 8 bricks', 'slug' => 'flyash-8brick', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-21.png'],
                ['name' => 'Automatic Fly Ash Brick Making Machine', 'slug' => 'automatic-brickf', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-22.png'],
                ['name' => 'Semi-Automatic Fly Ash Brick Making Machine', 'slug' => 'semi-automaticbrick', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-23.png'],
                ['name' => 'Fully Automatic Fly Ash Brick Making Machine', 'slug' => 'fully-automaticbrick', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-24.png'],
                ['name' => 'Fully Automatic Foam Concrete Mixer Machine', 'slug' => 'foam-concrete', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-25.png'],
                ['name' => 'Semi Automatic Hollow Block Making Machine', 'slug' => 'hollow-block', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-26.png'],
                ['name' => 'Hydraulic Baling Press Machine', 'slug' => 'hydraulic-balingpress', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-27.png'],
                ['name' => 'Automatics Baling Machine', 'slug' => 'automatic-balling', 'image' => 'public/assets/images/products/hydraulic-machine/hydraulic-machine-28.png'],
                               
            ],
        ],

        'hydraulic-powerpacks' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Hydraulic Powerpacks',
            'products' => [
                ['name' => 'Portable Hydraulic Power Pack', 'slug' => 'portable-hydraulic', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-01.png'],
                ['name' => 'Compact Hydraulic Power Pack', 'slug' => 'compact-hydraulic', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-02.png'],
                ['name' => 'Mini Hydraulic Power Pack', 'slug' => 'mini-hydraulic', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-03.png'],
                ['name' => 'Industrial Hydraulic Power Packs', 'slug' => 'industrial-hydraulic', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-04.png'],
                ['name' => 'Electric Hydraulic Power Pack', 'slug' => 'electric-hydraulic', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-05.png'],
                ['name' => 'Hydraulic Power Pack', 'slug' => 'hydraulic-powerpack', 'image' => 'public/assets/images/products/hydraulic-powerpacks/hydraulic-powerpacks-06.png'],
            ],
        ],

        'hydraulic-cylinders' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Hydraulic Cylinders',
            'products' => [
                ['name' => 'Stainless Steel Double Acting Hydraulic Cylinder', 'slug' => 'stainless-steel', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-01.png'],
                ['name' => 'Double Acting Eye End Cylinder', 'slug' => 'doubleacting-eyend', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-02.png'],
                ['name' => 'Double Acting Hydraulic Steel Cylinder', 'slug' => 'doubleacting-hydraulic', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-03.png'],
                ['name' => 'Industrial Hydraulic Cylinder', 'slug' => 'industrial-hydraulic-cylinder', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-04.png'],
                ['name' => 'Telescopic Hydraulic Cylinder', 'slug' => 'telescopic-hydraulic-cylinder', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-05.png'],
                ['name' => 'Non - Standard  Hydraulic Cylinders', 'slug' => 'non-standard', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-06.png'],
                ['name' => 'Single Acting Hydraulic Cylinder', 'slug' => 'single-acting', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-07.png'],
                ['name' => 'Double Acting Eye End Flange Cylinder', 'slug' => 'doubleacting-eyend-flange', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-08.png'],
                ['name' => 'Heavy Duty Hydraulic Cylinder', 'slug' => 'heavy-duty-hydraulic', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-09.png'],
                ['name' => 'Front Flange Hydraulic Cylinder', 'slug' => 'front-flange', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-10.png'],
                ['name' => 'Hydraulic Cylinder Piston', 'slug' => 'cylinder-piston', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-11.png'],
                ['name' => 'Hydraulic Press Cylinder', 'slug' => 'hpress-cylinder', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-12.png'],
                ['name' => 'Mild Steel Double Acting Hydraulic Cylinder', 'slug' => 'ms-double', 'image' => 'public/assets/images/products/hydraulic-cylinders/hydraulic-cylinders-13.png'],

            ],

        ],

        'enggwork-ofalltypes' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Engg Work Of All Types',
            'products' => [
                ['name' => 'CLC Machine Mobile Plant', 'slug' => 'clc-mobile', 'image' => 'public/assets/images/products/engg-work/engg-work-01.png'],
                ['name' => 'CLC Floor Leveling Machine', 'slug' => 'clc-floor', 'image' => 'public/assets/images/products/engg-work/engg-work-02.png'],
                ['name' => 'CLC Machine', 'slug' => 'clc-machine', 'image' => 'public/assets/images/products/engg-work/engg-work-03.png'],
                ['name' => 'Screw Conveyor', 'slug' => 'screw-conveyor', 'image' => 'public/assets/images/products/engg-work/engg-work-04.png'],
                ['name' => 'Movable Scissor Lifter', 'slug' => 'scissor-lifter', 'image' => 'public/assets/images/products/engg-work/engg-work-05.png'],
                ['name' => 'Ultrasonic scan lab machine', 'slug' => 'ultrasonic-scan', 'image' => 'public/assets/images/products/engg-work/engg-work-06.png'],
                ['name' => 'Formulation Tank With Stirrer', 'slug' => 'formulation-tank', 'image' => 'public/assets/images/products/engg-work/engg-work-07.png'],
                ['name' => 'Stainless Steel Industrial Fermenter', 'slug' => 'ss-fermenter', 'image' => 'public/assets/images/products/engg-work/engg-work-08.png'],
                ['name' => 'Stainless Steel Fermentation Tank', 'slug' => 'ss-fermentation', 'image' => 'public/assets/images/products/engg-work/engg-work-09.png'],
                ['name' => 'Industrial and Laboratory Fermenter', 'slug' => 'laboratory-fermenter', 'image' => 'public/assets/images/products/engg-work/engg-work-10.png'],
            ],
        ],


        'sheetmetal-fabrication' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Sheet Metal Fabrication',
            'products' => [
                ['name' => 'Sheet Metal Die', 'slug' => 'sheetmetal-die', 'image' => 'public/assets/images/products/sheet-metal/sheet-metal-01.png'],
                ['name' => 'All type of Sheet Metal Forming Die & Punch Tool', 'slug' => 'forming-die', 'image' => 'public/assets/images/products/sheet-metal/sheet-metal-01.png'],
            ],
        ],

        'components-spares' => [
            'meta_title' => '',
            'meta_description' => '',
            'title' => 'Components & Spares',
            'products' => [
                ['name' => 'SS Ball Mill', 'slug' => 'ss-ball', 'image' => 'public/assets/images/products/spares/spares-01.png'],
                ['name' => 'Ball Mill Machine SS', 'slug' => 'ballmill-ss', 'image' => 'public/assets/images/products/spares/spares-02.png'],
                ['name' => 'Ball Grinding Mill Machine', 'slug' => 'ball-grinding', 'image' => 'public/assets/images/products/spares/spares-03.png'],
                ['name' => 'Semi-Automatic Ball Mill Machine', 'slug' => 'semi-ballmill', 'image' => 'public/assets/images/products/spares/spares-04.png'],
                ['name' => 'Organic Waste Shredding Machine', 'slug' => 'organic-shredding', 'image' => 'public/assets/images/products/spares/spares-05.png'],
                ['name' => 'Plastic Shredder Machine', 'slug' => 'plastic-shredding', 'image' => 'public/assets/images/products/spares/spares-06.png'],
            ],
        ],
    ];
}
