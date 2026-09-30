<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow">
        <div class="max-w-5xl mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex gap-6 font-medium">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="{{ route('foods.index') }}">Menu</a>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-600">Logout</button>
            </form>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto p-6">
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>