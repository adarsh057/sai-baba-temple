<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Us | Shree Sai Baba Temple | Malkajgiri</title>
  
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

        /* Sophisticated Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, var(--deep-burgundy) 0%, var(--luxury-black) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .preloader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .loader-container {
            text-align: center;
        }

        .luxury-spinner {
            width: 80px;
            height: 80px;
            border: 2px solid rgba(201, 169, 97, 0.2);
            border-top: 2px solid var(--primary-gold);
            border-radius: 50%;
            animation: luxurySpin 1.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
            margin: 0 auto 1rem;
        }

        .loader-text {
            color: var(--primary-gold);
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        @keyframes luxurySpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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

        /* Elegant Navigation */
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

        .nav-links a.active {
            color: var(--deep-burgundy);
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

        .nav-links a.active::before {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--deep-burgundy);
        }

        .nav-links a:hover::before {
            width: 100%;
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

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background: var(--pearl-white);
            box-shadow: var(--shadow-dramatic);
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1001;
            padding: 6rem 2rem 2rem;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu .nav-links {
            flex-direction: column;
            gap: 2rem;
        }

        .mobile-menu .nav-links a {
            font-size: 1.1rem;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
        }

        /* Page Hero Section */
        .page-hero {
            height: 60vh;
            background: 
                linear-gradient(rgba(26, 26, 26, 0.5), rgba(114, 47, 55, 0.4)),
                radial-gradient(circle at 30% 70%, rgba(201, 169, 97, 0.15) 0%, transparent 50%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="luxury-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="2" fill="%23C9A961" opacity="0.1"/><circle cx="10" cy="10" r="1" fill="%23C9A961" opacity="0.05"/><circle cx="50" cy="50" r="1" fill="%23C9A961" opacity="0.05"/></pattern></defs><rect width="1200" height="800" fill="%23722F37"/><rect width="1200" height="800" fill="url(%23luxury-pattern)"/></svg>') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            margin-top: 0;
        }

        .page-hero-content {
            max-width: 800px;
            padding: 0 3rem;
            z-index: 2;
            animation: fadeInUp 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(80px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, white 0%, var(--primary-gold) 50%, white 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            letter-spacing: -2px;
        }

        .page-hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            line-height: 1.6;
            font-weight: 300;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
            font-size: 1rem;
            opacity: 0.8;
        }

        .breadcrumb a {
            color: var(--primary-gold);
            text-decoration: none;
        }

        .breadcrumb span {
            color: rgba(255, 255, 255, 0.6);
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        /* About Intro Section */
        .about-intro {
            padding: 8rem 0 6rem;
            background: var(--pearl-white);
        }

        .about-intro-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .about-text {
            padding-right: 2rem;
        }

        .about-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            font-weight: 700;
            color: var(--deep-burgundy);
            margin-bottom: 2rem;
            letter-spacing: -1px;
        }

        .about-text p {
            font-size: 1.1rem;
            color: var(--elegant-gray);
            margin-bottom: 2rem;
            line-height: 1.8;
            font-weight: 300;
        }

        .about-text .highlight {
            font-family: 'Crimson Text', serif;
            font-style: italic;
            color: var(--primary-gold);
            font-size: 1.2rem;
            font-weight: 600;
        }

        .about-image {
            position: relative;
        }

        .about-image-container {
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-elegant);
            position: relative;
            overflow: hidden;
        }

        .about-image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="temple-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="%23FFFFFF" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23temple-pattern)"/></svg>');
        }

        .temple-illustration {
            width: 100%;
            height: 400px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--deep-burgundy);
            position: relative;
            z-index: 2;
        }

        /* Sai Baba Story Section */
        .sai-story {
            padding: 8rem 0;
            background: var(--rich-cream);
            position: relative;
        }

        .section-ornament {
            position: absolute;
            top: 4rem;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--primary-gold), transparent);
        }

        .section-header {
            text-align: center;
            margin-bottom: 5rem;
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
            font-size: 3.2rem;
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

        .story-timeline {
            margin-top: 4rem;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 1fr 100px 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
            align-items: center;
        }

        .timeline-item:nth-child(even) .timeline-content:first-child {
            order: 3;
        }

        .timeline-item:nth-child(even) .timeline-marker {
            order: 2;
        }

        .timeline-item:nth-child(even) .timeline-content:last-child {
            order: 1;
        }

        .timeline-content {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            border: 1px solid rgba(201, 169, 97, 0.1);
            transition: all 0.4s ease;
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-elegant);
        }

        .timeline-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
        }

        .timeline-content .year {
            color: var(--primary-gold);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .timeline-content p {
            color: var(--elegant-gray);
            line-height: 1.7;
            font-weight: 300;
        }

        .timeline-marker {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            box-shadow: var(--shadow-soft);
            position: relative;
            margin: 0 auto;
        }

        .timeline-marker::before,
        .timeline-marker::after {
            content: '';
            position: absolute;
            width: 2px;
            height: 100px;
            background: linear-gradient(var(--primary-gold), transparent);
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-marker::before {
            top: -100px;
        }

        .timeline-marker::after {
            bottom: -100px;
        }

        .timeline-item:first-child .timeline-marker::before,
        .timeline-item:last-child .timeline-marker::after {
            display: none;
        }

        /* Temple History Section */
        .temple-history {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--deep-burgundy) 0%, var(--luxury-black) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .temple-history::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="luxury-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="%23C9A961" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23luxury-dots)"/></svg>');
        }

        .history-content {
            position: relative;
            z-index: 2;
        }

        .history-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .history-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 24px;
            border: 1px solid rgba(201, 169, 97, 0.2);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .history-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .history-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin: 0 auto 1.5rem;
            box-shadow: var(--shadow-soft);
        }

        .history-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .history-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            font-weight: 300;
        }

        /* Values Section */
        .values {
            padding: 8rem 0;
            background: var(--pearl-white);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .value-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(201, 169, 97, 0.1);
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-gold), var(--accent-copper));
            transform: scaleX(0);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .value-card:hover::before {
            transform: scaleX(1);
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-dramatic);
        }

        .value-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            color: white;
            font-size: 2.2rem;
            transition: all 0.4s ease;
            box-shadow: var(--shadow-soft);
        }

        .value-card:hover .value-icon {
            transform: scale(1.05) rotate(5deg);
        }

        .value-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
            letter-spacing: -0.3px;
        }

        .value-card p {
            color: var(--soft-gray);
            line-height: 1.7;
            font-size: 1.05rem;
            font-weight: 300;
        }

       

        

        .temple-hours {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
            font-size: 0.95rem;
        }

        .hour-item span:first-child {
            color: rgba(255, 255, 255, 0.8);
        }

        .hour-item span:last-child {
            color: var(--primary-gold);
            font-weight: 500;
        }


        .social-links {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(201, 169, 97, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .social-link:hover {
            background: var(--primary-gold);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow-soft);
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            font-size: 0.95rem;
        }

        .contact-item i {
            color: var(--primary-gold);
            width: 16px;
            text-align: center;
        }

        .contact-item span {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
        }

       

        /* Elegant Scroll Button */
        .scroll-top {
            position: fixed;
            bottom: 3rem;
            right: 3rem;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            box-shadow: var(--shadow-elegant);
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: var(--shadow-dramatic);
        }

        /* Responsive Excellence */
        @media (max-width: 1024px) {
            .header-content {
                padding: 1.5rem 2rem;
            }
            
            .container {
                padding: 0 2rem;
            }
            
            .page-hero h1 {
                font-size: 3rem;
            }
            
            .about-intro-content {
                grid-template-columns: 1fr;
                gap: 4rem;
            }
            
            .about-text {
                padding-right: 0;
                text-align: center;
            }
            
            .timeline-item {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .timeline-item:nth-child(even) .timeline-content:first-child {
                order: 1;
            }
            
            .timeline-item:nth-child(even) .timeline-marker {
                order: 2;
            }
            
            .timeline-item:nth-child(even) .timeline-content:last-child {
                order: 3;
            }
            
            .timeline-marker::before,
            .timeline-marker::after {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .page-hero {
                height: 50vh;
            }

            .page-hero h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .about-text h2 {
                font-size: 2.5rem;
            }

            .values-grid,
            .history-grid {
                grid-template-columns: 1fr;
            }

            .value-card {
                padding: 2rem 1.5rem;
            }

            
            
            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .header-content {
                padding: 1rem;
            }
            
            .container {
                padding: 0 1rem;
            }
            
            .page-hero h1 {
                font-size: 2rem;
            }
            
            .logo-text h1 {
                font-size: 1.4rem;
            }
            
            .about-intro {
                padding: 4rem 0;
            }
            
            .sai-story,
            .temple-history,
            .values {
                padding: 4rem 0;
            }
        }

        /* Elegant animations for scroll reveal */
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
    </style>
</head>
<body>
    <!-- Sophisticated Preloader -->
    <div class="preloader">
        <div class="loader-container">
            <div class="luxury-spinner"></div>
            <div class="loader-text">Loading Divine Wisdom</div>
        </div>
    </div>

 

    <!-- Page Hero Section -->
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>About Our Temple</h1>
            <p>Discover the sacred journey, divine teachings, and spiritual heritage that defines our temple community</p>
            <div class="breadcrumb">
                <a href="index.html"><i class="fas fa-home"></i> Home</a>
                <span>/</span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- About Introduction Section -->
    <section class="about-intro">
        <div class="container">
            <div class="about-intro-content reveal">
                <div class="about-text">
                    <h2>A Sacred Sanctuary of Faith</h2>
                    <p class="highlight">"सबका मालिक एक है" - One God Governs All</p>
                    <p>
                        Welcome to the Shree Sai Baba Temple in Malkajgiri, a divine sanctuary where the eternal teachings 
                        of Shirdi Sai Baba illuminate the path of countless devotees. Our temple stands as a beacon of hope, 
                        love, and spiritual awakening, serving the community with unwavering dedication since our establishment.
                    </p>
                    <p>
                        Rooted in the timeless wisdom of Sai Baba, our temple embraces the universal message of unity, 
                        compassion, and service to humanity. Here, every soul finds solace, every prayer finds its 
                        destination, and every heart discovers the divine presence that transcends all boundaries of 
                        religion, caste, and creed.
                    </p>
                    <p>
                        We are more than just a place of worship; we are a spiritual family bound together by our 
                        shared devotion to the beloved Sai Baba and our commitment to spreading his message of love 
                        and service throughout our community and beyond.
                    </p>
                </div>
                <div class="about-image">
                    <div class="about-image-container">
                        <div class="temple-illustration">
                            <i class="fas fa-place-of-worship"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sai Baba Story Timeline -->
    <section class="sai-story">
        <div class="section-ornament"></div>
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Divine Legacy</div>
                <h2 class="section-title">The Life of Shirdi Sai Baba</h2>
                <p class="section-description">
                    Journey through the sacred life of our beloved Sai Baba, whose divine presence continues 
                    to bless millions of devotees worldwide with miracles, love, and spiritual guidance.
                </p>
            </div>
            
            <div class="story-timeline">
                <div class="timeline-item reveal stagger-1">
                    <div class="timeline-content">
                        <div class="year">1838 - 1858</div>
                        <h3>Divine Arrival</h3>
                        <p>A young fakir arrived in the village of Shirdi, Maharashtra. Though his origins remained mysterious, his divine presence and miraculous powers soon became evident to all who encountered him. He chose to stay in a dilapidated mosque, which he lovingly called "Masjid Mai."</p>
                    </div>
                    <div class="timeline-marker">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="timeline-content empty"></div>
                </div>

                <div class="timeline-item reveal stagger-2">
                    <div class="timeline-content empty"></div>
                    <div class="timeline-marker">
                        <i class="fas fa-flame"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="year">1858 - 1886</div>
                        <h3>The Sacred Fire</h3>
                        <p>Sai Baba maintained a sacred fire (dhuni) in the mosque, whose ash (udi) possessed miraculous healing properties. He would distribute this sacred ash to devotees, curing their ailments and blessing them with prosperity and peace.</p>
                    </div>
                </div>

                <div class="timeline-item reveal stagger-3">
                    <div class="timeline-content">
                        <div class="year">1886 - 1916</div>
                        <h3>Miracles and Teachings</h3>
                        <p>During this period, Sai Baba's fame spread far and wide. He performed countless miracles, healed the sick, and imparted spiritual wisdom through simple parables and actions. His teachings transcended religious boundaries, emphasizing the unity of all faiths.</p>
                    </div>
                    <div class="timeline-marker">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="timeline-content empty"></div>
                </div>

                <div class="timeline-item reveal stagger-4">
                    <div class="timeline-content empty"></div>
                    <div class="timeline-marker">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="year">1916 - 1918</div>
                        <h3>Devotees and Disciples</h3>
                        <p>Prominent devotees like Hemadpant, Madhav Rao, and others documented Sai Baba's teachings and miracles. The construction of Samadhi Mandir began, and the Chavadi procession became a cherished tradition that continues to this day.</p>
                    </div>
                </div>

                <div class="timeline-item reveal stagger-5">
                    <div class="timeline-content">
                        <div class="year">October 15, 1918</div>
                        <h3>Mahasamadhi</h3>
                        <p>On Vijayadashami day, Sai Baba attained Mahasamadhi at the age of approximately 80 years. Before leaving his physical form, he assured his devotees, "I shall be active and vigorous even from my tomb," a promise that continues to manifest through countless miracles.</p>
                    </div>
                    <div class="timeline-marker">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <div class="timeline-content empty"></div>
                </div>

                <div class="timeline-item reveal stagger-6">
                    <div class="timeline-content empty"></div>
                    <div class="timeline-marker">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="year">1918 - Present</div>
                        <h3>Eternal Presence</h3>
                        <p>Sai Baba's spiritual influence has grown exponentially, with millions of devotees worldwide experiencing his grace and blessings. Temples dedicated to him have been established across the globe, spreading his message of love, faith, and service to humanity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Temple History Section -->
    <section class="temple-history">
        <div class="container">
            <div class="history-content">
                <div class="section-header reveal">
                    <div class="section-subtitle">Our Journey</div>
                    <h2 class="section-title">Temple History & Heritage</h2>
                    <p class="section-description">
                        Our temple's journey began with a dream to create a sacred space where devotees could 
                        experience the divine presence of Sai Baba and find spiritual solace in their daily lives.
                    </p>
                </div>
                
                <div class="history-grid">
                    <div class="history-card reveal stagger-1">
                        <div class="history-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3>Foundation</h3>
                        <p>Our temple began with a small group of devoted followers who shared a vision of creating a sacred sanctuary dedicated to Shirdi Sai Baba in Malkajgiri.</p>
                    </div>
                    
                    <div class="history-card reveal stagger-2">
                        <div class="history-icon">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h3>Construction</h3>
                        <p>Through the generous contributions and selfless service of devotees, the temple construction began with traditional architectural elements and modern facilities.</p>
                    </div>
                    
                    <div class="history-card reveal stagger-3">
                        <div class="history-icon">
                            <i class="fas fa-praying-hands"></i>
                        </div>
                        <h3>Consecration</h3>
                        <p>The temple was consecrated with elaborate rituals and ceremonies, establishing it as a sacred space where Sai Baba's divine presence could be experienced by all devotees.</p>
                    </div>
                    
                    <div class="history-card reveal stagger-4">
                        <div class="history-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Community Growth</h3>
                        <p>Over the years, our temple has grown into a vibrant spiritual community, serving thousands of devotees and organizing numerous charitable and cultural activities.</p>
                    </div>
                    
                    <div class="history-card reveal stagger-5">
                        <div class="history-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Service to Humanity</h3>
                        <p>Following Sai Baba's teachings, our temple actively engages in community service, including food distribution, healthcare camps, and educational support for the underprivileged.</p>
                    </div>
                    
                    <div class="history-card reveal stagger-6">
                        <div class="history-icon">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <h3>Future Vision</h3>
                        <p>We continue to expand our services and facilities to better serve our growing community while maintaining the spiritual essence and traditions of our beloved Sai Baba.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values & Principles Section -->
    <section class="values">
        <div class="section-ornament"></div>
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Guiding Principles</div>
                <h2 class="section-title">Our Values & Mission</h2>
                <p class="section-description">
                    Inspired by Sai Baba's timeless teachings, our temple upholds these fundamental values 
                    that guide every aspect of our spiritual and community service.
                </p>
            </div>
            
            <div class="values-grid">
                <div class="value-card reveal stagger-1">
                    <div class="value-icon">
                        <i class="fas fa-unity"></i>
                    </div>
                    <h3>Unity in Diversity</h3>
                    <p>We welcome devotees from all backgrounds, faiths, and walks of life, embodying Sai Baba's message that all religions lead to the same divine truth. Our temple serves as a bridge that unites hearts beyond boundaries.</p>
                </div>
                
                <div class="value-card reveal stagger-2">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Selfless Service</h3>
                    <p>Following Sai Baba's example of serving humanity, we actively engage in community service, helping those in need through food distribution, healthcare support, and educational initiatives for the underprivileged.</p>
                </div>
                
                <div class="value-card reveal stagger-3">
                    <div class="value-icon">
                        <i class="fas fa-dove"></i>
                    </div>
                    <h3>Inner Peace</h3>
                    <p>We provide a serene environment for meditation, prayer, and spiritual contemplation, helping devotees find inner peace and tranquility amidst the chaos of modern life.</p>
                </div>
                
                <div class="value-card reveal stagger-4">
                    <div class="value-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Spiritual Education</h3>
                    <p>We promote the study and understanding of Sai Baba's teachings, Hindu scriptures, and spiritual wisdom through regular discourses, study groups, and educational programs for all age groups.</p>
                </div>
                
                <div class="value-card reveal stagger-5">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Simple Living</h3>
                    <p>Inspired by Sai Baba's simple lifestyle, we encourage devotees to embrace simplicity, contentment, and gratitude while focusing on spiritual growth rather than material accumulation.</p>
                </div>
                
                <div class="value-card reveal stagger-6">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Divine Wisdom</h3>
                    <p>We strive to spread Sai Baba's timeless wisdom and teachings that illuminate the path to self-realization, helping devotees navigate life's challenges with faith, patience, and divine guidance.</p>
                </div>
            </div>
        </div>
    </section>

   
   

    <!-- Elegant Scroll to Top Button -->
    <button class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Sophisticated JavaScript for Premium Experience
        document.addEventListener('DOMContentLoaded', function() {
            // Luxury Preloader
            setTimeout(() => {
                document.querySelector('.preloader').classList.add('hide');
            }, 2000);

            // Premium Header Scroll Effect
            const header = document.querySelector('header');
            const scrollTop = document.querySelector('.scroll-top');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                    scrollTop.classList.add('show');
                } else {
                    header.classList.remove('scrolled');
                    scrollTop.classList.remove('show');
                }
            });

            // Elegant Mobile Menu Toggle
            const mobileToggle = document.querySelector('.mobile-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const body = document.body;

            mobileToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
                body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                });
            });

            // Luxury Scroll Reveal Animation
            const revealElements = document.querySelectorAll('.reveal');
            
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

            // Smooth Scroll to Top
            scrollTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Elegant Smooth Scrolling for Navigation Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const headerHeight = document.querySelector('header').offsetHeight;
                        const targetPosition = target.offsetTop - headerHeight - 20;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Enhanced Card Interactions
            document.querySelectorAll('.history-card, .value-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Timeline Item Enhancement
            document.querySelectorAll('.timeline-content').forEach(content => {
                content.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.02)';
                });
                
                content.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Enhanced Navigation Active State
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-links a');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 200)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });

            // Premium Loading Animation for Images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                    this.style.transform = 'scale(1)';
                });
            });

            // Enhanced Timeline Interactions
            document.querySelectorAll('.timeline-marker').forEach((marker, index) => {
                marker.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1) rotate(10deg)';
                    this.style.boxShadow = 'var(--shadow-dramatic)';
                });
                
                marker.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1) rotate(0deg)';
                    this.style.boxShadow = 'var(--shadow-soft)';
                });
            });

            // Parallax Effect for Page Hero
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const pageHero = document.querySelector('.page-hero');
                if (pageHero && scrolled < window.innerHeight) {
                    pageHero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // Enhanced Form Validation (if forms are added later)
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const inputs = this.querySelectorAll('input[required], textarea[required]');
                    let isValid = true;
                    
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('error');
                        } else {
                            input.classList.remove('error');
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                    }
                });
            });

            // Lazy Loading Enhancement
            const lazyElements = document.querySelectorAll('[data-src]');
            const lazyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const lazyElement = entry.target;
                        lazyElement.src = lazyElement.dataset.src;
                        lazyElement.classList.remove('lazy');
                        lazyObserver.unobserve(lazyElement);
                    }
                });
            });

            lazyElements.forEach(element => {
                lazyObserver.observe(element);
            });

            // Enhanced Value Cards Animation
            document.querySelectorAll('.value-card').forEach((card, index) => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.value-icon');
                    icon.style.transform = 'scale(1.1) rotate(10deg)';
                    icon.style.boxShadow = 'var(--shadow-elegant)';
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.value-icon');
                    icon.style.transform = 'scale(1) rotate(0deg)';
                    icon.style.boxShadow = 'var(--shadow-soft)';
                });
            });

            // Dynamic Background Patterns
            function createFloatingElements() {
                const hero = document.querySelector('.page-hero');
                if (!hero) return;

                for (let i = 0; i < 5; i++) {
                    const element = document.createElement('div');
                    element.style.position = 'absolute';
                    element.style.width = '20px';
                    element.style.height = '20px';
                    element.style.background = 'rgba(201, 169, 97, 0.1)';
                    element.style.borderRadius = '50%';
                    element.style.top = Math.random() * 100 + '%';
                    element.style.left = Math.random() * 100 + '%';
                    element.style.animation = `floatElegant ${5 + Math.random() * 5}s ease-in-out infinite`;
                    element.style.animationDelay = Math.random() * 2 + 's';
                    hero.appendChild(element);
                }
            }

            // Initialize floating elements
            createFloatingElements();

            // Smooth reveal animations with stagger
            const staggerElements = document.querySelectorAll('[class*="stagger-"]');
            staggerElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
            });

            // Performance optimized scroll handler
            let ticking = false;
            function updateScrollElements() {
                // Update header and scroll button visibility
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                    scrollTop.classList.add('show');
                } else {
                    header.classList.remove('scrolled');
                    scrollTop.classList.remove('show');
                }
                ticking = false;
            }

            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(updateScrollElements);
                    ticking = true;
                }
            }

            window.addEventListener('scroll', requestTick);

            // Enhanced accessibility
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                }
            });

            // Focus management for mobile menu
            const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
            const mobileMenuFocusable = mobileMenu.querySelectorAll(focusableElements);
            const firstFocusable = mobileMenuFocusable[0];
            const lastFocusable = mobileMenuFocusable[mobileMenuFocusable.length - 1];

            mobileMenu.addEventListener('keydown', function(e) {
                if (e.key === 'Tab') {
                    if (e.shiftKey) {
                        if (document.activeElement === firstFocusable) {
                            lastFocusable.focus();
                            e.preventDefault();
                        }
                    } else {
                        if (document.activeElement === lastFocusable) {
                            firstFocusable.focus();
                            e.preventDefault();
                        }
                    }
                }
            });

            // Preload critical resources
            const criticalImages = [
                // Add paths to important images here
            ];

            criticalImages.forEach(imageSrc => {
                const img = new Image();
                img.src = imageSrc;
            });
        });

        // Custom cursor effect for premium feel (optional)
        document.addEventListener('mousemove', (e) => {
            const cards = document.querySelectorAll('.value-card, .history-card, .timeline-content');
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                if (x >= 0 && x <= rect.width && y >= 0 && y <= rect.height) {
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;

                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
                } else {
                    card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
                }
            });
        });

        // Initialize AOS (Animate On Scroll) alternative
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal').forEach(el => {
                observer.observe(el);
            });
        }

        // Initialize all animations
        initScrollAnimations();
    </script>
</body>
</html>