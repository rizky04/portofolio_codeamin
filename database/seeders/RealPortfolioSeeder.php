<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealPortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old dummy data
        DB::table('project_technology')->delete();
        Project::query()->delete();
        Technology::query()->delete();
        Skill::query()->delete();
        Profile::query()->delete();
        Experience::query()->delete();
        Education::query()->delete();
        Testimonial::query()->delete();

        // ─── PROFILE ────────────────────────────────────────────────────────────
        Profile::create([
            'name'     => 'Muhammad Rizky Amin',
            'tagline'  => 'Full-Stack Web & Mobile Developer | AMIN DEV',
            'bio'      => 'Saya seorang Full-Stack Developer berpengalaman yang berfokus pada pengembangan aplikasi web dan mobile untuk bisnis. Dengan keahlian di Laravel, CodeIgniter, Bootstrap, Vue.js, React Native, dan Flutter, saya telah membangun lebih dari 20 sistem nyata mulai dari POS, HRIS, ESS, sistem logistik, e-commerce, hingga company profile. Saya berkomitmen menghadirkan solusi digital yang clean, scalable, dan berdampak nyata bagi klien.',
            'email'    => 'aminrizky94@gmail.com',
            'whatsapp' => '+62 812 3456 7890',
            'github'   => 'https://github.com/rizky04',
            'linkedin' => 'https://linkedin.com/in/muhammadrizkyamin',
            'location' => 'Bangkalan, Jawa Timur, Indonesia',
        ]);

        // ─── SKILLS ─────────────────────────────────────────────────────────────
        $skills = [
            // Backend
            ['name' => 'Laravel',        'category' => 'backend',  'level' => 'advanced',     'icon' => '🔴', 'sort_order' => 1],
            ['name' => 'CodeIgniter',    'category' => 'backend',  'level' => 'advanced',     'icon' => '🔥', 'sort_order' => 2],
            ['name' => 'PHP',            'category' => 'backend',  'level' => 'advanced',     'icon' => '🐘', 'sort_order' => 3],
            ['name' => 'MySQL',          'category' => 'backend',  'level' => 'advanced',     'icon' => '🗄️',  'sort_order' => 4],
            ['name' => 'REST API',       'category' => 'backend',  'level' => 'advanced',     'icon' => '🔌', 'sort_order' => 5],
            // Frontend
            ['name' => 'Bootstrap',      'category' => 'frontend', 'level' => 'advanced',     'icon' => '🅱️',  'sort_order' => 6],
            ['name' => 'Tailwind CSS',   'category' => 'frontend', 'level' => 'advanced',     'icon' => '🎨', 'sort_order' => 7],
            ['name' => 'Vue.js',         'category' => 'frontend', 'level' => 'intermediate',  'icon' => '🟢', 'sort_order' => 8],
            ['name' => 'React',          'category' => 'frontend', 'level' => 'intermediate',  'icon' => '⚛️',  'sort_order' => 9],
            ['name' => 'Inertia.js',     'category' => 'frontend', 'level' => 'intermediate',  'icon' => '⚡', 'sort_order' => 10],
            ['name' => 'Next.js',        'category' => 'frontend', 'level' => 'intermediate',  'icon' => '▲',  'sort_order' => 11],
            ['name' => 'JavaScript',     'category' => 'frontend', 'level' => 'advanced',     'icon' => '🟡', 'sort_order' => 12],
            // Mobile
            ['name' => 'Flutter',        'category' => 'tools',    'level' => 'intermediate',  'icon' => '💙', 'sort_order' => 13],
            ['name' => 'React Native',   'category' => 'tools',    'level' => 'intermediate',  'icon' => '📱', 'sort_order' => 14],
            // Tools & Admin
            ['name' => 'Filament',       'category' => 'tools',    'level' => 'advanced',     'icon' => '🧡', 'sort_order' => 15],
            ['name' => 'AdminLTE',       'category' => 'tools',    'level' => 'advanced',     'icon' => '🖥️',  'sort_order' => 16],
            ['name' => 'Git',            'category' => 'tools',    'level' => 'advanced',     'icon' => '🔧', 'sort_order' => 17],
            ['name' => 'Figma',          'category' => 'tools',    'level' => 'intermediate',  'icon' => '🎭', 'sort_order' => 18],
            // Soft Skills
            ['name' => 'Problem Solving','category' => 'soft',     'level' => 'advanced',     'icon' => '🧠', 'sort_order' => 19],
            ['name' => 'Komunikasi',     'category' => 'soft',     'level' => 'advanced',     'icon' => '💬', 'sort_order' => 20],
        ];

        foreach ($skills as $skill) {
            Skill::create(array_merge($skill, ['is_visible' => true]));
        }

        // ─── TECHNOLOGIES ────────────────────────────────────────────────────────
        $techMap = [];
        $techs = [
            'Laravel', 'Bootstrap', 'CodeIgniter', 'PHP', 'Vue.js',
            'React Native', 'Flutter', 'Next.js', 'Tailwind CSS', 'Inertia.js',
            'React', 'Filament', 'MySQL', 'JavaScript',
        ];
        foreach ($techs as $name) {
            $t = Technology::create(['name' => $name, 'icon' => null]);
            $techMap[$name] = $t->id;
        }

        // ─── PROJECTS ────────────────────────────────────────────────────────────
        $projects = [
            [
                'title'       => 'Lapangan Padel — PadeiZone',
                'slug'        => 'lapangan-padel-padeizone',
                'description' => 'Sistem booking lapangan padel online dengan tampilan modern dark theme. Fitur: booking lapangan, pemilihan tanggal/waktu/lapangan, master data product, dan admin panel untuk manajemen product dan jadwal.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 1,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'POS Bengkel — Karisma Motor',
                'slug'        => 'pos-bengkel-karisma-motor',
                'description' => 'Sistem Point of Sale lengkap untuk bengkel Karisma Motor. Fitur: manajemen stok, master data barang & barcode, transaksi service & penjualan, monitoring service, stok opname, pembelian barang, laporan omset, cash in, dan profit.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 2,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'Carwash — Karisma Motor',
                'slug'        => 'carwash-karisma-motor',
                'description' => 'Aplikasi POS khusus carwash dengan fitur: sistem POS kasir, master data product (paket cuci), dan manajemen transaksi harian.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 3,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'POS Apotik',
                'slug'        => 'pos-apotik',
                'description' => 'Sistem POS untuk apotik berbasis web dengan AdminLTE. Fitur: katalog obat, stok obat, data supplier, opname barang, penjualan, pembelian, laporan penjualan & pembelian, serta export excel laporan tahunan/bulanan/mingguan.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 4,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'ESS — Employee Self Service',
                'slug'        => 'ess-employee-self-service',
                'description' => 'Sistem Employee Self Service untuk YEC Group. Fitur: data master karyawan/jabatan/divisi, manajemen cuti & approval, ijin datang terlambat/pulang cepat/dinas luar, upload lowongan kerja, proses hiring calon karyawan, manajemen kontrak kerja, download data karyawan, monitoring kontrak berakhir H-30.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 5,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'Helpdesk Service Divisi',
                'slug'        => 'helpdesk-service-divisi',
                'description' => 'Sistem helpdesk internal untuk pengelolaan tiket antar divisi. Fitur: data master karyawan/jabatan/divisi, pengajuan kendala via sistem ticketing, manajemen tiket (open/proses/close) beserta PIC, dan chat antar karyawan.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 6,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'HRIS — Human Resources Information System',
                'slug'        => 'hris-human-resources-information-system',
                'description' => 'Sistem HRIS lengkap untuk YEC Group berbasis CodeIgniter. Fitur: data master pegawai aktif/non-aktif, jabatan/divisi/penempatan, berkas pegawai, manajemen kontrak kerja, cuti, absensi/potongan gaji, rekrutmen & upload loker, laporan absensi/gaji/slip gaji.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 7,
                'techs'       => ['Bootstrap', 'CodeIgniter'],
            ],
            [
                'title'       => 'Karir Hub — Rekruitment Karyawan',
                'slug'        => 'karir-hub-rekruitment-karyawan',
                'description' => 'Platform rekruitment karyawan untuk YEC Group. Fitur: halaman lowongan kerja, login & register pelamar, upload data diri & berkas pelamar, tracking status lamaran, dan update profil pelamar.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 8,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'SIASET — Sistem Informasi Aset',
                'slug'        => 'siaset-sistem-informasi-aset',
                'description' => 'Sistem informasi manajemen aset berbasis web. Fitur: data master user, kategori, dan barang, manajemen barang masuk dan barang keluar.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 9,
                'techs'       => ['Bootstrap', 'Laravel'],
            ],
            [
                'title'       => 'Sahyna Shop',
                'slug'        => 'sahyna-shop',
                'description' => 'Aplikasi e-commerce fashion dengan dashboard admin dan storefront. Fitur: data master barang & foto barang, manajemen transaksi, checkout barang, dan data master customer. Dibangun dengan Laravel dan Vue.js.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 10,
                'techs'       => ['Bootstrap', 'Laravel', 'Vue.js'],
            ],
            [
                'title'       => 'FoodMarket Apps',
                'slug'        => 'foodmarket-apps',
                'description' => 'Aplikasi pemesanan makanan berbasis mobile (React Native) dengan backend Laravel. Fitur: data master makanan & foto, manajemen transaksi, checkout barang, dan data master customer.',
                'category'    => 'Mobile App',
                'status'      => 'published',
                'sort_order'  => 11,
                'techs'       => ['Bootstrap', 'Laravel', 'React Native'],
            ],
            [
                'title'       => 'Laris Mart',
                'slug'        => 'laris-mart',
                'description' => 'Aplikasi marketplace mobile berbasis Flutter dengan backend PHP. Fitur: katalog produk berdasarkan kategori, data master produk & foto, manajemen transaksi, checkout, data customer, dan integrasi WhatsApp.',
                'category'    => 'Mobile App',
                'status'      => 'published',
                'sort_order'  => 12,
                'techs'       => ['Flutter', 'PHP'],
            ],
            [
                'title'       => 'Monitoring Logistik',
                'slug'        => 'monitoring-logistik',
                'description' => 'Sistem monitoring logistik berbasis web modern dengan Laravel + Inertia + React. Fitur: manajemen data user/item/customer/kendaraan, pengecekan keberangkatan & kedatangan kendaraan, manajemen distribusi produk, laporan distribusi, logistik, dan teknik.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 13,
                'techs'       => ['Laravel', 'Tailwind CSS', 'Inertia.js', 'React'],
            ],
            [
                'title'       => 'E-Kertas Kerja',
                'slug'        => 'e-kertas-kerja',
                'description' => 'Aplikasi digital kertas kerja perhitungan harga untuk PT Satona Group. Fitur: create rekomendasi & realisasi kertas kerja perhitungan, laporan rekomendasi dan realisasi, serta manajemen data harga margin dan discount.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 14,
                'techs'       => ['Laravel', 'Tailwind CSS', 'Next.js'],
            ],
            [
                'title'       => 'E-Arsip',
                'slug'        => 'e-arsip',
                'description' => 'Sistem manajemen arsip digital untuk PT Satona. Fitur: manajemen data arsip, transaksi pinjam & kembali arsip, view data arsip PDF, serta master data rak, box, dan baris arsip.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 15,
                'techs'       => ['Laravel'],
            ],
            [
                'title'       => 'Data Karyawan — PT Satona Group',
                'slug'        => 'data-karyawan-pt-satona-group',
                'description' => 'Sistem informasi data karyawan multi-perusahaan untuk PT Satona Group. Fitur: data perusahaan, divisi, golongan, jabatan, data karyawan, kontrak kerja, serta monitoring karyawan aktif dan tidak aktif.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 16,
                'techs'       => ['Laravel'],
            ],
            [
                'title'       => 'E-Kunjungan',
                'slug'        => 'e-kunjungan',
                'description' => 'Aplikasi manajemen kunjungan mitra sales untuk PT Satona. Fitur: data mitra, data produk, data follow-up customer, dan pencatatan kunjungan mitra.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 17,
                'techs'       => ['Laravel'],
            ],
            [
                'title'       => 'Pencatatan Asset — Asset Management',
                'slug'        => 'pencatatan-asset-management',
                'description' => 'Sistem pencatatan dan manajemen aset perusahaan (multi-company) berbasis Filament admin panel. Fitur: master aset, transaksi aset, maintenance aset, audit aset, dan manajemen aset secara menyeluruh.',
                'category'    => 'Web App',
                'status'      => 'published',
                'sort_order'  => 18,
                'techs'       => ['Bootstrap', 'Laravel', 'Filament'],
            ],
            [
                'title'       => 'Website Profile Sekolah — SMAN 2 Bangkalan',
                'slug'        => 'website-profile-sekolah-sman-2-bangkalan',
                'description' => 'Website profil resmi SMAN 2 Bangkalan dengan CMS berbasis Filament. Fitur: profil sekolah, layanan, berita, pengumuman, mading digital, profil alumni, kontak, dan admin panel untuk pengelolaan konten.',
                'category'    => 'Website',
                'status'      => 'published',
                'sort_order'  => 19,
                'techs'       => ['Bootstrap', 'Laravel', 'Filament'],
            ],
            [
                'title'       => 'PT Satona — Company Profile',
                'slug'        => 'pt-satona-company-profile',
                'description' => 'Website company profile PT Satona (industri kimia). Halaman: Beranda, Product, Segmen Bisnis, Berita, Karir, Kontak. Admin panel (Filament): data lowongan kerja, blog, kategori, pesan, produk, user, dan data pelamar.',
                'category'    => 'Website',
                'status'      => 'published',
                'sort_order'  => 20,
                'techs'       => ['Bootstrap', 'Laravel', 'Filament'],
            ],
            [
                'title'       => 'PT Rotama Duta Niaga — Company Profile',
                'slug'        => 'pt-rotama-duta-niaga-company-profile',
                'description' => 'Website company profile PT Rotama Duta Niaga (distribusi). Halaman: Beranda, Product, Segmen Bisnis, Berita, Karir, Kontak. Admin panel (Filament): data lowongan kerja, blog, kategori, pesan, produk, user, dan data pelamar.',
                'category'    => 'Website',
                'status'      => 'published',
                'sort_order'  => 21,
                'techs'       => ['Bootstrap', 'Laravel', 'Filament'],
            ],
            [
                'title'       => 'Landing Page Profile Company — YEC Group',
                'slug'        => 'landing-page-profile-company-yec-group',
                'description' => 'Landing page profil perusahaan YEC Group yang menampilkan tiga sistem digital utama: Employee Self Service, Helpdesk Employee, dan KarirHub. Fitur: informasi sistem digital, profil perusahaan, dan unit bisnis.',
                'category'    => 'Website',
                'status'      => 'published',
                'sort_order'  => 22,
                'techs'       => ['Bootstrap'],
            ],
            [
                'title'       => 'Landing Page Bengkel — AutoCare',
                'slug'        => 'landing-page-bengkel-autocare',
                'description' => 'Landing page modern untuk bengkel & carwash profesional. Menampilkan layanan service mobil, paket carwash, harga, galeri, dan informasi kontak. Desain responsif dengan Bootstrap.',
                'category'    => 'Landing Page',
                'status'      => 'published',
                'sort_order'  => 23,
                'techs'       => ['Bootstrap'],
            ],
            [
                'title'       => 'Landing Page Travel Umroh',
                'slug'        => 'landing-page-travel-umroh',
                'description' => 'Landing page elegan untuk agen travel umroh. Menampilkan pilihan paket umroh (Ekonomi, Primadona, VIP) dengan harga, fasilitas, dan tombol booking. Desain responsif dan meyakinkan untuk konversi calon jamaah.',
                'category'    => 'Landing Page',
                'status'      => 'published',
                'sort_order'  => 24,
                'techs'       => ['Bootstrap'],
            ],
        ];

        foreach ($projects as $data) {
            $techs = $data['techs'];
            unset($data['techs']);
            $project = Project::create($data);
            $ids = array_values(array_filter(array_map(fn($t) => $techMap[$t] ?? null, $techs)));
            $project->technologies()->sync($ids);
        }

        // ─── EXPERIENCES ─────────────────────────────────────────────────────────
        $experiences = [
            [
                'company'     => 'PT Satona Group',
                'position'    => 'Full-Stack Developer',
                'start_date'  => '2023-01-01',
                'end_date'    => null,
                'is_current'  => true,
                'description' => 'Mengembangkan dan memelihara berbagai sistem internal perusahaan: E-Arsip, E-Kertas Kerja, E-Kunjungan, Data Karyawan, Pencatatan Aset, dan Monitoring Logistik. Bertanggung jawab atas seluruh siklus pengembangan dari desain database hingga deployment.',
                'sort_order'  => 1,
            ],
            [
                'company'     => 'YEC Group (Young Enterprise Corporation)',
                'position'    => 'Web Developer',
                'start_date'  => '2021-06-01',
                'end_date'    => '2022-12-31',
                'is_current'  => false,
                'description' => 'Membangun ekosistem sistem digital internal YEC Group: ESS (Employee Self Service), Helpdesk Service Divisi, KarirHub (rekruitmen), HRIS, dan Landing Page company profile. Sistem ini digunakan oleh ratusan karyawan dari berbagai unit bisnis.',
                'sort_order'  => 2,
            ],
            [
                'company'     => 'Karisma Motor',
                'position'    => 'Freelance Developer',
                'start_date'  => '2020-03-01',
                'end_date'    => '2021-05-31',
                'is_current'  => false,
                'description' => 'Membangun sistem POS bengkel dan carwash terintegrasi untuk Karisma Motor. Sistem mencakup manajemen stok, transaksi service, penjualan spare part, monitoring kendaraan, dan laporan keuangan omset harian.',
                'sort_order'  => 3,
            ],
            [
                'company'     => 'Freelance — AMIN DEV',
                'position'    => 'Full-Stack Developer',
                'start_date'  => '2019-01-01',
                'end_date'    => null,
                'is_current'  => true,
                'description' => 'Menerima proyek freelance dari berbagai klien: sistem POS apotik, e-commerce, aplikasi mobile (Flutter/React Native), website company profile, landing page bengkel, landing page travel umroh, dan website profil sekolah.',
                'sort_order'  => 4,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }

        // ─── EDUCATIONS ──────────────────────────────────────────────────────────
        $educations = [
            [
                'institution' => 'Universitas Trunojoyo Madura',
                'degree'      => 'S1',
                'field'       => 'Teknik Informatika',
                'start_year'  => 2016,
                'end_year'    => 2020,
                'description' => 'Menempuh pendidikan S1 Teknik Informatika dengan fokus pada pengembangan perangkat lunak, basis data, dan pemrograman web.',
                'sort_order'  => 1,
            ],
            [
                'institution' => 'Buildwithangga',
                'degree'      => 'Certificate',
                'field'       => 'Full-Stack Laravel & Vue.js',
                'start_year'  => 2021,
                'end_year'    => 2021,
                'description' => 'Kursus intensif pengembangan web full-stack menggunakan Laravel (backend) dan Vue.js (frontend) dengan studi kasus proyek nyata.',
                'sort_order'  => 2,
            ],
            [
                'institution' => 'Dicoding Indonesia',
                'degree'      => 'Certificate',
                'field'       => 'Belajar Membuat Aplikasi Flutter',
                'start_year'  => 2022,
                'end_year'    => 2022,
                'description' => 'Sertifikasi pengembangan aplikasi mobile cross-platform menggunakan Flutter dan Dart dari Dicoding Indonesia.',
                'sort_order'  => 3,
            ],
            [
                'institution' => 'Udemy',
                'degree'      => 'Certificate',
                'field'       => 'React Native — The Practical Guide',
                'start_year'  => 2022,
                'end_year'    => 2022,
                'description' => 'Kursus pengembangan aplikasi mobile React Native untuk Android dan iOS dengan backend API Laravel.',
                'sort_order'  => 4,
            ],
            [
                'institution' => 'SMA Negeri 2 Bangkalan',
                'degree'      => 'SMA',
                'field'       => 'IPA',
                'start_year'  => 2013,
                'end_year'    => 2016,
                'description' => null,
                'sort_order'  => 5,
            ],
        ];

        foreach ($educations as $edu) {
            Education::create($edu);
        }

        // ─── TESTIMONIALS ────────────────────────────────────────────────────────
        $testimonials = [
            [
                'name'       => 'Manager IT — YEC Group',
                'position'   => 'Manager IT',
                'company'    => 'YEC Group',
                'quote'      => 'Amin sangat profesional dan responsif. Sistem ESS dan Helpdesk yang dibangun berjalan sangat lancar dan mempermudah operasional HR kami sehari-hari. Kode yang dihasilkan bersih dan mudah dikembangkan oleh tim internal kami.',
                'is_visible' => true,
                'sort_order' => 1,
            ],
            [
                'name'       => 'Owner — Karisma Motor',
                'position'   => 'Owner',
                'company'    => 'Karisma Motor',
                'quote'      => 'POS yang dibuat Amin benar-benar mengubah cara kami mengelola bengkel. Dari yang manual jadi digital semua, stok jelas, laporan otomatis, dan pelanggan jadi lebih puas. Highly recommended!',
                'is_visible' => true,
                'sort_order' => 2,
            ],
            [
                'name'       => 'Project Manager — PT Satona',
                'position'   => 'Project Manager',
                'company'    => 'PT Satona',
                'quote'      => 'Amin berhasil membangun beberapa sistem sekaligus untuk group kami — arsip digital, monitoring logistik, e-kertas kerja, sampai pencatatan aset. Semuanya terintegrasi dengan baik dan delivered on time.',
                'is_visible' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        $this->command->info('Real portfolio data seeded successfully!');
        $this->command->table(
            ['Data', 'Jumlah'],
            [
                ['Profile', '1 (Muhammad Rizky Amin)'],
                ['Skills', '20'],
                ['Technologies', count($techs)],
                ['Projects', count($projects)],
                ['Experiences', count($experiences)],
                ['Educations', count($educations)],
                ['Testimonials', count($testimonials)],
            ]
        );
    }
}