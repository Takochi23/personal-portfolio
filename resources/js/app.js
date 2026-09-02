// ============================================================
//  PORTFOLIO — ADVANCED INTERACTIVE JS
// ============================================================

// ===== CUSTOM CURSOR =====
const cursorDot = document.createElement('div');
const cursorRing = document.createElement('div');
cursorDot.className = 'cursor-dot';
cursorRing.className = 'cursor-ring';
document.body.appendChild(cursorDot);
document.body.appendChild(cursorRing);

let mouseX = 0, mouseY = 0;
let ringX = 0, ringY = 0;

document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    cursorDot.style.left = mouseX + 'px';
    cursorDot.style.top = mouseY + 'px';
});

// Smooth ring follow
function animateCursor() {
    ringX += (mouseX - ringX) * 0.12;
    ringY += (mouseY - ringY) * 0.12;
    cursorRing.style.left = ringX + 'px';
    cursorRing.style.top = ringY + 'px';
    requestAnimationFrame(animateCursor);
}
animateCursor();

// Cursor hover states
const hoverElements = 'a, button, .project-item, .service-card, .why-card, .testimonial-card, .pricing-card, .faq-question, .hamburger, input, textarea';
document.querySelectorAll(hoverElements).forEach(el => {
    el.addEventListener('mouseenter', () => {
        cursorDot.classList.add('hover');
        cursorRing.classList.add('hover');
    });
    el.addEventListener('mouseleave', () => {
        cursorDot.classList.remove('hover');
        cursorRing.classList.remove('hover');
    });
});

// Click effect
document.addEventListener('mousedown', () => cursorDot.classList.add('click'));
document.addEventListener('mouseup', () => cursorDot.classList.remove('click'));

// ===== SCROLL PROGRESS BAR =====
const progressBar = document.createElement('div');
progressBar.className = 'scroll-progress';
document.body.appendChild(progressBar);

// ===== GRAIN OVERLAY =====
const grain = document.createElement('div');
grain.className = 'grain';
document.body.appendChild(grain);

// ===== PAGE TRANSITION =====
const pageTransition = document.createElement('div');
pageTransition.className = 'page-transition';
document.body.appendChild(pageTransition);

// ===== NAVBAR SCROLL EFFECT =====
const navbar = document.querySelector('.navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
}

// ===== SCROLL PROGRESS UPDATE =====
window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    progressBar.style.width = progress + '%';
});

// ===== MOBILE MENU =====
const hamburger = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-menu');
const mobileOverlay = document.querySelector('.mobile-overlay');
const mobileLinks = document.querySelectorAll('.mobile-menu a');

function toggleMobileMenu() {
    hamburger?.classList.toggle('active');
    mobileMenu?.classList.toggle('open');
    mobileOverlay?.classList.toggle('open');
    document.body.style.overflow = mobileMenu?.classList.contains('open') ? 'hidden' : '';
}

hamburger?.addEventListener('click', toggleMobileMenu);
mobileOverlay?.addEventListener('click', toggleMobileMenu);
mobileLinks.forEach(link => link.addEventListener('click', toggleMobileMenu));

// ===== SMOOTH PAGE TRANSITIONS (internal links) =====
document.querySelectorAll('a[href^="/"]').forEach(link => {
    link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');
        if (href.startsWith('/') && !href.includes('#') && !link.hasAttribute('target')) {
            e.preventDefault();
            pageTransition.classList.add('leaving');
            setTimeout(() => { window.location.href = href; }, 500);
        }
    });
});

// ===== SMOOTH SCROLL (same-page anchors only) =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
        const href = anchor.getAttribute('href');
        const target = document.querySelector(href);
        if (target) {
            e.preventDefault();
            const navHeight = navbar?.offsetHeight || 0;
            const targetPos = target.getBoundingClientRect().top + window.scrollY - navHeight - 20;
            window.scrollTo({ top: targetPos, behavior: 'smooth' });
        }
    });
});

// ===== AUTO-SCROLL ON PAGE LOAD (hash links) =====
window.addEventListener('DOMContentLoaded', () => {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => {
                const navHeight = navbar?.offsetHeight || 0;
                const targetPos = target.getBoundingClientRect().top + window.scrollY - navHeight - 20;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }, 300);
        }
    }
});

// ===== SCROLL REVEAL ANIMATIONS =====
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
    revealObserver.observe(el);
});

// ===== FAQ ACCORDION =====
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        const answer = item.querySelector('.faq-answer');
        const isOpen = item.classList.contains('open');

        document.querySelectorAll('.faq-item.open').forEach(openItem => {
            openItem.classList.remove('open');
            openItem.querySelector('.faq-answer').style.maxHeight = '0';
        });

        if (!isOpen) {
            item.classList.add('open');
            answer.style.maxHeight = answer.scrollHeight + 'px';
        }
    });
});

// ===== COUNTER ANIMATION =====
function animateCounter(el) {
    const target = parseInt(el.dataset.target);
    const suffix = el.dataset.suffix || '';
    const prefix = el.dataset.prefix || '';
    const duration = 2000;
    const start = performance.now();

    function update(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(target * eased);
        el.textContent = prefix + current + suffix;
        if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
}

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

// ===== ACTIVE NAV LINK ON SCROLL =====
const sections = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY + 100;
    sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        const id = section.getAttribute('id');
        const link = document.querySelector(`.nav-link[href="#${id}"]`);
        if (link) {
            link.classList.toggle('active', scrollPos >= top && scrollPos < top + height);
        }
    });
});

// ===== MAGNETIC BUTTONS =====
document.querySelectorAll('.btn-primary, .btn-outline').forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
        const rect = btn.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        btn.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px)`;
    });
    btn.addEventListener('mouseleave', () => {
        btn.style.transform = '';
    });
});

// ===== 3D TILT CARDS =====
document.querySelectorAll('.service-card, .why-card, .testimonial-card, .pricing-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = (y - centerY) / centerY * -6;
        const rotateY = (x - centerX) / centerX * 6;
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});

// ===== PREMIUM TITLE REVEAL (hero title) =====
const heroTitle = document.querySelector('.hero-title');
if (heroTitle) {
    const words = document.querySelectorAll('.hero-title .word');
    words.forEach(word => {
        const text = word.innerHTML;
        word.innerHTML = `<span class="word-inner">${text}</span>`;
    });

    const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const innerWords = document.querySelectorAll('.hero-title .word-inner');
                innerWords.forEach((innerWord, i) => {
                    innerWord.style.transitionDelay = `${0.1 + (i * 0.15)}s`;
                });
                // Small delay to ensure CSS is applied
                setTimeout(() => heroTitle.classList.add('revealed'), 100);
                heroObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    heroObserver.observe(heroTitle);
}

// ===== PARALLAX ON SCROLL =====
window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    document.querySelectorAll('.float-card').forEach((card, i) => {
        const speed = i === 0 ? 0.03 : -0.03;
        card.style.transform = `translateY(${scrollY * speed}px)`;
    });
});

// ===== FORMSPREE FORM SUBMISSION =====
const contactForm = document.getElementById('contact-form');
const formSuccess = document.getElementById('form-success');

if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const btn = contactForm.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        btn.innerHTML = 'Sending... <svg class="animate-spin inline w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>';
        btn.disabled = true;

        try {
            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: new FormData(contactForm),
                headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                contactForm.reset();
                contactForm.style.display = 'none';
                formSuccess?.classList.remove('hidden');
                setTimeout(() => {
                    contactForm.style.display = '';
                    formSuccess?.classList.add('hidden');
                }, 5000);
            } else {
                alert('Oops! Something went wrong. Please try again.');
            }
        } catch (error) {
            alert('Network error. Please check your connection.');
        }

        btn.innerHTML = originalText;
        btn.disabled = false;
    });
}

// ===== HOVER CURSOR UPDATE FOR DYNAMIC ELEMENTS =====
const mutationObserver = new MutationObserver(() => {
    document.querySelectorAll(hoverElements).forEach(el => {
        if (!el.dataset.cursorBound) {
            el.dataset.cursorBound = 'true';
            el.addEventListener('mouseenter', () => {
                cursorDot.classList.add('hover');
                cursorRing.classList.add('hover');
            });
            el.addEventListener('mouseleave', () => {
                cursorDot.classList.remove('hover');
                cursorRing.classList.remove('hover');
            });
        }
    });
});
mutationObserver.observe(document.body, { childList: true, subtree: true });
