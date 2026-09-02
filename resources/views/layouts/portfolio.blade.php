<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Raditya Nugroho — Web Designer & Developer')</title>
    <meta name="description" content="@yield('description', 'Professional web designer & developer specializing in modern, responsive websites.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

{{-- ========== NAVBAR ========== --}}
<nav class="navbar" id="navbar">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        {{--Logo/nama --}}
        <a href="/" class="text-lg font-bold tracking-tight">Raditya<span class="text-[#c4ff4d]">.</span></a>
        <div class="nav-links-desktop flex items-center gap-8">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/services" class="nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a>
            <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Projects</a>
            {{-- <a href="/testimonials" class="nav-link {{ request()->is('testimonials') ? 'active' : '' }}">Testimonials</a> --}}
            <a href="/contact" class="btn-primary text-sm !py-2 !px-5">Contact Me</a>
        </div>
        <div class="hamburger">
            <span></span><span></span><span></span>
        </div>
    </div>
</nav>

{{-- Mobile Menu --}}
<div class="mobile-overlay"></div>
<div class="mobile-menu">
    <a href="/" class="text-lg font-medium text-gray-300 hover:text-white transition">Home</a>
    <a href="/services" class="text-lg font-medium text-gray-300 hover:text-white transition">Services</a>
    <a href="/projects" class="text-lg font-medium text-gray-300 hover:text-white transition">Projects</a>
    {{-- <a href="/testimonials" class="text-lg font-medium text-gray-300 hover:text-white transition">Testimonials</a> --}}
    <a href="/contact" class="btn-primary mt-4 justify-center">Contact Me</a>
</div>

{{-- ========== CONTENT ========== --}}
@yield('content')

{{-- ========== FOOTER ========== --}}
<footer class="py-16 px-6 border-t border-[#1a1a1a]">
    <div class="max-w-7xl mx-auto">
        {{--Nama --}}
        <div class="flex flex-wrap items-center justify-between gap-4 text-sm text-[#555]">
            <span>© 2026 Raditya Nugroho. All rights reserved.</span>
            <div class="flex items-center gap-6">
                <a href="/" class="hover:text-white transition">Home</a>
                <a href="/services" class="hover:text-white transition">Services</a>
                <a href="/projects" class="hover:text-white transition">Projects</a>
                {{-- <a href="/testimonials" class="hover:text-white transition">Testimonials</a> --}}
                <a href="/contact" class="hover:text-white transition">Contact</a>
            </div>
            <span class="text-lg font-bold text-white">RADITYA<span class="text-[#c4ff4d]">.</span></span>
        </div>
    </div>
</footer>

</body>
</html>
