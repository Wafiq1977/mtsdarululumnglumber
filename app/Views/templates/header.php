<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Madrasah Tsanawiyah Darul Ulum Nglumber - Mencetak Generasi Berakhlak, Berprestasi, dan Berwawasan Islam">
    <meta name="keywords" content="MTS Darul Ulum Nglumber, Madrasah Tsanawiyah, Pendidikan Islam, Nglumber, MTs">
    <title><?= $title ?? 'MTS Darul Ulum Nglumber - Madrasah Tsanawiyah Unggul Berbasis Islam' ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* ===== PREMIUM NAVIGATION SYSTEM ===== */

        /* Header Navbar - Fixed position */
        .premium-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            animation: fade-in-down 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .premium-header .navbar {
            background: rgba(15, 61, 62, 0.95) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .premium-header .navbar-brand {
            font-weight: 700;
            font-size: 1.2rem;
            color: white !important;
            transition: all 0.3s ease;
        }

        .premium-header .navbar-brand:hover {
            color: #D4AF37 !important;
            transform: translateY(-1px);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            height: 32px;
            width: auto;
            transition: all 0.3s ease;
        }

        .logo-container:hover .logo-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .logo-main {
            color: white;
            font-size: 0.9rem;
            font-weight: 700;
            line-height: 1.2;
            display: block;
        }

        .logo-sub {
            color: #D4AF37;
            font-size: 0.7rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .premium-header .navbar-nav {
            margin: 0 auto;
        }

        .premium-header .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            border-radius: 25px;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .premium-header .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .premium-header .nav-link:hover::before {
            left: 100%;
        }

        .premium-header .nav-link:hover {
            color: #D4AF37 !important;
            background: rgba(212, 175, 55, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
        }

        .premium-header .dropdown-menu {
            background: rgba(15, 61, 62, 0.98);
            backdrop-filter: blur(25px);
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 15px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(212, 175, 55, 0.1);
            margin-top: 10px;
            padding: 0.75rem 0;
            min-width: 220px;
        }

        .premium-header .dropdown-item {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            padding: 0.875rem 1.5rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border-radius: 8px;
            margin: 0.125rem 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .premium-header .dropdown-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.15), transparent);
            transition: left 0.4s ease;
        }

        .premium-header .dropdown-item:hover::before {
            left: 100%;
        }

        .premium-header .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.25), rgba(15, 61, 62, 0.9));
            color: #D4AF37;
            transform: translateX(8px) scale(1.02);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
        }

        .premium-header .dropdown-item i {
            width: 18px;
            text-align: center;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }

        .premium-header .dropdown-item:hover i {
            color: #FFD700;
            transform: scale(1.1);
        }

        .premium-header .dropdown-toggle::after {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .premium-header .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        .premium-header .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            padding: 8px 12px;
            color: white;
            transition: all 0.3s ease;
        }

        .premium-header .navbar-toggler:hover {
            border-color: #D4AF37;
            color: #D4AF37;
        }

        /* ===== SCHOOL PROFILE TOOLS ===== */
        .school-profile-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            margin-bottom: 1rem;
        }

        .profile-tools {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .tool-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: white;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(212, 175, 55, 0.2);
            transition: all 0.3s ease;
        }

        .tool-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
            border-color: #D4AF37;
        }

        .tool-item-link {
            text-decoration: none;
            color: inherit;
            display: block;
            transition: all 0.3s ease;
        }

        .tool-item-link:hover {
            transform: scale(1.02);
        }

        .tool-item-link:hover .tool-item {
            background: rgba(212, 175, 55, 0.1);
            border-color: rgba(212, 175, 55, 0.3);
        }

        .tool-item i {
            color: #D4AF37;
            font-size: 1.2rem;
        }

        .tool-item span {
            font-weight: 600;
            color: #0F3D3E;
        }

        /* ===== PREMIUM MAIN NAVBAR (ABOVE ABOUT SECTION) ===== */
        .premium-main-navbar {
            background: linear-gradient(135deg, rgba(15, 61, 62, 0.95), rgba(26, 74, 74, 0.95));
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-top: 2px solid rgba(212, 175, 55, 0.4);
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            animation: slide-up 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            margin-bottom: 3rem;
            margin-top: 2rem;
            position: relative;
            z-index: 10;
        }

        .premium-main-navbar::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #D4AF37, transparent);
        }

        .navbar-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-brand-section {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .brand-icon {
            font-size: 1.5rem;
            color: #D4AF37;
            background: rgba(212, 175, 55, 0.1);
            padding: 0.5rem;
            border-radius: 50%;
            border: 2px solid rgba(212, 175, 55, 0.3);
        }

        .brand-text {
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .navbar-menu {
            display: flex;
            gap: 2rem;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            padding: 0.5rem;
            border-radius: 12px;
            position: relative;
        }

        .nav-item:hover,
        .nav-item.active {
            color: #D4AF37;
            transform: translateY(-3px);
            background: rgba(212, 175, 55, 0.1);
        }

        .nav-item.active {
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .nav-item i {
            font-size: 1.2rem;
            margin-bottom: 0.25rem;
            transition: transform 0.3s ease;
        }

        .nav-item:hover i {
            transform: scale(1.2);
        }

        .nav-item span {
            font-size: 0.8rem;
            font-weight: 500;
        }

        .navbar-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-nav-primary,
        .btn-nav-secondary {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 2px solid transparent;
        }

        .btn-nav-primary {
            background: linear-gradient(135deg, #D4AF37, #f4c430);
            color: #0F3D3E;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .btn-nav-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.5);
            background: linear-gradient(135deg, #f4c430, #D4AF37);
        }

        .btn-nav-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .btn-nav-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fade-in-down {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }


        @keyframes fade-in-down {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .hero-actions {
                flex-direction: column;
                align-items: center;
            }

            .hero-actions .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 90vh;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .hero-stats {
                gap: 1rem;
            }

            .stat-item {
                padding: 1.5rem;
                min-width: 100px;
            }

            .stat-number {
                font-size: 2rem;
            }

            .school-profile-section {
                padding: 1rem 0;
            }

            .profile-tools {
                gap: 1rem;
            }

            .tool-item {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .navbar-content {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .navbar-menu {
                gap: 1rem;
                justify-content: center;
            }

            .navbar-actions {
                flex-direction: column;
                width: 100%;
            }

            .btn-nav-primary,
            .btn-nav-secondary {
                justify-content: center;
                width: 100%;
                margin: 0.25rem 0;
            }

            .premium-main-navbar {
                margin-bottom: 1rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 60px; /* Adjusted for mobile */
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 55px; /* Further adjusted for small mobile */
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-description {
                font-size: 0.9rem;
            }

            .navbar-menu {
                display: none;
            }

            .navbar-brand-section {
                font-size: 0.9rem;
            }

            .profile-tools {
                flex-direction: column;
                gap: 0.5rem;
            }

            .tool-item {
                width: 100%;
                justify-content: center;
            }

            .premium-main-navbar {
                margin-bottom: 2rem;
            }

            .navbar-content {
                padding: 0.75rem;
            }

            .navbar-actions {
                flex-direction: column;
                gap: 0.5rem;
            }

            .btn-nav-primary,
            .btn-nav-secondary {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                height: 80vh;
            }

            .hero-title {
                font-size: 1.5rem;
            }

            .hero-stats {
                flex-direction: column;
                align-items: center;
            }

            .stat-item {
                width: 100%;
                max-width: 200px;
            }

            .premium-header .dropdown-menu {
                min-width: 200px;
                margin-top: 5px;
                padding: 0.5rem 0;
            }

            .premium-header .dropdown-item {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
            }

            .premium-header .dropdown-item i {
                width: 16px;
                margin-right: 0.5rem;
            }
        }

        /* ===== HERO SECTION WITH SLIDESHOW ===== */
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-slide {
            position: relative;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(15, 61, 62, 0.7), rgba(26, 74, 74, 0.8));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.1;
        }

        .hero-title-accent {
            color: #D4AF37;
            position: relative;
        }

        .hero-title-accent::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #D4AF37, #f4c430);
            border-radius: 2px;
        }

        .hero-description {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            max-width: 600px;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-actions .btn {
            border-radius: 50px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 2px solid transparent;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .hero-actions .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .hero-actions .btn-light {
            background: rgba(255, 255, 255, 0.95);
            color: #0F3D3E;
            border-color: rgba(255, 255, 255, 0.95);
        }

        .hero-actions .btn-light:hover {
            background: white;
            color: #0F3D3E;
        }

        .hero-actions .btn-outline-light {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.5);
        }

        .hero-actions .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-color: white;
        }

        .hero-visual {
            text-align: center;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .stat-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            min-width: 120px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #D4AF37;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .stat-label {
            font-size: 0.9rem;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ===== ANIMATIONS ===== */
        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fade-in-up 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .animate-scale-in {
            opacity: 0;
            transform: scale(0.8);
            animation: scale-in 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .animation-delay-1 {
            animation-delay: 0.2s;
        }

        .animation-delay-2 {
            animation-delay: 0.4s;
        }

        .animation-delay-3 {
            animation-delay: 0.6s;
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scale-in {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slide-up {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* ===== CAROUSEL CUSTOMIZATION ===== */
        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(15, 61, 62, 0.8);
            border: 2px solid rgba(212, 175, 55, 0.5);
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }

        .carousel-control-prev {
            left: 2rem;
        }

        .carousel-control-next {
            right: 2rem;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(212, 175, 55, 0.9);
            border-color: #D4AF37;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-indicators {
            bottom: 2rem;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: 2px solid rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
        }

        .carousel-indicators button.active {
            background-color: #D4AF37;
            border-color: #D4AF37;
            transform: scale(1.2);
        }

        /* ===== BODY ADJUSTMENTS ===== */
        body {
            padding-top: 60px; /* Space for fixed header */
        }

        body.home-page {
            padding-bottom: 0; /* Remove bottom padding for home page */
        }

/* ===== FOOTER ENHANCEMENTS ===== */
.footer-gradient {
    background: linear-gradient(135deg, #0F3D3E 0%, #1a4a4a 50%, #0F3D3E 100%);
    position: relative;
    border-top: 3px solid #D4AF37;
}

.footer-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        radial-gradient(circle at 25% 25%, rgba(212, 175, 55, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(212, 175, 55, 0.05) 0%, transparent 50%);
    opacity: 0.6;
}

.footer-section {
    margin-bottom: 2rem;
}

.school-logo {
    border-bottom: 2px solid rgba(212, 175, 55, 0.3);
    padding-bottom: 1rem;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    color: #D4AF37;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 2px solid rgba(212, 175, 55, 0.3);
}

.social-link:hover {
    transform: translateY(-3px) scale(1.1);
    background: #D4AF37;
    color: #0F3D3E;
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
    border-color: #D4AF37;
}

.social-link.facebook:hover { background: #1877f2; color: white; }
.social-link.instagram:hover { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); color: white; }
.social-link.youtube:hover { background: #ff0000; color: white; }
.social-link.whatsapp:hover { background: #25d366; color: white; }

.footer-links {
    margin: 0;
    padding: 0;
}

.footer-link {
    display: block;
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    padding: 0.5rem 0;
    transition: all 0.3s ease;
    border-radius: 5px;
    margin-bottom: 0.25rem;
}

.footer-link:hover {
    color: #D4AF37;
    background: rgba(212, 175, 55, 0.1);
    padding-left: 1rem;
    transform: translateX(5px);
}

.contact-info {
    margin: 0;
    padding: 0;
}

.contact-info li {
    display: flex;
    align-items: flex-start;
    line-height: 1.6;
}

.contact-info i {
    margin-top: 0.25rem;
    flex-shrink: 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.stat-item {
    text-align: center;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    border: 1px solid rgba(212, 175, 55, 0.2);
    transition: all 0.3s ease;
}

.stat-item:hover {
    background: rgba(212, 175, 55, 0.1);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.2);
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.85rem;
    opacity: 0.8;
}

.footer-bottom {
    animation: fade-in-up 0.8s ease-out forwards;
}

/* Footer Animations */
.footer-section {
    animation: fade-in-up 0.8s ease-out forwards;
}

.footer-section:nth-child(1) { animation-delay: 0.1s; }
.footer-section:nth-child(2) { animation-delay: 0.2s; }
.footer-section:nth-child(3) { animation-delay: 0.3s; }
.footer-section:nth-child(4) { animation-delay: 0.4s; }

/* Smooth hover effects for all footer elements */
.footer-section h6 {
    position: relative;
    overflow: hidden;
}

.footer-section h6::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #D4AF37, #FFD700);
    transition: width 0.3s ease;
}

.footer-section:hover h6::after {
    width: 100%;
}

/* Enhanced social links with pulse effect */
@keyframes social-pulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.4);
    }
    50% {
        transform: scale(1.05);
        box-shadow: 0 0 0 10px rgba(212, 175, 55, 0);
    }
}

.social-link:hover {
    animation: social-pulse 1s ease-in-out infinite;
}

/* Footer Responsive */
@media (max-width: 768px) {
    .footer-gradient {
        padding: 3rem 0 2rem;
    }

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 0.5rem;
    }

    .stat-item {
        padding: 0.75rem;
    }

    .footer-bottom .row {
        text-align: center !important;
    }

    .footer-bottom .col-md-6 + .col-md-6 {
        margin-top: 1rem;
    }

    .social-links {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .footer-section {
        margin-bottom: 1.5rem;
    }

    .school-logo h5 {
        font-size: 1.1rem;
    }

    .footer-section h6 {
        font-size: 0.9rem;
    }

    .stat-number {
        font-size: 1.25rem;
    }
}
    </style>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    </head>
<body>
    <!-- ===== PREMIUM HEADER ===== -->
    <header class="premium-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Logo & Brand -->
                <a class="navbar-brand" href="/">
                    <div class="logo-container">
                        <img src="/uploads/logo.png" alt="Logo" class="logo-icon">
                        <div class="logo-text">
                            <span class="logo-main">MTS Darul Ulum</span>
                            <span class="logo-sub">Nglumber</span>
                        </div>
                    </div>
                </a>
    
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-info-circle me-1"></i>Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="/profile"><i class="fas fa-school me-2"></i>Profil Sekolah</a></li>
                                <li><a class="dropdown-item" href="/profile/identity"><i class="fas fa-id-card me-2"></i>Identitas Sekolah</a></li>
                                <li><a class="dropdown-item" href="/profile/vision"><i class="fas fa-eye me-2"></i>Visi Misi</a></li>
                                <li><a class="dropdown-item" href="/profile/history"><i class="fas fa-history me-2"></i>Sejarah Sekolah</a></li>
                                <li><a class="dropdown-item" href="/profile/structure"><i class="fas fa-sitemap me-2"></i>Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="/profile/facilities"><i class="fas fa-building me-2"></i>Fasilitas</a></li>
                                <li><a class="dropdown-item" href="/teachers"><i class="fas fa-users me-2"></i>Staf dan Pengajar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teachers">Guru & Staff</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Kontak</a>
                        </li>
                    </ul>
    
                    <!-- Admin Login -->
                    <?php if (session()->get('user')): ?>
                        <div class="navbar-nav">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-shield me-2"></i>Admin
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="/admin/dashboard"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/auth/logout"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="navbar-nav">
                            <a class="nav-link" href="/auth/login">
                                <i class="fas fa-sign-in-alt me-2"></i>Login Admin
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Container -->
    <main>