<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Life & Teachings | Shree Sai Baba Temple | Malkajgiri</title>
  
    <link rel="icon" href="../public/Sai Baba Temple Logo.png" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&family=Inter:wght@300;400;500;600;700&family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-gold: #C9A961;
            --deep-burgundy: #722F37;
            --rich-cream: #FAF8F5;
            --elegant-gray: #2C2C2C;
            --soft-gray: #8B8B8B;
            --luxury-black: #1A1A1A;
            --accent-copper: #B08D57;
            --pearl-white: #FEFDFB;
            --shadow-soft: 0 8px 32px rgba(114, 47, 55, 0.08);
            --shadow-elegant: 0 16px 64px rgba(114, 47, 55, 0.12);
            --shadow-dramatic: 0 24px 96px rgba(114, 47, 55, 0.16);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: var(--elegant-gray);
            background-color: var(--pearl-white);
            overflow-x: hidden;
        }

        /* Header Styles (Same as main page) */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(250, 248, 245, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        header.scrolled {
            background: rgba(250, 248, 245, 0.98);
            box-shadow: var(--shadow-elegant);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .luxury-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .luxury-logo:hover .logo-icon {
            transform: rotate(5deg) scale(1.05);
            box-shadow: var(--shadow-soft);
        }

        .logo-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--deep-burgundy);
            margin-bottom: 0.2rem;
            letter-spacing: -0.5px;
        }

        .logo-text p {
            font-size: 0.85rem;
            color: var(--soft-gray);
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .nav-container {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
            margin: 0;
        }

        .nav-links a {
            color: var(--elegant-gray);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.75rem 0;
            position: relative;
            transition: all 0.3s ease;
            letter-spacing: 0.3px;
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-gold), var(--accent-copper));
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-links a:hover {
            color: var(--deep-burgundy);
        }

        .nav-links a:hover::before,
        .nav-links a.active::before {
            width: 100%;
        }

        .nav-links a.active {
            color: var(--deep-burgundy);
        }

        .premium-donate-btn {
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            color: white;
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-soft);
            letter-spacing: 0.3px;
        }

        .premium-donate-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-elegant);
            background: linear-gradient(135deg, var(--accent-copper), var(--primary-gold));
        }

        /* Page Header */
        .page-hero {
            padding: 12rem 0 6rem;
            background: linear-gradient(135deg, var(--deep-burgundy) 0%, var(--luxury-black) 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hero-pattern" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="15" cy="15" r="1" fill="%23C9A961" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23hero-pattern)"/></svg>');
        }

        .page-hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
            position: relative;
            z-index: 2;
        }

        .page-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, white 0%, var(--primary-gold) 50%, white 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -2px;
        }

        .page-hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
            font-weight: 300;
        }

        /* Content Sections */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        .life-section {
            padding: 6rem 0;
        }

        .life-section:nth-child(even) {
            background: var(--rich-cream);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-subtitle {
            font-size: 0.95rem;
            color: var(--primary-gold);
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--deep-burgundy);
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .section-description {
            font-size: 1.2rem;
            color: var(--soft-gray);
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.8;
            font-weight: 300;
        }

        /* Timeline Styles */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 4rem auto 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, var(--primary-gold), var(--accent-copper));
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin: 3rem 0;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) {
            padding-left: 0;
            padding-right: 50%;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            padding-right: 0;
            padding-left: 50%;
            text-align: left;
        }

        .timeline-content {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            border: 1px solid rgba(201, 169, 97, 0.1);
            position: relative;
        }

        .timeline-item:nth-child(odd) .timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            right: -10px;
            width: 0;
            height: 0;
            border-left: 10px solid white;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        .timeline-item:nth-child(even) .timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            left: -10px;
            width: 0;
            height: 0;
            border-right: 10px solid white;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        .timeline-date {
            position: absolute;
            left: 50%;
            top: 30px;
            transform: translateX(-50%);
            background: var(--primary-gold);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            z-index: 2;
        }

        .timeline-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .timeline-content p {
            color: var(--soft-gray);
            line-height: 1.7;
            font-weight: 300;
        }

        /* Teaching Cards */
        .teachings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .teaching-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border: 1px solid rgba(201, 169, 97, 0.1);
        }

        .teaching-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-gold), var(--accent-copper));
            border-radius: 20px 20px 0 0;
        }

        .teaching-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-dramatic);
        }

        .teaching-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            color: white;
            font-size: 2rem;
        }

        .teaching-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
            text-align: center;
            letter-spacing: -0.3px;
        }

        .teaching-card p {
            color: var(--soft-gray);
            line-height: 1.8;
            font-size: 1.05rem;
            font-weight: 300;
            text-align: center;
        }

        /* Quote Section */
        .quote-section {
            background: linear-gradient(135deg, var(--deep-burgundy) 0%, var(--luxury-black) 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
            position: relative;
            margin: 6rem 0;
        }

        .quote-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="quote-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="0.5" fill="%23C9A961" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23quote-pattern)"/></svg>');
        }

        .quote-content {
            position: relative;
            z-index: 2;
        }

        .quote-text {
            font-family: 'Crimson Text', serif;
            font-size: 2.5rem;
            font-style: italic;
            font-weight: 400;
            line-height: 1.4;
            margin-bottom: 2rem;
            color: var(--primary-gold);
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .quote-author {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Miracle Stories */
        .miracle-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(201, 169, 97, 0.05));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(201, 169, 97, 0.2);
            padding: 3rem;
            border-radius: 20px;
            margin-bottom: 2rem;
            transition: all 0.4s ease;
        }

        .miracle-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-elegant);
        }

        .miracle-card h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .miracle-card p {
            color: var(--soft-gray);
            line-height: 1.8;
            font-weight: 300;
        }

        /* Reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .stagger-1 { transition-delay: 0.1s; }
        .stagger-2 { transition-delay: 0.2s; }
        .stagger-3 { transition-delay: 0.3s; }
        .stagger-4 { transition-delay: 0.4s; }
        .stagger-5 { transition-delay: 0.5s; }
        .stagger-6 { transition-delay: 0.6s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                padding: 1rem 2rem;
            }

            .container {
                padding: 0 2rem;
            }

            .page-hero h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                padding-left: 80px;
                padding-right: 0;
                text-align: left;
            }

            .timeline-item:nth-child(odd) .timeline-content::before,
            .timeline-item:nth-child(even) .timeline-content::before {
                left: -10px;
                border-right: 10px solid white;
                border-left: none;
            }

            .timeline-date {
                left: 30px;
                transform: none;
            }

            .teachings-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .teaching-card {
                padding: 2rem;
            }

            .quote-text {
                font-size: 1.8rem;
            }
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
            background: none;
            border: none;
        }

        .mobile-toggle span {
            width: 25px;
            height: 2px;
            background: var(--elegant-gray);
            transition: all 0.3s ease;
            border-radius: 1px;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <!-- Premium Header -->
    <header>
        <div class="header-content">
            <a href="index.html" class="luxury-logo">
                <div class="logo-icon">
                    <i class="fas fa-praying-hands"></i>
                </div>
                <div class="logo-text">
                    <h1>Sai Baba Temple</h1>
                    <p>Divine Sanctuary</p>
                </div>
            </a>
            
            <nav class="nav-container">
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="philosophy.html">Philosophy</a></li>
                    <li><a href="life-teachings.html" class="active">Life & Teachings</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                
                <a href="#donate" class="premium-donate-btn">
                    <i class="fas fa-heart"></i>
                    Donate
                </a>
                
                <button class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Life & Teachings</h1>
            <p>Journey through the miraculous life of Shirdi Sai Baba and discover the timeless teachings that continue to guide millions of devotees worldwide</p>
        </div>
    </section>

    <!-- Life Timeline Section -->
    <section class="life-section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Sacred Journey</div>
                <h2 class="section-title">Life of Shirdi Sai Baba</h2>
                <p class="section-description">
                    Follow the extraordinary life journey of the beloved saint who transcended religious boundaries 
                    and touched countless hearts with his divine presence and compassionate teachings.
                </p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">1838</div>
                    <div class="timeline-content">
                        <h3>Divine Birth</h3>
                        <p>Sai Baba was born in a small village, though his exact birth details remain a mystery. Even as a child, he displayed extraordinary spiritual qualities and an innate understanding of both Hindu and Islamic traditions, hinting at his divine nature.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1858</div>
                    <div class="timeline-content">
                        <h3>Arrival in Shirdi</h3>
                        <p>A young Sai Baba arrived in the small village of Shirdi, Maharashtra. Initially met with suspicion, he gradually won the hearts of the villagers through his compassion, wisdom, and miraculous healing powers. He chose to make Shirdi his permanent home.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1860-1880</div>
                    <div class="timeline-content">
                        <h3>The Masjid Years</h3>
                        <p>Sai Baba chose to reside in an old, dilapidated mosque which he called "Dwarakamayi." Here, he maintained a sacred fire (dhuni) continuously, whose ash (udi) became famous for its healing properties. He welcomed people of all faiths with equal love.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1880-1910</div>
                    <div class="timeline-content">
                        <h3>Growing Fame</h3>
                        <p>Word of Sai Baba's miraculous powers and divine wisdom spread throughout Maharashtra and beyond. Devotees from all walks of life began to flock to Shirdi seeking his blessings, healing, and spiritual guidance. His reputation as a saint and miracle worker grew exponentially.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1910-1918</div>
                    <div class="timeline-content">
                        <h3>Final Teachings</h3>
                        <p>In his final years, Sai Baba's teachings became more profound and his miracles more frequent. He prepared his devotees for his eventual departure while ensuring that his spiritual legacy would continue through his chosen disciples and the sacred space of Shirdi.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">October 15, 1918</div>
                    <div class="timeline-content">
                        <h3>Mahasamadhi</h3>
                        <p>Sai Baba attained Mahasamadhi on Vijayadashami day. Before his departure, he assured his devotees: "I shall be active and vigorous even from the tomb." His physical form was laid to rest in what is now the Samadhi Mandir in Shirdi, which has become a place of pilgrimage for millions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <div class="quote-section">
        <div class="container">
            <div class="quote-content reveal">
                <p class="quote-text">"My treasury is open but no one brings carts to take from it. I say 'Dig! Take away!' but still they will not."</p>
                <p class="quote-author">— Shirdi Sai Baba</p>
            </div>
        </div>
    </div>

    <!-- Core Teachings Section -->
    <section class="life-section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Divine Wisdom</div>
                <h2 class="section-title">Core Teachings</h2>
                <p class="section-description">
                    The eternal teachings of Sai Baba continue to illuminate the spiritual path for seekers 
                    across the world, offering guidance for both material and spiritual well-being.
                </p>
            </div>
            
            <div class="teachings-grid">
                <div class="teaching-card reveal stagger-1">
                    <div class="teaching-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Love All, Serve All</h3>
                    <p>See the divine presence in every being and serve humanity with unconditional love. True devotion manifests through selfless service to others, recognizing that serving others is serving God.</p>
                </div>
                
                <div class="teaching-card reveal stagger-2">
                    <div class="teaching-icon">
                        <i class="fas fa-hands-praying"></i>
                    </div>
                    <h3>Shraddha and Saburi</h3>
                    <p>Cultivate unwavering faith (Shraddha) and infinite patience (Saburi). These twin virtues are the foundation of spiritual growth and the keys to receiving divine grace.</p>
                </div>
                
                <div class="teaching-card reveal stagger-3">
                    <div class="teaching-icon">
                        <i class="fas fa-dove"></i>
                    </div>
                    <h3>Inner Purity</h3>
                    <p>Maintain purity of heart, mind, and action. External rituals are meaningful only when accompanied by inner cleanliness and genuine devotion to the divine.</p>
                </div>
                
                <div class="teaching-card reveal stagger-4">
                    <div class="teaching-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Karma and Dharma</h3>
                    <p>Live righteously and accept the fruits of your actions with equanimity. Follow your dharma while surrendering the results to divine will.</p>
                </div>
                
                <div class="teaching-card reveal stagger-5">
                    <div class="teaching-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h3>Constant Remembrance</h3>
                    <p>Keep the divine name and form always in your heart and mind. Continuous remembrance of God purifies consciousness and brings peace to the soul.</p>
                </div>
                
                <div class="teaching-card reveal stagger-6">
                    <div class="teaching-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Help Ever, Hurt Never</h3>
                    <p>Always be ready to help others and never cause harm through thought, word, or deed. Compassion and non-violence are fundamental to spiritual evolution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Miracles and Stories Section -->
    <section class="life-section">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Divine Grace</div>
                <h2 class="section-title">Miracles and Divine Leelas</h2>
                <p class="section-description">
                    The miraculous events in Sai Baba's life demonstrate his divine nature and continue 
                    to inspire faith and devotion among millions of devotees worldwide.
                </p>
            </div>
            
            <div class="miracle-card reveal stagger-1">
                <h4>The Sacred Fire (Dhuni)</h4>
                <p>Sai Baba maintained a sacred fire in Dwarakamayi mosque continuously for over 60 years. The ash (udi) from this fire possessed miraculous healing properties and could cure physical and spiritual ailments. Even today, the dhuni continues to burn, and its sacred ash is distributed to devotees worldwide.</p>
            </div>
            
            <div class="miracle-card reveal stagger-2">
                <h4>Multiplication of Food</h4>
                <p>On numerous occasions, Sai Baba miraculously multiplied small quantities of food to feed hundreds of hungry devotees. During times of scarcity, he would ensure that no one left his presence hungry, demonstrating his divine power over material limitations.</p>
            </div>
            
            <div class="miracle-card reveal stagger-3">
                <h4>Healing the Sick</h4>
                <p>Countless devotees experienced miraculous healings through Sai Baba's touch, his sacred ash, or even just his loving glance. He cured incurable diseases, restored sight to the blind, and brought relief to those suffering from physical and mental ailments.</p>
            </div>
            
            <div class="miracle-card reveal stagger-4">
                <h4>Omnipresence</h4>
                <p>Sai Baba often appeared simultaneously in multiple places, helping devotees in distant locations while physically present in Shirdi. This demonstrated his transcendence of physical limitations and his omnipresent nature as a divine incarnation.</p>
            </div>
        </div>
    </section>

    <!-- Final Quote Section -->
    <div class="quote-section">
        <div class="container">
            <div class="quote-content reveal">
                <p class="quote-text">"I shall be active and vigorous even from the tomb. My tomb shall bless and speak to the needs of my devotees."</p>
                <p class="quote-author">— Shirdi Sai Baba's Promise</p>
            </div>
        </div>
    </div>

    <script>
    // Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Reveal animation
    const revealElements = document.querySelectorAll('.reveal, .timeline-item');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(element => {
        revealObserver.observe(element);
    });

    // Mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');

    mobileToggle?.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Enhanced hover effects for teaching cards
    document.querySelectorAll('.teaching-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.teaching-icon');
            if (icon) icon.style.transform = 'scale(1.1) rotate(5deg)';
        });
        
        card.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.teaching-icon');
            if (icon) icon.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Smooth scrolling / timeline animation
    window.addEventListener('scroll', () => {
        const timelineItems = document.querySelectorAll('.timeline-item');
        timelineItems.forEach((item, index) => {
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.85 && rect.bottom > 0) {
                item.classList.add('in-view');
            } else {
                item.classList.remove('in-view');
            }
        });
    });
</script>
   