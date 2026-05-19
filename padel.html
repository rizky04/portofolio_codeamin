<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PadelZone - Booking Lapangan Padel Premium & Shop</title>
    <meta name="description" content="Booking lapangan padel premium dengan fasilitas terbaik. Beli peralatan padel berkualitas tinggi.">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        background: '#0d1117',
                        foreground: '#f5f5f0',
                        card: '#161b22',
                        border: '#30363d',
                        primary: '#84cc16',
                        'primary-foreground': '#0d1117',
                        secondary: '#21262d',
                        muted: '#30363d',
                        'muted-foreground': '#8b949e',
                    }
                }
            }
        }
    </script>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0d1117;
            color: #f5f5f0;
            line-height: 1.6;
        }
        h1, h2, h3, h4, h5, h6 { font-family: 'Space Grotesk', sans-serif; }

        .text-gradient {
            background: linear-gradient(135deg, #84cc16, #a3e635);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-card {
            background: rgba(22, 27, 34, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(48, 54, 61, 0.5);
        }

        .btn-hero {
            background: #84cc16;
            color: #0d1117;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 600;
            font-family: 'Space Grotesk', sans-serif;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 30px rgba(132, 204, 22, 0.3);
        }
        .btn-hero:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 40px rgba(132, 204, 22, 0.5);
        }

        .btn-glass {
            background: rgba(245, 245, 240, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(245, 245, 240, 0.2);
            color: #f5f5f0;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 600;
            font-family: 'Space Grotesk', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-glass:hover { background: rgba(245, 245, 240, 0.2); }

        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-4px); }

        .product-card:hover .product-btn {
            opacity: 1;
            transform: translateY(0);
        }
        .product-btn {
            opacity: 0;
            transform: translateY(16px);
            transition: all 0.3s ease;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0) translateX(-50%); }
            50% { transform: translateY(-10px) translateX(-50%); }
        }
        .animate-slide-up { animation: slideUp 0.6s ease-out forwards; }
        .animate-bounce { animation: bounce 2s infinite; }

        .time-slot { transition: all 0.2s ease; }
        .time-slot.selected { background: #84cc16; color: #0d1117; }
        .time-slot:disabled { opacity: 0.5; cursor: not-allowed; }

        .court-btn.selected { border-color: #84cc16; background: rgba(132, 204, 22, 0.1); }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #161b22;
            border: 1px solid #30363d;
            padding: 16px 24px;
            border-radius: 12px;
            display: none;
            z-index: 1000;
            animation: slideUp 0.3s ease;
        }
        .toast.success { border-left: 4px solid #84cc16; }
        .toast.error { border-left: 4px solid #ef4444; }
        .toast.show { display: block; }
    </style>
</head>
<body>
    <!-- Toast Notification -->
    <div id="toast" class="toast"></div>

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-xl border-b border-border/50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="#home" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                        <span class="font-display font-bold text-primary-foreground">P</span>
                    </div>
                    <span class="font-display font-bold text-xl">PadelZone</span>
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#home" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">Home</a>
                    <a href="#booking" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">Booking</a>
                    <a href="#shop" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">Shop</a>
                    <a href="#contact" class="text-sm font-medium text-muted-foreground hover:text-primary transition-colors">Kontak</a>
                </div>
                <button class="btn-hero hidden md:block" style="padding: 8px 16px; font-size: 14px;">
                    Booking Sekarang
                </button>
                <button id="menuBtn" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden py-4 border-t border-border/50">
                <div class="flex flex-col gap-4">
                    <a href="#home" class="text-sm font-medium text-muted-foreground hover:text-primary">Home</a>
                    <a href="#booking" class="text-sm font-medium text-muted-foreground hover:text-primary">Booking</a>
                    <a href="#shop" class="text-sm font-medium text-muted-foreground hover:text-primary">Shop</a>
                    <a href="#contact" class="text-sm font-medium text-muted-foreground hover:text-primary">Kontak</a>
                    <button class="btn-hero w-full" style="padding: 8px 16px; font-size: 14px;">Booking Sekarang</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-16">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?w=1920&q=80" alt="Padel Court" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-background via-background/90 to-background/50"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/30 mb-6 animate-slide-up">
                    <div class="w-2 h-2 rounded-full bg-primary" style="animation: pulse 2s infinite;"></div>
                    <span class="text-sm font-medium text-primary">Lapangan Tersedia Hari Ini</span>
                </div>
                <h1 class="font-display text-5xl md:text-7xl font-bold leading-tight mb-6 animate-slide-up" style="animation-delay: 0.1s;">
                    Rasakan Serunya <span class="text-gradient">Bermain Padel</span>
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground mb-8 animate-slide-up" style="animation-delay: 0.2s;">
                    Booking lapangan padel premium dengan fasilitas terbaik.
                    Nikmati pengalaman bermain padel yang tak terlupakan bersama teman atau keluarga.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-12 animate-slide-up" style="animation-delay: 0.3s;">
                    <button class="btn-hero flex items-center justify-center gap-2">
                        Booking Lapangan
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <button class="btn-glass">Lihat Produk</button>
                </div>
                <div class="grid grid-cols-3 gap-6 animate-slide-up" style="animation-delay: 0.4s;">
                    <div class="text-center sm:text-left">
                        <div class="flex items-center justify-center sm:justify-start gap-2 mb-1">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <span class="font-display text-2xl md:text-3xl font-bold">1000+</span>
                        </div>
                        <span class="text-sm text-muted-foreground">Pemain Aktif</span>
                    </div>
                    <div class="text-center sm:text-left">
                        <div class="flex items-center justify-center sm:justify-start gap-2 mb-1">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-display text-2xl md:text-3xl font-bold">24/7</span>
                        </div>
                        <span class="text-sm text-muted-foreground">Akses Lapangan</span>
                    </div>
                    <div class="text-center sm:text-left">
                        <div class="flex items-center justify-center sm:justify-start gap-2 mb-1">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-display text-2xl md:text-3xl font-bold">4</span>
                        </div>
                        <span class="text-sm text-muted-foreground">Lapangan Premium</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 animate-bounce">
            <div class="w-6 h-10 rounded-full border-2 border-muted-foreground/30 flex justify-center pt-2">
                <div class="w-1 h-2 bg-primary rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                    Booking Online
                </span>
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">
                    Pesan Lapangan <span class="text-gradient">Sekarang</span>
                </h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                    Pilih tanggal, lapangan, dan waktu yang tersedia. Booking mudah dan cepat dalam hitungan menit.
                </p>
            </div>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Step 1: Select Date -->
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display font-semibold">Pilih Tanggal</h3>
                                <p class="text-sm text-muted-foreground">Step 1</p>
                            </div>
                        </div>
                        <input type="date" id="bookingDate" class="w-full px-4 py-3 rounded-lg bg-secondary border border-border focus:border-primary focus:outline-none transition-all text-foreground">
                    </div>
                    <!-- Step 2: Select Court -->
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
                                <span class="font-display font-bold text-primary">2</span>
                            </div>
                            <div>
                                <h3 class="font-display font-semibold">Pilih Lapangan</h3>
                                <p class="text-sm text-muted-foreground">Step 2</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <button onclick="selectCourt(1)" class="court-btn p-3 rounded-lg border border-border text-left transition-all hover:border-primary/50" data-court="1">
                                <span class="font-medium block">Lapangan 1</span>
                                <span class="text-xs text-muted-foreground">Indoor Premium</span>
                            </button>
                            <button onclick="selectCourt(2)" class="court-btn p-3 rounded-lg border border-border text-left transition-all hover:border-primary/50" data-court="2">
                                <span class="font-medium block">Lapangan 2</span>
                                <span class="text-xs text-muted-foreground">Indoor Premium</span>
                            </button>
                            <button onclick="selectCourt(3)" class="court-btn p-3 rounded-lg border border-border text-left transition-all hover:border-primary/50" data-court="3">
                                <span class="font-medium block">Lapangan 3</span>
                                <span class="text-xs text-muted-foreground">Outdoor</span>
                            </button>
                            <button onclick="selectCourt(4)" class="court-btn p-3 rounded-lg border border-border text-left transition-all hover:border-primary/50" data-court="4">
                                <span class="font-medium block">Lapangan 4</span>
                                <span class="text-xs text-muted-foreground">Outdoor</span>
                            </button>
                        </div>
                    </div>
                    <!-- Step 3: Select Time -->
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display font-semibold">Pilih Waktu</h3>
                                <p class="text-sm text-muted-foreground">Step 3</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 max-h-48 overflow-y-auto pr-2" id="timeSlots">
                            <!-- Time slots will be generated by JS -->
                        </div>
                    </div>
                </div>
                <!-- Booking Summary -->
                <div class="mt-8 glass-card rounded-2xl p-6 md:p-8">
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                        <div>
                            <h3 class="font-display text-xl font-semibold mb-2">Ringkasan Booking</h3>
                            <div class="flex flex-wrap gap-4 text-sm">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span id="summaryDate">Pilih tanggal</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span id="summaryCourt">Pilih lapangan</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span id="summaryTime">Pilih waktu</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-right" id="priceDisplay" style="display: none;">
                                <span class="text-sm text-muted-foreground">Total</span>
                                <p class="font-display text-2xl font-bold text-primary" id="totalPrice">Rp 0</p>
                            </div>
                            <button onclick="handleBooking()" class="btn-hero" style="padding: 12px 24px;">
                                Booking Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section id="shop" class="py-20 md:py-32 bg-gradient-to-b from-background to-secondary/20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="inline-block px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                        Shop
                    </span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">
                        Peralatan <span class="text-gradient">Premium</span>
                    </h2>
                    <p class="text-muted-foreground max-w-xl">
                        Tingkatkan permainan Anda dengan peralatan padel berkualitas tinggi dari brand-brand ternama.
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <button class="p-3 rounded-lg border border-border hover:border-primary/50 transition-all relative" id="cartBtn">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span id="cartCount" class="absolute -top-2 -right-2 w-5 h-5 bg-primary text-primary-foreground text-xs rounded-full items-center justify-center hidden">0</span>
                    </button>
                </div>
            </div>
            <!-- Products Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="productsGrid">
                <!-- Products will be generated by JS -->
            </div>
            <!-- CTA Banner -->
            <div class="mt-16 glass-card rounded-2xl p-8 md:p-12 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-primary/10"></div>
                <div class="relative z-10">
                    <h3 class="font-display text-2xl md:text-3xl font-bold mb-4">
                        Diskon 20% untuk Pembelian Pertama
                    </h3>
                    <p class="text-muted-foreground mb-6 max-w-xl mx-auto">
                        Gunakan kode <span class="text-primary font-semibold">PADEL20</span> saat checkout untuk mendapatkan diskon eksklusif.
                    </p>
                    <button class="btn-hero">Belanja Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-card border-t border-border">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center">
                            <span class="font-display font-bold text-xl text-primary-foreground">P</span>
                        </div>
                        <span class="font-display font-bold text-2xl">PadelZone</span>
                    </div>
                    <p class="text-muted-foreground mb-6">
                        Tempat bermain padel premium dengan fasilitas terbaik dan pelayanan profesional.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center hover:bg-primary hover:text-primary-foreground transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center hover:bg-primary hover:text-primary-foreground transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center hover:bg-primary hover:text-primary-foreground transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Quick Links -->
                <div>
                    <h4 class="font-display font-semibold text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-muted-foreground hover:text-primary transition-colors">Home</a></li>
                        <li><a href="#booking" class="text-muted-foreground hover:text-primary transition-colors">Booking</a></li>
                        <li><a href="#shop" class="text-muted-foreground hover:text-primary transition-colors">Shop</a></li>
                        <li><a href="#contact" class="text-muted-foreground hover:text-primary transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>
                <!-- Services -->
                <div>
                    <h4 class="font-display font-semibold text-lg mb-6">Layanan</h4>
                    <ul class="space-y-3">
                        <li><span class="text-muted-foreground">Sewa Lapangan</span></li>
                        <li><span class="text-muted-foreground">Kelas Padel</span></li>
                        <li><span class="text-muted-foreground">Turnamen</span></li>
                        <li><span class="text-muted-foreground">Private Coach</span></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h4 class="font-display font-semibold text-lg mb-6">Kontak</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-muted-foreground">Jl. Sudirman No. 123, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:+6281234567890" class="text-muted-foreground hover:text-primary transition-colors">+62 812 3456 7890</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:info@padelzone.id" class="text-muted-foreground hover:text-primary transition-colors">info@padelzone.id</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Bottom Bar -->
            <div class="mt-12 pt-8 border-t border-border flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm text-muted-foreground">© 2024 PadelZone. All rights reserved.</p>
                <div class="flex items-center gap-6 text-sm text-muted-foreground">
                    <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // State
        let selectedDate = '';
        let selectedCourt = null;
        let selectedTime = null;
        let cart = [];

        const timeSlots = [
            { time: '08:00', available: true, price: 150000 },
            { time: '09:00', available: true, price: 150000 },
            { time: '10:00', available: false, price: 150000 },
            { time: '11:00', available: true, price: 150000 },
            { time: '12:00', available: true, price: 120000 },
            { time: '13:00', available: true, price: 120000 },
            { time: '14:00', available: false, price: 120000 },
            { time: '15:00', available: true, price: 150000 },
            { time: '16:00', available: true, price: 200000 },
            { time: '17:00', available: false, price: 200000 },
            { time: '18:00', available: true, price: 200000 },
            { time: '19:00', available: true, price: 200000 },
        ];

        const products = [
            { id: 1, name: 'Pro Carbon Racket', category: 'Raket', price: 2500000, originalPrice: 3000000, rating: 4.9, reviews: 128, image: 'https://images.unsplash.com/photo-1617083934555-ac7d4e7c0b6a?w=400&q=80', badge: 'Best Seller' },
            { id: 2, name: 'Premium Padel Balls (3pcs)', category: 'Bola', price: 150000, originalPrice: null, rating: 4.8, reviews: 89, image: 'https://images.unsplash.com/photo-1554068865-24cecd4e34b8?w=400&q=80', badge: null },
            { id: 3, name: 'Tournament Bag', category: 'Tas', price: 850000, originalPrice: 1000000, rating: 4.7, reviews: 56, image: 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&q=80', badge: 'Diskon 15%' },
            { id: 4, name: 'Pro Grip Tape', category: 'Aksesoris', price: 75000, originalPrice: null, rating: 4.6, reviews: 234, image: 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=400&q=80', badge: null },
        ];

        // Format price
        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(price);
        }

        // Show toast
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.className = `toast ${type} show`;
            setTimeout(() => { toast.className = 'toast'; }, 3000);
        }

        // Mobile menu toggle
        document.getElementById('menuBtn').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Date picker
        document.getElementById('bookingDate').addEventListener('change', function(e) {
            selectedDate = e.target.value;
            document.getElementById('summaryDate').textContent = selectedDate || 'Pilih tanggal';
        });

        // Set min date to today
        document.getElementById('bookingDate').min = new Date().toISOString().split('T')[0];

        // Select court
        function selectCourt(courtId) {
            selectedCourt = courtId;
            document.querySelectorAll('.court-btn').forEach(btn => {
                btn.classList.remove('selected');
                if (parseInt(btn.dataset.court) === courtId) {
                    btn.classList.add('selected');
                }
            });
            document.getElementById('summaryCourt').textContent = `Lapangan ${courtId}`;
        }

        // Generate time slots
        function renderTimeSlots() {
            const container = document.getElementById('timeSlots');
            container.innerHTML = timeSlots.map(slot => `
                <button
                    onclick="selectTime('${slot.time}', ${slot.price})"
                    ${!slot.available ? 'disabled' : ''}
                    class="time-slot p-2 rounded-lg text-sm font-medium ${!slot.available ? 'bg-muted text-muted-foreground' : 'bg-secondary hover:bg-primary/20'}"
                    data-time="${slot.time}"
                >
                    ${slot.time}
                </button>
            `).join('');
        }

        // Select time
        function selectTime(time, price) {
            selectedTime = time;
            document.querySelectorAll('.time-slot').forEach(btn => {
                btn.classList.remove('selected');
                if (btn.dataset.time === time) {
                    btn.classList.add('selected');
                }
            });
            document.getElementById('summaryTime').textContent = `${time} WIB`;
            document.getElementById('priceDisplay').style.display = 'block';
            document.getElementById('totalPrice').textContent = formatPrice(price);
        }

        // Handle booking
        function handleBooking() {
            if (!selectedDate || !selectedCourt || !selectedTime) {
                showToast('Pilih tanggal, lapangan, dan waktu terlebih dahulu', 'error');
                return;
            }
            showToast('Booking berhasil! Silakan lakukan pembayaran.', 'success');
        }

        // Render products
        function renderProducts() {
            const container = document.getElementById('productsGrid');
            container.innerHTML = products.map((product, index) => `
                <div class="product-card group glass-card rounded-2xl overflow-hidden hover-lift" style="animation: slideUp 0.6s ease-out forwards; animation-delay: ${index * 0.1}s;">
                    <div class="relative aspect-square overflow-hidden bg-secondary">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        ${product.badge ? `<span class="absolute top-3 left-3 px-3 py-1 bg-primary text-primary-foreground text-xs font-semibold rounded-full">${product.badge}</span>` : ''}
                        <button onclick="addToCart(${product.id})" class="product-btn absolute bottom-3 right-3 w-10 h-10 bg-primary text-primary-foreground rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <span class="text-xs text-muted-foreground uppercase tracking-wider">${product.category}</span>
                        <h3 class="font-display font-semibold text-lg mt-1 mb-2">${product.name}</h3>
                        <div class="flex items-center gap-2 mb-3">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 fill-primary text-primary" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span class="text-sm font-medium">${product.rating}</span>
                            </div>
                            <span class="text-sm text-muted-foreground">(${product.reviews} reviews)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-display text-xl font-bold text-primary">${formatPrice(product.price)}</span>
                            ${product.originalPrice ? `<span class="text-sm text-muted-foreground line-through">${formatPrice(product.originalPrice)}</span>` : ''}
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Add to cart
        function addToCart(productId) {
            cart.push(productId);
            const product = products.find(p => p.id === productId);
            showToast(`${product.name} ditambahkan ke keranjang!`, 'success');
            updateCartCount();
        }

        // Update cart count
        function updateCartCount() {
            const countEl = document.getElementById('cartCount');
            if (cart.length > 0) {
                countEl.textContent = cart.length;
                countEl.classList.remove('hidden');
                countEl.classList.add('flex');
            } else {
                countEl.classList.add('hidden');
                countEl.classList.remove('flex');
            }
        }

        // Initialize
        renderTimeSlots();
        renderProducts();
    </script>
</body>
</html>
