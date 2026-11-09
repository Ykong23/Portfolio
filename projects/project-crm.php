<?php
require_once '../config.php';

// 获取第一个项目
$project = $projects[0]; 

$pageTitle = $project['title'] . ' - ' . $profile['name'];
$base = '../'; 
require_once '../partials/header.php';
?>

<style>
    /* 专属此页面的定制样式，提升高级感 */
    .case-study-hero {
        padding: 60px 0;
        background: linear-gradient(180deg, var(--accent-bg) 0%, var(--bg-color) 100%);
        border-bottom: 1px solid var(--border-color);
        margin-bottom: 60px;
    }
    .meta-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        border-top: 1px solid var(--border-color);
        padding-top: 24px;
        margin-top: 40px;
    }
    .meta-item h4 {
        font-size: 0.8rem;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 6px;
    }
    .meta-item p {
        font-weight: 600;
        color: var(--text-main);
        margin: 0;
    }
    .image-placeholder {
        width: 100%;
        border-radius: 16px;
        background: #e5e7eb;
        border: 2px dashed #d1d5db;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--text-muted);
        font-weight: 500;
        margin: 30px 0;
        overflow: hidden;
        position: relative;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }
    .image-placeholder:hover {
        border-color: var(--primary);
        color: var(--primary);
    }
    .image-placeholder.hero-img { aspect-ratio: 16/9; }
    .image-placeholder.square-img { aspect-ratio: 4/3; }
    
    /* 架构展示区定制 */
    .arch-node {
        background: white;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 24px;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        transition: transform 0.2s;
    }
    .arch-node:hover { transform: translateY(-3px); border-color: var(--primary); }
    .arch-node h4 { color: var(--primary); margin-bottom: 8px; font-size: 1.1rem; }
    .arch-node p { font-size: 0.85rem; color: var(--text-muted); margin: 0; }
    
    @media (max-width: 768px) {
        .meta-grid { grid-template-columns: 1fr 1fr; gap: 15px; }
    }
</style>

<main>
    <!-- 1. 沉浸式 Hero 区域 -->
    <section class="case-study-hero">
        <div class="container">
            <a href="../index.php#projects" style="color: var(--primary); text-decoration: none; font-weight: 600; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 5px; margin-bottom: 24px;">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Portfolio
            </a>
            
            <div style="max-width: 800px;">
                <span class="project-tag" style="font-size: 0.9rem; padding: 6px 16px;"><?php echo $project['category']; ?></span>
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.1; margin: 16px 0; color: #111827; letter-spacing: -1px;">
                    Next Gen CRM System
                </h1>
                <p style="font-size: 1.25rem; color: var(--text-muted); line-height: 1.6;">
                    Reviving a legacy internal tool for a Malaysian SME into a fully-fledged, AI-integrated Customer Relationship Management ecosystem. Built with Laravel, Flutter, and Gemini API.
                </p>
            </div>

            <!-- 核心数据一览 -->
            <div class="meta-grid">
                <div class="meta-item">
                    <h4>My Role</h4>
                    <p>Scrum Master &<br>Full-Stack Lead</p>
                </div>
                <div class="meta-item">
                    <h4>Timeline</h4>
                    <p>10 Months<br>(6 Agile Sprints)</p>
                </div>
                <div class="meta-item">
                    <h4>Platforms</h4>
                    <p>Web & Mobile<br>(iOS / Android)</p>
                </div>
                <div class="meta-item">
                    <h4>Core Stack</h4>
                    <p>Laravel, Flutter<br>MySQL, Gemini AI</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="padding-bottom: 80px;">

        <!-- 2. 主视觉图 (Hero Image) -->
        <section style="margin-top: -100px; margin-bottom: 80px;">
            <!-- 替换为你真实的 Dashboard 截图 -->
            <div class="image-placeholder hero-img" style="background: #fff; border: 1px solid #e5e7eb;">
                <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 12px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Insert Main Web Dashboard Screenshot Here</span>
                <span style="font-size: 0.8rem; font-weight: normal; margin-top: 4px;">(推荐尺寸 1920x1080)</span>
            </div>
        </section>

        <!-- 3. 商业痛点与解决方案 (The Problem & Solution) -->
        <section style="margin-bottom: 80px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="font-size: 2rem; color: #111827; margin-bottom: 12px;">The Problem & The Solution</h2>
                <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">How we transformed fragmented spreadsheets into a centralized, automated workflow.</p>
            </div>

            <div class="skills-experience-grid">
                <!-- 痛点 -->
                <div class="content-box" style="border-top: 4px solid #ef4444;">
                    <h3 style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                        <span style="background: #fee2e2; padding: 8px; border-radius: 8px;">⚠️</span> 
                        The Business Challenge
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0; color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                        <li style="margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
                            <strong style="color: #111827;">Fragmented Data:</strong> Heavy reliance on manual spreadsheets led to duplicated records, lost leads, and zero centralized visibility.
                        </li>
                        <li style="margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
                            <strong style="color: #111827;">Poor Engagement:</strong> Lack of a ticketing system meant customer inquiries were often delayed or lost entirely.
                        </li>
                        <li>
                            <strong style="color: #111827;">Limited Mobility:</strong> Employees couldn't access customer data on the go, restricting sales and support responsiveness.
                        </li>
                    </ul>
                </div>

                <!-- 解决方案 -->
                <div class="content-box" style="border-top: 4px solid #10b981;">
                    <h3 style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                        <span style="background: #d1fae5; padding: 8px; border-radius: 8px;">💡</span> 
                        The Technical Solution
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0; color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                        <li style="margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
                            <strong style="color: #111827;">Centralized Platform:</strong> Unified database with Role-Based Access Control (RBAC) for Admins and standard Users.
                        </li>
                        <li style="margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
                            <strong style="color: #111827;">Automated Workflows:</strong> End-to-end tracking from lead generation to sales invoice and after-sales support ticketing.
                        </li>
                        <li>
                            <strong style="color: #111827;">AI & Mobile Integration:</strong> Flutter app for on-the-go access, backed by a Gemini-powered AI chatbot for instant customer responses.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 4. 系统架构 (Architecture Diagram) -->
        <section style="margin-bottom: 80px; background: #f8fafc; padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="font-size: 2rem; color: #111827; margin-bottom: 12px;">System Architecture</h2>
                <p style="color: var(--text-muted);">A decoupled MVC architecture driven by RESTful APIs.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; position: relative;">
                <!-- Frontend -->
                <div class="arch-node">
                    <div style="font-size: 2rem; margin-bottom: 10px;">💻</div>
                    <h4>Frontend Client</h4>
                    <p>Web (HTML/CSS/JS)<br>Mobile (Flutter / Dart)</p>
                </div>
                
                <!-- Backend -->
                <div class="arch-node" style="border: 2px solid var(--primary); box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.1);">
                    <div style="font-size: 2rem; margin-bottom: 10px;">⚙️</div>
                    <h4 style="font-size: 1.2rem;">Laravel REST API</h4>
                    <p>JWT Auth, Business Logic<br>MySQL Database</p>
                </div>

                <!-- AI Service -->
                <div class="arch-node">
                    <div style="font-size: 2rem; margin-bottom: 10px;">🧠</div>
                    <h4>3rd-Party AI Service</h4>
                    <p>Gemini API<br>Automated Chat & Insights</p>
                </div>
            </div>
            
            <!-- 连接线示意 (仅视觉) -->
            <div style="text-align: center; margin-top: 20px; color: var(--text-muted); font-size: 0.85rem; font-weight: 600;">
                ⇄ Secure HTTPS Data Exchange (JSON) ⇄
            </div>
        </section>

        <!-- 5. UI 截图展示区 (需要左右分栏) -->
        <section style="margin-bottom: 80px;">
            <h2 style="font-size: 2rem; color: #111827; margin-bottom: 30px; text-align: center;">Product Interface</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center; margin-bottom: 40px;">
                <div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 12px; color: #111827;">Admin Dashboard & Sales Tracking</h3>
                    <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem;">
                        A comprehensive web interface built with Laravel and Bootstrap. Admins can monitor sales pipelines, manage user roles, and track live service requests in real-time.
                    </p>
                </div>
                <!-- 替换为 Admin Dashboard 截图 -->
                <div class="image-placeholder square-img">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 8px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>Web UI Screenshot</span>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center;">
                <!-- 替换为 Flutter Mobile 截图 -->
                <div class="image-placeholder square-img">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 8px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    <span>Mobile App Screenshot</span>
                </div>
                <div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 12px; color: #111827;">Flutter Mobile Application</h3>
                    <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem;">
                        A cross-platform mobile companion app. Designed for field agents to quickly view customer contact details, check tax invoices, and receive push notifications for newly assigned support tickets.
                    </p>
                </div>
            </div>
        </section>

        <!-- 6. 敏捷开发历程 (Agile Process) -->
        <section style="margin-bottom: 80px;">
            <h2 style="font-size: 2rem; color: #111827; margin-bottom: 30px;">Agile Execution</h2>
            <div class="content-box" style="padding: 40px;">
                <div class="timeline-item">
                    <h4>Sprint 1: Discovery & UX</h4>
                    <div class="timeline-company">Weeks 1 - 4</div>
                    <p class="timeline-desc">Translated business requirements into Figma wireframes. Designed the normalized relational database schema (MySQL).</p>
                </div>
                <div class="timeline-item">
                    <h4>Sprint 2 & 3: Core CRM & Auth</h4>
                    <div class="timeline-company">Weeks 5 - 12</div>
                    <p class="timeline-desc">Built JWT authentication, RBAC, customer management modules, and the initial ticketing system using Laravel.</p>
                </div>
                <div class="timeline-item">
                    <h4>Sprint 4: AI & Mobile Integration</h4>
                    <div class="timeline-company">Weeks 13 - 16</div>
                    <p class="timeline-desc">Integrated the Gemini API for NLP chatbot capabilities. Developed the Flutter mobile app and connected it to the REST API.</p>
                </div>
                <div class="timeline-item">
                    <h4>Sprint 5 & 6: Hardening & Delivery</h4>
                    <div class="timeline-company">Weeks 17 - 24</div>
                    <p class="timeline-desc">Conducted unit/integration testing, optimized N+1 queries, and deployed to cPanel. Facilitated client handover and live demo.</p>
                </div>
            </div>
        </section>

        <!-- 7. 挑战与商业结果 -->
        <section style="margin-bottom: 60px;">
            <div class="skills-experience-grid">
                <div class="content-box" style="background: #f8fafc;">
                    <h3>Overcoming Constraints</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 15px;">
                        <strong>Limited Manpower:</strong> Managed a tight 10-month academic and client deadline by prioritizing critical modules (Core CRM + Chatbot) and deferring "good-to-have" features.
                    </p>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.7;">
                        <strong>Legacy Transition:</strong> We had to migrate data from fragmented spreadsheets. We implemented strict validation rules in Laravel to prevent duplicates and ensure data integrity.
                    </p>
                </div>
                <div class="content-box" style="background: #111827; color: white;">
                    <h3 style="color: white;">Business Impact & Awards</h3>
                    <ul style="padding-left: 20px; color: #9ca3af; font-size: 0.95rem; line-height: 1.8; margin-top: 15px;">
                        <li>Successfully revived a dormant internal project for Apploqic Technologies.</li>
                        <li>Reduced customer inquiry response time significantly via AI automation.</li>
                        <li><strong style="color: var(--primary);">🏆 Won: Best Implemented Project Award (ICT), 2025</strong></li>
                        <li><strong style="color: var(--primary);">🏆 Won: Best Achiever's Award (ICT), 2025</strong></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div style="text-align: center; padding: 60px 20px; background: var(--accent-bg); border-radius: 20px; border: 1px solid #ffedd5;">
            <h2 style="font-size: 2rem; margin-bottom: 16px; color: #111827;">Interested in the technical details?</h2>
            <p style="color: var(--text-muted); margin-bottom: 24px; max-width: 500px; margin-left: auto; margin-right: auto;">
                I can walk you through the Laravel MVC structure, the Flutter state management, or the Gemini API integration.
            </p>
            <a href="mailto:<?php echo $profile['email']; ?>" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">Contact Me</a>
        </div>

    </div>
</main>

<?php require_once '../partials/footer.php'; ?>