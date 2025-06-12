// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Smooth scrolling for navigation
document.querySelectorAll('nav button').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = button.textContent.toLowerCase();
        let targetSection;
        
        if (targetId === 'home') {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            return;
        } else if (targetId === 'tentang') {
            targetSection = document.getElementById('tentang');
        } else if (targetId === 'project') {
            targetSection = document.getElementById('project');
        } else if (targetId === 'kontak') {
            targetSection = document.getElementById('kontak');
        }
        
        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Scroll down button
document.querySelector('.scroll-down').addEventListener('click', () => {
    document.getElementById('tentang').scrollIntoView({ 
        behavior: 'smooth' 
    });
});

// Scroll animation
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.about-text, .project-card');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;
        
        if (elementPosition < screenPosition) {
            element.classList.add('visible');
        }
    });
};

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Form validation
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        
        if (name && email && message) {
            alert('Pesan terkirim! Terima kasih sudah menghubungi saya.');
            contactForm.reset();
        } else {
            alert('Harap isi semua field!');
        }
    });
}

// Typewriter effect for hero heading
const heroHeading = document.querySelector('.hero-heading');
if (heroHeading) {
    const originalText = heroHeading.textContent;
    let i = 0;
    
    function typeWriter() {
        if (i < originalText.length) {
            heroHeading.textContent = originalText.substring(0, i+1);
            i++;
            setTimeout(typeWriter, 100);
        } else {
            // Keep the cursor blinking after typing is done
            heroHeading.innerHTML = originalText + '<span class="cursor">|</span>';
        }
    }
    
    // Start typing effect after a short delay
    setTimeout(() => {
        heroHeading.textContent = '';
        typeWriter();
    }, 1000);
}