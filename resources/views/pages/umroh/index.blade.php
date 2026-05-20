<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nurul Iman Travel - Paket Umroh Terpercaya | Biro Perjalanan Umroh Resmi</title>
  <meta name="description" content="Nurul Iman Travel - Biro perjalanan umroh terpercaya sejak 2010. Paket umroh lengkap dengan hotel dekat Masjidil Haram, bimbingan ustadz, dan layanan premium.">
  <meta name="keywords" content="umroh, travel umroh, paket umroh, biro umroh, haji umroh, umroh 2024">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --background: hsl(40 33% 98%);
      --foreground: hsl(156 30% 12%);
      --card: hsl(0 0% 100%);
      --card-foreground: hsl(156 30% 12%);
      --primary: hsl(156 45% 25%);
      --primary-foreground: hsl(40 33% 98%);
      --secondary: hsl(40 40% 94%);
      --secondary-foreground: hsl(156 30% 12%);
      --muted: hsl(40 20% 92%);
      --muted-foreground: hsl(156 15% 40%);
      --accent: hsl(43 74% 49%);
      --accent-foreground: hsl(156 30% 12%);
      --border: hsl(40 20% 88%);
      --gold: hsl(43 74% 49%);
      --gold-light: hsl(43 80% 65%);
      --emerald: hsl(156 45% 25%);
      --emerald-dark: hsl(156 50% 18%);
      --emerald-light: hsl(156 35% 35%);
      --cream: hsl(40 33% 98%);
      --cream-dark: hsl(40 25% 92%);
      --radius: 0.75rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
      background-color: var(--background);
      color: var(--foreground);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', Georgia, serif;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Utilities */
    .text-gradient-gold {
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .bg-gradient-gold {
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
    }

    .bg-gradient-emerald {
      background: linear-gradient(135deg, var(--emerald-dark), var(--emerald));
    }

    .shadow-soft {
      box-shadow: 0 4px 20px -4px hsla(156, 45%, 25%, 0.1);
    }

    .shadow-card {
      box-shadow: 0 8px 30px -8px hsla(156, 45%, 25%, 0.12);
    }

    .shadow-elevated {
      box-shadow: 0 20px 50px -15px hsla(156, 45%, 25%, 0.2);
    }

    .shadow-gold {
      box-shadow: 0 8px 30px -8px hsla(43, 74%, 49%, 0.3);
    }

    /* Islamic Pattern */
    .islamic-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0L60 30L30 60L0 30L30 0z' fill='none' stroke='%23D4A853' stroke-opacity='0.08' stroke-width='1'/%3E%3C/svg%3E");
    }

    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.875rem 1.5rem;
      font-size: 0.875rem;
      font-weight: 600;
      border-radius: var(--radius);
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn-gold {
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--foreground);
      box-shadow: 0 8px 30px -8px hsla(43, 74%, 49%, 0.3);
    }

    .btn-gold:hover {
      transform: scale(1.02);
      box-shadow: 0 20px 50px -15px hsla(43, 74%, 49%, 0.4);
    }

    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 2px solid var(--primary);
    }

    .btn-outline:hover {
      background: var(--primary);
      color: var(--primary-foreground);
    }

    .btn-hero-outline {
      background: transparent;
      color: var(--cream);
      border: 2px solid hsla(40, 33%, 98%, 0.8);
    }

    .btn-hero-outline:hover {
      background: hsla(40, 33%, 98%, 0.1);
    }

    .btn-lg {
      padding: 1rem 2.5rem;
      font-size: 1rem;
      border-radius: 0.875rem;
    }

    .btn-sm {
      padding: 0.5rem 1rem;
      font-size: 0.875rem;
    }

    /* Navbar */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 50;
      background: hsla(40, 33%, 98%, 0.8);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid hsla(40, 20%, 88%, 0.5);
    }

    .navbar-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 5rem;
    }

    .navbar-logo {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
    }

    .navbar-logo-icon {
      width: 2.5rem;
      height: 2.5rem;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.125rem;
      color: var(--foreground);
    }

    .navbar-logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--foreground);
    }

    .navbar-logo-sub {
      font-size: 0.75rem;
      color: var(--muted-foreground);
      margin-top: -0.25rem;
    }

    .navbar-nav {
      display: none;
      align-items: center;
      gap: 2rem;
    }

    .navbar-nav a {
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--muted-foreground);
      text-decoration: none;
      transition: color 0.2s;
    }

    .navbar-nav a:hover {
      color: var(--foreground);
    }

    .navbar-cta {
      display: none;
      align-items: center;
      gap: 1rem;
    }

    .navbar-phone {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.875rem;
      color: var(--muted-foreground);
      text-decoration: none;
    }

    .navbar-phone:hover {
      color: var(--foreground);
    }

    .navbar-mobile-btn {
      display: block;
      padding: 0.5rem;
      background: transparent;
      border: none;
      cursor: pointer;
    }

    @media (min-width: 768px) {
      .navbar-nav, .navbar-cta {
        display: flex;
      }
      .navbar-mobile-btn {
        display: none;
      }
    }

    /* Mobile Menu */
    .mobile-menu {
      display: none;
      padding: 1rem;
      border-top: 1px solid var(--border);
    }

    .mobile-menu.active {
      display: block;
    }

    .mobile-menu a {
      display: block;
      padding: 0.75rem 0;
      color: var(--muted-foreground);
      text-decoration: none;
    }

    .mobile-menu a:hover {
      color: var(--foreground);
    }

    /* Hero Section */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: 5rem;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
    }

    .hero-bg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hero-bg::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg,
        hsla(156, 50%, 18%, 0.9) 0%,
        hsla(156, 50%, 18%, 0.7) 50%,
        hsla(156, 50%, 18%, 0.9) 100%);
    }

    .hero-pattern {
      position: absolute;
      inset: 0;
      z-index: 1;
      opacity: 0.3;
    }

    .hero-content {
      position: relative;
      z-index: 10;
      max-width: 48rem;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: hsla(43, 74%, 49%, 0.2);
      border: 1px solid hsla(43, 74%, 49%, 0.3);
      border-radius: 9999px;
      padding: 0.5rem 1rem;
      margin-bottom: 1.5rem;
      font-size: 0.875rem;
      color: var(--gold);
      font-weight: 500;
    }

    .hero-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--cream);
      line-height: 1.2;
      margin-bottom: 1.5rem;
    }

    @media (min-width: 768px) {
      .hero-title {
        font-size: 3.5rem;
      }
    }

    @media (min-width: 1024px) {
      .hero-title {
        font-size: 4rem;
      }
    }

    .hero-desc {
      font-size: 1.125rem;
      color: hsla(40, 33%, 98%, 0.8);
      margin-bottom: 2rem;
      max-width: 36rem;
    }

    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 3rem;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      max-width: 28rem;
    }

    .hero-stat-value {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.25rem;
    }

    .hero-stat-value span {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--cream);
    }

    .hero-stat-label {
      font-size: 0.875rem;
      color: hsla(40, 33%, 98%, 0.6);
    }

    .hero-scroll {
      position: absolute;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%);
      z-index: 10;
    }

    .hero-scroll-indicator {
      width: 1.5rem;
      height: 2.5rem;
      border: 2px solid hsla(40, 33%, 98%, 0.3);
      border-radius: 9999px;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 0.5rem;
    }

    .hero-scroll-dot {
      width: 0.375rem;
      height: 0.75rem;
      background: var(--gold);
      border-radius: 9999px;
      animation: bounce 1s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(6px); }
    }

    /* Packages Section */
    .packages {
      padding: 6rem 0;
      background: hsla(40, 40%, 94%, 0.3);
    }

    .section-header {
      text-align: center;
      max-width: 42rem;
      margin: 0 auto 4rem;
    }

    .section-label {
      display: inline-block;
      font-size: 0.875rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--gold);
      margin-bottom: 1rem;
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: var(--foreground);
      margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
      .section-title {
        font-size: 2.5rem;
      }
    }

    .section-desc {
      color: var(--muted-foreground);
    }

    .packages-grid {
      display: grid;
      gap: 2rem;
      max-width: 80rem;
      margin: 0 auto;
    }

    @media (min-width: 768px) {
      .packages-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .package-card {
      position: relative;
      background: var(--card);
      border-radius: 1rem;
      overflow: hidden;
      transition: all 0.5s ease;
    }

    .package-card:hover {
      transform: scale(1.02);
    }

    .package-card.popular {
      ring: 2px solid var(--gold);
      transform: scale(1.05);
    }

    .package-card.popular:hover {
      transform: scale(1.07);
    }

    .package-badge {
      position: absolute;
      top: 1rem;
      right: 1rem;
      display: flex;
      align-items: center;
      gap: 0.25rem;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--foreground);
      font-size: 0.75rem;
      font-weight: 700;
      padding: 0.25rem 0.75rem;
      border-radius: 9999px;
    }

    .package-content {
      padding: 1.5rem;
    }

    .package-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--foreground);
      margin-bottom: 0.5rem;
    }

    .package-meta {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 0.875rem;
      color: var(--muted-foreground);
      margin-bottom: 1rem;
    }

    .package-meta-item {
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    .package-price-label {
      font-size: 0.875rem;
      color: var(--muted-foreground);
    }

    .package-price {
      display: flex;
      align-items: baseline;
      gap: 0.25rem;
      margin-bottom: 0.25rem;
    }

    .package-price-currency {
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--foreground);
    }

    .package-price-value {
      font-size: 1.875rem;
      font-weight: 700;
      color: var(--primary);
    }

    .package-distance {
      font-size: 0.75rem;
      color: var(--muted-foreground);
      margin-bottom: 1.5rem;
    }

    .package-features {
      list-style: none;
      margin-bottom: 2rem;
    }

    .package-features li {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      font-size: 0.875rem;
      color: var(--muted-foreground);
      margin-bottom: 0.75rem;
    }

    .package-features li i {
      color: var(--gold);
      flex-shrink: 0;
      margin-top: 0.125rem;
    }

    .package-btn {
      width: 100%;
    }

    .packages-note {
      text-align: center;
      font-size: 0.875rem;
      color: var(--muted-foreground);
      margin-top: 3rem;
    }

    /* Features Section */
    .features {
      padding: 6rem 0;
      background: var(--background);
    }

    .features-grid {
      display: grid;
      gap: 2rem;
      max-width: 80rem;
      margin: 0 auto;
    }

    @media (min-width: 768px) {
      .features-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .features-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .feature-card {
      padding: 2rem;
      background: var(--card);
      border-radius: 1rem;
      transition: all 0.5s ease;
    }

    .feature-card:hover {
      transform: translateY(-0.5rem);
      box-shadow: 0 8px 30px -8px hsla(156, 45%, 25%, 0.12);
    }

    .feature-icon {
      width: 3.5rem;
      height: 3.5rem;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      border-radius: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease;
    }

    .feature-card:hover .feature-icon {
      transform: scale(1.1);
    }

    .feature-icon i {
      width: 1.75rem;
      height: 1.75rem;
      color: var(--foreground);
    }

    .feature-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--foreground);
      margin-bottom: 0.75rem;
    }

    .feature-desc {
      color: var(--muted-foreground);
      line-height: 1.7;
    }

    /* Testimonials Section */
    .testimonials {
      padding: 6rem 0;
      background: linear-gradient(135deg, var(--emerald-dark), var(--emerald));
      position: relative;
      overflow: hidden;
    }

    .testimonials::before,
    .testimonials::after {
      content: '';
      position: absolute;
      width: 24rem;
      height: 24rem;
      background: hsla(43, 74%, 49%, 0.1);
      border-radius: 50%;
      filter: blur(60px);
    }

    .testimonials::before {
      top: 0;
      right: 0;
    }

    .testimonials::after {
      bottom: 0;
      left: 0;
    }

    .testimonials .section-label,
    .testimonials .section-title {
      color: var(--cream);
    }

    .testimonials .section-desc {
      color: hsla(40, 33%, 98%, 0.7);
    }

    .testimonials-grid {
      display: grid;
      gap: 2rem;
      max-width: 80rem;
      margin: 0 auto;
      position: relative;
      z-index: 10;
    }

    @media (min-width: 768px) {
      .testimonials-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .testimonial-card {
      background: hsla(0, 0%, 100%, 0.1);
      backdrop-filter: blur(8px);
      border: 1px solid hsla(40, 33%, 98%, 0.1);
      border-radius: 1rem;
      padding: 2rem;
      position: relative;
    }

    .testimonial-quote {
      position: absolute;
      top: 1.5rem;
      right: 1.5rem;
      width: 2.5rem;
      height: 2.5rem;
      color: hsla(43, 74%, 49%, 0.3);
    }

    .testimonial-rating {
      display: flex;
      gap: 0.25rem;
      margin-bottom: 1rem;
    }

    .testimonial-rating i {
      width: 1.25rem;
      height: 1.25rem;
      color: var(--gold);
      fill: var(--gold);
    }

    .testimonial-text {
      color: hsla(40, 33%, 98%, 0.9);
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .testimonial-avatar {
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      object-fit: cover;
      ring: 2px solid hsla(43, 74%, 49%, 0.3);
    }

    .testimonial-name {
      font-weight: 600;
      color: var(--cream);
    }

    .testimonial-location {
      font-size: 0.875rem;
      color: hsla(40, 33%, 98%, 0.6);
    }

    /* CTA Section */
    .cta {
      padding: 6rem 0;
      background: var(--background);
    }

    .cta-grid {
      display: grid;
      gap: 3rem;
      align-items: center;
      max-width: 80rem;
      margin: 0 auto;
    }

    @media (min-width: 1024px) {
      .cta-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    .cta-content h2 {
      font-size: 2rem;
      font-weight: 700;
      color: var(--foreground);
      margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
      .cta-content h2 {
        font-size: 2.5rem;
      }
    }

    .cta-content p {
      color: var(--muted-foreground);
      margin-bottom: 2rem;
    }

    .cta-contacts {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .cta-contact {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .cta-contact-icon {
      width: 3rem;
      height: 3rem;
      background: var(--secondary);
      border-radius: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .cta-contact-icon i {
      width: 1.25rem;
      height: 1.25rem;
      color: var(--primary);
    }

    .cta-contact-label {
      font-size: 0.875rem;
      color: var(--muted-foreground);
    }

    .cta-contact-value {
      font-weight: 600;
      color: var(--foreground);
    }

    .cta-form-card {
      background: var(--card);
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 20px 50px -15px hsla(156, 45%, 25%, 0.2);
    }

    .cta-form-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--foreground);
      margin-bottom: 0.5rem;
    }

    .cta-form-desc {
      font-size: 0.875rem;
      color: var(--muted-foreground);
      margin-bottom: 1.5rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-label {
      display: block;
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--foreground);
      margin-bottom: 0.5rem;
    }

    .form-input,
    .form-select,
    .form-textarea {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid var(--border);
      border-radius: 0.75rem;
      background: var(--background);
      color: var(--foreground);
      font-family: inherit;
      font-size: 1rem;
      transition: all 0.2s;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px hsla(156, 45%, 25%, 0.1);
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
      color: var(--muted-foreground);
    }

    .form-textarea {
      resize: none;
    }

    /* Footer */
    .footer {
      background: var(--emerald-dark);
      color: var(--cream);
      padding: 4rem 0 0;
    }

    .footer-grid {
      display: grid;
      gap: 3rem;
      margin-bottom: 3rem;
    }

    @media (min-width: 768px) {
      .footer-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .footer-brand {
      grid-column: span 1;
    }

    @media (min-width: 768px) {
      .footer-brand {
        grid-column: span 1;
      }
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .footer-logo-icon {
      width: 2.5rem;
      height: 2.5rem;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.125rem;
      color: var(--foreground);
    }

    .footer-logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      font-weight: 700;
    }

    .footer-logo-sub {
      font-size: 0.75rem;
      color: hsla(40, 33%, 98%, 0.6);
      margin-top: -0.25rem;
    }

    .footer-desc {
      font-size: 0.875rem;
      color: hsla(40, 33%, 98%, 0.7);
      margin-bottom: 1.5rem;
    }

    .footer-socials {
      display: flex;
      gap: 0.75rem;
    }

    .footer-social {
      width: 2.5rem;
      height: 2.5rem;
      background: hsla(40, 33%, 98%, 0.1);
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--cream);
      text-decoration: none;
      transition: all 0.2s;
    }

    .footer-social:hover {
      background: var(--gold);
      color: var(--foreground);
    }

    .footer-social i {
      width: 1.25rem;
      height: 1.25rem;
    }

    .footer-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.125rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: hsla(40, 33%, 98%, 0.7);
      text-decoration: none;
      transition: color 0.2s;
    }

    .footer-links a:hover {
      color: var(--gold);
    }

    .footer-contact-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .footer-contact-item i {
      width: 1.25rem;
      height: 1.25rem;
      color: var(--gold);
      flex-shrink: 0;
      margin-top: 0.125rem;
    }

    .footer-contact-item span {
      font-size: 0.875rem;
      color: hsla(40, 33%, 98%, 0.7);
    }

    .footer-bottom {
      border-top: 1px solid hsla(40, 33%, 98%, 0.1);
      padding: 2rem 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    @media (min-width: 768px) {
      .footer-bottom {
        flex-direction: row;
        justify-content: space-between;
      }
    }

    .footer-bottom p {
      font-size: 0.875rem;
      color: hsla(40, 33%, 98%, 0.5);
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-up {
      animation: fadeInUp 0.8s ease forwards;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container navbar-container">
      <a href="#" class="navbar-logo">
        <div class="navbar-logo-icon">N</div>
        <div>
          <span class="navbar-logo-text">Nurul Iman</span>
          <span class="navbar-logo-sub">Travel Umroh</span>
        </div>
      </a>

      <div class="navbar-nav">
        <a href="#beranda">Beranda</a>
        <a href="#paket">Paket</a>
        <a href="#keunggulan">Keunggulan</a>
        <a href="#testimoni">Testimoni</a>
        <a href="#kontak">Kontak</a>
      </div>

      <div class="navbar-cta">
        <a href="tel:+6281234567890" class="navbar-phone">
          <i data-lucide="phone" style="width: 1rem; height: 1rem;"></i>
          <span>0812-3456-7890</span>
        </a>
        <a href="#kontak" class="btn btn-gold btn-sm">Daftar Sekarang</a>
      </div>

      <button class="navbar-mobile-btn" onclick="toggleMobileMenu()">
        <i data-lucide="menu" style="width: 1.5rem; height: 1.5rem;"></i>
      </button>
    </div>

    <div class="mobile-menu" id="mobileMenu">
      <a href="#beranda" onclick="toggleMobileMenu()">Beranda</a>
      <a href="#paket" onclick="toggleMobileMenu()">Paket</a>
      <a href="#keunggulan" onclick="toggleMobileMenu()">Keunggulan</a>
      <a href="#testimoni" onclick="toggleMobileMenu()">Testimoni</a>
      <a href="#kontak" onclick="toggleMobileMenu()">Kontak</a>
      <div style="padding-top: 1rem; margin-top: 1rem; border-top: 1px solid var(--border);">
        <a href="#kontak" class="btn btn-gold" style="width: 100%;" onclick="toggleMobileMenu()">Daftar Sekarang</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="beranda" class="hero">
    <div class="hero-bg">
      <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=1920&h=1080&fit=crop" alt="Masjidil Haram dan Ka'bah">
    </div>
    <div class="hero-pattern islamic-pattern"></div>

    <div class="container hero-content">
      <div class="hero-badge">
        <i data-lucide="star" style="width: 1rem; height: 1rem; fill: currentColor;"></i>
        <span>Terpercaya Sejak 2010</span>
      </div>

      <h1 class="hero-title">
        Wujudkan Impian <br>
        <span class="text-gradient-gold">Ibadah Umroh</span><br>
        Anda Bersama Kami
      </h1>

      <p class="hero-desc">
        Perjalanan spiritual yang nyaman dan berkah dengan bimbingan ustadz berpengalaman.
        Nikmati layanan premium dengan harga terjangkau.
      </p>

      <div class="hero-buttons">
        <a href="#paket" class="btn btn-gold btn-lg">
          Lihat Paket Umroh
          <i data-lucide="arrow-right" style="width: 1.25rem; height: 1.25rem;"></i>
        </a>
        <a href="#kontak" class="btn btn-hero-outline btn-lg">Konsultasi Gratis</a>
      </div>

      <div class="hero-stats">
        <div>
          <div class="hero-stat-value">
            <i data-lucide="users" style="width: 1.25rem; height: 1.25rem; color: var(--gold);"></i>
            <span>15K+</span>
          </div>
          <span class="hero-stat-label">Jamaah</span>
        </div>
        <div>
          <div class="hero-stat-value">
            <i data-lucide="star" style="width: 1.25rem; height: 1.25rem; color: var(--gold);"></i>
            <span>4.9</span>
          </div>
          <span class="hero-stat-label">Rating</span>
        </div>
        <div>
          <div class="hero-stat-value">
            <i data-lucide="shield" style="width: 1.25rem; height: 1.25rem; color: var(--gold);"></i>
            <span>14+</span>
          </div>
          <span class="hero-stat-label">Tahun</span>
        </div>
      </div>
    </div>

    <div class="hero-scroll">
      <div class="hero-scroll-indicator">
        <div class="hero-scroll-dot"></div>
      </div>
    </div>
  </section>

  <!-- Packages Section -->
  <section id="paket" class="packages islamic-pattern">
    <div class="container">
      <div class="section-header">
        <span class="section-label">Paket Umroh</span>
        <h2 class="section-title">Pilih Paket Sesuai <span class="text-gradient-gold">Kebutuhan Anda</span></h2>
        <p class="section-desc">Berbagai pilihan paket dengan fasilitas lengkap dan harga transparan tanpa biaya tersembunyi</p>
      </div>

      <div class="packages-grid">
        <!-- Paket Ekonomi -->
        <div class="package-card shadow-card">
          <div class="package-content">
            <h3 class="package-name">Paket Ekonomi</h3>
            <div class="package-meta">
              <span class="package-meta-item">
                <i data-lucide="calendar" style="width: 1rem; height: 1rem;"></i>
                9 Hari
              </span>
              <span class="package-meta-item">
                <i data-lucide="building" style="width: 1rem; height: 1rem;"></i>
                Hotel Bintang 3
              </span>
            </div>
            <span class="package-price-label">Mulai dari</span>
            <div class="package-price">
              <span class="package-price-currency">Rp</span>
              <span class="package-price-value">25.900.000</span>
            </div>
            <span class="package-distance">± 800m dari Masjidil Haram</span>
            <ul class="package-features">
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Tiket pesawat PP</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Visa umroh</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Hotel 3 bintang</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Makan 3x sehari</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Transportasi AC</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Muthawif berpengalaman</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Perlengkapan umroh</li>
            </ul>
            <a href="#kontak" class="btn btn-outline package-btn">Pilih Paket</a>
          </div>
        </div>

        <!-- Paket Premium -->
        <div class="package-card popular shadow-gold" style="border: 2px solid var(--gold);">
          <div class="package-badge">
            <i data-lucide="star" style="width: 0.75rem; height: 0.75rem; fill: currentColor;"></i>
            Terpopuler
          </div>
          <div class="package-content">
            <h3 class="package-name">Paket Premium</h3>
            <div class="package-meta">
              <span class="package-meta-item">
                <i data-lucide="calendar" style="width: 1rem; height: 1rem;"></i>
                12 Hari
              </span>
              <span class="package-meta-item">
                <i data-lucide="building" style="width: 1rem; height: 1rem;"></i>
                Hotel Bintang 4
              </span>
            </div>
            <span class="package-price-label">Mulai dari</span>
            <div class="package-price">
              <span class="package-price-currency">Rp</span>
              <span class="package-price-value">35.500.000</span>
            </div>
            <span class="package-distance">± 300m dari Masjidil Haram</span>
            <ul class="package-features">
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Tiket pesawat PP</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Visa umroh</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Hotel 4 bintang dekat haram</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Makan 3x sehari buffet</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Transportasi VIP</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Muthawif senior</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> City tour Madinah</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Handling bagasi prioritas</li>
            </ul>
            <a href="#kontak" class="btn btn-gold package-btn">Pilih Paket</a>
          </div>
        </div>

        <!-- Paket VIP -->
        <div class="package-card shadow-card">
          <div class="package-content">
            <h3 class="package-name">Paket VIP</h3>
            <div class="package-meta">
              <span class="package-meta-item">
                <i data-lucide="calendar" style="width: 1rem; height: 1rem;"></i>
                14 Hari
              </span>
              <span class="package-meta-item">
                <i data-lucide="building" style="width: 1rem; height: 1rem;"></i>
                Hotel Bintang 5
              </span>
            </div>
            <span class="package-price-label">Mulai dari</span>
            <div class="package-price">
              <span class="package-price-currency">Rp</span>
              <span class="package-price-value">55.000.000</span>
            </div>
            <span class="package-distance">Depan Masjidil Haram</span>
            <ul class="package-features">
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Tiket business class</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Visa umroh express</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Hotel 5 bintang view haram</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Makan premium</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Transportasi VIP pribadi</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Muthawif eksklusif</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Laundry gratis</li>
              <li><i data-lucide="check" style="width: 1.25rem; height: 1.25rem;"></i> Asuransi premium</li>
            </ul>
            <a href="#kontak" class="btn btn-outline package-btn">Pilih Paket</a>
          </div>
        </div>
      </div>

      <p class="packages-note">* Harga dapat berubah sewaktu-waktu. Hubungi kami untuk info terbaru dan promo spesial.</p>
    </div>
  </section>

  <!-- Features Section -->
  <section id="keunggulan" class="features">
    <div class="container">
      <div class="section-header">
        <span class="section-label">Mengapa Memilih Kami</span>
        <h2 class="section-title">Keunggulan <span class="text-gradient-gold">Layanan Kami</span></h2>
        <p class="section-desc">Kami berkomitmen memberikan pelayanan terbaik untuk perjalanan ibadah yang nyaman dan bermakna</p>
      </div>

      <div class="features-grid">
        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="shield"></i>
          </div>
          <h3 class="feature-title">Izin Resmi Kemenag</h3>
          <p class="feature-desc">Terdaftar dan diawasi oleh Kementerian Agama RI dengan izin resmi penyelenggara umroh.</p>
        </div>

        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="users"></i>
          </div>
          <h3 class="feature-title">Bimbingan Ustadz</h3>
          <p class="feature-desc">Setiap rombongan didampingi ustadz berpengalaman untuk membimbing ibadah Anda.</p>
        </div>

        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="award"></i>
          </div>
          <h3 class="feature-title">Hotel Dekat Haram</h3>
          <p class="feature-desc">Penginapan strategis dengan akses mudah ke Masjidil Haram dan Masjid Nabawi.</p>
        </div>

        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="headphones"></i>
          </div>
          <h3 class="feature-title">Layanan 24 Jam</h3>
          <p class="feature-desc">Tim support siap membantu Anda kapanpun sebelum, selama, dan sesudah perjalanan.</p>
        </div>

        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="map-pin"></i>
          </div>
          <h3 class="feature-title">Ziarah Lengkap</h3>
          <p class="feature-desc">Kunjungan ke tempat-tempat bersejarah di Mekkah dan Madinah dengan pemandu ahli.</p>
        </div>

        <div class="feature-card shadow-soft">
          <div class="feature-icon">
            <i data-lucide="heart"></i>
          </div>
          <h3 class="feature-title">Asuransi Perjalanan</h3>
          <p class="feature-desc">Perlindungan asuransi komprehensif untuk ketenangan pikiran selama perjalanan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimoni" class="testimonials islamic-pattern">
    <div class="container">
      <div class="section-header">
        <span class="section-label">Testimoni</span>
        <h2 class="section-title">Apa Kata <span class="text-gradient-gold">Jamaah Kami</span></h2>
        <p class="section-desc">Ribuan jamaah telah mempercayakan perjalanan ibadah mereka kepada kami</p>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card">
          <i data-lucide="quote" class="testimonial-quote"></i>
          <div class="testimonial-rating">
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
          </div>
          <p class="testimonial-text">"Alhamdulillah, perjalanan umroh bersama Nurul Iman sangat berkesan. Pelayanan luar biasa, hotel dekat dengan Masjidil Haram. Ustadz sangat sabar membimbing kami."</p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="Ahmad Hidayat" class="testimonial-avatar">
            <div>
              <div class="testimonial-name">Bapak Ahmad Hidayat</div>
              <div class="testimonial-location">Jakarta</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <i data-lucide="quote" class="testimonial-quote"></i>
          <div class="testimonial-rating">
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
          </div>
          <p class="testimonial-text">"Ini pengalaman umroh kedua saya dengan Nurul Iman. Tetap konsisten dengan pelayanan terbaiknya. InsyaAllah akan kembali untuk perjalanan selanjutnya."</p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" alt="Siti Aminah" class="testimonial-avatar">
            <div>
              <div class="testimonial-name">Ibu Siti Aminah</div>
              <div class="testimonial-location">Surabaya</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <i data-lucide="quote" class="testimonial-quote"></i>
          <div class="testimonial-rating">
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
            <i data-lucide="star"></i>
          </div>
          <p class="testimonial-text">"Sangat puas dengan paket VIP. Semua diurus dengan baik, dari penerbangan hingga ziarah. Tim sangat profesional dan ramah. Highly recommended!"</p>
          <div class="testimonial-author">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Rahmat Wijaya" class="testimonial-avatar">
            <div>
              <div class="testimonial-name">Bapak Rahmat Wijaya</div>
              <div class="testimonial-location">Bandung</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="kontak" class="cta">
    <div class="container">
      <div class="cta-grid">
        <div class="cta-content">
          <span class="section-label">Hubungi Kami</span>
          <h2>Siap Memulai <span class="text-gradient-gold">Perjalanan Suci</span> Anda?</h2>
          <p>Tim kami siap membantu Anda merencanakan perjalanan umroh yang tak terlupakan. Konsultasi gratis tanpa kewajiban.</p>

          <div class="cta-contacts">
            <div class="cta-contact">
              <div class="cta-contact-icon">
                <i data-lucide="phone"></i>
              </div>
              <div>
                <span class="cta-contact-label">Telepon</span>
                <div class="cta-contact-value">0812-3456-7890</div>
              </div>
            </div>
            <div class="cta-contact">
              <div class="cta-contact-icon">
                <i data-lucide="message-circle"></i>
              </div>
              <div>
                <span class="cta-contact-label">WhatsApp</span>
                <div class="cta-contact-value">0812-3456-7890</div>
              </div>
            </div>
            <div class="cta-contact">
              <div class="cta-contact-icon">
                <i data-lucide="mail"></i>
              </div>
              <div>
                <span class="cta-contact-label">Email</span>
                <div class="cta-contact-value">info@nuruliman.com</div>
              </div>
            </div>
            <div class="cta-contact">
              <div class="cta-contact-icon">
                <i data-lucide="map-pin"></i>
              </div>
              <div>
                <span class="cta-contact-label">Alamat</span>
                <div class="cta-contact-value">Jl. Sudirman No. 123, Jakarta</div>
              </div>
            </div>
            <div class="cta-contact">
              <div class="cta-contact-icon">
                <i data-lucide="clock"></i>
              </div>
              <div>
                <span class="cta-contact-label">Jam Operasional</span>
                <div class="cta-contact-value">Senin - Sabtu, 08:00 - 17:00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="cta-form-card">
          <h3 class="cta-form-title">Konsultasi Gratis</h3>
          <p class="cta-form-desc">Isi form di bawah dan tim kami akan menghubungi Anda segera</p>

          <form>
            <div class="form-group">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-input" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group">
              <label class="form-label">Nomor WhatsApp</label>
              <input type="tel" class="form-input" placeholder="08xx-xxxx-xxxx">
            </div>
            <div class="form-group">
              <label class="form-label">Paket yang Diminati</label>
              <select class="form-select">
                <option value="">Pilih paket</option>
                <option value="ekonomi">Paket Ekonomi</option>
                <option value="premium">Paket Premium</option>
                <option value="vip">Paket VIP</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Pesan (Opsional)</label>
              <textarea class="form-textarea" rows="3" placeholder="Tuliskan pertanyaan atau kebutuhan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-gold btn-lg" style="width: 100%;">
              Kirim Permintaan
              <i data-lucide="arrow-right" style="width: 1.25rem; height: 1.25rem;"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="footer-logo">
            <div class="footer-logo-icon">N</div>
            <div>
              <span class="footer-logo-text">Nurul Iman</span>
              <span class="footer-logo-sub">Travel Umroh</span>
            </div>
          </div>
          <p class="footer-desc">Mitra terpercaya untuk perjalanan ibadah umroh Anda. Terdaftar resmi di Kementerian Agama RI.</p>
          <div class="footer-socials">
            <a href="#" class="footer-social">
              <i data-lucide="facebook"></i>
            </a>
            <a href="#" class="footer-social">
              <i data-lucide="instagram"></i>
            </a>
            <a href="#" class="footer-social">
              <i data-lucide="youtube"></i>
            </a>
          </div>
        </div>

        <div>
          <h4 class="footer-title">Menu</h4>
          <ul class="footer-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#paket">Paket Umroh</a></li>
            <li><a href="#keunggulan">Keunggulan</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#kontak">Kontak</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-title">Paket Umroh</h4>
          <ul class="footer-links">
            <li><a href="#">Paket Ekonomi</a></li>
            <li><a href="#">Paket Premium</a></li>
            <li><a href="#">Paket VIP</a></li>
            <li><a href="#">Umroh Plus Dubai</a></li>
            <li><a href="#">Umroh Plus Turki</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-title">Kontak</h4>
          <div class="footer-contact-item">
            <i data-lucide="map-pin"></i>
            <span>Jl. Sudirman No. 123, Jakarta Pusat 10110</span>
          </div>
          <div class="footer-contact-item">
            <i data-lucide="phone"></i>
            <span>0812-3456-7890</span>
          </div>
          <div class="footer-contact-item">
            <i data-lucide="mail"></i>
            <span>info@nuruliman.com</span>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2024 Nurul Iman Travel. All rights reserved.</p>
        <p>Izin Resmi Kemenag: SK/123/UMROH/2024</p>
      </div>
    </div>
  </footer>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();

    // Mobile menu toggle
    function toggleMobileMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('active');
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>
</body>
</html>