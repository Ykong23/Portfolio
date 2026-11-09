<?php
require_once '../config.php';

// 获取第二个项目
$project = $projects[1]; 

$pageTitle = $project['title'] . ' - ' . $profile['name'];
$base = '../'; 
require_once '../partials/header.php';
?>

<style>
    /* PMS 专属轻量化高质感样式 */
    .case-study-hero {
        padding: 60px 0 40px 0;
        background: #ffffff;
        border-bottom: 1px solid var(--border-color);
        margin-bottom: 50px;
    }
    .meta-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 24px;
    }
    .meta-pill {
        background: var(--bg-color);
        border: 1px solid var(--border-color);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--text-main);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .meta-pill span {
        color: var(--text-muted);
        font-weight: 400;
    }
    
    /* 便当盒网格 (Bento Grid) */
    .bento-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
        margin-bottom: 60px;
    }
    .bento-card {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 20px;
        padding: 32px;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease;
    }
    .bento-card:hover {
        transform: translateY(-4px);
    }
    .bento-card.full-width {
        grid-column: 1 / -1;
    }
    .bento-card h3 {
        font-size: 1.25rem;
        color: #111827;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    /* 图片占位符 */
    .image-placeholder {
        width: 100%;
        border-radius: 16px;
        background: #f3f4f6;
        border: 2px dashed #d1d5db;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--text-muted);
        font-weight: 500;
        overflow: hidden;
    }
    .image-placeholder.hero-img { aspect-ratio: 21/9; }
    .image-placeholder.square-img { aspect-ratio: 16/10; }

    /* 架构图样式复用 */
    .arch-node {
        background: white;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 24px;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    }
    
    @media (max-width: 768px) {
        .bento-grid { grid-template-columns: 1fr; }
        .bento-card.full-width { grid-column: 1; }
    }
</style>

<main>
    <!-- 1. 顶部 Hero -->
    <section class="case-study-hero">
        <div class="container">
            <a href="../index.php#projects" style="color: var(--primary); text-decoration: none; font-weight: 600; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 5px; margin-bottom: 20px;">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Portfolio
            </a>
            
            <div style="max-width: 850px;">
                <span class="project-tag" style="background: #e0f2fe; color: #0284c7; font-size: 0.85rem; padding: 6px 14px; border-radius: 50px; font-weight: 600;"><?php echo $project['category']; ?></span>
                <h1 style="font-size: 3.2rem; font-weight: 800; line-height: 1.1; margin: 16px 0; color: #111827; letter-spacing: -1px;">
                    Internal Project Management System
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.6;">
                    A tailored, zero-cost internal management platform built for Apploqic Technologies to streamline project tracking, leave applications, and claim hours across the organization.
                </p>
                
                <!-- 元数据 Pills -->
                <div class="meta-pills">
                    <div class="meta-pill"><span>Role:</span> Full-Stack & DB Designer</div>
                    <div class="meta-pill"><span>Timeline:</span> 2 Months</div>
                    <div class="meta-pill"><span>Platform:</span> Web (WordPress)</div>
                    <div class="meta-pill"><span>Cost:</span> 100% Free (Open Source)</div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="padding-bottom: 80px;">

        <!-- 主视觉大图 -->
        <section style="margin-bottom: 60px;">
            <!-- 替换为 PMS Dashboard 截图 -->
            <div class="image-placeholder hero-img">
                <svg width="40" height="40" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 12px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Insert PMS Dashboard Screenshot Here</span>
                <span style="font-size: 0.8rem; font-weight: normal; margin-top: 4px;">(推荐尺寸 1920x800)</span>
            </div>
        </section>

        <!-- 2. Bento Grid: 业务价值与痛点解决 -->
        <section style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; color: #111827; margin-bottom: 30px; text-align: center;">The Business Value</h2>
            
            <div class="bento-grid">
                <!-- 卡片 1: 核心痛点 -->
                <div class="bento-card">
                    <h3>⚠️ The Problem</h3>
                    <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem;">
                        Apploqic Technologies lacked a centralized system to manage internal operations. Tracking employee leave, claim hours, and project milestones required manual spreadsheets and constant email follow-ups, causing administrative bottlenecks.
                    </p>
                </div>
                
                <!-- 卡片 2: 解决方案 -->
                <div class="bento-card" style="background: var(--accent-bg); border-color: #ffedd5;">
                    <h3 style="color: var(--primary);">✅ The Solution</h3>
                    <p style="color: var(--text-main); line-height: 1.7; font-size: 0.95rem;">
                        We developed a lightweight WordPress-based portal utilizing custom PHP modules. The system provides role-based dashboards (Admin/User), automating leave approvals and centralizing project tracking without incurring any software licensing costs.
                    </p>
                </div>

                <!-- 卡片 3: 项目成果 -->
                <div class="bento-card full-width" style="display: flex; gap: 40px; align-items: center; background: #111827; color: white;">
                    <div style="flex: 1;">
                        <h3 style="color: white;">🏆 Rapid Delivery & Impact</h3>
                        <p style="color: #9ca3af; line-height: 1.7; font-size: 0.95rem;">
                            Delivered within a strict <strong>2-month timeframe</strong> by a student team. Successfully replaced manual HR workflows, saving hundreds of administrative hours annually.
                        </p>
                    </div>
                    <div style="flex: 1; display: flex; justify-content: space-around; text-align: center; border-left: 1px solid #374151; padding-left: 40px;">
                        <div>
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary);">2</div>
                            <div style="font-size: 0.85rem; color: #9ca3af;">Months Delivery</div>
                        </div>
                        <div>
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary);">$0</div>
                            <div style="font-size: 0.85rem; color: #9ca3af;">Software Cost</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. 系统模块与双端角色 (Features) -->
        <section style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; color: #111827; margin-bottom: 30px; text-align: center;">System Modules & Roles</h2>
            
            <div class="skills-experience-grid">
                <!-- 用户端 -->
                <div class="content-box">
                    <h3 style="display: flex; align-items: center; gap: 10px;">
                        <span style="background: #e0f2fe; padding: 8px; border-radius: 8px; font-size: 1.2rem;">👨‍💻</span> 
                        User Side Features
                    </h3>
                    <ul style="list-style-type: none; padding: 0; margin-top: 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.8;">
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">Dashboard:</strong> Overview of ongoing tasks, annual leave balance, and remaining claim hours.
                        </li>
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">Project Tracking:</strong> View project details and claim assignments.
                        </li>
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">Leave Application:</strong> Seamlessly submit annual and medical leave requests.
                        </li>
                        <li>
                            <strong style="color: var(--text-main);">Claim Hours:</strong> Log hours related to assigned project tasks.
                        </li>
                    </ul>
                </div>

                <!-- 管理员端 -->
                <div class="content-box">
                    <h3 style="display: flex; align-items: center; gap: 10px;">
                        <span style="background: #fce7f3; padding: 8px; border-radius: 8px; font-size: 1.2rem;">🛡️</span> 
                        Admin Side Features
                    </h3>
                    <ul style="list-style-type: none; padding: 0; margin-top: 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.8;">
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">Global Dashboard:</strong> Monitor all ongoing projects, approvals, and company-wide metrics.
                        </li>
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">Manage Leaves:</strong> Review, approve, or reject employee leave applications.
                        </li>
                        <li style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                            <strong style="color: var(--text-main);">User Management:</strong> Add, remove, or modify user access levels.
                        </li>
                        <li>
                            <strong style="color: var(--text-main);">Project Monitoring:</strong> Oversee project statuses and team progress.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 4. UI 界面展示 -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <!-- 替换为 Leave/Claim 模块截图 -->
                <div>
                    <div class="image-placeholder square-img" style="margin-bottom: 16px;">
                        <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 8px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>Leave & Claims UI</span>
                    </div>
                    <h4 style="font-size: 1.1rem; color: #111827;">Streamlined Leave & Claims</h4>
                    <p style="font-size: 0.9rem; color: var(--text-muted); margin-top: 8px;">Intuitive forms for employees to submit requests, reducing friction in HR processes.</p>
                </div>
                <!-- 替换为 Project Tracking 截图 -->
                <div>
                    <div class="image-placeholder square-img" style="margin-bottom: 16px;">
                        <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin-bottom: 8px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        <span>Project Tracking UI</span>
                    </div>
                    <h4 style="font-size: 1.1rem; color: #111827;">Centralized Project Tracking</h4>
                    <p style="font-size: 0.9rem; color: var(--text-muted); margin-top: 8px;">Managers and users can view task assignments and monitor milestone completions.</p>
                </div>
            </div>
        </section>

        <!-- 5. 技术栈与架构 -->
        <section style="margin-bottom: 60px; background: #f8fafc; padding: 40px; border-radius: 20px; border: 1px solid var(--border-color);">
            <div style="text-align: center; margin-bottom: 30px;">
                <h2 style="font-size: 2rem; color: #111827; margin-bottom: 12px;">Tech Stack</h2>
                <p style="color: var(--text-muted);">Built on a robust, open-source ecosystem.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
                <div class="arch-node">
                    <div style="font-weight: 700; color: var(--text-main); margin-bottom: 4px;">CMS Engine</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">WordPress</div>
                </div>
                <div class="arch-node">
                    <div style="font-weight: 700; color: var(--text-main); margin-bottom: 4px;">Backend</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">PHP & MySQL</div>
                </div>
                <div class="arch-node">
                    <div style="font-weight: 700; color: var(--text-main); margin-bottom: 4px;">Frontend</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">HTML/CSS/JS</div>
                </div>
                <div class="arch-node">
                    <div style="font-weight: 700; color: var(--text-main); margin-bottom: 4px;">Hosting</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">cPanel</div>
                </div>
            </div>
        </section>

        <!-- 6. 我的贡献与总结 -->
        <section style="margin-bottom: 60px;">
            <div class="content-box" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h3 style="font-size: 1.4rem; margin-bottom: 16px;">My Role & Contribution</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.8;">
                    As a <strong>Full-Stack Developer and Database Designer</strong>, I engineered the database schema to handle complex relationships between users, leaves, and claims. I developed custom backend functionalities using PHP to extend WordPress's native capabilities, and built intuitive front-end interfaces with HTML, CSS, and JavaScript to ensure a seamless user experience.
                </p>
            </div>
        </section>

        <!-- CTA -->
        <div style="text-align: center; padding: 60px 20px; background: var(--bg-color); border-radius: 20px; border: 1px dashed var(--border-color);">
            <h2 style="font-size: 1.8rem; margin-bottom: 16px; color: #111827;">Looking for a custom internal tool?</h2>
            <p style="color: var(--text-muted); margin-bottom: 24px; max-width: 500px; margin-left: auto; margin-right: auto;">
                I have experience building cost-effective, tailored solutions using WordPress and custom PHP to automate your business workflows.
            </p>
            <a href="mailto:<?php echo $profile['email']; ?>" class="btn btn-outline" style="padding: 14px 32px; font-size: 1rem; border-color: var(--primary); color: var(--primary);">Get in Touch</a>
        </div>

    </div>
</main>

<?php require_once '../partials/footer.php'; ?>