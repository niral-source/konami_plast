<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Categories Page
Route::get('/categories', function () {
    // Sample categories data
    $categories = [
        [
            'name' => 'PVC Pipes',
            'subtitle' => 'Versatile & Durable Solutions',
            'description' => 'High-quality PVC pipes perfect for water supply, plumbing, and irrigation systems. Excellent chemical resistance and long-lasting performance.',
            'header_image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'BIS Certified', 'description' => 'All products meet Indian Standards', 'icon' => 'certificate', 'color' => 'blue'],
                ['title' => 'UV Stabilized', 'description' => 'Protected against UV degradation', 'icon' => 'sun', 'color' => 'yellow'],
                ['title' => 'Long Life', 'description' => '50+ years of service life', 'icon' => 'clock', 'color' => 'green'],
                ['title' => 'Eco-Friendly', 'description' => 'Non-toxic and safe materials', 'icon' => 'leaf', 'color' => 'emerald']
            ]
        ],
        [
            'name' => 'UPVC Pipes',
            'subtitle' => 'Corrosion Resistant Solutions',
            'description' => 'Premium UPVC pipes ideal for potable water distribution, sewage systems, and chemical transportation. Lead-free and environmentally safe.',
            'header_image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'Lead-Free', 'description' => 'Safe for potable water', 'icon' => 'shield-alt', 'color' => 'green'],
                ['title' => 'High Flow', 'description' => 'Optimized water flow rate', 'icon' => 'water', 'color' => 'blue'],
                ['title' => 'Low Maintenance', 'description' => 'Minimal upkeep required', 'icon' => 'wrench', 'color' => 'gray'],
                ['title' => 'Lightweight', 'description' => 'Easy to handle and install', 'icon' => 'feather', 'color' => 'purple']
            ]
        ],
        [
            'name' => 'CPVC Pipes',
            'subtitle' => 'Heat Resistant Solutions',
            'description' => 'Advanced CPVC pipes designed for hot water distribution and industrial applications. Withstands temperatures up to 90°C.',
            'header_image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'High Temp', 'description' => 'Withstands up to 90°C', 'icon' => 'temperature-high', 'color' => 'red'],
                ['title' => 'Fire Retardant', 'description' => 'Enhanced fire safety', 'icon' => 'fire', 'color' => 'orange'],
                ['title' => 'Industrial Grade', 'description' => 'Built for heavy use', 'icon' => 'industry', 'color' => 'slate'],
                ['title' => 'Durable', 'description' => 'Long-lasting performance', 'icon' => 'shield-alt', 'color' => 'blue']
            ]
        ]
    ];
    return view('categories', compact('categories'));
})->name('categories');

// Category Products Pages
Route::get('/category/{type}', function ($type) {
    // Sample category data based on type
    $categories = [
        'pvc' => [
            'name' => 'PVC Pipes',
            'subtitle' => 'Versatile & Durable Solutions',
            'description' => 'High-quality PVC pipes perfect for water supply, plumbing, and irrigation systems.',
            'header_image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'BIS Certified', 'description' => 'All products meet Indian Standards', 'icon' => 'certificate', 'color' => 'blue'],
                ['title' => 'UV Stabilized', 'description' => 'Protected against UV degradation', 'icon' => 'sun', 'color' => 'yellow']
            ],
            'specs' => [
                'material_grade' => 'PVC Grade 1',
                'standard' => 'IS 4985:2000',
                'temperature' => '0°C to 60°C',
                'pressure' => '2.5 to 16 kg/cm²',
                'size_range' => '20mm to 315mm'
            ],
            'applications' => [
                ['name' => 'Water Supply', 'icon' => 'tint'],
                ['name' => 'Plumbing', 'icon' => 'wrench'],
                ['name' => 'Irrigation', 'icon' => 'seedling'],
                ['name' => 'Drainage', 'icon' => 'water']
            ]
        ],
        'upvc' => [
            'name' => 'UPVC Pipes',
            'subtitle' => 'Corrosion Resistant Solutions',
            'description' => 'Premium UPVC pipes ideal for potable water distribution and sewage systems.',
            'header_image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'Lead-Free', 'description' => 'Safe for potable water', 'icon' => 'shield-alt', 'color' => 'green'],
                ['title' => 'High Flow', 'description' => 'Optimized water flow rate', 'icon' => 'water', 'color' => 'blue']
            ],
            'specs' => [
                'material_grade' => 'UPVC Grade 1',
                'standard' => 'IS 4985:2000',
                'temperature' => '0°C to 60°C',
                'pressure' => '2.5 to 16 kg/cm²',
                'size_range' => '20mm to 315mm'
            ],
            'applications' => [
                ['name' => 'Potable Water', 'icon' => 'glass-water'],
                ['name' => 'Sewage', 'icon' => 'waste'],
                ['name' => 'Chemical', 'icon' => 'flask'],
                ['name' => 'Industrial', 'icon' => 'factory']
            ]
        ],
        'cpvc' => [
            'name' => 'CPVC Pipes',
            'subtitle' => 'Heat Resistant Solutions',
            'description' => 'Advanced CPVC pipes designed for hot water distribution and industrial applications.',
            'header_image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'features' => [
                ['title' => 'High Temp', 'description' => 'Withstands up to 90°C', 'icon' => 'temperature-high', 'color' => 'red'],
                ['title' => 'Fire Retardant', 'description' => 'Enhanced fire safety', 'icon' => 'fire', 'color' => 'orange']
            ],
            'specs' => [
                'material_grade' => 'CPVC Grade 1',
                'standard' => 'IS 15778:2007',
                'temperature' => '0°C to 90°C',
                'pressure' => '2.5 to 16 kg/cm²',
                'size_range' => '15mm to 300mm'
            ],
            'applications' => [
                ['name' => 'Hot Water', 'icon' => 'temperature-high'],
                ['name' => 'Fire Sprinkler', 'icon' => 'fire-extinguisher'],
                ['name' => 'Industrial', 'icon' => 'industry'],
                ['name' => 'Heating', 'icon' => 'thermometer']
            ]
        ]
    ];

    // Sample products data
    $allProducts = [
        'pvc' => [
            [
                'name' => 'PVC U-Pipe 110mm',
                'subtitle' => 'Standard U-Pipe',
                'short_description' => 'High-quality PVC U-pipe for drainage and sewage systems',
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'size' => '110mm',
                'weight' => '2.5 kg/m',
                'price' => 150.00,
                'unit' => 'meter',
                'min_order' => 100,
                'featured' => true,
                'slug' => 'pvc-u-pipe-110mm',
                'specifications' => ['BIS Certified', 'UV Stabilized', '50+ years life', 'Chemical resistant'],
                'material' => 'PVC Grade 1',
                'color' => 'White'
            ],
            [
                'name' => 'PVC Swivel Pipe 63mm',
                'subtitle' => 'Flexible Swivel Design',
                'short_description' => 'Flexible PVC swivel pipe for complex plumbing layouts',
                'image' => 'https://images.pexels.com/photos/450048/pexels-photo-450048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'size' => '63mm',
                'weight' => '1.2 kg/m',
                'price' => 85.00,
                'unit' => 'meter',
                'min_order' => 50,
                'featured' => false,
                'slug' => 'pvc-swivel-pipe-63mm',
                'specifications' => ['Flexible design', 'Easy installation', 'Leak-proof joints', 'High durability'],
                'material' => 'PVC Grade 1',
                'color' => 'Gray'
            ],
            [
                'name' => 'PVC Column Pipe 90mm',
                'subtitle' => 'Heavy Duty Column',
                'short_description' => 'Heavy-duty PVC column pipe for structural applications',
                'image' => 'https://images.unsplash.com/photo-1580983218765-5a3b8455b9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'size' => '90mm',
                'weight' => '1.8 kg/m',
                'price' => 120.00,
                'unit' => 'meter',
                'min_order' => 75,
                'featured' => true,
                'slug' => 'pvc-column-pipe-90mm',
                'specifications' => ['Heavy duty', 'High strength', 'Weather resistant', 'Long life'],
                'material' => 'PVC Grade 1',
                'color' => 'White'
            ]
        ],
        'upvc' => [
            [
                'name' => 'UPVC Plumbing Pipe 50mm',
                'subtitle' => 'Standard Plumbing',
                'short_description' => 'Standard UPVC pipe for residential and commercial plumbing',
                'image' => 'https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'size' => '50mm',
                'weight' => '0.8 kg/m',
                'price' => 95.00,
                'unit' => 'meter',
                'min_order' => 100,
                'featured' => true,
                'slug' => 'upvc-plumbing-pipe-50mm',
                'specifications' => ['Lead-free', 'High flow rate', 'Corrosion resistant', 'Easy to install'],
                'material' => 'UPVC Grade 1',
                'color' => 'White'
            ],
            [
                'name' => 'UPVC Agricultural Pipe 75mm',
                'subtitle' => 'Agricultural Grade',
                'short_description' => 'UV-stabilized UPVC pipe for agricultural irrigation',
                'image' => 'https://images.unsplash.com/photo-1595475888145-5db324e65a84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'size' => '75mm',
                'weight' => '1.5 kg/m',
                'price' => 110.00,
                'unit' => 'meter',
                'min_order' => 200,
                'featured' => false,
                'slug' => 'upvc-agricultural-pipe-75mm',
                'specifications' => ['UV stabilized', 'High pressure', 'Chemical resistant', 'Lightweight'],
                'material' => 'UPVC Grade 1',
                'color' => 'Black'
            ],
            [
                'name' => 'UPVC Industrial Pipe 100mm',
                'subtitle' => 'Industrial Grade',
                'short_description' => 'Heavy-duty UPVC pipe for industrial applications',
                'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'size' => '100mm',
                'weight' => '2.2 kg/m',
                'price' => 180.00,
                'unit' => 'meter',
                'min_order' => 50,
                'featured' => true,
                'slug' => 'upvc-industrial-pipe-100mm',
                'specifications' => ['Industrial grade', 'High pressure', 'Temperature resistant', 'Durable'],
                'material' => 'UPVC Grade 1',
                'color' => 'Gray'
            ]
        ],
        'cpvc' => [
            [
                'name' => 'CPVC Hot Water Pipe 25mm',
                'subtitle' => 'Hot Water System',
                'short_description' => 'CPVC pipe designed for hot water distribution systems',
                'image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'size' => '25mm',
                'weight' => '0.6 kg/m',
                'price' => 125.00,
                'unit' => 'meter',
                'min_order' => 100,
                'featured' => true,
                'slug' => 'cpvc-hot-water-pipe-25mm',
                'specifications' => ['90°C temperature', 'Fire retardant', 'Hot water compatible', 'Long life'],
                'material' => 'CPVC Grade 1',
                'color' => 'Light Gray'
            ],
            [
                'name' => 'CPVC Fire Sprinkler Pipe 32mm',
                'subtitle' => 'Fire Safety System',
                'short_description' => 'CPVC pipe specifically designed for fire sprinkler systems',
                'image' => 'https://images.pexels.com/photos/8425713/pexels-photo-8425713.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'size' => '32mm',
                'weight' => '0.9 kg/m',
                'price' => 145.00,
                'unit' => 'meter',
                'min_order' => 150,
                'featured' => false,
                'slug' => 'cpvc-fire-sprinkler-pipe-32mm',
                'specifications' => ['Fire rated', 'High pressure', 'Temperature resistant', 'FM approved'],
                'material' => 'CPVC Grade 1',
                'color' => 'Red'
            ]
        ]
    ];

    if (!isset($categories[$type])) {
        abort(404);
    }

    return view('category-products', [
        'category' => array_merge($categories[$type], ['type' => $type]),
        'products' => $allProducts[$type] ?? []
    ]);
})->name('category.products');

// Specific category sub-routes - redirect to categories page
Route::get('/category/pvc/u-pipes', function () {
    return redirect()->route('categories');
})->name('category.pvc.u-pipes');

Route::get('/category/pvc/swivel-pipes', function () {
    return redirect()->route('categories');
})->name('category.pvc.swivel-pipes');

Route::get('/category/pvc/column-pipes', function () {
    return redirect()->route('categories');
})->name('category.pvc.column-pipes');

Route::get('/category/upvc/plumbing-pipes', function () {
    return redirect()->route('categories');
})->name('category.upvc.plumbing-pipes');

Route::get('/category/upvc/agricultural-pipes', function () {
    return redirect()->route('categories');
})->name('category.upvc.agricultural-pipes');

Route::get('/category/upvc/industrial-pipes', function () {
    return redirect()->route('categories');
})->name('category.upvc.industrial-pipes');

Route::get('/category/cpvc/hot-water-pipes', function () {
    return redirect()->route('categories');
})->name('category.cpvc.hot-water-pipes');

Route::get('/category/cpvc/fire-sprinkler', function () {
    return redirect()->route('categories');
})->name('category.cpvc.fire-sprinkler');

// Product Detail Page
Route::get('/product/{slug}', function ($slug) {
    // Get category from query parameter
    $categoryType = request('category', 'pvc'); // Default to pvc if not provided
    
    // Sample product data based on slug
    $products = [
        'pvc-u-pipe-110mm' => [
            'name' => 'PVC U-Pipe 110mm',
            'subtitle' => 'Standard U-Pipe for Drainage Systems',
            'description' => 'High-quality PVC U-pipe designed for drainage and sewage systems with superior flow characteristics.',
            'full_description' => 'Our PVC U-Pipe 110mm is engineered to provide exceptional performance in drainage and sewage applications. Made from premium PVC material, this pipe offers excellent chemical resistance, UV stability, and long-lasting durability. The U-shaped design ensures optimal flow while preventing blockages and sediment buildup.',
            'header_image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'main_image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
            'gallery_images' => [
                'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                'https://images.pexels.com/photos/450048/pexels-photo-450048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'https://images.unsplash.com/photo-1580983218765-5a3b8455b9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'
            ],
            'category_name' => 'PVC Pipes',
            'category_type' => $categoryType,
            'category_slug' => 'pvc',
            'price' => 150.00,
            'unit' => 'meter',
            'min_order' => 100,
            'size' => '110mm',
            'weight' => '2.5 kg/m',
            'material' => 'PVC Grade 1',
            'color' => 'White',
            'rating' => 4,
            'reviews' => 28,
            'features' => [
                'BIS IS 4985:2000 Certified',
                'UV Stabilized for outdoor use',
                'Chemical and corrosion resistant',
                '50+ years service life',
                'Easy to install and maintain',
                'Leak-proof joint system'
            ],
            'specifications' => [
                'general' => [
                    'Material' => 'PVC Grade 1',
                    'Standard' => 'IS 4985:2000',
                    'Size' => '110mm (4")',
                    'Wall Thickness' => '3.2mm',
                    'Length' => '6 meters standard'
                ],
                'performance' => [
                    'Working Pressure' => '2.5 kg/cm²',
                    'Temperature Range' => '0°C to 60°C',
                    'Flow Rate' => 'High flow design',
                    'Impact Strength' => 'High impact resistance'
                ]
            ],
            'certifications' => [
                ['name' => 'BIS Certified', 'icon' => 'certificate', 'description' => 'Bureau of Indian Standards'],
                ['name' => 'ISO 9001', 'icon' => 'award', 'description' => 'Quality Management'],
                ['name' => 'Green Label', 'icon' => 'leaf', 'description' => 'Eco Friendly'],
                ['name' => 'Fire Safe', 'icon' => 'shield-alt', 'description' => 'Fire Resistant']
            ],
            'applications' => [
                ['title' => 'Drainage Systems', 'icon' => 'water', 'description' => 'Residential and commercial drainage'],
                ['title' => 'Sewage Systems', 'icon' => 'home', 'description' => 'Municipal sewage networks'],
                ['title' => 'Industrial Waste', 'icon' => 'industry', 'description' => 'Industrial effluent disposal'],
                ['title' => 'Agricultural Drainage', 'icon' => 'seedling', 'description' => 'Farm drainage solutions'],
                ['title' => 'Road Construction', 'icon' => 'road', 'description' => 'Highway drainage systems'],
                ['title' => 'Building Services', 'icon' => 'building', 'description' => 'Building waste management']
            ],
            'related_products' => [
                [
                    'name' => 'PVC Swivel Pipe 90mm',
                    'short_description' => 'Flexible swivel connection system',
                    'price' => 180.00,
                    'image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                    'slug' => 'pvc-swivel-pipe-90mm'
                ],
                [
                    'name' => 'PVC Column Pipe 110mm',
                    'short_description' => 'Heavy duty column pipe',
                    'price' => 165.00,
                    'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'pvc-column-pipe-110mm'
                ],
                [
                    'name' => 'UPVC Plumbing Pipe 50mm',
                    'short_description' => 'High-pressure plumbing solution',
                    'price' => 220.00,
                    'image' => 'https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'slug' => 'upvc-plumbing-pipe-50mm'
                ],
                [
                    'name' => 'CPVC Hot Water Pipe 25mm',
                    'short_description' => 'Hot water distribution system',
                    'price' => 280.00,
                    'image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'cpvc-hot-water-pipe-25mm'
                ]
            ]
        ],
        'pvc-swivel-pipe-90mm' => [
            'name' => 'PVC Swivel Pipe 90mm',
            'subtitle' => 'Flexible Swivel Connection System',
            'description' => 'Innovative PVC swivel pipe providing flexible connections for complex piping systems.',
            'full_description' => 'Our PVC Swivel Pipe 90mm features a revolutionary swivel mechanism that allows for easy installation and maintenance in complex piping systems. The swivel joint provides 360-degree rotation capability, making it ideal for applications where pipe alignment and flexibility are crucial.',
            'header_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'main_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'gallery_images' => [
                'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'https://images.pexels.com/photos/450048/pexels-photo-450048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'https://images.unsplash.com/photo-1580983218765-5a3b8455b9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'
            ],
            'category_name' => 'PVC Pipes',
            'category_type' => $categoryType,
            'category_slug' => 'pvc',
            'price' => 180.00,
            'unit' => 'meter',
            'min_order' => 50,
            'size' => '90mm',
            'weight' => '2.0 kg/m',
            'material' => 'PVC Grade 1',
            'color' => 'White',
            'rating' => 5,
            'reviews' => 42,
            'features' => [
                '360-degree swivel rotation',
                'Easy installation without tools',
                'Leak-proof swivel mechanism',
                'High-pressure resistance',
                'Chemical resistant material',
                'Long service life'
            ],
            'specifications' => [
                'general' => [
                    'Material' => 'PVC Grade 1',
                    'Standard' => 'IS 4985:2000',
                    'Size' => '90mm (3.5")',
                    'Wall Thickness' => '2.8mm',
                    'Length' => '6 meters standard'
                ],
                'performance' => [
                    'Working Pressure' => '3.0 kg/cm²',
                    'Temperature Range' => '0°C to 60°C',
                    'Swivel Angle' => '360 degrees',
                    'Torque Resistance' => 'High torque capacity'
                ]
            ],
            'certifications' => [
                ['name' => 'BIS Certified', 'icon' => 'certificate', 'description' => 'Bureau of Indian Standards'],
                ['name' => 'ISO 9001', 'icon' => 'award', 'description' => 'Quality Management'],
                ['name' => 'CE Marked', 'icon' => 'check-circle', 'description' => 'European Conformity'],
                ['name' => 'Green Product', 'icon' => 'leaf', 'description' => 'Eco Friendly']
            ],
            'applications' => [
                ['title' => 'Flexible Connections', 'icon' => 'arrows-alt', 'description' => 'Flexible pipe connections'],
                ['title' => 'Maintenance Systems', 'icon' => 'tools', 'description' => 'Easy maintenance access'],
                ['title' => 'Complex Layouts', 'icon' => 'project-diagram', 'description' => 'Complex piping layouts'],
                ['title' => 'Temporary Installations', 'icon' => 'clock', 'description' => 'Temporary piping systems'],
                ['title' => 'Adjustable Systems', 'icon' => 'cog', 'description' => 'Adjustable pipe systems'],
                ['title' => 'Repair Work', 'icon' => 'wrench', 'description' => 'Pipe repair solutions']
            ],
            'related_products' => [
                [
                    'name' => 'PVC U-Pipe 110mm',
                    'short_description' => 'Standard U-Pipe for drainage systems',
                    'price' => 150.00,
                    'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'pvc-u-pipe-110mm'
                ],
                [
                    'name' => 'PVC Column Pipe 110mm',
                    'short_description' => 'Heavy duty column pipe',
                    'price' => 165.00,
                    'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'pvc-column-pipe-110mm'
                ],
                [
                    'name' => 'UPVC Plumbing Pipe 50mm',
                    'short_description' => 'High-pressure plumbing solution',
                    'price' => 220.00,
                    'image' => 'https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'slug' => 'upvc-plumbing-pipe-50mm'
                ],
                [
                    'name' => 'CPVC Hot Water Pipe 25mm',
                    'short_description' => 'Hot water distribution system',
                    'price' => 280.00,
                    'image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'cpvc-hot-water-pipe-25mm'
                ]
            ]
        ],
        'upvc-plumbing-pipe-50mm' => [
            'name' => 'UPVC Plumbing Pipe 50mm',
            'subtitle' => 'High-Pressure Plumbing Solution',
            'description' => 'Superior UPVC pipe designed for high-pressure plumbing applications with exceptional durability.',
            'full_description' => 'Our UPVC Plumbing Pipe 50mm is specifically engineered for high-pressure plumbing systems where reliability and performance are critical. Made from premium UPVC material, this pipe offers superior strength, chemical resistance, and longevity compared to traditional plumbing materials.',
            'header_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'main_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'gallery_images' => [
                'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'https://images.pexels.com/photos/450048/pexels-photo-450048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'https://images.unsplash.com/photo-1580983218765-5a3b8455b9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'
            ],
            'category_name' => 'UPVC Pipes',
            'category_type' => $categoryType,
            'category_slug' => 'upvc',
            'price' => 220.00,
            'unit' => 'meter',
            'min_order' => 200,
            'size' => '50mm',
            'weight' => '1.8 kg/m',
            'material' => 'UPVC Grade A',
            'color' => 'White',
            'rating' => 5,
            'reviews' => 67,
            'features' => [
                'High-pressure rating',
                'Corrosion resistant',
                'Lightweight and strong',
                'Easy joint system',
                'Long service life',
                'Cost effective'
            ],
            'specifications' => [
                'general' => [
                    'Material' => 'UPVC Grade A',
                    'Standard' => 'IS 4985:2000',
                    'Size' => '50mm (2")',
                    'Wall Thickness' => '2.5mm',
                    'Length' => '6 meters standard'
                ],
                'performance' => [
                    'Working Pressure' => '6.0 kg/cm²',
                    'Temperature Range' => '0°C to 60°C',
                    'Flow Capacity' => 'Optimal flow design',
                    'Burst Pressure' => '18 kg/cm²'
                ]
            ],
            'certifications' => [
                ['name' => 'BIS Certified', 'icon' => 'certificate', 'description' => 'Bureau of Indian Standards'],
                ['name' => 'ISO 9001', 'icon' => 'award', 'description' => 'Quality Management'],
                ['name' => 'CE Marked', 'icon' => 'check-circle', 'description' => 'European Conformity'],
                ['name' => 'Green Product', 'icon' => 'leaf', 'description' => 'Eco Friendly']
            ],
            'applications' => [
                ['title' => 'Water Supply', 'icon' => 'faucet', 'description' => 'Potable water distribution'],
                ['title' => 'Building Plumbing', 'icon' => 'home', 'description' => 'Residential plumbing systems'],
                ['title' => 'Commercial Plumbing', 'icon' => 'building', 'description' => 'Commercial water systems'],
                ['title' => 'Industrial Water', 'icon' => 'industry', 'description' => 'Industrial water supply'],
                ['title' => 'Fire Fighting', 'icon' => 'fire-extinguisher', 'description' => 'Fire suppression systems'],
                ['title' => 'Irrigation', 'icon' => 'shower', 'description' => 'Agricultural irrigation']
            ],
            'related_products' => [
                [
                    'name' => 'PVC U-Pipe 110mm',
                    'short_description' => 'Standard U-Pipe for drainage systems',
                    'price' => 150.00,
                    'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'pvc-u-pipe-110mm'
                ],
                [
                    'name' => 'PVC Swivel Pipe 90mm',
                    'short_description' => 'Flexible swivel connection system',
                    'price' => 180.00,
                    'image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                    'slug' => 'pvc-swivel-pipe-90mm'
                ],
                [
                    'name' => 'UPVC Agricultural Pipe 100mm',
                    'short_description' => 'Agricultural water distribution',
                    'price' => 180.00,
                    'image' => 'https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'slug' => 'upvc-agricultural-pipe-100mm'
                ],
                [
                    'name' => 'CPVC Hot Water Pipe 25mm',
                    'short_description' => 'Hot water distribution system',
                    'price' => 280.00,
                    'image' => 'https://images.unsplash.com/photo-1603794348286-3b0c3d8fc6a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'cpvc-hot-water-pipe-25mm'
                ]
            ]
        ],
        'cpvc-hot-water-pipe-25mm' => [
            'name' => 'CPVC Hot Water Pipe 25mm',
            'subtitle' => 'High-Temperature Hot Water System',
            'description' => 'Specialized CPVC pipe designed for hot water distribution systems with excellent thermal resistance.',
            'full_description' => 'Our CPVC Hot Water Pipe 25mm is engineered specifically for hot water applications where temperature resistance is critical. Made from premium CPVC material, this pipe can handle temperatures up to 90°C while maintaining structural integrity and flow characteristics.',
            'header_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'main_image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'gallery_images' => [
                'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'https://images.pexels.com/photos/450048/pexels-photo-450048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'https://images.unsplash.com/photo-1580983218765-5a3b8455b9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80'
            ],
            'category_name' => 'CPVC Pipes',
            'category_type' => $categoryType,
            'category_slug' => 'cpvc',
            'price' => 280.00,
            'unit' => 'meter',
            'min_order' => 300,
            'size' => '25mm',
            'weight' => '1.2 kg/m',
            'material' => 'CPVC Grade A',
            'color' => 'Light Gray',
            'rating' => 4,
            'reviews' => 35,
            'features' => [
                'High temperature resistance',
                'Thermal stability',
                'Low thermal conductivity',
                'Fire retardant',
                'Chemical resistance',
                'Easy installation'
            ],
            'specifications' => [
                'general' => [
                    'Material' => 'CPVC Grade A',
                    'Standard' => 'ASTM D2846',
                    'Size' => '25mm (1")',
                    'Wall Thickness' => '2.0mm',
                    'Length' => '6 meters standard'
                ],
                'performance' => [
                    'Working Temperature' => 'Up to 90°C',
                    'Working Pressure' => '8.0 kg/cm²',
                    'Thermal Conductivity' => 'Low conductivity',
                    'Fire Rating' => 'Self-extinguishing'
                ]
            ],
            'certifications' => [
                ['name' => 'ASTM Certified', 'icon' => 'certificate', 'description' => 'ASTM International'],
                ['name' => 'ISO 9001', 'icon' => 'award', 'description' => 'Quality Management'],
                ['name' => 'NSF Certified', 'icon' => 'check-circle', 'description' => 'NSF International'],
                ['name' => 'Fire Safe', 'icon' => 'fire', 'description' => 'Fire Safety Rated']
            ],
            'applications' => [
                ['title' => 'Hot Water Supply', 'icon' => 'temperature-high', 'description' => 'Hot water distribution'],
                ['title' => 'Solar Systems', 'icon' => 'sun', 'description' => 'Solar water heating'],
                ['title' => 'Boiler Connections', 'icon' => 'fire', 'description' => 'Boiler pipe systems'],
                ['title' => 'Industrial Hot Water', 'icon' => 'industry', 'description' => 'Industrial hot water'],
                ['title' => 'Geothermal Systems', 'icon' => 'globe', 'description' => 'Geothermal heating'],
                ['title' => 'Heat Exchangers', 'icon' => 'exchange-alt', 'description' => 'Heat exchange systems']
            ],
            'related_products' => [
                [
                    'name' => 'PVC U-Pipe 110mm',
                    'short_description' => 'Standard U-Pipe for drainage systems',
                    'price' => 150.00,
                    'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80',
                    'slug' => 'pvc-u-pipe-110mm'
                ],
                [
                    'name' => 'PVC Swivel Pipe 90mm',
                    'short_description' => 'Flexible swivel connection system',
                    'price' => 180.00,
                    'image' => 'https://images.unsplash.com/photo-1581094288131-6b7b8f5b6d2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                    'slug' => 'pvc-swivel-pipe-90mm'
                ],
                [
                    'name' => 'UPVC Plumbing Pipe 50mm',
                    'short_description' => 'High-pressure plumbing solution',
                    'price' => 220.00,
                    'image' => 'https://images.pexels.com/photos/1089438/pexels-photo-1089438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'slug' => 'upvc-plumbing-pipe-50mm'
                ],
                [
                    'name' => 'CPVC Fire Sprinkler Pipe 32mm',
                    'short_description' => 'Fire safety sprinkler system',
                    'price' => 145.00,
                    'image' => 'https://images.pexels.com/photos/8425713/pexels-photo-8425713.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'slug' => 'cpvc-fire-sprinkler-pipe-32mm'
                ]
            ]
        ],
    ];

    if (!isset($products[$slug])) {
        abort(404);
    }

    return view('product-detail', ['product' => $products[$slug]]);
})->name('product.detail');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Blog Page
Route::get('/blog', function () {
    // Sample blog posts data
    $blogPosts = [
        [
            'id' => 1,
            'title' => 'The Future of Plumbing: How PVC Pipes Are Revolutionizing Modern Construction',
            'slug' => 'future-of-plumbing-pvc-pipes',
            'excerpt' => 'Discover how PVC pipes are transforming the construction industry with their durability, cost-effectiveness, and environmental benefits. Learn about the latest innovations and why PVC is becoming the material of choice for modern plumbing systems.',
            'content' => 'In the ever-evolving world of construction and plumbing, PVC pipes have emerged as a game-changer, revolutionizing how we approach water distribution and drainage systems. This comprehensive guide explores the technological advancements, environmental benefits, and practical applications that make PVC pipes the preferred choice for modern construction projects.',
            'author' => 'Rajesh Kumar',
            'author_role' => 'Senior Plumbing Engineer',
            'published_date' => '2024-12-01',
            'reading_time' => '8 min read',
            'category' => 'Industry Trends',
            'image' => '/uploads/image_1.png',
            'featured' => true,
            'tags' => ['PVC Pipes', 'Construction', 'Plumbing', 'Innovation'],
            'views' => 1250,
            'likes' => 89
        ],
        [
            'id' => 2,
            'title' => 'Complete Guide to UPVC vs CPVC Pipes: Which One Should You Choose?',
            'slug' => 'upvc-vs-cpvc-pipes-guide',
            'excerpt' => 'Making the right choice between UPVC and CPVC pipes can be crucial for your project\'s success. This detailed comparison covers temperature resistance, pressure ratings, applications, and cost factors to help you make an informed decision.',
            'content' => 'When it comes to selecting the right piping material for your project, the choice between UPVC and CPVC can significantly impact performance, durability, and cost. This comprehensive guide breaks down the key differences, applications, and considerations to help you choose the perfect material for your specific needs.',
            'author' => 'Priya Sharma',
            'author_role' => 'Materials Specialist',
            'published_date' => '2024-11-28',
            'reading_time' => '12 min read',
            'category' => 'Technical Guide',
            'image' => '/uploads/image_2.png',
            'featured' => true,
            'tags' => ['UPVC', 'CPVC', 'Comparison', 'Technical'],
            'views' => 980,
            'likes' => 67
        ],
        [
            'id' => 3,
            'title' => 'Sustainable Plumbing: Eco-Friendly Pipe Solutions for Green Buildings',
            'slug' => 'sustainable-plumbing-eco-friendly-pipes',
            'excerpt' => 'Explore how modern pipe manufacturing is embracing sustainability with eco-friendly materials, recycling programs, and energy-efficient production processes that contribute to green building certifications.',
            'content' => 'As the construction industry moves towards sustainable practices, pipe manufacturing has evolved to meet environmental standards without compromising performance. Discover the latest eco-friendly innovations, recycling initiatives, and green building certifications that are shaping the future of sustainable plumbing.',
            'author' => 'Ananya Patel',
            'author_role' => 'Environmental Consultant',
            'published_date' => '2024-11-25',
            'reading_time' => '10 min read',
            'category' => 'Sustainability',
            'image' => '/uploads/image_3.png',
            'featured' => false,
            'tags' => ['Sustainability', 'Green Building', 'Eco-Friendly', 'Environment'],
            'views' => 756,
            'likes' => 45
        ],
        [
            'id' => 4,
            'title' => 'Installation Best Practices: Common Mistakes to Avoid When Working with PVC Pipes',
            'slug' => 'pvc-pipe-installation-best-practices',
            'excerpt' => 'Learn from industry experts about the most common installation mistakes and how to avoid them. This guide covers proper handling, joint preparation, solvent welding techniques, and quality control measures.',
            'content' => 'Proper installation is crucial for maximizing the performance and longevity of PVC pipe systems. This expert guide covers everything from preparation and handling to advanced installation techniques, helping you avoid costly mistakes and ensure professional-grade results.',
            'author' => 'Vikram Singh',
            'author_role' => 'Installation Expert',
            'published_date' => '2024-11-22',
            'reading_time' => '15 min read',
            'category' => 'Installation Guide',
            'image' => '/uploads/image_4.png',
            'featured' => false,
            'tags' => ['Installation', 'Best Practices', 'Tips', 'Quality Control'],
            'views' => 1120,
            'likes' => 78
        ],
        [
            'id' => 5,
            'title' => 'The Impact of BIS Standards on Pipe Quality and Safety in India',
            'slug' => 'bis-standards-pipe-quality-india',
            'excerpt' => 'Understanding BIS certification and its importance in ensuring pipe quality, safety, and compliance with Indian standards. Learn how these regulations protect consumers and improve industry standards.',
            'content' => 'BIS certification plays a crucial role in maintaining quality and safety standards in the Indian pipe industry. This comprehensive analysis explores how Bureau of Indian Standards regulations impact manufacturing, testing, and consumer protection in the piping sector.',
            'author' => 'Deepak Malhotra',
            'author_role' => 'Quality Assurance Manager',
            'published_date' => '2024-11-20',
            'reading_time' => '9 min read',
            'category' => 'Standards & Compliance',
            'image' => '/uploads/image_5.png',
            'featured' => false,
            'tags' => ['BIS', 'Standards', 'Quality', 'Compliance', 'India'],
            'views' => 634,
            'likes' => 52
        ],
        [
            'id' => 6,
            'title' => 'Smart Plumbing: IoT Integration in Modern Pipe Systems',
            'slug' => 'smart-plumbing-iot-pipe-systems',
            'excerpt' => 'Discover how Internet of Things (IoT) technology is transforming traditional plumbing systems with smart monitoring, leak detection, predictive maintenance, and automated control features.',
            'content' => 'The integration of IoT technology in plumbing systems is revolutionizing how we monitor, maintain, and manage water distribution networks. From smart leak detection to predictive maintenance algorithms, explore the cutting-edge technologies that are making plumbing systems more efficient and reliable.',
            'author' => 'Arjun Reddy',
            'author_role' => 'Technology Consultant',
            'published_date' => '2024-11-18',
            'reading_time' => '11 min read',
            'category' => 'Technology',
            'image' => '/uploads/image_6.png',
            'featured' => false,
            'tags' => ['IoT', 'Smart Plumbing', 'Technology', 'Innovation'],
            'views' => 890,
            'likes' => 71
        ]
    ];
    
    // Categories for filtering
    $categories = [
        'All' => 6,
        'Industry Trends' => 1,
        'Technical Guide' => 1,
        'Sustainability' => 1,
        'Installation Guide' => 1,
        'Standards & Compliance' => 1,
        'Technology' => 1
    ];
    
    return view('blog', compact('blogPosts', 'categories'));
})->name('blog');

// Blog Detail Page
Route::get('/blog/{slug}', function ($slug) {
    // Sample blog posts data (same as blog route)
    $blogPosts = [
        [
            'id' => 1,
            'title' => 'The Future of Plumbing: How PVC Pipes Are Revolutionizing Modern Construction',
            'slug' => 'future-of-plumbing-pvc-pipes',
            'excerpt' => 'Discover how PVC pipes are transforming the construction industry with their durability, cost-effectiveness, and environmental benefits. Learn about the latest innovations and why PVC is becoming the material of choice for modern plumbing systems.',
            'content' => '<h2 class="text-2xl font-bold mb-4">Introduction</h2><p class="mb-4">In the ever-evolving world of construction and plumbing, PVC pipes have emerged as a game-changer, revolutionizing how we approach water distribution and drainage systems. This comprehensive guide explores the technological advancements, environmental benefits, and practical applications that make PVC pipes the preferred choice for modern construction projects.</p><h2 class="text-2xl font-bold mb-4">Why PVC Pipes Are Dominating Modern Construction</h2><p class="mb-4">PVC pipes offer numerous advantages over traditional materials like metal and concrete. Their lightweight nature makes them easier to transport and install, reducing labor costs and installation time. Additionally, PVC\'s resistance to corrosion and chemical degradation ensures longevity and reliability in various applications.</p><h3 class="text-xl font-semibold mb-3">Key Benefits:</h3><ul class="list-disc pl-6 mb-4"><li>Exceptional durability with 50+ years lifespan</li><li>Cost-effective compared to traditional materials</li><li>Environmentally friendly and recyclable</li><li>Easy installation and maintenance</li><li>Resistance to corrosion and chemicals</li></ul><h2 class="text-2xl font-bold mb-4">Innovations in PVC Technology</h2><p class="mb-4">Recent advancements in PVC manufacturing have led to improved formulations that enhance performance characteristics. Modern PVC pipes now feature UV stabilizers for outdoor applications, enhanced impact resistance, and improved flow dynamics that optimize water distribution efficiency.</p><h2 class="text-2xl font-bold mb-4">Environmental Impact</h2><p class="mb-4">PVC pipes contribute significantly to sustainable construction practices. Their production requires less energy compared to metal alternatives, and their long lifespan reduces the need for frequent replacements. Furthermore, PVC pipes are 100% recyclable, supporting circular economy principles in the construction industry.</p><h2 class="text-2xl font-bold mb-4">Future Trends</h2><p class="mb-4">The future of PVC pipes looks promising with ongoing research into bio-based PVC alternatives and smart pipe technologies. Integration with IoT sensors for real-time monitoring and leak detection is becoming increasingly common, positioning PVC pipes at the forefront of smart infrastructure development.</p><h2 class="text-2xl font-bold mb-4">Conclusion</h2><p class="mb-4">As construction practices continue to evolve, PVC pipes remain at the forefront of innovation, offering sustainable, cost-effective, and reliable solutions for modern plumbing needs. Their versatility and adaptability ensure they will continue to play a crucial role in shaping the future of construction and infrastructure development.</p>',
            'author' => 'Rajesh Kumar',
            'author_role' => 'Senior Plumbing Engineer',
            'published_date' => '2024-12-01',
            'reading_time' => '8 min read',
            'category' => 'Industry Trends',
            'image' => '/uploads/image_1.png',
            'featured' => true,
            'tags' => ['PVC Pipes', 'Construction', 'Plumbing', 'Innovation'],
            'views' => 1250,
            'likes' => 89
        ],
        [
            'id' => 2,
            'title' => 'Complete Guide to UPVC vs CPVC Pipes: Which One Should You Choose?',
            'slug' => 'upvc-vs-cpvc-pipes-guide',
            'excerpt' => 'Making the right choice between UPVC and CPVC pipes can be crucial for your project\'s success. This detailed comparison covers temperature resistance, pressure ratings, applications, and cost factors to help you make an informed decision.',
            'content' => '<h2 class="text-2xl font-bold mb-4">Understanding the Basics</h2><p class="mb-4">When it comes to selecting the right piping material for your project, the choice between UPVC and CPVC can significantly impact performance, durability, and cost. Both materials offer unique advantages, but understanding their differences is crucial for making the right decision.</p><h2 class="text-2xl font-bold mb-4">Material Composition and Properties</h2><p class="mb-4">UPVC (Unplasticized Polyvinyl Chloride) and CPVC (Chlorinated Polyvinyl Chloride) are both derived from PVC but undergo different manufacturing processes. UPVC is rigid and durable, ideal for cold water applications, while CPVC contains additional chlorine, making it suitable for hot water systems.</p><h3 class="text-xl font-semibold mb-3">UPVC Characteristics:</h3><ul class="list-disc pl-6 mb-4"><li>Ideal for cold water applications (0-60°C)</li><li>Excellent chemical resistance</li><li>Lightweight and easy to install</li><li>Cost-effective solution</li><li>Long service life</li></ul><h3 class="text-xl font-semibold mb-3">CPVC Characteristics:</h3><ul class="list-disc pl-6 mb-4"><li>Suitable for hot water applications (up to 90°C)</li><li>Higher pressure rating</li><li>Fire-resistant properties</li><li>Enhanced durability</li><li>Higher initial cost but better long-term value</li></ul><h2 class="text-2xl font-bold mb-4">Application-Specific Recommendations</h2><p class="mb-4">The choice between UPVC and CPVC largely depends on your specific application requirements. For residential plumbing, cold water distribution, and irrigation systems, UPVC is typically the preferred choice due to its cost-effectiveness and adequate performance characteristics.</p><p class="mb-4">However, for hot water distribution, industrial applications, or systems requiring higher temperature resistance, CPVC becomes the superior option despite the higher initial investment.</p><h2 class="text-2xl font-bold mb-4">Cost Analysis</h2><p class="mb-4">While UPVC pipes generally have a lower upfront cost, it\'s essential to consider the total lifecycle cost. CPVC pipes may require higher initial investment but offer better performance in specific applications, potentially reducing maintenance costs and extending service life.</p><h2 class="text-2xl font-bold mb-4">Installation Considerations</h2><p class="mb-4">Both UPVC and CPVC pipes are relatively easy to install, but CPVC requires more careful handling due to its specific temperature requirements. The installation process for both materials involves solvent welding, which creates strong, leak-proof joints when performed correctly.</p><h2 class="text-2xl font-bold mb-4">Making the Right Choice</h2><p class="mb-4">Consider factors such as operating temperature, pressure requirements, chemical exposure, and budget constraints when selecting between UPVC and CPVC. Consult with industry experts and review project specifications to ensure optimal material selection for your specific needs.</p>',
            'author' => 'Priya Sharma',
            'author_role' => 'Materials Specialist',
            'published_date' => '2024-11-28',
            'reading_time' => '12 min read',
            'category' => 'Technical Guide',
            'image' => '/uploads/image_2.png',
            'featured' => true,
            'tags' => ['UPVC', 'CPVC', 'Comparison', 'Technical'],
            'views' => 980,
            'likes' => 67
        ]
    ];
    
    // Find the blog post by slug
    $blogPost = collect($blogPosts)->firstWhere('slug', $slug);
    
    if (!$blogPost) {
        abort(404);
    }
    
    // Get related posts (excluding current post)
    $relatedPosts = collect($blogPosts)
        ->filter(function($post) use ($slug) {
            return $post['slug'] !== $slug;
        })
        ->take(3)
        ->toArray();
    
    return view('blog-detail', compact('blogPost', 'relatedPosts'));
})->name('blog.detail');

// Privacy Policy Page
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Terms & Conditions Page
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

// Admin Routes (will be protected with auth middleware)
Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    })->name('admin.login');
    
    // Add more admin routes here
});
