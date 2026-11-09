<?php
$profile = [
    'name' => 'Lin Poh Seng',
    'title' => 'Full-Stack Developer | UI/UX | Mobile App',
    'location' => '741, Lorong Mawar 42, Sandakan, Sabah',
    'email' => 'baoxin1223@gmail.com',
    'phone' => '+60-102482183',
    'linkedin' => 'https://www.linkedin.com/in/lin-poh-seng-013965398/',
    'github' => 'https://github.com/Ykong23',
    'summary' => 'Full-stack developer with hands-on experience in web, mobile, and UI/UX development. Skilled in Laravel, PHP, JavaScript, MySQL, and Flutter. Experienced in leading Agile teams, designing system architecture, and building scalable applications with clean, user-centred interfaces.'
];

$stats = [
    ['number' => '3+', 'label' => 'Years Experience'],
    ['number' => '10+', 'label' => 'Projects Completed'],
    ['number' => '100%', 'label' => 'Client Dedication']
];

$services = [
    ['icon' => '🎨', 'title' => 'UI/UX Design', 'desc' => 'Figma, user-centred interfaces, wireframing, and system architecture design.'],
    ['icon' => '💻', 'title' => 'Full-Stack Web', 'desc' => 'Laravel, PHP, JavaScript, WordPress, and REST API development.'],
    ['icon' => '📱', 'title' => 'Mobile App Dev', 'desc' => 'Flutter & Android Studio cross-platform mobile application development.'],
    ['icon' => '🚀', 'title' => 'Agile & DevOps', 'desc' => 'Git, Postman, cPanel deployment, and Agile team collaboration.']
];

$skills_bars = [
    ['name' => 'Laravel / PHP', 'level' => '90%'],
    ['name' => 'JavaScript / Frontend', 'level' => '85%'],
    ['name' => 'MySQL / Database Design', 'level' => '90%'],
    ['name' => 'UI/UX & Figma', 'level' => '90%'],
    ['name' => 'Flutter / Mobile', 'level' => '80%'],
    ['name' => 'WordPress & CMS', 'level' => '85%']
];

$experiences = [
    [
        'title' => 'Final Year Project Collaborator',
        'company' => 'Apploqic Technologies PLT',
        'period' => 'February 2025 - December 2025',
        'desc' => 'Leading a team using Agile methodology to build a full-stack CRM system. Designed database schema, UI/UX (Figma), and system architecture. Managed client communication and deployed live website.'
    ],
    [
        'title' => 'Senior Assistant',
        'company' => 'Apploqic Technologies PLT',
        'period' => 'June 2025 - September 2025',
        'desc' => 'Guided junior developers in WordPress and debugging. Provided technical support and resolved development issues.'
    ],
    [
        'title' => 'Internship Experience',
        'company' => 'Apploqic Technologies PLT',
        'period' => 'December 2024 - February 2025',
        'desc' => 'Developed WordPress and PHP-based modules for company systems. Assisted in network architecture planning and DB design.'
    ],
    [
        'title' => 'Clerk / Typist',
        'company' => 'Yun Fung Management Services',
        'period' => 'February 2022 - February 2023',
        'desc' => 'Data entry, documentation, and administrative support.'
    ]
];

$projects = [
    [
        'title' => 'Next Gen CRM System',
        'category' => 'Laravel / Flutter / AI',
        'desc' => 'Built a full admin panel, sales modules, integrated an AI assistant (Gemini API), and developed a companion mobile app. Designed database schema and UI/UX; deployed via cPanel.',
        'page' => 'projects/project-crm.php', // 新增：指向文件路径
        'role' => 'Team Lead & Full-Stack Developer',
        'duration' => 'Feb 2025 – Dec 2025',
        'stack' => ['Laravel 11', 'PHP 8', 'MySQL', 'Flutter', 'Gemini API', 'Figma', 'cPanel'],
        'features' => [
            'Admin dashboard with role-based access control',
            'Sales & lead management pipeline',
            'AI assistant powered by Gemini API',
            'Cross-platform mobile companion app (Flutter)',
            'REST API layer for mobile consumption',
        ],
        'challenges' => 'Integrating real-time AI responses into the CRM while keeping latency under 2s, and syncing data between the Laravel backend and Flutter app.',
        'outcome' => 'Delivered on time, awarded Best Implemented Project (ICT) 2025.'
    ],
    [
        'title' => 'Project Management System',
        'category' => 'WordPress / PHP / MySQL',
        'desc' => 'Implemented leave, claims, and project tracking modules. Improved UI/UX and optimised user workflows.',
        'page' => 'projects/project-pms.php', // 新增：指向文件路径
        'role' => 'Full-Stack Developer',
        'duration' => 'Jun 2025 – Sep 2025',
        'stack' => ['WordPress', 'PHP', 'MySQL', 'jQuery', 'Figma'],
        'features' => [
            'Employee leave application & approval workflow',
            'Expense claims submission with receipt upload',
            'Project tracking with milestone status',
            'Custom WordPress plugin for business logic',
            'Role-based dashboards (admin / manager / staff)',
        ],
        'challenges' => 'Adapting WordPress’s post-based data model to fit relational business workflows (leave balances, claim approvals) without breaking plugin updates.',
        'outcome' => 'Reduced manual HR paperwork by ~70% for the client team.'
    ]
];

$awards = [
    'Best Implemented Project Award (ICT), 2025',
    'Best Achiever\'s Award (ICT), 2025',
    'Internship Certificate, 2025',
    'Dean\'s List, Semester 2, 2024'
];