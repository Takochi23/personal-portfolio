@extends('layouts.portfolio')

@section('title', 'Services — Raditya Nugroho')
@section('description', 'Explore my design services and work process.')

@section('content')

{{-- ========== SERVICES ========== --}}
<section class="py-24 px-6 bg-[#050505] mt-16" id="services">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> Design Services <span class="line"></span></div>
            <h2 class="section-title mb-4">Explore a suite of design services<br>to elevate your brand.</h2>
            <a href="/contact" class="btn-outline mt-4">Contact Now</a>
        </div>
        {{--Layanan yang ditawarkan --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
            <div class="service-card reveal">
                <div class="icon">🌐</div>
                <h4>Website Design & Development</h4>
                <p>Designing high-converting, user-focused websites built to match your brand and drive real growth.</p>
            </div>
            <div class="service-card reveal">
                <div class="icon">🖌️</div>
                <h4>Branding & Visual Identity</h4>
                <p>Crafting a cohesive look—logo, colors, and fonts—to make your brand consistent and memorable.</p>
            </div>
            <div class="service-card reveal">
                <div class="icon">🎨</div>
                <h4>UI/UX Design</h4>
                <p>Designing high-converting, user-focused websites built to match your brand and drive real growth use Figma.</p>
            </div>
            <div class="service-card reveal">
                <div class="icon">📊</div>
                <h4>Finance Solutions</h4>
                <p>Designing high-converting charts and dashboards to visualize your financial data.</p>
            </div>
        </div>
    </div>
</section>

{{-- ========== PROCESS ========== --}}
<section class="py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> How It Works <span class="line"></span></div>
            <h2 class="section-title mb-4">Process Is Everything</h2>
            <p class="section-desc mx-auto">Simple, streamlined process is what gets you results</p>
        </div>
        {{--Langkah proses kerja --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
            <div class="process-card reveal">
                <div class="process-num">1</div>
                <h4>Let's Get In Touch</h4>
                <p>Start by reaching out through our contact page. Fill out the form to discuss your project.</p>
            </div>
            <div class="process-card reveal">
                <div class="process-num">2</div>
                <h4>Wireframe & Design</h4>
                <p>I create a visual layout of your website to map out structure, user flow, and design style.</p>
            </div>
            <div class="process-card reveal">
                <div class="process-num">3</div>
                <h4>Development & Build</h4>
                <p>Your approved design is turned into a fully functional website using modern technologies.</p>
            </div>
            <div class="process-card reveal">
                <div class="process-num">4</div>
                <h4>Launch & Optimization</h4>
                <p>Before going live, I test your site across devices, set up SEO, and optimize speed.</p>
            </div>
        </div>
    </div>
</section>

{{-- ========== WHY CHOOSE ME ========== --}}
<section class="py-24 px-6 bg-[#050505]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> Why Choose Me <span class="line"></span></div>
            <h2 class="section-title mb-4">Why Me as Your Design Partner</h2>
        </div>
        {{--Keunggulan Anda --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children">
            <div class="why-card reveal">
                <div class="icon-sm">🎯</div>
                <h5>Modern Perspective</h5>
                <p>I understand what's currently working online—clean aesthetics, scroll-stopping visuals, and designs that connect with today's audience.</p>
            </div>
            <div class="why-card reveal">
                <div class="icon-sm">💼</div>
                <h5>2 Years of Real Experience</h5>
                <p>With years of hands-on experience, I know what works, what converts, and how to avoid common website mistakes.</p>
            </div>
            <div class="why-card reveal">
                <div class="icon-sm">🧠</div>
                <h5>Strategic Design Approach</h5>
                <p>I design with intention—using layout, colors, and user behavior strategies to guide visitors and increase conversions.</p>
            </div>
            <div class="why-card reveal">
                <div class="icon-sm">📱</div>
                <h5>Mobile-First Design</h5>
                <p>I prioritize mobile optimization and conversion-focused layouts, ensuring your website performs well on all devices.</p>
            </div>
            <div class="why-card reveal">
                <div class="icon-sm">🤝</div>
                <h5>Client-Centered Process</h5>
                <p>Clear communication, organized steps, and a smooth process—so you can focus on your business while I handle the design.</p>
            </div>
            <div class="why-card reveal">
                <div class="icon-sm">⚡</div>
                <h5>Multi-Platform Expertise</h5>
                <p>Whether you need a service-based site, an eCommerce store, or a modern interactive website, I create the right solution.</p>
            </div>
        </div>
    </div>
</section>

{{-- ========== PRICING / CTA ========== --}}
<section class="py-24 px-6">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16 reveal">
            <div class="section-tag justify-center"><span class="line"></span> Let's Connect <span class="line"></span></div>
            <h2 class="section-title mb-4">Let's Grow Together</h2>
        </div>
        {{--Paket harga --}}
        <div class="grid lg:grid-cols-3 gap-8 stagger-children">
            {{-- Package 1 --}}
            <div class="pricing-card reveal h-full flex flex-col">
                <h4 class="text-sm text-[#888] font-medium mb-2">Web Design</h4>
                <div class="pricing-price mb-1"><span class="currency">Rp</span> 1,6<span class="text-2xl">jt</span></div>
                <p class="text-[#666] text-sm mb-6">Starting price</p>
                <p class="text-[#999] text-sm leading-relaxed mb-8">Showcasing sleek, high-performance designs tailored for impact.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Custom responsive design</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> 2 revision rounds</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Free Hosting </li>
                </ul>
                <a href="/contact" class="btn-outline w-full justify-center mt-auto">Get Started</a>
            </div>

            {{-- Package 2 --}}
            <div class="pricing-card reveal h-full flex flex-col">
                <h4 class="text-sm text-[#888] font-medium mb-2">Web Development</h4>
                <div class="pricing-price mb-1"><span class="currency">Rp</span> 3<span class="text-2xl">jt</span></div>
                <p class="text-[#666] text-sm mb-6">Starting price</p>
                <p class="text-[#999] text-sm leading-relaxed mb-8">Full custom coded website with modern animations and interactions.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Custom responsive design</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Mobile optimization</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Basic SEO setup</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> 2 revision rounds</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Free Hosting </li>
                </ul>
                <a href="/contact" class="btn-outline w-full justify-center mt-auto">Get Started</a>
            </div>

            {{-- Package 3 --}}
            <div class="pricing-card featured reveal h-full flex flex-col">
                <div class="pricing-badge">Popular</div>
                <h4 class="text-sm text-[#888] font-medium mb-2">Full-Stack Development</h4>
                <div class="pricing-price mb-1"><span class="currency">Rp</span> 7<span class="text-2xl">jt</span></div>
                <p class="text-[#666] text-sm mb-6">Starting price</p>
                <p class="text-[#999] text-sm leading-relaxed mb-8">Building visually stunning web applications with full backend functionality.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Everything in Web Design</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Full backend development</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Database & API integration</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Admin dashboard</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Unlimited revisions</li>
                    <li class="flex items-center gap-3 text-sm text-[#aaa]"><span class="text-[#c4ff4d]">✓</span> Free Hosting </li>
                </ul>
                <a href="/contact" class="btn-primary w-full justify-center mt-auto text-black">Get Started</a>
            </div>
        </div>
    </div>
</section>

@endsection
