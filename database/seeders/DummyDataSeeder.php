<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        // Profile (1 record)
        Profile::updateOrCreate(['email' => 'john@example.com'], [
            'name'     => 'John Doe',
            'tagline'  => 'Full-Stack Developer & Open Source Enthusiast',
            'bio'      => 'I\'m a passionate full-stack developer with 5+ years of experience building scalable web applications. I love clean code, great UX, and solving complex problems with elegant solutions. When I\'m not coding, you\'ll find me contributing to open source or writing technical blog posts.',
            'email'    => 'john@example.com',
            'whatsapp' => '+62 812 3456 7890',
            'github'   => 'https://github.com/johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'location' => 'Jakarta, Indonesia',
        ]);

        // Skills
        $skills = [
            ['name' => 'Vue.js',        'category' => 'frontend', 'level' => 'advanced',      'icon' => '🟢', 'sort_order' => 1],
            ['name' => 'React',         'category' => 'frontend', 'level' => 'intermediate',   'icon' => '⚛️',  'sort_order' => 2],
            ['name' => 'Tailwind CSS',  'category' => 'frontend', 'level' => 'advanced',      'icon' => '🎨', 'sort_order' => 3],
            ['name' => 'TypeScript',    'category' => 'frontend', 'level' => 'intermediate',   'icon' => '📘', 'sort_order' => 4],
            ['name' => 'Nuxt.js',       'category' => 'frontend', 'level' => 'intermediate',   'icon' => '🟩', 'sort_order' => 5],
            ['name' => 'Laravel',       'category' => 'backend',  'level' => 'advanced',      'icon' => '🔴', 'sort_order' => 6],
            ['name' => 'PHP',           'category' => 'backend',  'level' => 'advanced',      'icon' => '🐘', 'sort_order' => 7],
            ['name' => 'Node.js',       'category' => 'backend',  'level' => 'intermediate',   'icon' => '💚', 'sort_order' => 8],
            ['name' => 'MySQL',         'category' => 'backend',  'level' => 'advanced',      'icon' => '🗄️',  'sort_order' => 9],
            ['name' => 'PostgreSQL',    'category' => 'backend',  'level' => 'intermediate',   'icon' => '🐘', 'sort_order' => 10],
            ['name' => 'Docker',        'category' => 'devops',   'level' => 'intermediate',   'icon' => '🐳', 'sort_order' => 11],
            ['name' => 'GitHub Actions','category' => 'devops',   'level' => 'intermediate',   'icon' => '⚙️',  'sort_order' => 12],
            ['name' => 'Linux',         'category' => 'devops',   'level' => 'advanced',      'icon' => '🐧', 'sort_order' => 13],
            ['name' => 'Nginx',         'category' => 'devops',   'level' => 'beginner',       'icon' => '🌐', 'sort_order' => 14],
            ['name' => 'AWS',           'category' => 'devops',   'level' => 'beginner',       'icon' => '☁️',  'sort_order' => 15],
            ['name' => 'Git',           'category' => 'tools',    'level' => 'advanced',      'icon' => '🔧', 'sort_order' => 16],
            ['name' => 'VS Code',       'category' => 'tools',    'level' => 'advanced',      'icon' => '💻', 'sort_order' => 17],
            ['name' => 'Figma',         'category' => 'tools',    'level' => 'intermediate',   'icon' => '🎭', 'sort_order' => 18],
            ['name' => 'Postman',       'category' => 'tools',    'level' => 'advanced',      'icon' => '📮', 'sort_order' => 19],
            ['name' => 'Jira',          'category' => 'tools',    'level' => 'intermediate',   'icon' => '📋', 'sort_order' => 20],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], array_merge($skill, ['is_visible' => true]));
        }

        // Technologies
        $techNames = ['Laravel', 'Vue.js', 'React', 'Tailwind CSS', 'MySQL', 'Docker', 'Node.js', 'TypeScript', 'PostgreSQL', 'Redis'];
        $techIds = [];
        foreach ($techNames as $name) {
            $tech = Technology::updateOrCreate(['name' => $name], ['icon' => null]);
            $techIds[$name] = $tech->id;
        }

        // Projects
        $projects = [
            [
                'title'       => 'E-Commerce Platform',
                'slug'        => 'e-commerce-platform',
                'description' => 'A fully featured multi-vendor e-commerce platform built with Laravel and Vue.js. Features include real-time inventory management, Stripe payment integration, and an advanced analytics dashboard.',
                'category'    => 'Web App',
                'demo_url'    => 'https://demo.example.com',
                'github_url'  => 'https://github.com/johndoe/ecommerce',
                'status'      => 'published',
                'sort_order'  => 1,
                'techs'       => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
            ],
            [
                'title'       => 'Task Management SaaS',
                'slug'        => 'task-management-saas',
                'description' => 'A Kanban-style project management tool with real-time collaboration, drag-and-drop boards, time tracking, and team workspaces. Built with Laravel and React.',
                'category'    => 'SaaS',
                'demo_url'    => 'https://tasks.example.com',
                'github_url'  => 'https://github.com/johndoe/taskflow',
                'status'      => 'published',
                'sort_order'  => 2,
                'techs'       => ['Laravel', 'React', 'PostgreSQL', 'TypeScript'],
            ],
            [
                'title'       => 'REST API Boilerplate',
                'slug'        => 'rest-api-boilerplate',
                'description' => 'Production-ready Laravel API boilerplate with JWT authentication, role-based access control, rate limiting, API versioning, and comprehensive test coverage.',
                'category'    => 'Open Source',
                'demo_url'    => null,
                'github_url'  => 'https://github.com/johndoe/laravel-api-boilerplate',
                'status'      => 'published',
                'sort_order'  => 3,
                'techs'       => ['Laravel', 'MySQL', 'Docker'],
            ],
            [
                'title'       => 'Real-Time Chat App',
                'slug'        => 'real-time-chat-app',
                'description' => 'A scalable real-time chat application supporting private messaging, group channels, file sharing, and push notifications. Built with Node.js and Socket.IO.',
                'category'    => 'Web App',
                'demo_url'    => 'https://chat.example.com',
                'github_url'  => 'https://github.com/johndoe/realchat',
                'status'      => 'published',
                'sort_order'  => 4,
                'techs'       => ['Node.js', 'Vue.js', 'Redis', 'TypeScript'],
            ],
            [
                'title'       => 'DevOps Dashboard',
                'slug'        => 'devops-dashboard',
                'description' => 'A self-hosted infrastructure monitoring dashboard that aggregates metrics from Docker containers, servers, and services into a single clean UI with alerting capabilities.',
                'category'    => 'DevOps',
                'demo_url'    => null,
                'github_url'  => 'https://github.com/johndoe/devops-dash',
                'status'      => 'published',
                'sort_order'  => 5,
                'techs'       => ['Docker', 'Node.js', 'PostgreSQL'],
            ],
        ];

        foreach ($projects as $data) {
            $techs = $data['techs'];
            unset($data['techs']);
            $project = Project::updateOrCreate(['slug' => $data['slug']], $data);
            $ids = array_values(array_filter(array_map(fn($t) => $techIds[$t] ?? null, $techs)));
            $project->technologies()->sync($ids);
        }

        // Experiences
        $experiences = [
            [
                'company'     => 'TechCorp Indonesia',
                'position'    => 'Senior Full-Stack Developer',
                'start_date'  => '2022-01-01',
                'end_date'    => null,
                'is_current'  => true,
                'description' => 'Lead development of microservices architecture serving 500K+ daily active users. Mentoring a team of 5 junior developers and driving technical decision-making.',
                'sort_order'  => 1,
            ],
            [
                'company'     => 'Startup Nusantara',
                'position'    => 'Full-Stack Developer',
                'start_date'  => '2020-03-01',
                'end_date'    => '2021-12-31',
                'is_current'  => false,
                'description' => 'Built and maintained multiple SaaS products from scratch. Reduced API response time by 60% through query optimization and Redis caching strategies.',
                'sort_order'  => 2,
            ],
            [
                'company'     => 'Digital Agency XYZ',
                'position'    => 'Backend Developer',
                'start_date'  => '2019-06-01',
                'end_date'    => '2020-02-28',
                'is_current'  => false,
                'description' => 'Developed RESTful APIs for 10+ client projects. Implemented automated testing pipelines that reduced production bugs by 40%.',
                'sort_order'  => 3,
            ],
            [
                'company'     => 'Freelance',
                'position'    => 'Web Developer',
                'start_date'  => '2018-01-01',
                'end_date'    => '2019-05-31',
                'is_current'  => false,
                'description' => 'Delivered 20+ web projects for local businesses including e-commerce stores, company profiles, and custom CMS solutions.',
                'sort_order'  => 4,
            ],
            [
                'company'     => 'PT Inovasi Digital',
                'position'    => 'Junior Developer (Internship)',
                'start_date'  => '2017-07-01',
                'end_date'    => '2017-12-31',
                'is_current'  => false,
                'description' => 'Assisted in frontend development using HTML, CSS, and JavaScript. Participated in agile sprints and learned professional software development workflows.',
                'sort_order'  => 5,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate(
                ['company' => $exp['company'], 'position' => $exp['position']],
                $exp
            );
        }

        // Educations
        $educations = [
            [
                'institution' => 'Universitas Indonesia',
                'degree'      => 'S1 (Bachelor)',
                'field'       => 'Ilmu Komputer',
                'start_year'  => 2014,
                'end_year'    => 2018,
                'description' => 'Focused on software engineering, algorithms, and distributed systems. Graduated with GPA 3.75/4.00. Active member of the Programming Club.',
                'sort_order'  => 1,
            ],
            [
                'institution' => 'Coursera — Google',
                'degree'      => 'Certificate',
                'field'       => 'Google Cloud Professional Developer',
                'start_year'  => 2023,
                'end_year'    => 2023,
                'description' => 'Completed the Google Cloud Professional Cloud Developer certification covering cloud-native applications, APIs, and DevOps on GCP.',
                'sort_order'  => 2,
            ],
            [
                'institution' => 'Udemy',
                'degree'      => 'Certificate',
                'field'       => 'Advanced Laravel & Vue.js',
                'start_year'  => 2021,
                'end_year'    => 2021,
                'description' => 'Intensive course covering advanced Laravel patterns, REST APIs, Vue.js 3 Composition API, and full-stack application architecture.',
                'sort_order'  => 3,
            ],
            [
                'institution' => 'SMA Negeri 1 Jakarta',
                'degree'      => 'SMA',
                'field'       => 'IPA (Sains)',
                'start_year'  => 2011,
                'end_year'    => 2014,
                'description' => 'Graduated with honors. Won regional science olympiad in Mathematics and Computer Science.',
                'sort_order'  => 4,
            ],
            [
                'institution' => 'Dicoding Indonesia',
                'degree'      => 'Certificate',
                'field'       => 'Belajar Fundamental Backend dengan JavaScript',
                'start_year'  => 2022,
                'end_year'    => 2022,
                'description' => 'Completed backend fundamentals course including RESTful API design, authentication, and server-side JavaScript with Node.js.',
                'sort_order'  => 5,
            ],
        ];

        foreach ($educations as $edu) {
            Education::updateOrCreate(
                ['institution' => $edu['institution'], 'field' => $edu['field']],
                $edu
            );
        }

        // Testimonials
        $testimonials = [
            [
                'name'       => 'Budi Santoso',
                'position'   => 'CTO',
                'company'    => 'TechCorp Indonesia',
                'quote'      => 'John is one of the most talented developers I\'ve worked with. His ability to architect scalable systems while keeping the codebase clean is exceptional. He consistently delivers beyond expectations.',
                'is_visible' => true,
                'sort_order' => 1,
            ],
            [
                'name'       => 'Sarah Wijaya',
                'position'   => 'Product Manager',
                'company'    => 'Startup Nusantara',
                'quote'      => 'Working with John transformed our product. He doesn\'t just write code — he thinks about the product, the users, and the business. His technical leadership helped us launch 3 months ahead of schedule.',
                'is_visible' => true,
                'sort_order' => 2,
            ],
            [
                'name'       => 'Ahmad Fauzi',
                'position'   => 'Lead Designer',
                'company'    => 'Digital Agency XYZ',
                'quote'      => 'John is the rare developer who truly cares about design and UX. He bridges the gap between design and engineering perfectly, turning complex Figma files into pixel-perfect, performant interfaces.',
                'is_visible' => true,
                'sort_order' => 3,
            ],
            [
                'name'       => 'Michelle Tan',
                'position'   => 'Founder & CEO',
                'company'    => 'Warung Digital',
                'quote'      => 'John built our entire platform from zero to launch in 3 months. The quality of code and documentation he delivered made it easy for our in-house team to take over. Absolutely recommend him.',
                'is_visible' => true,
                'sort_order' => 4,
            ],
            [
                'name'       => 'Rizky Pratama',
                'position'   => 'Senior Developer',
                'company'    => 'Freelance Collaborator',
                'quote'      => 'I\'ve collaborated with John on several open source projects. His code reviews are incredibly insightful and his commitment to best practices elevates the entire team. A true professional.',
                'is_visible' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['name' => $t['name'], 'company' => $t['company']],
                $t
            );
        }

        // Posts
        $posts = [
            [
                'title'        => 'Building Scalable APIs with Laravel and Sanctum',
                'slug'         => 'building-scalable-apis-laravel-sanctum',
                'excerpt'      => 'A deep dive into designing and building production-ready REST APIs using Laravel Sanctum for authentication, along with best practices for versioning, rate limiting, and documentation.',
                'body'         => '<h2>Introduction</h2><p>Building APIs that scale is both an art and a science. In this article we explore how to structure a Laravel API project for long-term maintainability.</p><h2>Setting Up Sanctum</h2><p>Laravel Sanctum provides a featherweight authentication system for SPAs, mobile applications, and simple token-based APIs.</p><h2>API Versioning</h2><p>Versioning your API from day one saves you from breaking changes down the road. Use route prefixes to manage versions cleanly.</p>',
                'category'     => 'Backend',
                'tags'         => json_encode(['Laravel', 'API', 'Sanctum', 'PHP']),
                'status'       => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'title'        => 'Vue 3 Composition API: A Practical Guide',
                'slug'         => 'vue-3-composition-api-practical-guide',
                'excerpt'      => 'The Composition API is one of the most significant changes in Vue 3. This guide walks you through the core concepts with practical examples you can use today.',
                'body'         => '<h2>Why Composition API?</h2><p>The Options API served us well, but as components grow complex, the Composition API offers better code organization and reusability.</p><h2>Reactivity Fundamentals</h2><p>Understanding ref() and reactive() is the foundation of everything in the Composition API.</p>',
                'category'     => 'Frontend',
                'tags'         => json_encode(['Vue.js', 'JavaScript', 'Frontend']),
                'status'       => 'published',
                'published_at' => now()->subDays(12),
            ],
            [
                'title'        => 'Docker for Laravel Developers: Zero to Production',
                'slug'         => 'docker-laravel-developers-zero-to-production',
                'excerpt'      => 'Learn how to containerize your Laravel application with Docker and Docker Compose, from local development all the way to a production deployment on a VPS.',
                'body'         => '<h2>Why Docker?</h2><p>Docker eliminates the "works on my machine" problem by packaging your application and all its dependencies into a portable container.</p><h2>Writing Your Dockerfile</h2><p>A good Dockerfile for Laravel starts with the right base image and layer caching strategy.</p>',
                'category'     => 'DevOps',
                'tags'         => json_encode(['Docker', 'Laravel', 'DevOps', 'Deployment']),
                'status'       => 'published',
                'published_at' => now()->subDays(20),
            ],
            [
                'title'        => 'Database Query Optimization in Laravel',
                'slug'         => 'database-query-optimization-laravel',
                'excerpt'      => 'Slow queries kill user experience. This article covers N+1 problems, eager loading, query caching, and database indexing strategies using Laravel\'s Eloquent ORM.',
                'body'         => '<h2>The N+1 Problem</h2><p>The N+1 problem is the silent killer of Laravel application performance. It happens when you fetch a list of records and then query each related record individually.</p><h2>Eager Loading with with()</h2><p>Using Eloquent\'s with() method is the first line of defense against N+1 queries.</p>',
                'category'     => 'Backend',
                'tags'         => json_encode(['Laravel', 'MySQL', 'Performance', 'Eloquent']),
                'status'       => 'published',
                'published_at' => now()->subDays(30),
            ],
            [
                'title'        => 'Clean Code Principles Every Developer Should Know',
                'slug'         => 'clean-code-principles-every-developer-should-know',
                'excerpt'      => 'Writing code that works is just the beginning. Writing code that others can read, understand, and maintain is the real skill. Here are the principles I follow every day.',
                'body'         => '<h2>Meaningful Names</h2><p>Names should reveal intent. A variable called $d tells you nothing. A variable called $elapsedDays tells you everything.</p><h2>Functions Should Do One Thing</h2><p>The single responsibility principle applies to functions too. If you cannot describe your function in one sentence, it probably does too much.</p>',
                'category'     => 'Software Engineering',
                'tags'         => json_encode(['Clean Code', 'Best Practices', 'Software Engineering']),
                'status'       => 'published',
                'published_at' => now()->subDays(45),
            ],
        ];

        foreach ($posts as $data) {
            Post::updateOrCreate(['slug' => $data['slug']], $data);
        }

        // Contact Messages
        $messages = [
            [
                'name'       => 'Rina Hartono',
                'email'      => 'rina.hartono@gmail.com',
                'message'    => 'Hi John! I came across your portfolio and I\'m really impressed by the E-Commerce Platform project. We\'re a startup looking to build something similar and would love to discuss a potential collaboration. Could we schedule a call this week?',
                'is_read'    => true,
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'name'       => 'David Lim',
                'email'      => 'david.lim@techstartup.id',
                'message'    => 'Hello! I\'m the CTO at a fintech startup in Bandung. We\'re looking for a senior developer to join our team on a contract basis for 6 months. Your Laravel and API experience looks like a perfect fit. Are you available?',
                'is_read'    => true,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'name'       => 'Amelia Putri',
                'email'      => 'amelia@designco.com',
                'message'    => 'Hi there! I\'m a UI/UX designer and I frequently need a reliable developer to bring my designs to life. Your work looks clean and detail-oriented. Would you be interested in collaborating on freelance projects?',
                'is_read'    => false,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'name'       => 'Kevin Tanaka',
                'email'      => 'kevin.tanaka@agency.co',
                'message'    => 'I read your blog post on Docker for Laravel — super helpful! We\'re migrating our infrastructure right now and ran into some issues with our compose setup. Would you be open to a short consulting session?',
                'is_read'    => false,
                'created_at' => now()->subHours(6),
                'updated_at' => now()->subHours(6),
            ],
            [
                'name'       => 'Siti Rahayu',
                'email'      => 'siti.rahayu@umkm.id',
                'message'    => 'Selamat siang, Pak John. Saya pemilik toko online kecil dan ingin upgrade sistem kami ke yang lebih modern. Budget kami terbatas tapi kami serius ingin berkembang. Apakah Bapak bisa membantu dan berapa kira-kira estimasi biayanya?',
                'is_read'    => false,
                'created_at' => now()->subMinutes(45),
                'updated_at' => now()->subMinutes(45),
            ],
        ];

        foreach ($messages as $msg) {
            ContactMessage::create($msg);
        }

        $this->command->info('Dummy data seeded successfully!');
        $this->command->table(
            ['Model', 'Count'],
            [
                ['Profile', 1],
                ['Skills', 20],
                ['Technologies', 10],
                ['Projects', 5],
                ['Experiences', 5],
                ['Educations', 5],
                ['Testimonials', 5],
                ['Blog Posts', 5],
                ['Contact Messages', 5],
            ]
        );
    }
}
