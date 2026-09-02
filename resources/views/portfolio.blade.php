@extends('layouts.portfolio')

@section('title', 'Raditya Nugroho — Web Designer & Developer')

@section('content')

{{-- ========== HERO ========== --}}
<section class="min-h-screen flex items-center relative overflow-hidden pt-24 pb-16 px-6" id="hero">
    <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
            {{--Status ketersediaan --}}
            <div class="hero-badge mb-6"><span class="dot"></span> Available for work</div>
            {{--Nama dan tagline --}}
            <h1 class="hero-title mb-6">
                <span class="word">Hi, I'm</span><br>
                <span class="word accent">Raditya</span><br>
                <span class="word">Nugroho</span>
            </h1>
            {{--Deskripsi singkat --}}
            <p class="hero-subtitle mb-8">
                I'm a web designer & developer, creating visually stunning and high-converting websites to help grow your business. Let's build something great!
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/projects" class="btn-primary">
                    See All Projects
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                </a>
                <a href="/contact" class="btn-outline">Contact Me</a>
            </div>
        </div>
        <div class="relative reveal-right hidden lg:block">
            {{--Foto profil --}}
            <div class="relative w-full max-w-md mx-auto">
                <div class="rounded-2xl overflow-hidden border border-[#1a1a1a] aspect-[3/4]">
                    <img src="{{ asset('images/portfolio/MERAH GUNDAR.png') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[radial-gradient(circle,rgba(196,255,77,0.06)_0%,transparent_70%)] pointer-events-none"></div>
</section>

{{-- ========== MARQUEE SKILLS ========== --}}
<div class="marquee-wrap">
    <div class="marquee-track">
        {{--Skill tags --}}
        <span class="marquee-item"><span class="sep"></span> Web Design</span>
        <span class="marquee-item"><span class="sep"></span> Laravel</span>
        <span class="marquee-item"><span class="sep"></span> React</span>
        <span class="marquee-item"><span class="sep"></span> TailwindCSS</span>
        <span class="marquee-item"><span class="sep"></span> Figma</span>
        <span class="marquee-item"><span class="sep"></span> UI/UX Design</span>
        <span class="marquee-item"><span class="sep"></span> JavaScript</span>
        <span class="marquee-item"><span class="sep"></span> PHP</span>
        <span class="marquee-item"><span class="sep"></span> Web Design</span>
        <span class="marquee-item"><span class="sep"></span> Laravel</span>
        <span class="marquee-item"><span class="sep"></span> React</span>
        <span class="marquee-item"><span class="sep"></span> TailwindCSS</span>
        <span class="marquee-item"><span class="sep"></span> Figma</span>
        <span class="marquee-item"><span class="sep"></span> UI/UX Design</span>
        <span class="marquee-item"><span class="sep"></span> JavaScript</span>
        <span class="marquee-item"><span class="sep"></span> PHP</span>
    </div>
</div>

{{-- ========== ABOUT ========== --}}
<section class="py-24 px-6" id="about">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal-left">
            <div class="section-tag"><span class="line"></span> About Me</div>
            {{--Nama --}}
            <h2 class="section-title mb-4">Hello, I am <span class="text-[#c4ff4d]">Raditya Nugroho</span></h2>
            {{--Lokasi --}}
            <p class="text-[#888] text-sm mb-6">Website Designer & Developer Based in Indonesia.</p>
            {{--Bio --}}
            <p class="section-desc mb-8">
                I'm a dedicated web designer & developer based in Indonesia. I specialize in creative design combined with seamless technical execution to craft exceptional digital experiences. With expertise in modern frameworks and tools, I deliver websites that not only look stunning but also drive real results.
            </p>
            <a href="/contact" class="btn-primary">
                Project Inquiry
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </a>
        </div>
        <div class="reveal-right">
            {{--Daftar proyek --}}
            <div>
                <div class="portfolio-row" style="border-top: 1px solid #1a1a1a;">
                    <span class="year">2026</span>
                    <span class="category">Web Design</span>
                    <span class="name">Finance Website</span>
                </div>
                <div class="portfolio-row">
                    <span class="year">2026</span>
                    <span class="category">Web Design</span>
                    <span class="name">Finance Dashboard</span>
                </div>
                <div class="portfolio-row">
                    <span class="year">2025</span>
                    <span class="category">UI/UX</span>
                    <span class="name">Mobile App Design</span>
                </div>
                <div class="portfolio-row">
                    <span class="year">2024</span>
                    <span class="category">Figma Design </span>
                    <span class="name"> App Design</span>
                </div>
                <div class="portfolio-row">
                    <span class="year">2024</span>
                    <span class="category">Web Design</span>
                    <span class="name">Cloning Youtube</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
