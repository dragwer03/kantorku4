
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Kantorku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
           
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
        .navbar, #landing-section {
    background-color: #ecf2ff;
}
   
    </style>
</head>
<body >
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand mx-auto fw-bold" href="#">KANTORKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" >
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">About Kantorku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                </ul>
            </div>
           
        </div>
    </nav>
<section class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="login-card w-full max-w-md space-y-8 p-10">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Sign In to Kantorku
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Create an account to get started
            </p>
        </div>

      <!-- Social Login Buttons -->
<div class="flex justify-center space-x-4">
    <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 shadow-sm transition duration-150 ease-in-out whitespace-nowrap">
        <img src="img/google.png" alt="Google" class="w-5 h-5 mr-2">
        <span>Sign up with Google</span>
    </a>
    <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 shadow-sm transition duration-150 ease-in-out whitespace-nowrap">
        <img src="img/fb.png" alt="Facebook" class="w-5 h-5 mr-2">
        <span>Sign up with Facebook</span>
    </a>
</div>

        <!-- Divider -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">
                or signup with
                </span>
            </div>
        </div>

        <!-- Flash Messages -->
      <!-- Flash Messages -->







      
            <!-- Login Form -->
            <form class="mt-8 space-y-6" action="{{ route('signup.store') }}" method="POST">
            <input type="hidden" name="_token" value="6ifcpvg7puAZCFqj5ixQBEuEExt11vA0m7eNRXDs" autocomplete="off">            <div class="rounded-md shadow-sm -space-y-px">
                
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" name="username" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username" value="{{ old('username') }}">
                </div><br>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div><br>
                
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                        Remember this device
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign In
                </button>
            </div>
        </form>

        <p class="mt-2 text-center text-sm text-gray-600">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Log In</a>
        </p>
    </div>
    </section>
</body>
</html>