<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Customer Dashboard</h1>
            <nav>
                <a href="#" class="px-3 py-1 hover:bg-blue-500 rounded">Home</a>
                <a href="#" class="px-3 py-1 hover:bg-blue-500 rounded">Reports</a>
            </nav>
        </div>
    </header>

    <!-- Main content -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>
</body>
</html>
