<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Main Form Container -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Register Now</h2>

        <!-- Error Messages -->
        @if ($errors->any())
        <div class="mb-4 text-red-600 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="mb-1">• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form Starts Here -->
        <form action="{{ route('register.post') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Full Name Field -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold">Full Name:</label>
                <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-gray-700 font-semibold">Password:</label>
                <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Verify Password Field -->
            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold">Verify Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full p-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-200">
                    Submit
                </button>
                <div class="text-center mt-4">
                Already have an account?  
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
