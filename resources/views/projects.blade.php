@extends('layouts.portfolio')

@section('title', 'Projects — Raditya Nugroho')
@section('description', 'Showcase of my recent web design and development projects.')

@section('content')

{{-- ========== RECENT PROJECTS ========== --}}
<section class="py-24 px-6 mt-16" id="projects">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> Recent Projects <span class="line"></span></div>
            <h2 class="section-title mb-4">Recent Designs</h2>
            <p class="section-desc mx-auto">Showcase of some of my recent sleek websites</p>
        </div>
        {{--Screenshot proyek & LINK VERCEL --}}
        <div class="projects-grid stagger-children">
            <a href="https://n8notomatis.vercel.app/login" target="_blank" rel="noopener" class="project-item reveal-scale block">
                <img src="{{ asset('images/portfolio/project1.png') }}" alt="Project 1">
                <div class="project-overlay">
                    <span>Web App — 2026</span>
                    <h4>TakoSaving — AI-Powered Digital Financial Management Platform</h4>
                    <span class="mt-2 text-xs text-white/60">🔗 Klik untuk melihat live demo</span>
                </div>
            </a>
            {{--Ganti href dengan link Vercel project Anda --}}
            <a href="https://spotify-musik.vercel.app/" target="_blank" rel="noopener" class="project-item reveal-scale block">
                <img src="{{ asset('images/portfolio/project2.png') }}" alt="Project 2">
                <div class="project-overlay">
                    <span>Web App — 2026</span>
                    <h4>Spotify Music Clone</h4>
                    <span class="mt-2 text-xs text-white/60">🔗 Klik untuk melihat live demo</span>
                </div>
            </a>
            {{--Ganti href dengan link Vercel project Anda --}}
            <a href="{{ asset('images/portfolio/gambar.pdf') }}" target="_blank" rel="noopener" class="project-item reveal-scale block"> 
                <img src="{{ asset('images/portfolio/project3.png') }}" alt="Project 3"> 
                <div class="project-overlay"> 
                    <span>Design Poster — 2026</span> 
                    <h4>Mini Poster Kpop</h4> 
                    <span class="mt-2 text-xs text-white/60">
                        🔗 Klik untuk melihat Hasil Gambar
                    </span> 
                </div> 
            </a>
         </div>
    </div>
</section>

@endsection
