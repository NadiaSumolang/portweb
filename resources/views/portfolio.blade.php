<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Minimalis</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Nadia</div>
        <nav>
            <ul>
                <li><button class="nav-button">Home</button></li>
                <li><button class="nav-button">Tentang</button></li>
                <li><button class="nav-button">Project</button></li>
                <li><button class="nav-button">Kontak</button></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-heading">Halo! Saya Nadia</h1>
            <p class="hero-subheading">A web developer focused on designing and developing attractive, responsive, and user-friendly web interfaces to provide the best experience for users.</p>
        </div>
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="tentang">
        <h2 class="section-heading">Tentang Saya</h2>
        <div class="about-content">
            <p class="about-text">
              An Informatics student who is enthusiastic about creating an attractive and easy-to-use web interface. Paying attention to every detail and ensuring responsive design to give users the best experience. Always open to learn new things and continue to develop skills so that the work can be better.
            </p>
            <div class="about-text">
                <h3 style="font-family: 'VT323', monospace; font-size: 2.4rem; margin-bottom: 1rem;">Skill Saya:</h3>
                <div class="skills">
                    <span class="skill-tag">HTML/CSS</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">SQL</span>
                    <span class="skill-tag">UI Design</span>
                    <span class="skill-tag">Python</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section - Single Column -->
    <section class="projects" id="project">
        <h2 class="section-heading">Project Saya</h2>
        <div class="projects-container">
            <!-- Project 1 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Toko Buku" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Flappy Bird</h3>
                    <p class="project-desc">Game clone sederhana Flappy Bird dibuat dengan HTML, CSS, dan JavaScript, menghadirkan gameplay yang ringan dan menyenangkan.</p>
                    <div class="project-links">
                        <a href="#" class="project-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="#" class="project-link">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" alt="Todo App" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Kozy</h3>
                    <p class="project-desc">Web manajemen kosan digital yang memudahkan pengelolaan data penyewa dan kamar.</p>
                    <div class="project-links">
                        <a href="#" class="project-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="#" class="project-link">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="BMI Calculator" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Blog Sederhana</h3>
                    <p class="project-desc">Website blog sederhana yang dirancang menggunakan HTML dan CSS, berisi artikel, kutipan inspiratif, informasi penulis, dan kontak. Cocok untuk berbagi tulisan sehari-hari secara simpel dan menarik.</p>
                    <div class="project-links">
                        <a href="#" class="project-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="#" class="project-link">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Weather App" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Watcher Movies</h3>
                    <p class="project-desc">Aplikasi daftar film yang sudah ditonton, membantu pengguna mencatat dan mengelola riwayat tontonan mereka dengan tampilan yang user-friendly.</p>
                    <div class="project-links">
                        <a href="#" class="project-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="#" class="project-link">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Portfolio Template" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Momento</h3>
                    <p class="project-desc">Website galeri foto dengan cerita dibalik f di setiap foto, menampilkan koleksi gambar secara rapi dan menarik</p>
                    <div class="project-links">
                        <a href="#" class="project-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                        <a href="#" class="project-link">
                            <i class="fab fa-github"></i> Source Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="kontak">
        <h2 class="section-heading">Hubungi Saya</h2>
        <div class="contact-container">
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Anda</label>
                    <input type="text" id="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea id="message" class="form-input" required></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="https://github.com" class="footer-link">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com" class="footer-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://instagram.com" class="footer-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com" class="footer-link">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p class="copyright">©2025 Nadia</p>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>