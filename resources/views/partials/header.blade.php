<!-- Header - Matching original structure -->
<header class="bg-white shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex items-center space-x-4">
                    <div style="width: 80px; height: 80px; background: linear-gradient(to right, #105CAA, #1e40af); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); border: 3px solid white; flex-shrink: 0;">
                        KPE
                    </div>
                    <div class="flex flex-col">
                        <div class="text-3xl font-bold text-gray-800 leading-tight">
                            Konami
                        </div>
                        <div class="text-xl font-semibold primary-blue leading-tight">
                            Plast Engineering
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8 flex-1 justify-end mr-24">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary-blue font-medium transition {{ request()->is('/') ? 'text-primary-blue font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary-blue font-medium transition {{ request()->is('about*') ? 'text-primary-blue font-semibold' : '' }}">About Us</a>
                
                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-primary-blue font-medium transition flex items-center {{ request()->is('products*') ? 'text-primary-blue font-semibold' : '' }}">
                        Products &amp; Solutions <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50" style="left: 0; right: auto;">
                        <div class="py-2">
                            <!-- Cables Submenu -->
                            <div class="relative group/submenu">
                                <a href="{{ route('products.category', 'cables') }}" class="block px-4 py-2 text-gray-700 hover:text-primary-blue hover:bg-gray-50 flex items-center justify-between">
                                    Cables <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <div class="absolute left-full top-0 ml-0 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover/submenu:opacity-100 group-hover/submenu:visible transition-all duration-300 z-50" style="left: 100%; right: auto;">
                                    <a href="{{ route('product.detail', 'flat-submersible-cables') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Flat Submersible Cables</a>
                                    <a href="{{ route('product.detail', 'pvc-house-wires') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">PVC House Wires</a>
                                    <a href="{{ route('product.detail', 'multicore-round-cables') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Multicore Round Cables</a>
                                </div>
                            </div>
                            
                            <!-- Pipes Submenu -->
                            <div class="relative group/submenu">
                                <a href="{{ route('products.category', 'pipes') }}" class="block px-4 py-2 text-gray-700 hover:text-primary-blue hover:bg-gray-50 flex items-center justify-between">
                                    Pipes <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <div class="absolute left-full top-0 ml-0 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover/submenu:opacity-100 group-hover/submenu:visible transition-all duration-300 z-50" style="left: 100%; right: auto;">
                                    <a href="{{ route('product.detail', 'garden-hose') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Garden Hose</a>
                                    <a href="{{ route('product.detail', 'braided-hose') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Braided Hose</a>
                                    <a href="{{ route('product.detail', 'sink-waste-pipes') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Sink Waste Pipes</a>
                                    <a href="{{ route('product.detail', 'inlet-outlet-pipes') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Inlet / Outlet Pipes</a>
                                    <a href="{{ route('product.detail', 'pvc-casing-pipe') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">PVC Casing Pipe</a>
                                    <a href="{{ route('product.detail', 'pvc-rigid-pipe') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">PVC Rigid Pipe</a>
                                    <a href="{{ route('product.detail', 'pvc-sleeves') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">PVC Sleeves</a>
                                    <a href="{{ route('product.detail', 'hdpe-pipes') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">HDPE Pipes</a>
                                    <a href="{{ route('product.detail', 'krishi-hose') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Krishi Hose</a>
                                    <a href="{{ route('product.detail', 'suction-hose') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-700 hover:text-primary-blue group-hover/submenu:text-primary-blue">Suction Hose</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Blog Link -->
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-primary-blue font-medium transition {{ request()->is('blog*') ? 'text-primary-blue font-semibold' : '' }}">Blogs</a>
                
                <!-- Contact Link -->
                <a href="{{ route('contact') }}" class="elementor-button {{ request()->is('contact*') ? 'bg-blue-700' : '' }}">Contact</a>
                
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="lg:hidden text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed top-0 left-0 w-80 h-full bg-white shadow-2xl z-50 lg:hidden">
        <div class="p-4">
            <button id="closeMobileMenu" class="text-gray-700 mb-8">
                <i class="fas fa-times text-2xl"></i>
            </button>
            <nav class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('home') ? 'text-primary-blue font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('about') ? 'text-primary-blue font-semibold' : '' }}">About Us</a>
                <a href="{{ route('products') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('products*') ? 'text-primary-blue font-semibold' : '' }}">Products & Solutions</a>
                <a href="{{ route('distributor.inquiry') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('distributor.inquiry') ? 'text-primary-blue font-semibold' : '' }}">Distributor Enquiry</a>
                <a href="{{ route('careers') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('careers') ? 'text-primary-blue font-semibold' : '' }}">Careers</a>
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('blog*') ? 'text-primary-blue font-semibold' : '' }}">Blogs</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary-blue font-medium {{ request()->routeIs('contact') ? 'text-primary-blue font-semibold' : '' }}">Contact</a>
            </nav>
        </div>
    </div>
</header>