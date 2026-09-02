@extends('layouts.portfolio')

@section('title', 'Testimonials — Raditya Nugroho')
@section('description', 'See what my clients say about working with me.')

@section('content')

{{-- ========== TESTIMONIALS + STATS ========== --}}
<section class="py-24 px-6 mt-16" id="testimonials">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> Happy Clients <span class="line"></span></div>
            <h2 class="section-title mb-4">Clients Love Me</h2>
            <p class="section-desc mx-auto">Trusted by happy clients, adding value and driving results.</p>
        </div>
        {{--Angka statistik --}}
        <div class="grid grid-cols-3 gap-8 mb-16 reveal">
            <div class="stat-item">
                <div class="stat-num counter" data-target="20" data-suffix="+">0</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item">
                <div class="stat-num counter" data-target="50" data-suffix="+">0</div>
                <div class="stat-label">Projects Done</div>
            </div>
            <div class="stat-item">
                <div class="stat-num counter" data-target="5" data-suffix=".0">0</div>
                <div class="stat-label">Average Rating</div>
            </div>
        </div>
        {{--Review klien --}}
        <div class="grid md:grid-cols-2 gap-6 stagger-children">
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <blockquote>"The designs exceeded our expectations! Every element felt purposeful, creating a seamless and visually stunning brand identity."</blockquote>
                <div class="author">Ahmad Fauzi</div>
                <div class="role">CEO, Tech Startup</div>
            </div>
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <blockquote>"Working with this process was effortless. The vision was understood perfectly, and the designs truly represent my brand."</blockquote>
                <div class="author">Sarah Putri</div>
                <div class="role">Founder, Creative Studio</div>
            </div>
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <blockquote>"Exceptional creativity and attention to detail! The final product not only looks great but also enhances user engagement."</blockquote>
                <div class="author">Budi Santoso</div>
                <div class="role">Marketing Director</div>
            </div>
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <blockquote>"A game-changing experience! The design process was smooth, collaborative, and resulted in a brand presence we're proud of."</blockquote>
                <div class="author">Dewi Lestari</div>
                <div class="role">Owner, Boutique Shop</div>
            </div>
        </div>
    </div>
</section>

{{-- ========== FAQ ========== --}}
<section class="py-24 px-6 bg-[#050505]" id="faq">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12 reveal">
            <div class="section-tag justify-center"><span class="line"></span> FAQ <span class="line"></span></div>
            <h2 class="section-title mb-4">Questions & Answers</h2>
            <p class="section-desc mx-auto">Get quick answers to your most pressing questions</p>
        </div>
        {{--Pertanyaan & jawaban --}}
        <div class="reveal">
            <div class="faq-item">
                <button class="faq-question">What platforms do you specialize in?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">I design and develop websites using Laravel, React, and modern frameworks—depending on your business needs, whether it's service-based, eCommerce, or modern interactive design.</div></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I know which tech stack is right?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">During our discovery call, I'll assess your goals, budget, and requirements to recommend the best technology stack for your project.</div></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you offer both design and development?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes! I handle the full process from initial concept and wireframe design through to development, testing, and launch.</div></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How long does a project usually take?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Typical projects take 2-6 weeks depending on complexity. A simple landing page may take 1-2 weeks, while a full e-commerce site could take 4-6 weeks.</div></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Will my website be mobile-friendly?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">100%! All my websites are built mobile-first and are fully responsive across all devices.</div></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can you redesign my existing website?<span class="icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, I can! Whether it's a complete overhaul or a refresh, I'll modernize your website while keeping what works.</div></div>
            </div>
        </div>
    </div>
</section>

@endsection
