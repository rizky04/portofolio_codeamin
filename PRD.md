# Product Requirements Document (PRD)
## Website Portfolio Programmer

**Versi:** 1.1  
**Tanggal:** 2026-05-16  
**Status:** Draft

---

## 1. Ringkasan Eksekutif

Website portfolio personal untuk seorang programmer yang bertujuan menampilkan keahlian, proyek, dan pengalaman kerja secara profesional kepada calon klien, rekruter, dan komunitas developer. Dibangun dengan **Laravel + Tailwind CSS** untuk frontend dan **Filament** sebagai panel admin, dengan database **MySQL**.

---

## 2. Tujuan & Sasaran

### Tujuan Utama
- Menampilkan identitas profesional sebagai programmer secara online
- Mempermudah rekruter/klien menemukan dan menghubungi pemilik portfolio
- Membuktikan kemampuan teknis melalui proyek-proyek yang ditampilkan
- Memudahkan pengelolaan konten secara mandiri melalui panel admin Filament

### Sasaran Keberhasilan
- Meningkatkan peluang mendapatkan pekerjaan atau proyek freelance
- Semua konten dapat diubah dari admin panel tanpa menyentuh kode
- Waktu muat halaman di bawah 2 detik

---

## 3. Target Pengguna

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Rekruter | HR atau talent acquisition yang mencari developer | Melihat skill, pengalaman, dan kontak cepat |
| Klien Freelance | Pemilik bisnis yang butuh jasa developer | Melihat portofolio proyek dan harga/kontak |
| Sesama Developer | Rekan programmer yang ingin berkolaborasi | Melihat proyek open-source dan GitHub |
| Admin (Pemilik) | Pemilik website yang mengelola konten | Kelola semua konten via Filament tanpa coding |

---

## 4. Fitur & Halaman

### 4.1 Halaman Hero / Landing
- **Nama & Tagline** — dikelola dari admin, misal: *Full Stack Developer*
- **Foto profil** — upload via Filament, disimpan di storage Laravel
- **Kalimat intro singkat** — teks editable dari admin
- **Tombol CTA** — "Lihat Portofolio" dan "Hubungi Saya"
- **Animasi ringan** — efek typing (Alpine.js / AOS)

### 4.2 Tentang Saya (About)
- Deskripsi latar belakang & perjalanan menjadi programmer
- Minat dan spesialisasi
- Tombol unduh CV — file PDF diupload via Filament Media Library

### 4.3 Keahlian (Skills)
- **Hard Skills** — ikon + nama teknologi + level (Beginner / Intermediate / Advanced)
- **Soft Skills** — daftar kemampuan non-teknis
- Dikelompokkan berdasarkan kategori: Frontend, Backend, DevOps, Tools
- Urutan dan visibilitas diatur dari admin

### 4.4 Portofolio Proyek (Projects)
Setiap proyek menampilkan:
- Nama proyek dan deskripsi (rich text dari Filament)
- Teknologi yang digunakan (relasi many-to-many dengan tabel `technologies`)
- Thumbnail/screenshot (upload via Filament)
- Link demo dan link GitHub
- Status: Published / Draft
- Filter berdasarkan kategori di frontend

### 4.5 Pengalaman & Pendidikan (Experience)
- Timeline pengalaman kerja: perusahaan, posisi, periode, deskripsi
- Timeline pendidikan: institusi, jurusan, tahun lulus
- Sertifikasi: nama, penerbit, tahun, link verifikasi

### 4.6 Testimoni (Opsional)
- Kutipan, nama, jabatan, foto pemberi testimoni
- Status Published / Hidden dari admin

### 4.7 Blog / Artikel (Opsional)
- Artikel dengan rich text editor (TipTap/Quill di Filament)
- Kategori, tag, slug otomatis
- SEO meta per artikel

### 4.8 Kontak (Contact)
- Formulir kontak: nama, email, pesan, tombol kirim
- Pesan masuk tersimpan ke tabel `contact_messages` di MySQL
- Notifikasi email ke pemilik (via Laravel Mail / SMTP)
- Proteksi spam: honeypot field atau Google reCAPTCHA v3
- Informasi kontak: email, WhatsApp, LinkedIn, GitHub

---

## 5. Panel Admin (Filament)

### Resource yang dibutuhkan

| Resource | Tabel MySQL | Keterangan |
|---|---|---|
| `ProfileResource` | `profiles` | Data hero, about, foto, CV |
| `SkillResource` | `skills` | Nama, kategori, level, ikon |
| `ProjectResource` | `projects` | Proyek + relasi ke technologies |
| `TechnologyResource` | `technologies` | Daftar teknologi (tag) |
| `ExperienceResource` | `experiences` | Pengalaman kerja |
| `EducationResource` | `educations` | Pendidikan & sertifikasi |
| `TestimonialResource` | `testimonials` | Testimoni klien/rekan |
| `PostResource` | `posts` | Blog/artikel |
| `ContactMessageResource` | `contact_messages` | Pesan masuk (read-only) |

### Fitur Filament Tambahan
- **Dashboard** — ringkasan: total proyek, pesan baru, artikel
- **Media Library** — kelola gambar & file PDF
- **Settings** — data kontak, sosial media, SEO global (satu baris konfigurasi)
- **Notifikasi** — Filament notification saat pesan kontak baru masuk

---

## 6. Skema Database MySQL

```sql
-- Profil pemilik (single row)
profiles: id, name, tagline, bio, photo, cv_file, email, whatsapp, github, linkedin, location

-- Keahlian
skills: id, name, category (enum: frontend/backend/devops/tools/soft), level (enum: beginner/intermediate/advanced), icon, sort_order, is_visible

-- Proyek
projects: id, title, slug, description (text), thumbnail, demo_url, github_url, category, status (enum: published/draft), sort_order, created_at
project_technology: project_id, technology_id  -- pivot

-- Teknologi (tag)
technologies: id, name, icon

-- Pengalaman kerja
experiences: id, company, position, start_date, end_date, is_current (bool), description, sort_order

-- Pendidikan
educations: id, institution, degree, field, start_year, end_year, description, sort_order

-- Sertifikasi
certifications: id, name, issuer, year, credential_url

-- Testimoni
testimonials: id, name, position, company, photo, quote, is_visible, sort_order

-- Blog
posts: id, title, slug, excerpt, body (longtext), cover_image, category, tags (json), status, published_at

-- Pesan kontak
contact_messages: id, name, email, message, is_read (bool), created_at
```

---

## 7. Tech Stack

| Komponen | Teknologi |
|---|---|
| **Backend Framework** | Laravel 11 |
| **Frontend Styling** | Tailwind CSS v3 |
| **Admin Panel** | Filament v3 |
| **Database** | MySQL 8 |
| **Template Engine** | Blade + Alpine.js (interaksi ringan) |
| **Animasi** | AOS (Animate On Scroll) |
| **Rich Text Editor** | Filament TipTap Editor |
| **Email** | Laravel Mail (SMTP / Mailtrap dev) |
| **Storage** | Laravel Storage (local/S3) |
| **SEO** | `artesaos/seotools` atau meta manual di Blade |
| **Hosting** | VPS / Shared Hosting (Nginx + PHP 8.2) |

---

## 8. Struktur Route Laravel

```
GET  /                     → HomeController (single page, semua seksi)
GET  /blog                 → PostController@index
GET  /blog/{slug}          → PostController@show
POST /contact              → ContactController@store
GET  /cv/download          → ProfileController@downloadCv

-- Admin (Filament)
GET  /admin                → Filament Dashboard
GET  /admin/login          → Filament Login
```

---

## 9. Struktur Direktori (Laravel)

```
app/
├── Filament/
│   └── Resources/
│       ├── ProfileResource.php
│       ├── SkillResource.php
│       ├── ProjectResource.php
│       ├── ExperienceResource.php
│       ├── PostResource.php
│       └── ContactMessageResource.php
├── Models/
│   ├── Profile.php
│   ├── Skill.php
│   ├── Project.php
│   ├── Experience.php
│   ├── Post.php
│   └── ContactMessage.php
├── Http/Controllers/
│   ├── HomeController.php
│   ├── PostController.php
│   └── ContactController.php
resources/views/
├── layouts/app.blade.php
├── home.blade.php          ← semua seksi portfolio
├── blog/
│   ├── index.blade.php
│   └── show.blade.php
└── components/             ← komponen Blade per seksi
    ├── hero.blade.php
    ├── about.blade.php
    ├── skills.blade.php
    ├── projects.blade.php
    ├── experience.blade.php
    └── contact.blade.php
```

---

## 10. Persyaratan Non-Fungsional

| Aspek | Persyaratan |
|---|---|
| **Performa** | Skor Lighthouse ≥ 90, gunakan Laravel cache untuk query berat |
| **Responsif** | Tampil optimal di mobile, tablet, dan desktop (Tailwind breakpoints) |
| **SEO** | Meta title/description per halaman, Open Graph, sitemap otomatis |
| **Keamanan** | CSRF protection (Laravel default), honeypot form, rate limit `/contact` |
| **Admin Security** | Filament login dengan middleware `auth`, URL admin bisa dikustomisasi |
| **Browser Support** | Chrome, Firefox, Safari, Edge (2 versi terakhir) |

---

## 11. Milestone & Prioritas

### Fase 1 — MVP
- [ ] Install Laravel 11 + Filament v3 + Tailwind CSS
- [ ] Setup database MySQL & semua migration
- [ ] Seeder data awal (profile, skills, projects)
- [ ] Filament Resources: Profile, Skill, Project
- [ ] Frontend: Hero, About, Skills, Projects, Contact
- [ ] Formulir kontak tersimpan ke DB + kirim email notifikasi

### Fase 2 — Peningkatan
- [ ] Seksi Experience & Education (resource + frontend)
- [ ] Dark mode toggle (Tailwind `dark:`)
- [ ] Animasi AOS scroll-triggered
- [ ] SEO optimization (meta per halaman)
- [ ] Cache halaman utama (Laravel Cache)

### Fase 3 — Fitur Lanjutan
- [ ] Blog/artikel (PostResource + halaman blog)
- [ ] Testimoni
- [ ] Sitemap otomatis (`spatie/laravel-sitemap`)
- [ ] Google Analytics integration
- [ ] Filament Dashboard widget (statistik pesan & proyek)

---

## 12. Kriteria Penerimaan (Definition of Done)

- [ ] Semua seksi MVP tampil dan responsif
- [ ] Semua konten dapat diubah dari Filament tanpa menyentuh kode
- [ ] Formulir kontak menyimpan pesan ke MySQL dan mengirim email
- [ ] File CV dapat didownload
- [ ] Link proyek (demo + GitHub) berfungsi
- [ ] Admin panel hanya bisa diakses dengan login
- [ ] Tidak ada error di Laravel log & browser console

---

## 13. Hal yang Perlu Disiapkan

1. **Foto profil** — resolusi tinggi (min. 400×400px)
2. **File CV/Resume** — format PDF
3. **Daftar proyek** — nama, deskripsi, screenshot, link demo, link GitHub
4. **Daftar skill** — nama teknologi + level
5. **Riwayat kerja & pendidikan**
6. **Konfigurasi SMTP** — untuk notifikasi email kontak (Gmail App Password / Mailtrap)
7. **Akun:** GitHub, LinkedIn
8. **Environment:** PHP 8.2+, Composer, MySQL 8, Node.js (untuk Vite/Tailwind)
