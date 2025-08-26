<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Shree Sai Baba Temple | Malkajgiri </title>
  
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

        /* Premium Header */
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
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            transition: all 0.3s ease;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .logo-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .luxury-logo:hover .logo-icon {
            transform: rotate(5deg) scale(1.05);
            box-shadow: var(--shadow-elegant);
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

        .nav-links > li {
            position: relative;
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
            display: flex;
            align-items: center;
            gap: 0.3rem;
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

        .nav-links a:hover::before {
            width: 100%;
        }

        /* Dropdown Menus */
        .dropdown {
            position: relative;
        }

        .dropdown-icon {
            font-size: 0.7rem;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .dropdown-icon {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 220px;
            border-radius: 12px;
            box-shadow: var(--shadow-elegant);
            border: 1px solid rgba(201, 169, 97, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1001;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu a {
            display: block;
            padding: 1rem 1.5rem;
            color: var(--elegant-gray);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 400;
            border-bottom: 1px solid rgba(201, 169, 97, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }

        .dropdown-menu a:last-child {
            border-bottom: none;
        }

        .dropdown-menu a::before {
            display: none;
        }

        .dropdown-menu a:hover {
            background: var(--rich-cream);
            color: var(--deep-burgundy);
            padding-left: 2rem;
        }

        .dropdown-menu a::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .dropdown-menu a:hover::after {
            transform: scaleY(1);
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
            overflow-y: auto;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu .nav-links {
            flex-direction: column;
            gap: 0;
        }

        .mobile-menu .nav-links li {
            width: 100%;
        }

        .mobile-menu .nav-links a {
            font-size: 1.1rem;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
            width: 100%;
        }

        .mobile-menu .dropdown-menu {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            border: none;
            border-radius: 0;
            background: var(--rich-cream);
            margin-top: 0.5rem;
            display: none;
        }

        .mobile-menu .dropdown.active .dropdown-menu {
            display: block;
        }

        .mobile-menu .dropdown-menu a {
            padding: 0.8rem 1.5rem;
            font-size: 0.95rem;
        }

        /* Luxury Hero Section */
        .hero {
            height: 100vh;
            background: 
                linear-gradient(rgba(26, 26, 26, 0.4), rgba(114, 47, 55, 0.3)),
                radial-gradient(circle at 30% 70%, rgba(201, 169, 97, 0.15) 0%, transparent 50%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="luxury-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="2" fill="%23C9A961" opacity="0.1"/><circle cx="10" cy="10" r="1" fill="%23C9A961" opacity="0.05"/><circle cx="50" cy="50" r="1" fill="%23C9A961" opacity="0.05"/></pattern></defs><rect width="1200" height="800" fill="%23722F37"/><rect width="1200" height="800" fill="url(%23luxury-pattern)"/></svg>') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-ornament {
            position: absolute;
            width: 300px;
            height: 300px;
            border: 2px solid rgba(201, 169, 97, 0.1);
            border-radius: 50%;
            top: 20%;
            right: 10%;
            animation: floatElegant 6s ease-in-out infinite;
        }

        .hero-ornament::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border: 1px solid rgba(201, 169, 97, 0.08);
            border-radius: 50%;
        }

        @keyframes floatElegant {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .hero-content {
            max-width: 900px;
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

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, white 0%, var(--primary-gold) 50%, white 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-family: 'Crimson Text', serif;
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            color: var(--primary-gold);
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            line-height: 1.8;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
        }

        .hero-cta {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-primary {
            background: linear-gradient(135deg, var(--primary-gold), var(--accent-copper));
            color: white;
            padding: 1.2rem 3rem;
            border: none;
            border-radius: 60px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.7rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-elegant);
            letter-spacing: 0.3px;
        }

        .cta-primary:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-dramatic);
        }

        .cta-secondary {
            background: transparent;
            color: white;
            padding: 1.2rem 3rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 60px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.7rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            letter-spacing: 0.3px;
        }

        .cta-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-gold);
            transform: translateY(-2px);
        }

        /* Premium Features Section */
        .features {
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

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(201, 169, 97, 0.1);
        }

        .feature-card::before {
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

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-dramatic);
        }

        .feature-icon {
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

        .feature-card:hover .feature-icon {
            transform: scale(1.05) rotate(5deg);
        }

        .feature-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--deep-burgundy);
            margin-bottom: 1rem;
            letter-spacing: -0.3px;
        }

        .feature-card p {
            color: var(--soft-gray);
            line-height: 1.7;
            font-size: 1.05rem;
            font-weight: 300;
        }

        /* Luxury Services Section */
        .services {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--deep-burgundy) 0%, var(--luxury-black) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="luxury-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="%23C9A961" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23luxury-dots)"/></svg>');
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            padding: 2.5rem 2rem;
            border-radius: 24px;
            border: 1px solid rgba(201, 169, 97, 0.2);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .service-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary-gold);
            margin-bottom: 1.5rem;
            display: block;
        }

        .service-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .service-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            font-weight: 300;
        }

        /* Luxury Footer Styles */
        .luxury-footer {
            background: linear-gradient(135deg, var(--luxury-black) 0%, var(--deep-burgundy) 100%);
            color: white;
            padding: 5rem 0 2rem;
            position: relative;
        }

        .luxury-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="footer-pattern" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="15" cy="15" r="1" fill="%23C9A961" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23footer-pattern)"/></svg>');
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
        }

        .footer-section h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-gold);
            margin-bottom: 1.5rem;
            letter-spacing: -0.3px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-logo .logo-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .footer-logo .logo-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .footer-logo .logo-text h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
            letter-spacing: -0.3px;
        }

        .footer-logo .logo-text p {
            font-size: 0.85rem;
            color: var(--soft-gray);
            letter-spacing: 0.5px;
        }

        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
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

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 300;
            transition: all 0.3s ease;
            padding: 0.3rem 0;
        }

        .footer-links a:hover {
            color: var(--primary-gold);
            padding-left: 0.5rem;
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

        .footer-bottom {
            border-top: 1px solid rgba(201, 169, 97, 0.1);
            padding-top: 2rem;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
        }

        .footer-bottom p:last-child {
            color: var(--primary-gold);
            font-style: italic;
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
            
            .hero-title {
                font-size: 3.5rem;
            }
            
            .features-grid {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 2rem;
            }

            .nav-links {
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .hero-title {
                font-size: 2.8rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .hero-cta {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .features-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }

            .feature-card {
                padding: 2rem 1.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
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
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .logo-text h1 {
                font-size: 1.4rem;
            }
            
            .cta-primary,
            .cta-secondary {
                padding: 1rem 2rem;
                font-size: 1rem;
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
            <div class="loader-text">Loading Divine Experience</div>
        </div>
    </div>

    <!-- Premium Header -->
    <header>
        <div class="header-content">
            <a href="#" class="luxury-logo">
                <div class="logo-icon">
                    <img src="../public/Sai Baba Temple Logo.png" alt="Sai Baba Temple Logo">
                </div>
                <div class="logo-text">
                    <h1>Sai Baba Temple</h1>
                    <p>Divine Sanctuary</p>
                </div>
            </a>
            
            <nav class="nav-container">
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="about.php">
                            About
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="lifeandteachings.php">Life & Teachings</a>
                            <a href="philosophy.php">Philosophy</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="information.php">
                            Information
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="history-architecture.php">History & Architecture</a>
                            <a href="darshan-timings.php">Darshan & Aarti Timings</a>
                            <a href="facilities.php">Facilities</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="services.php">
                            Services
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="temple-services.php">Services</a>
                            <a href="daily-aarti.php">Daily Aarti</a>
                            <a href="special-pujas.php">Special Pujas</a>
                            <a href="annadan-seva.php">Annadan Seva</a>
                        </div>
                    </li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                
                <a href="donate.php" class="premium-donate-btn">
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
        
        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="about.php" onclick="toggleMobileDropdown(this)">
                        About
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="lifeandteachings.php">Life & Teachings</a>
                        <a href="philosophy.php">Philosophy</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="information.php" onclick="toggleMobileDropdown(this)">
                        Information
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="history-architecture.php">History & Architecture</a>
                        <a href="darshan-timings.php">Darshan & Aarti Timings</a>
                        <a href="facilities.php">Facilities</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="services.php" onclick="toggleMobileDropdown(this)">
                        Services
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="temple-services.php">Services</a>
                        <a href="daily-aarti.php">Daily Aarti</a>
                        <a href="special-pujas.php">Special Pujas</a>
                        <a href="annadan-seva.php">Annadan Seva</a>
                    </div>
                </li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="donate.php" class="premium-donate-btn" style="margin-top: 1rem; justify-content: center;">
                        <i class="fas fa-heart"></i>
                        Donate
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Luxury Hero Section -->
    <section class="hero" id="home">
        <div class="hero-ornament"></div>
        <div class="hero-content">
            <div class="hero-subtitle">ॐ साईं राम ॐ</div>
            <h1 class="hero-title">Divine Sanctuary</h1>
            <p class="hero-description">
                Welcome to the sacred abode of Shirdi Sai Baba in Malkajgiri. 
                Experience divine blessings, inner peace, and spiritual awakening in our 
                magnificent temple dedicated to the beloved saint.
            </p>
            <div class="hero-cta">
                <a href="services.php" class="cta-primary">
                    <i class="fas fa-praying-hands"></i>
                    Visit Temple
                </a>
                <a href="about.php" class="cta-secondary">
                    <i class="fas fa-info-circle"></i>
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Premium Features Section -->
    <section class="features" id="about">
        <div class="section-ornament"></div>
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Sacred Traditions</div>
                <h2 class="section-title">Experience Divine Blessings</h2>
                <p class="section-description">
                    Our temple stands as a beacon of faith, offering a serene sanctuary where 
                    devotees can connect with the divine presence of Shirdi Sai Baba and find solace in prayer.
                </p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card reveal stagger-1">
                    <div class="feature-icon">
                        <i class="fas fa-praying-hands"></i>
                    </div>
                    <h3>Daily Prayers & Aarti</h3>
                    <p>Join our spiritual community for morning and evening prayers, traditional aarti ceremonies, and devotional singing that fills the temple with divine energy and peace.</p>
                </div>
                
                <div class="feature-card reveal stagger-2">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Spiritual Teachings</h3>
                    <p>Discover the profound wisdom of Sai Baba through regular spiritual discourses, scripture readings, and teachings that guide devotees on their spiritual journey.</p>
                </div>
                
                <div class="feature-card reveal stagger-3">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Community Service</h3>
                    <p>Follow Sai Baba's teachings of service to humanity through our community outreach programs, food distribution, and charitable activities that help those in need.</p>
                </div>
                
                <div class="feature-card reveal stagger-4">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Sacred Festivals</h3>
                    <p>Celebrate the rich traditions of our faith through vibrant festivals, special pujas, and religious ceremonies that bring our community together in devotion.</p>
                </div>
                
                <div class="feature-card reveal stagger-5">
                    <div class="feature-icon">
                        <i class="fas fa-dove"></i>
                    </div>
                    <h3>Peaceful Meditation</h3>
                    <p>Find inner tranquility in our dedicated meditation spaces, designed to provide a serene environment for contemplation and spiritual reflection.</p>
                </div>
                
                <div class="feature-card reveal stagger-6">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Spiritual Community</h3>
                    <p>Connect with fellow devotees in a welcoming spiritual family that supports each other's journey towards divine realization and personal growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-subtitle">Temple Services</div>
                <h2 class="section-title">Sacred Offerings</h2>
                <p class="section-description">
                    Immerse yourself in our comprehensive spiritual services designed to nurture 
                    your connection with the divine and support your spiritual growth.
                </p>
            </div>
            
            <div class="services-grid">
                <div class="service-card reveal stagger-1">
                    <i class="service-icon fas fa-sun"></i>
                    <h3>Morning Prayers</h3>
                    <p>Begin your day with divine blessings through our morning prayer sessions, featuring traditional mantras and devotional songs.</p>
                </div>
                
                <div class="service-card reveal stagger-2">
                    <i class="service-icon fas fa-moon"></i>
                    <h3>Evening Aarti</h3>
                    <p>Join the soul-stirring evening aarti ceremony that illuminates hearts with divine light and spiritual energy.</p>
                </div>
                
                <div class="service-card reveal stagger-3">
                    <i class="service-icon fas fa-gift"></i>
                    <h3>Special Pujas</h3>
                    <p>Participate in elaborate puja ceremonies for personal milestones, seeking blessings for health, prosperity, and happiness.</p>
                </div>
                
                <div class="service-card reveal stagger-4">
                    <i class="service-icon fas fa-graduation-cap"></i>
                    <h3>Religious Education</h3>
                    <p>Learn about Hindu scriptures, Sai Baba's teachings, and spiritual practices through our educational programs for all ages.</p>
                </div>
                
                <div class="service-card reveal stagger-5">
                    <i class="service-icon fas fa-heart"></i>
                    <h3>Wedding Ceremonies</h3>
                    <p>Celebrate the sacred union of marriage with traditional Hindu wedding ceremonies blessed by Sai Baba's divine presence.</p>
                </div>
                
                <div class="service-card reveal stagger-6">
                    <i class="service-icon fas fa-utensils"></i>
                    <h3>Annadan Seva</h3>
                    <p>Experience the joy of serving free meals to devotees and visitors, following Sai Baba's tradition of feeding all who come with devotion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Footer -->
    <footer class="luxury-footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <div class="logo-icon">
                            <img src="../public/Sai Baba Temple Logo.png" alt="Sai Baba Temple Logo">
                        </div>
                        <div class="logo-text">
                            <h3>Sai Baba Temple</h3>
                            <p>Divine Sanctuary</p>
                        </div>
                    </div>
                    <p class="footer-description">
                        A sacred sanctuary dedicated to Shirdi Sai Baba, fostering spiritual growth, 
                        community service, and divine connection in Malkajgiri, Telangana.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Temple Hours</h4>
                    <div class="temple-hours">
                        <div class="hour-item">
                            <span>Monday - Friday</span>
                            <span>6:00 AM - 8:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span>Saturday</span>
                            <span>5:00 AM - 9:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span>Sunday</span>
                            <span>5:00 AM - 9:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span>Special Events</span>
                            <span>Extended Hours</span>
                        </div>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="lifeandteachings.php">Life & Teachings</a></li>
                        <li><a href="philosophy.php">Philosophy</a></li>
                        <li><a href="history-architecture.php">History & Architecture</a></li>
                        <li><a href="darshan-timings.php">Darshan & Aarti Timings</a></li>
                        <li><a href="facilities.php">Facilities</a></li>
                        <li><a href="annadan-seva.php">Annadan Seva</a></li>
                        <li><a href="events.php">Events & Festivals</a></li>
                        <li><a href="donate.php">Donations</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Information</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Malkajgiri, Secunderabad<br>Telangana, India</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+91 123-456-7890</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@saibabatemple-malkajgiri.org</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-globe"></i>
                            <span>www.saibabatemple-malkajgiri.org</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Sai Baba Temple Malkajgiri. All rights reserved.</p>
                <p>"सबका मालिक एक" - One God Governs All</p>
            </div>
        </div>
    </footer>

    <!-- Elegant Scroll to Top Button -->
    <button class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Function to toggle mobile dropdown menus
        function toggleMobileDropdown(element) {
            event.preventDefault();
            const dropdown = element.closest('.dropdown');
            dropdown.classList.toggle('active');
        }

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

            // Close mobile menu when clicking on a link (excluding dropdown toggles)
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', (e) => {
                    // Don't close if it's a dropdown toggle
                    if (!link.getAttribute('onclick')) {
                        mobileMenu.classList.remove('active');
                        body.style.overflow = '';
                    }
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                }
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
                    // Don't prevent default for dropdown toggles
                    if (this.getAttribute('onclick')) return;
                    
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

            // Handle PHP page navigation
            document.querySelectorAll('a[href$=".php"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    // Allow normal navigation for PHP files
                    // You can add loading animation here if needed
                });
            });

            // Enhanced Service Card Animations
            document.querySelectorAll('.service-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Luxury Feature Card Enhancement
            document.querySelectorAll('.feature-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.feature-icon');
                    icon.style.transform = 'scale(1.1) rotate(10deg)';
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.feature-icon');
                    icon.style.transform = 'scale(1) rotate(0deg)';
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

            // Elegant Parallax Effect for Hero Ornament
            const heroOrnament = document.querySelector('.hero-ornament');
            if (heroOrnament) {
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.5;
                    heroOrnament.style.transform = `translateY(${rate}px)`;
                });
            }

            // Premium Loading Animation for Images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                    this.style.transform = 'scale(1)';
                });
            });

            // Luxury Typing Effect for Hero Subtitle
            const heroSubtitle = document.querySelector('.hero-subtitle');
            if (heroSubtitle) {
                const originalText = heroSubtitle.textContent;
                heroSubtitle.textContent = '';
                let i = 0;
                
                setTimeout(() => {
                    const typeWriter = setInterval(() => {
                        if (i < originalText.length) {
                            heroSubtitle.textContent += originalText.charAt(i);
                            i++;
                        } else {
                            clearInterval(typeWriter);
                        }
                    }, 100);
                }, 1500);
            }

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

            // Dropdown menu accessibility
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                
                dropdown.addEventListener('mouseenter', () => {
                    dropdownMenu.style.pointerEvents = 'auto';
                });
                
                dropdown.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        dropdownMenu.style.pointerEvents = 'none';
                    }, 200);
                });
            });
        });

        // Lazy Loading for better performance
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
    </script>
</body>
</html>