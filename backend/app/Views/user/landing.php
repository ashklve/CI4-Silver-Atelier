<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver Atelier - Premium Fashion & Trends</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'warm-brown': '#57564F',
                        'sage-green': '#7A7A73',
                        'cream-beige': '#DDDAD0',
                        'light-cream': '#F8F3CE'
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'Georgia', 'serif'],
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans text-warm-brown bg-light-cream">
    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-light-cream/90 backdrop-blur-md border-b border-cream-beige/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
               <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?= site_url('/') ?>" class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full overflow-hidden flex-shrink-0">
                            <img src="/images/salogo.png" alt="Silver Atelier Logo" class="w-full h-full object-cover">
                        </div>
                        <span class="font-serif text-2xl font-bold text-warm-brown">Silver Atelier</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="nav-link text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">Home</a>
                        <a href="#collections" class="nav-link text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">Collections</a>
                        <a href="#about" class="nav-link text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">About</a>
                        <a href="#blog" class="nav-link text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">Blog</a>
                        <a href="#contact" class="nav-link text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">Contact</a>
                    </div>
                </div>

                
               <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="<?= site_url('login') ?>" 
                class="bg-warm-brown text-light-cream px-6 py-2 rounded-full hover:bg-sage-green transition-all duration-300 transform hover:scale-105 font-medium inline-block text-center">
                    Login
                </a>
            </div>

                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-warm-brown hover:text-sage-green transition-colors duration-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-light-cream border-t border-cream-beige/50">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-warm-brown hover:text-sage-green transition-colors duration-300">Home</a>
                <a href="#collections" class="block px-3 py-2 text-warm-brown hover:text-sage-green transition-colors duration-300">Collections</a>
                <a href="#about" class="block px-3 py-2 text-warm-brown hover:text-sage-green transition-colors duration-300">About</a>
                <a href="#blog" class="block px-3 py-2 text-warm-brown hover:text-sage-green transition-colors duration-300">Blog</a>
                <a href="#contact" class="block px-3 py-2 text-warm-brown hover:text-sage-green transition-colors duration-300">Contact</a>
                <a href="<?= site_url('login') ?>" 
                class="block w-full mt-4 bg-warm-brown text-light-cream px-6 py-2 rounded-full hover:bg-sage-green transition-all duration-300 text-center font-medium">
                Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-16 min-h-screen bg-gradient-to-br from-light-cream via-cream-beige to-light-cream flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8 animate-fade-in-up">
                    <div class="space-y-4">
                        <h1 class="font-serif text-5xl sm:text-6xl lg:text-7xl font-black text-warm-brown leading-tight">
                            Welcome to
                            <span class="block text-sage-green italic">Silver Atelier</span>
                        </h1>
                        <p class="text-xl sm:text-2xl text-sage-green font-light max-w-2xl leading-relaxed">
                            Where we meet your standard when it comes to latest trends. Discover timeless elegance with contemporary flair.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/collection" class="bg-warm-brown text-light-cream px-8 py-4 rounded-full text-lg font-semibold hover:bg-sage-green transform hover:scale-105 transition-all duration-300 shadow-lg text-center">
                        Explore Collection
                    </a>
                    
                    <a href="/Blog" class="border-2 border-warm-brown text-warm-brown px-8 py-4 rounded-full text-lg font-semibold hover:bg-warm-brown hover:text-light-cream transition-all duration-300 text-center">
                        View Blogs
                    </a>
                    </div>

                    
                    <!-- Stats -->
                    <div class="flex space-x-8 pt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-warm-brown">500+</div>
                            <div class="text-sage-green">Happy Clients</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-warm-brown">1000+</div>
                            <div class="text-sage-green">Premium Items</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-warm-brown">4.9★</div>
                            <div class="text-sage-green">Reviews</div>
                        </div>
                    </div>
                </div>
                
            <!-- Image/Visual Element -->
                <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-sage-green to-warm-brown rounded-3xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500 overflow-hidden">
                    <img src="/images/product1.jpg" alt="Premium Fashion - Silver Atelier" class="w-full h-full object-cover opacity-80">
                </div>
                </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-light-cream rounded-full shadow-lg flex items-center justify-center animate-bounce">
                        <i class="fas fa-star text-warm-brown text-2xl"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-warm-brown rounded-full shadow-lg flex items-center justify-center animate-pulse">
                        <i class="fas fa-heart text-light-cream text-xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-cream-beige">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl sm:text-5xl font-bold text-warm-brown mb-6">Why Choose Silver Atelier?</h2>
                <p class="text-xl text-sage-green max-w-3xl mx-auto">Experience fashion excellence with our commitment to quality, style, and customer satisfaction.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-light-cream p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-warm-brown rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-gem text-2xl text-light-cream"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-warm-brown mb-4 text-center">Premium Quality</h3>
                    <p class="text-sage-green text-center leading-relaxed">
                        Carefully curated materials and expert craftsmanship ensure every piece meets the highest standards of luxury fashion.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-light-cream p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-sage-green rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-shipping-fast text-2xl text-light-cream"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-warm-brown mb-4 text-center">Fast Delivery</h3>
                    <p class="text-sage-green text-center leading-relaxed">
                        Swift and secure delivery service ensures your fashion finds reach you quickly and in perfect condition.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-light-cream p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="w-16 h-16 bg-warm-brown rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-palette text-2xl text-light-cream"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-warm-brown mb-4 text-center">Latest Trends</h3>
                    <p class="text-sage-green text-center leading-relaxed">
                        Stay ahead of the fashion curve with our constantly updated collection of contemporary styles and timeless pieces.
                    </p>
                </div>
            </div>
        </div>
    </section>

   <!-- Collections Preview -->
    <section id="collections" class="py-20 bg-light-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl sm:text-5xl font-bold text-warm-brown mb-6">Featured Collections</h2>
                <p class="text-xl text-sage-green max-w-3xl mx-auto">Discover our handpicked selection of premium fashion pieces that define modern elegance.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Collection 1 -->
                <div class="group bg-cream-beige rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-warm-brown to-sage-green flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-female text-6xl text-light-cream group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-serif font-bold text-warm-brown mb-2">Women's Wear</h4>
                        <p class="text-sage-green mb-4">Elegant and sophisticated styles</p>
                        <div class="text-2xl font-bold text-warm-brown">From ₱2,999</div>
                    </div>
                </div>
                
                <!-- Collection 2 -->
                <div class="group bg-cream-beige rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-sage-green to-warm-brown flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-male text-6xl text-light-cream group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-serif font-bold text-warm-brown mb-2">Men's Collection</h4>
                        <p class="text-sage-green mb-4">Contemporary and classic designs</p>
                        <div class="text-2xl font-bold text-warm-brown">From ₱3,499</div>
                    </div>
                </div>
                
                <!-- Collection 3 -->
                <div class="group bg-cream-beige rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-warm-brown via-sage-green to-warm-brown flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-ring text-6xl text-light-cream group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-serif font-bold text-warm-brown mb-2">Accessories</h4>
                        <p class="text-sage-green mb-4">Perfect finishing touches</p>
                        <div class="text-2xl font-bold text-warm-brown">From ₱899</div>
                    </div>
                </div>  
                
                <!-- Collection 4 -->
                <div class="group bg-cream-beige rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="aspect-square bg-gradient-to-br from-sage-green via-warm-brown to-sage-green flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-shopping-bag text-6xl text-light-cream group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-serif font-bold text-warm-brown mb-2">Premium Bags</h4>
                        <p class="text-sage-green mb-4">Luxury meets functionality</p>
                        <div class="text-2xl font-bold text-warm-brown">From ₱4,999</div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-warm-brown text-light-cream px-8 py-4 rounded-full text-lg font-semibold hover:bg-sage-green transform hover:scale-105 transition-all duration-300 shadow-lg">
                    View All Collections
                </button>
            </div>
        </div>
    </section>



    <!-- newsletter section -->
    <section class="py-20 bg-gradient-to-r from-warm-brown to-sage-green">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-4xl sm:text-5xl font-bold text-light-cream mb-6">Stay In Style</h2>
            <p class="text-xl text-cream-beige mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter and be the first to know about new collections, exclusive offers, and fashion insights.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input 
                    type="email" 
                    placeholder="Enter your email address" 
                    class="flex-1 px-6 py-4 rounded-full text-warm-brown placeholder-sage-green bg-light-cream focus:outline-none focus:ring-4 focus:ring-cream-beige/50 text-lg"
                >
                <button class="bg-light-cream text-warm-brown px-8 py-4 rounded-full font-semibold hover:bg-cream-beige transform hover:scale-105 transition-all duration-300 whitespace-nowrap">
                    Subscribe
                </button>
            </div>
            
            <p class="text-cream-beige/80 text-sm mt-4">
                *No spam, unsubscribe anytime
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-warm-brown text-light-cream py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Brand -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-light-cream rounded-full flex items-center justify-center">
                            <i class="fas fa-gem text-warm-brown text-sm"></i>
                        </div>
                        <span class="font-serif text-2xl font-bold">Silver Atelier</span>
                    </div>
                    <p class="text-cream-beige leading-relaxed mb-6 max-w-md">
                        Your premier destination for luxury fashion and contemporary style. Where elegance meets innovation in every piece.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-sage-green rounded-full flex items-center justify-center hover:bg-light-cream hover:text-warm-brown transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-sage-green rounded-full flex items-center justify-center hover:bg-light-cream hover:text-warm-brown transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-sage-green rounded-full flex items-center justify-center hover:bg-light-cream hover:text-warm-brown transition-all duration-300">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-serif font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-cream-beige hover:text-light-cream transition-colors duration-300">Home</a></li>
                        <li><a href="#collections" class="text-cream-beige hover:text-light-cream transition-colors duration-300">Collections</a></li>
                        <li><a href="#about" class="text-cream-beige hover:text-light-cream transition-colors duration-300">About Us</a></li>
                        <li><a href="#roadmap" class="text-cream-beige hover:text-light-cream transition-colors duration-300">Road Map</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-xl font-serif font-bold mb-6">Contact</h4>
                    <div class="space-y-3 text-cream-beige">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-sage-green"></i>
                            <span>Manila, Philippines</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-sage-green"></i>
                            <span>+63 912 345 6789</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-sage-green"></i>
                            <span>silveratelier@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-sage-green pt-8 text-center text-cream-beige">
                <p>&copy; 2025 Silver Atelier. All rights reserved. Crafted with love for fashion enthusiasts.</p>
            </div>
        </div>
    </footer>
<script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>