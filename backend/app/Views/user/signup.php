<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Silver Atelier</title>
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
                    <i class="fas fa-user-plus text-2xl text-light-cream"></i>
                </div>
                <h2 class="font-serif text-4xl font-bold text-warm-brown mb-2">Join Silver Atelier</h2>
                <p class="text-sage-green text-lg">Create your account and start your fashion journey</p>
            </div>

            <!-- Signup Form -->
            <div class="bg-cream-beige rounded-3xl shadow-xl p-8">
                <form class="space-y-6" action="<?= base_url('auth/register') ?>" method="POST">
                    <?= csrf_field() ?>
                    
                    <!-- Full Name Field -->
                    <div>
                        <label for="fullname" class="block text-sm font-semibold text-warm-brown mb-2">
                            Full Name
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-sage-green"></i>
                            </div>
                            <input 
                                type="text" 
                                id="fullname" 
                                name="fullname" 
                                required
                                class="w-full pl-12 pr-4 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Enter your full name"
                            >
                        </div>
                    </div>

                    <!-- Username Field -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-warm-brown mb-2">
                            Username
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-at text-sage-green"></i>
                            </div>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                required
                                class="w-full pl-12 pr-4 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Choose a username"
                            >
                        </div>
                        <p class="text-xs text-sage-green mt-1">Username must be unique and at least 3 characters</p>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-warm-brown mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-sage-green"></i>
                            </div>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                class="w-full pl-12 pr-4 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Enter your email"
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
                                placeholder="Create a password"
                            >
                            <button 
                                type="button" 
                                id="togglePassword"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-sage-green hover:text-warm-brown transition-colors duration-300"
                            >
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                        <div class="mt-2 text-xs text-sage-green">
                            <p>Password must contain:</p>
                            <ul class="list-disc list-inside ml-2 space-y-1">
                                <li id="length" class="text-red-500">At least 8 characters</li>
                                <li id="uppercase" class="text-red-500">One uppercase letter</li>
                                <li id="lowercase" class="text-red-500">One lowercase letter</li>
                                <li id="number" class="text-red-500">One number</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div>
                        <label for="confirm_password" class="block text-sm font-semibold text-warm-brown mb-2">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-sage-green"></i>
                            </div>
                            <input 
                                type="password" 
                                id="confirm_password" 
                                name="confirm_password" 
                                required
                                class="w-full pl-12 pr-4 py-4 border-2 border-light-cream rounded-xl focus:outline-none focus:ring-4 focus:ring-warm-brown/20 focus:border-warm-brown text-warm-brown placeholder-sage-green bg-light-cream transition-all duration-300"
                                placeholder="Confirm your password"
                            >
                        </div>
                        <p id="passwordMatch" class="text-xs mt-1 hidden"></p>
                    </div>

                    <!-- Terms and Privacy -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms"
                            required
                            class="h-4 w-4 text-warm-brown focus:ring-warm-brown border-sage-green rounded mt-1"
                        >
                        <label for="terms" class="ml-3 text-sm text-sage-green leading-relaxed">
                            I agree to the 
                            <a href="<?= base_url('terms') ?>" class="text-warm-brown hover:text-sage-green font-medium transition-colors duration-300">Terms of Service</a>
                            and 
                            <a href="<?= base_url('privacy') ?>" class="text-warm-brown hover:text-sage-green font-medium transition-colors duration-300">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="newsletter" 
                            name="newsletter"
                            class="h-4 w-4 text-warm-brown focus:ring-warm-brown border-sage-green rounded"
                        >
                        <label for="newsletter" class="ml-3 text-sm text-sage-green">
                            Subscribe to our newsletter for latest fashion updates
                        </label>
                    </div>

                    <!-- Register Button -->
                    <button 
                        type="submit"
                        id="registerBtn"
                        disabled
                        class="w-full bg-sage-green text-light-cream py-4 rounded-xl font-semibold text-lg hover:bg-warm-brown transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100"
                    >
                        Create Account
                    </button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-sage-green/30"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-cream-beige text-sage-green">or sign up with</span>
                        </div>
                    </div>

                    <!-- Social Signup -->
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

                <!-- Login Link -->
                <div class="text-center mt-8 pt-6 border-t border-light-cream">
                    <p class="text-sage-green">
                        Already have an account? 
                        <a href="<?= base_url('login') ?>" class="text-warm-brown hover:text-sage-green font-semibold transition-colors duration-300">
                            Sign in here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/auth.js"></script>
</body>
</html>