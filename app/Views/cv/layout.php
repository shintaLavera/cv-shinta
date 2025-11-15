<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* -------------------------- */
        /* Light Mode Variables (Default) */
        /* -------------------------- */
        :root {
            --theme-primary: #00897B; /* Emerald */
            --theme-secondary: #455A64; /* Abu-abu tua */
            --theme-accent: #4DB6AC; 
            --text-dark: #212529;
            --bg-light: #f8f9fa; /* Background body */
            --card-bg: #ffffff; /* Background card & Hero */
            --card-border: rgba(0,0,0,0.05);
            --shadow-base: rgba(0,0,0,0.1);
            --shadow-card: rgba(0,0,0,0.05);
            --timeline-color: #B2DFDB;
            --navbar-text-active: #B2DFDB;
        }

        /* -------------------------- */
        /* DARK MODE VARIABLES */
        /* -------------------------- */
        .dark-mode {
            --theme-primary: #004D40; 
            --theme-secondary: #B0BEC5; 
            --theme-accent: #4DB6AC; /* Warna accent terang untuk tombol di Dark Mode */
            --text-dark: #ECEFF1; 
            --bg-light: #212121; 
            --card-bg: #2b2b2b; 
            --card-border: rgba(255,255,255,0.1);
            --shadow-base: rgba(0,0,0,0.4);
            --shadow-card: rgba(0,0,0,0.2);
            --timeline-color: #616161;
            --navbar-text-active: #ffffff;
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif; 
            background-color: var(--bg-light);
            color: var(--text-dark); 
            padding-top: 60px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Teks Umum di Dark Mode */
        .dark-mode .text-dark, .dark-mode .text-body,
        .dark-mode h1, .dark-mode h2, .dark-mode h3, .dark-mode h4, .dark-mode h5, .dark-mode h6 {
            color: var(--text-dark) !important;
        }
        .dark-mode .text-muted, .dark-mode .small {
            color: var(--theme-secondary) !important; 
        }
        
        /* FIX: Warna Teks List Group di Dark Mode (Sertifikasi) */
        .dark-mode .list-group-item {
            /* Memaksa background menjadi warna card agar teks terlihat */
            background-color: var(--card-bg) !important; 
            color: var(--text-dark) !important; /* Memaksa warna teks menjadi terang */
        }
        .dark-mode .list-group-item i {
            color: var(--theme-accent) !important; /* Warna ikon menjadi accent */
        }


        /* NAVBAR */
        .navbar-custom {
            background-color: var(--theme-primary); 
            box-shadow: 0 4px 10px var(--shadow-base);
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .navbar-custom .nav-link {
            color: #ffffff;
            font-weight: 500;
            margin: 0 10px;
        }
        .navbar-custom .nav-link.active,
        .navbar-custom .nav-link:hover {
            color: var(--navbar-text-active); 
        }
        .theme-toggle-btn {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 1.25rem;
            cursor: pointer;
            padding: 0 10px;
            transition: color 0.3s;
        }
        .theme-toggle-btn:hover {
            color: var(--navbar-text-active);
        }

        /* HERO SECTION */
        .hero-section {
            background-color: var(--card-bg); 
            padding: 70px 0; 
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 5px 15px var(--shadow-card); 
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid var(--bg-light); 
            object-fit: cover;
            box-shadow: 0 0 15px var(--shadow-base);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        /* Tombol Aksi KUSTOM (Style Bulat dan Solid) */
        .btn-action-custom {
            background-color: var(--theme-primary);
            color: white !important; 
            border: none !important; 
            border-radius: 50px; 
            padding: 8px 25px; 
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
            margin: 0 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-action-custom:hover {
            background-color: var(--theme-secondary);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2); 
        }

        /* DARK MODE Tombol Aksi KUSTOM */
        .dark-mode .btn-action-custom {
            background-color: var(--theme-accent) !important; 
            color: var(--text-dark) !important; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .dark-mode .btn-action-custom:hover {
            background-color: var(--theme-primary) !important; 
            color: white !important; 
            box-shadow: 0 8px 15px rgba(0,0,0,0.6); 
        }
        
        /* Animasi Ikon di Tombol Aksi */
        .btn-action-custom i {
            color: inherit !important; 
            transition: transform 0.2s;
        }
        .btn-action-custom:hover i {
            transform: scale(1.1) rotate(5deg); 
        }


        /* CONTENT CONTAINERS & CARDS */
        .content-sections-container {
            max-width: 900px;
            padding: 30px 15px;
            margin: auto;
            min-height: 80vh;
        }

        .card-custom {
            border-radius: 8px;
            background-color: var(--card-bg); 
            border: 1px solid var(--card-border); 
            box-shadow: 0 6px 20px var(--shadow-card); 
            margin-bottom: 30px;
            transition: all 0.3s ease; 
        }
        
        /* HOVER CARD */
        .card-custom:hover {
            transform: translateY(-5px); 
            box-shadow: 0 10px 25px var(--shadow-base); 
        }
        .dark-mode .card-custom:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.8);
        }

        /* -------------------------- */
        /* VISUAL DETAILS */
        /* -------------------------- */

        /* Judul Section dengan Garis Pemisah */
        h2.section-title {
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 30px !important;
        }
        h2.section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px; /* Panjang garis */
            height: 4px; /* Ketebalan garis */
            background-color: var(--theme-primary);
            border-radius: 2px;
            transition: background-color 0.3s;
        }
        
        /* Card Header Pengalaman (Lebih Menonjol) */
        .card-custom .card-header {
            background-color: var(--theme-accent) !important;
            border-bottom: 1px solid var(--card-border);
            font-weight: 500;
        }
        .card-custom .card-header,
        .card-custom .card-header .fa-calendar-alt {
            color: var(--theme-secondary) !important; 
        }
        .dark-mode .card-custom .card-header {
            background-color: var(--theme-primary) !important;
            color: var(--text-dark) !important;
        }
        .dark-mode .card-custom .card-header .fa-calendar-alt {
            color: var(--text-dark) !important;
        }

        /* TIMELINE DOT (Dengan Shadow untuk efek 3D) */
        .timeline-item {
            position: relative;
            padding-left: 30px;
            padding-bottom: 30px; 
            border-left: 2px solid var(--timeline-color);
            transition: border-color 0.3s;
        }
        .timeline-item:last-child {
            padding-bottom: 0;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 5px;
            width: 14px;
            height: 14px;
            background-color: var(--theme-primary);
            border-radius: 50%;
            /* Ganti border lama dengan box-shadow untuk efek 3D */
            box-shadow: 0 0 0 3px var(--card-bg), 0 0 0 5px var(--theme-primary);
            border: none;
            transition: all 0.3s;
        }
        .dark-mode .timeline-item::before {
             /* Penyesuaian shadow di Dark Mode */
            box-shadow: 0 0 0 3px var(--card-bg), 0 0 0 5px var(--theme-accent);
        }

        /* PROGRESS BAR (Konsistensi Warna Tema) */
        .progress-bar.bg-primary,
        .progress-bar.bg-success {
            background-color: var(--theme-primary) !important; 
        }
        .progress-bar.bg-warning {
            background-color: var(--theme-accent) !important;
        }


        /* FOOTER */
        .footer-custom {
            background-color: var(--theme-primary); 
            color: #ffffff; 
            padding: 25px 0;
            margin-top: 40px;
            box-shadow: 0 -4px 10px var(--shadow-base);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        /* Ikon Footer */
        .footer-custom .footer-icon {
            font-size: 20px;
            color: #ffffff; 
            transition: 0.3s;
        }
        .footer-custom .footer-icon:hover {
            color: var(--theme-accent); 
            transform: translateY(-3px);
        }
        .dark-mode .footer-custom .footer-icon {
            color: var(--theme-secondary); 
        }
        .dark-mode .footer-custom .footer-icon:hover {
            color: var(--text-dark); 
        }
        .footer-custom .text-secondary-dark {
            color: var(--theme-secondary) !important;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="/">SHINTA CV</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_nav=='home')?'active':'' ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_nav=='pendidikan')?'active':'' ?>" href="/pendidikan">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_nav=='pengalaman')?'active':'' ?>" href="/pengalaman">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_nav=='keahlian')?'active':'' ?>" href="/keahlian">Keahlian</a>
                    </li>
                    
                    <li class="nav-item ms-lg-3">
                        <button id="theme-toggle" class="theme-toggle-btn" aria-label="Toggle Dark Mode">
                            <i class="fas fa-sun" id="theme-icon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer class="footer-custom mt-5">
        <div class="container text-center">
            <p class="mb-1 fw-semibold">Shinta Lavera</p>
            <p class="small text-secondary-dark mb-2">Curriculum Vitae</p>

            <div class="d-flex justify-content-center gap-3 mb-3">
                <a href="mailto:<?= $biodata->email; ?>" class="footer-icon"><i class="fas fa-envelope"></i></a>
                <a href="<?= $biodata->link_whatsapp; ?>" target="_blank" class="footer-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="<?= $biodata->link_linkedin; ?>" target="_blank" class="footer-icon"><i class="fab fa-linkedin"></i></a>
            </div>

            <p class="small text-muted mb-0">
                © <?= date('Y'); ?> — Built with ❤️ by Shinta Lavera
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // --- Dark Mode Toggle Script ---
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        const themeIcon = document.getElementById('theme-icon');

        function applyDarkMode(isDarkMode) {
            if (isDarkMode) {
                body.classList.add('dark-mode');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
                localStorage.setItem('dark-mode', 'dark');
            } else {
                body.classList.remove('dark-mode');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
                localStorage.setItem('dark-mode', 'light');
            }
        }

        const savedDarkMode = localStorage.getItem('dark-mode');
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedDarkMode) {
            applyDarkMode(savedDarkMode === 'dark');
        } else {
            applyDarkMode(prefersDark);
        }

        themeToggle.addEventListener('click', () => {
            const isDarkMode = body.classList.contains('dark-mode');
            applyDarkMode(!isDarkMode);
        });

        // --- Auto-scroll Script ---
        document.addEventListener('DOMContentLoaded', () => {
            const scrollId = '<?= $scroll_to ?? '' ?>';
            if (scrollId) {
                const el = document.getElementById(scrollId);
                if (el) {
                    const yPos = el.getBoundingClientRect().top + window.scrollY - 80;
                    setTimeout(() => {
                        window.scrollTo({ top: yPos, behavior: 'smooth' });
                    }, 100);
                }
            }
        });
    </script>

</body>
</html>