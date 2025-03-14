<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - DriveMate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFC107',
                        secondary: '#1A1A1A'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-secondary text-white">
    <!-- Navigation -->
    <nav class="bg-secondary border-b border-primary/20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="index.html" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <circle cx="12" cy="12" r="4"/>
                        <line x1="12" y1="2" x2="12" y2="4"/>
                        <line x1="12" y1="20" x2="12" y2="22"/>
                        <line x1="2" y1="12" x2="4" y2="12"/>
                        <line x1="20" y1="12" x2="22" y2="12"/>
                    </svg>
                    <span class="text-2xl font-bold text-primary">DriveMate</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-primary hover:text-primary/80">Home</a>
                    <a href="courses.php" class="text-white hover:text-primary">Courses</a>
                    <a href="exam-papers.php" class="text-white hover:text-primary">Exam Papers</a>
                    <a href="practical.php" class="text-white hover:text-primary">Practical Sessions</a>
                    <a href="about.php" class="text-white hover:text-primary">About</a>
                    <a href="cart.php" class="text-white hover:text-primary">Cart</a>
                </div>

                <!-- Mobile Navigation Button -->
                <button class="md:hidden text-white" onclick="toggleMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="index.php" class="block py-2 text-primary">Home</a>
                <a href="courses.php" class="block py-2 text-white hover:text-primary">Courses</a>
                <a href="exam-papers.php" class="block py-2 text-white hover:text-primary">Exam Papers</a>
                <a href="practical.php" class="block py-2 text-white hover:text-primary">Practical Sessions</a>
                <a href="about.php" class="block py-2 text-white hover:text-primary">About</a>
                <a href="cart.php" class="block py-2 text-white hover:text-primary">Cart</a>
            </div>
        </div>
    </nav>

    <!-- Courses Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-primary mb-12 text-center">Our Driving Courses</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course Card 1 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&w=800&q=80" 
                         alt="Beginner Course" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Beginner's Driving Course</h3>
                        <p class="text-gray-400 mb-4">Perfect for complete beginners. Learn the basics of driving.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary text-xl font-bold">5000LKR</span>
                            <button class="bg-primary text-secondary px-4 py-2 rounded-full font-bold hover:bg-primary/90">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=800&q=80" 
                         alt="Advanced Course" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Advanced Driving Skills</h3>
                        <p class="text-gray-400 mb-4">Master advanced techniques and defensive driving.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary text-xl font-bold">8000LKR</span>
                            <button class="bg-primary text-secondary px-4 py-2 rounded-full font-bold hover:bg-primary/90">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600320254374-ce2d293c324e?auto=format&fit=crop&w=800&q=80" 
                         alt="Test Prep Course" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Test Preparation</h3>
                        <p class="text-gray-400 mb-4">Comprehensive preparation for your driving test.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary text-xl font-bold">6000LKR</span>
                            <button class="bg-primary text-secondary px-4 py-2 rounded-full font-bold hover:bg-primary/90">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
   <footer class="bg-gray-800 border-t border-primary/20">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-primary font-bold text-lg mb-4">DriveMate</h3>
                <p class="text-gray-400">Your trusted partner in driving education</p>
            </div>
            <div>
                <h3 class="text-primary font-bold text-lg mb-4">Quick Links</h3>
                <ul class="space-y-2">
                        <li><a href="courses.php" class="text-gray-400 hover:text-primary">Courses</a></li>
                        <li><a href="exam-papers.php" class="text-gray-400 hover:text-primary">Exam Papers</a></li>
                        <li><a href="practical.php" class="text-gray-400 hover:text-primary">Practical Sessions</a></li>
                    </ul>
            </div>
            <div>
                <h3 class="text-primary font-bold text-lg mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-400">
                        <li>Email: info@drivemate.com</li>
                        <li>Phone: (+94) 1861724</li>
                        <li>Address: 211 Flower Rd, Colombo</li>
                    </ul>
            </div>
            <div>
                <h3 class="text-primary font-bold text-lg mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-primary">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.95,4.57a10,10,0,0,1-2.82.77,4.96,4.96,0,0,0,2.16-2.72,9.9,9.9,0,0,1-3.12,1.19,4.92,4.92,0,0,0-8.39,4.49A14,14,0,0,1,1.64,3.16,4.92,4.92,0,0,0,3.2,9.72,4.86,4.86,0,0,1,.96,9.11v.06a4.93,4.93,0,0,0,3.95,4.83,4.86,4.86,0,0,1-2.22.08,4.93,4.93,0,0,0,4.6,3.42A9.87,9.87,0,0,1,0,19.54a13.94,13.94,0,0,0,7.55,2.21,13.9,13.9,0,0,0,14-13.73c0-.21,0-.42,0-.63A10,10,0,0,0,24,4.59Z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,2.16c3.2,0,3.58,0,4.85.07,3.25.15,4.77,1.69,4.92,4.92.06,1.27.07,1.65.07,4.85s0,3.58-.07,4.85c-.15,3.23-1.66,4.77-4.92,4.92-1.27.06-1.65.07-4.85.07s-3.58,0-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.65-.07-4.85s0-3.58.07-4.85C2.38,3.92,3.9,2.38,7.15,2.23,8.42,2.18,8.8,2.16,12,2.16ZM12,0C8.74,0,8.33,0,7.05.07c-4.35.2-6.78,2.62-7,7C0,8.33,0,8.74,0,12S0,15.67.07,16.95c.2,4.36,2.62,6.78,7,7C8.33,24,8.74,24,12,24s3.67,0,4.95-.07c4.35-.2,6.78-2.62,7-7C24,15.67,24,15.26,24,12s0-3.67-.07-4.95c-.2-4.35-2.62-6.78-7-7C15.67,0,15.26,0,12,0Zm0,5.84A6.16,6.16,0,1,0,18.16,12,6.16,6.16,0,0,0,12,5.84ZM12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM18.41,4.15a1.44,1.44,0,1,0,1.44,1.44A1.44,1.44,0,0,0,18.41,4.15Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
            <p>&copy; 2024 DriveMate. All rights reserved.</p>
        </div>
    </div>
</footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>