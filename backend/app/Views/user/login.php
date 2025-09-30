<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Silver Atelier</title>
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
<body class="font-sans bg-light-cream min-h-screen">
    <!-- Header -->
    <nav class="bg-light-cream/90 backdrop-blur-md border-b border-cream-beige/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?= base_url('/') ?>" class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full overflow-hidden flex-shrink-0">
                            <img src="/images/salogo.png" alt="Silver Atelier Logo" class="w-full h-full object-cover">
                        </div>
                        <span class="font-serif text-2xl font-bold text-warm-brown">Silver Atelier</span>
                    </a>
                </div>
                
                <!-- Back to Home -->
                <div>
                    <a href="<?= base_url('/') ?>" class="text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">
                        <i class="fas fa-arrow-left mr-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Welcome Section -->
            <div class="text-center">
                <div class="mx-auto h-16 w-16 bg-warm-brown rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-user text-2xl text-light-cream"></i>
                </div>
                <h2 class="font-serif text-4xl font-bold text-warm-brown mb-2">Welcome Back</h2>
                <p class="text-sage-green text-lg">Sign in to your Silver Atelier account</p>
            </div>

            <!-- Login Form -->
            <div class="bg-cream-beige rounded-3xl shadow-xl p-8">
                <form id="loginForm" class="space-y-6" action="<?= base_url('auth/login') ?>" method="POST">
                    <?= csrf_field() ?>
                    
                    <!-- Username/Email Field -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-warm-brown mb-2">
                            Username or Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-sage-green"></i>
                            </div>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                required
                                class="w-full pl-12 pr-4 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Enter your username or email"
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-warm-brown mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-sage-green"></i>
                            </div>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                class="w-full pl-12 pr-12 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Enter your password"
                            >
                            <button 
                                type="button" 
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-sage-green hover:text-warm-brown transition-colors duration-300"
                            >
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="remember" 
                                name="remember"
                                class="h-4 w-4 text-warm-brown focus:ring-warm-brown border-sage-green rounded"
                            >
                            <label for="remember" class="ml-2 text-sm text-sage-green">
                                Remember me
                            </label>
                        </div>
                        <a href="<?= base_url('forgot-password') ?>" class="text-sm text-warm-brown hover:text-sage-green transition-colors duration-300 font-medium">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button 
                        type="submit"
                        class="w-full bg-warm-brown text-light-cream py-4 rounded-xl font-semibold text-lg hover:bg-sage-green transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                    >
                        Sign In
                    </button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-sage-green/30"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-cream-beige text-sage-green">or continue with</span>
                        </div>
                    </div>

                    <!-- Social Login -->
                    <div class="grid grid-cols-2 gap-4">
                        <button 
                            type="button"
                            class="flex items-center justify-center px-4 py-3 border-2 border-light-cream rounded-xl hover:bg-light-cream transition-colors duration-300 text-warm-brown font-medium"
                        >
                            <i class="fab fa-google mr-2"></i>
                            Google
                        </button>
                        <button 
                            type="button"
                            class="flex items-center justify-center px-4 py-3 border-2 border-light-cream rounded-xl hover:bg-light-cream transition-colors duration-300 text-warm-brown font-medium"
                        >
                            <i class="fab fa-facebook-f mr-2"></i>
                            Facebook
                        </button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-8 pt-6 border-t border-light-cream">
                    <p class="text-sage-green">
                        Don't have an account? 
                        <a href="<?= base_url('signup') ?>" class="text-warm-brown hover:text-sage-green font-semibold transition-colors duration-300">
                            Sign up here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/auth.js"></script>
</body>
</html>