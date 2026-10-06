<!DOCTYPE html>
<html>
<head>
    <title>NVSU Book App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#051a10] min-h-screen text-white flex">
    <!-- SIDEBAR -->
    <div class="w-64 bg-[#0a2e1a] border-r border-[#1a4d2e] min-h-screen p-6 hidden md:block">
        <h1 class="font-black text-2xl text-white mb-1"><i class="fas fa-leaf text-[#22c55e]"></i> NVSU</h1>
        <p class="text-[#86efac] text-xs tracking-[0.2em] mb-8">BOOK ARCHIVE</p>

        <nav class="space-y-2">
            <a href="/books" class="flex items-center gap-3 bg-[#16a34a] text-white px-4 py-3 rounded-xl font-bold">
                <i class="fas fa-book"></i> My Books
            </a>
            <a href="/books/create" class="flex items-center gap-3 text-[#a7f3d0] hover:bg-[#123d24] px-4 py-3 rounded-xl transition">
                <i class="fas fa-plus"></i> Add Book
            </a>
            <a href="#" class="flex items-center gap-3 text-[#a7f3d0] hover:bg-[#123d24] px-4 py-3 rounded-xl transition">
                <i class="fas fa-user-graduate"></i> Students
            </a>
        </nav>

        <div class="absolute bottom-6 left-6 right-6 bg-[#052e16] p-4 rounded-xl border border-[#1a4d2e]">
            <p class="text-xs text-[#86efac]">NVSU Thesis System</p>
            <p class="text-sm font-bold text-white">2026</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-1">
        <!-- TOP BAR -->
        <div class="bg-[#0a2e1a]/80 backdrop-blur border-b border-[#1a4d2e] px-8 py-4 flex justify-between items-center sticky top-0">
            <h2 class="text-[#d1fae5]">Welcome, <span class="text-white font-bold">Admin</span></h2>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-br from-[#22c55e] to-[#16a34a] rounded-full flex items-center justify-center font-black">A</div>
            </div>
        </div>

        <div class="p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>