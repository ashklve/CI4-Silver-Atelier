
class AuthManager {
    constructor() {
        this.init();
    }

    init() {
        // Initialize based on current page
        if (window.location.pathname.includes('login')) {
            this.initLogin();
        } else if (window.location.pathname.includes('signup') || window.location.pathname.includes('register')) {
            this.initSignup();
        }
    }

    // LOGIN FUNCTIONALITY
    initLogin() {
        const loginForm = document.querySelector('form');
        const togglePassword = document.getElementById('togglePassword');
        
        if (togglePassword) {
            this.initPasswordToggle(togglePassword, 'password');
        }

        if (loginForm) {
            loginForm.addEventListener('submit', (e) => this.handleLogin(e));
        }
    }

    handleLogin(e) {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        const username = formData.get('username')?.trim();
        const password = formData.get('password');
        const remember = formData.get('remember');

        // Client-side validation
        if (!this.validateLogin(username, password)) {
            return;
        }

        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Signing in...';

        // Prepare login data
        const loginData = {
            username: username,
            password: password,
            remember: remember ? 1 : 0
        };

        // Send login request
        this.sendLoginRequest(loginData)
            .then(response => {
                if (response.success) {
                    this.showMessage('Login successful! Redirecting...', 'success');
                    setTimeout(() => {
                        window.location.href = response.redirect || '/';
                    }, 1500);
                } else {
                    this.showMessage(response.message || 'Login failed. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Login error:', error);
                this.showMessage('An error occurred. Please try again.', 'error');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            });
    }

    validateLogin(username, password) {
        const errors = [];

        if (!username) {
            errors.push('Username or email is required');
        } else if (username.length < 3) {
            errors.push('Username must be at least 3 characters');
        }

        if (!password) {
            errors.push('Password is required');
        } else if (password.length < 6) {
            errors.push('Password must be at least 6 characters');
        }

        if (errors.length > 0) {
            this.showMessage(errors.join('<br>'), 'error');
            return false;
        }

        return true;
    }

    async sendLoginRequest(data) {
        const response = await fetch('/auth/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(data)
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.json();
    }

    // SIGNUP FUNCTIONALITY
    initSignup() {
        const signupForm = document.querySelector('form');
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('confirm_password');
        const togglePassword = document.getElementById('togglePassword');
        const termsCheckbox = document.getElementById('terms');
        const registerBtn = document.getElementById('registerBtn');

        if (togglePassword) {
            this.initPasswordToggle(togglePassword, 'password');
        }

        if (passwordField) {
            passwordField.addEventListener('input', () => {
                this.checkPasswordStrength();
                this.validateSignupForm();
            });
        }

        if (confirmPasswordField) {
            confirmPasswordField.addEventListener('input', () => {
                this.checkPasswordMatch();
                this.validateSignupForm();
            });
        }

        if (termsCheckbox) {
            termsCheckbox.addEventListener('change', () => this.validateSignupForm());
        }

        // Add input listeners to all required fields
        const requiredFields = ['fullname', 'username', 'email'];
        requiredFields.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field) {
                field.addEventListener('input', () => this.validateSignupForm());
            }
        });

        if (signupForm) {
            signupForm.addEventListener('submit', (e) => this.handleSignup(e));
        }

        // Initial validation check
        this.validateSignupForm();
    }

    handleSignup(e) {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        const signupData = {
            fullname: formData.get('fullname')?.trim(),
            username: formData.get('username')?.trim(),
            email: formData.get('email')?.trim(),
            password: formData.get('password'),
            confirm_password: formData.get('confirm_password'),
            terms: formData.get('terms'),
            newsletter: formData.get('newsletter') ? 1 : 0
        };

        // Client-side validation
        if (!this.validateSignup(signupData)) {
            return;
        }

        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating Account...';

        // Send signup request
        this.sendSignupRequest(signupData)
            .then(response => {
                if (response.success) {
                    this.showMessage('Account created successfully! Redirecting to login...', 'success');
                    setTimeout(() => {
                        window.location.href = '/login';
                    }, 2000);
                } else {
                    this.showMessage(response.message || 'Registration failed. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Signup error:', error);
                this.showMessage('An error occurred. Please try again.', 'error');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            });
    }

    validateSignup(data) {
        const errors = [];

        if (!data.fullname || data.fullname.length < 2) {
            errors.push('Full name must be at least 2 characters');
        }

        if (!data.username || data.username.length < 3) {
            errors.push('Username must be at least 3 characters');
        }

        if (!data.email || !this.isValidEmail(data.email)) {
            errors.push('Please enter a valid email address');
        }

        const passwordValidation = this.validatePassword(data.password);
        if (!passwordValidation.isValid) {
            errors.push(...passwordValidation.errors);
        }

        if (data.password !== data.confirm_password) {
            errors.push('Passwords do not match');
        }

        if (!data.terms) {
            errors.push('You must accept the terms and conditions');
        }

        if (errors.length > 0) {
            this.showMessage(errors.join('<br>'), 'error');
            return false;
        }

        return true;
    }

    async sendSignupRequest(data) {
        const response = await fetch('/auth/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(data)
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.json();
    }

    // PASSWORD UTILITIES
    initPasswordToggle(toggleBtn, passwordFieldId) {
        toggleBtn.addEventListener('click', function() {
            const passwordField = document.getElementById(passwordFieldId);
            const eyeIcon = this.querySelector('i');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    }

    checkPasswordStrength() {
        const passwordField = document.getElementById('password');
        if (!passwordField) return;
        
        const password = passwordField.value;
        
        const checks = {
            length: password.length >= 8,
            uppercase: /[A-Z]/.test(password),
            lowercase: /[a-z]/.test(password),
            number: /[0-9]/.test(password)
        };

        // Update UI indicators
        Object.keys(checks).forEach(check => {
            const element = document.getElementById(check);
            if (element) {
                if (checks[check]) {
                    element.classList.remove('text-red-500');
                    element.classList.add('text-green-500');
                } else {
                    element.classList.remove('text-green-500');
                    element.classList.add('text-red-500');
                }
            }
        });

        return checks;
    }

    checkPasswordMatch() {
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('confirm_password');
        const matchElement = document.getElementById('passwordMatch');
        
        if (!matchElement || !passwordField || !confirmPasswordField) return false;

        const password = passwordField.value;
        const confirmPassword = confirmPasswordField.value;
        
        if (confirmPassword.length > 0) {
            matchElement.classList.remove('hidden');
            if (password === confirmPassword) {
                matchElement.textContent = 'Passwords match ✓';
                matchElement.classList.remove('text-red-500');
                matchElement.classList.add('text-green-500');
                return true;
            } else {
                matchElement.textContent = 'Passwords do not match';
                matchElement.classList.remove('text-green-500');
                matchElement.classList.add('text-red-500');
                return false;
            }
        } else {
            matchElement.classList.add('hidden');
            return false;
        }
    }

    validateSignupForm() {
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('confirm_password');
        const termsCheckbox = document.getElementById('terms');
        const registerBtn = document.getElementById('registerBtn');
        const fullnameField = document.getElementById('fullname');
        const usernameField = document.getElementById('username');
        const emailField = document.getElementById('email');
        
        if (!passwordField || !confirmPasswordField || !termsCheckbox || !registerBtn) return;

        const fullname = fullnameField?.value?.trim() || '';
        const username = usernameField?.value?.trim() || '';
        const email = emailField?.value?.trim() || '';
        const password = passwordField.value;
        const confirmPassword = confirmPasswordField.value;
        const terms = termsCheckbox.checked;
        
        const passwordValidation = this.validatePassword(password);
        const passwordsMatch = password === confirmPassword && confirmPassword.length > 0;
        const hasFullname = fullname.length >= 2;
        const hasUsername = username.length >= 3;
        const hasValidEmail = this.isValidEmail(email);
        
        const isValid = hasFullname && hasUsername && hasValidEmail && passwordValidation.isValid && passwordsMatch && terms;
        
        registerBtn.disabled = !isValid;
    }

    validatePassword(password) {
        const errors = [];
        const checks = {
            length: password.length >= 8,
            uppercase: /[A-Z]/.test(password),
            lowercase: /[a-z]/.test(password),
            number: /[0-9]/.test(password)
        };

        if (!checks.length) errors.push('Password must be at least 8 characters');
        if (!checks.uppercase) errors.push('Password must contain at least one uppercase letter');
        if (!checks.lowercase) errors.push('Password must contain at least one lowercase letter');
        if (!checks.number) errors.push('Password must contain at least one number');

        return {
            isValid: Object.values(checks).every(check => check),
            errors: errors,
            checks: checks
        };
    }

    // UTILITY METHODS
    isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    showMessage(message, type = 'info') {
        // Remove existing messages
        const existingMessages = document.querySelectorAll('.auth-message');
        existingMessages.forEach(msg => msg.remove());

        // Create message element
        const messageEl = document.createElement('div');
        messageEl.className = `auth-message fixed top-4 right-4 px-6 py-4 rounded-lg shadow-lg z-50 max-w-sm transition-all duration-300`;
        
        // Set colors based on type
        switch(type) {
            case 'success':
                messageEl.classList.add('bg-green-500', 'text-white');
                break;
            case 'error':
                messageEl.classList.add('bg-red-500', 'text-white');
                break;
            default:
                messageEl.classList.add('bg-blue-500', 'text-white');
        }

        messageEl.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'} mr-2"></i>
                <div>${message}</div>
                <button class="ml-4 text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

        document.body.appendChild(messageEl);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (messageEl.parentElement) {
                messageEl.remove();
            }
        }, 5000);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    new AuthManager();
});