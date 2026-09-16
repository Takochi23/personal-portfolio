@extends('layouts.portfolio')

@section('title', 'Contact Me — Raditya Nugroho')
@section('description', 'Get in touch for your next web project.')

@section('content')

{{-- ========== CONTACT FORM ========== --}}
<section class="py-24 px-6 mt-16" id="contact">
    <div class="max-w-7xl mx-auto">
        <div class="reveal mb-16">
            <p class="footer-big-text">
                Let's<br>
                <span class="accent">design</span> / build / create<br>
                incredible website together.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16">
            {{-- FORMSPREE CONTACT FORM --}}
            <div class="reveal">
                <h3 class="text-xl font-bold mb-6">Send Me a Message</h3>
                {{--Ganti YOUR_FORMSPREE_ID dengan ID Formspree Anda (daftar di formspree.io) --}}
                <form action="https://formspree.io/f/YOUR_FORMSPREE_ID" method="POST" class="space-y-5" id="contact-form">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm text-[#888] mb-2">Name</label>
                            <input type="text" name="name" required placeholder="Your name"
                                class="w-full bg-[#111] border border-[#222] rounded-xl px-4 py-3 text-white text-sm placeholder-[#555] focus:outline-none focus:border-[#c4ff4d] transition">
                        </div>
                        <div>
                            <label class="block text-sm text-[#888] mb-2">Email</label>
                            <input type="email" name="email" required placeholder="your@email.com"
                                class="w-full bg-[#111] border border-[#222] rounded-xl px-4 py-3 text-white text-sm placeholder-[#555] focus:outline-none focus:border-[#c4ff4d] transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm text-[#888] mb-2">Subject</label>
                        <input type="text" name="subject" required placeholder="Project inquiry"
                            class="w-full bg-[#111] border border-[#222] rounded-xl px-4 py-3 text-white text-sm placeholder-[#555] focus:outline-none focus:border-[#c4ff4d] transition">
                    </div>
                    <div>
                        <label class="block text-sm text-[#888] mb-2">Message</label>
                        <textarea name="message" rows="5" required placeholder="Tell me about your project..."
                            class="w-full bg-[#111] border border-[#222] rounded-xl px-4 py-3 text-white text-sm placeholder-[#555] focus:outline-none focus:border-[#c4ff4d] transition resize-none"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full justify-center">
                        Send Message
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13"/></svg>
                    </button>
                </form>
                <div id="form-success" class="hidden mt-4 p-4 bg-[#c4ff4d]/10 border border-[#c4ff4d]/30 rounded-xl text-[#c4ff4d] text-sm text-center">
                    ✅ Message sent successfully! I'll get back to you soon.
                </div>
            </div>

            {{-- CONTACT INFO --}}
            <div class="reveal-right">
                <h3 class="text-xl font-bold mb-6">Contact Info</h3>
                <div class="space-y-8">
                    {{--Email --}}
                    <div>
                        <h5 class="text-sm font-semibold text-[#555] uppercase tracking-wider mb-2">Email</h5>
                        <a href="mailto:hello@example.com" class="text-lg hover:text-[#c4ff4d] transition">mohammadradtyanugroho.com</a>
                    </div>
                    {{--WhatsApp/Phone --}}
                    <div>
                        <h5 class="text-sm font-semibold text-[#555] uppercase tracking-wider mb-2">WhatsApp</h5>
                        <a href="https://wa.me/6281296959420" target="_blank" class="text-lg hover:text-[#c4ff4d] transition">+62 812-9695-9420</a>
                    </div>
                    {{--Social media links --}}
                    <div>
                        <h5 class="text-sm font-semibold text-[#555] uppercase tracking-wider mb-2">Social</h5>
                        <div class="flex gap-4">
                            <a href="https://www.instagram.com/raditnugroho23/" target="_blank" class="text-[#888] hover:text-[#c4ff4d] transition text-sm">Instagram</a>
                            <a href="https://www.linkedin.com/in/mohammad-raditya-raditya-aa8b322b0/" target="_blank" class="text-[#888] hover:text-[#c4ff4d] transition text-sm">LinkedIn</a>
                            <a href="https://github.com/Takochi23" target="_blank" class="text-[#888] hover:text-[#c4ff4d] transition text-sm">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
