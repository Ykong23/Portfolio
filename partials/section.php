<main class="container">
    <!-- Hero Section -->
    <section id="about" class="hero-section">
        <div>
            <span class="hero-tag">HI, I'M</span>
            <h1 class="hero-title"><?php echo $profile['name']; ?></h1>
            <p style="font-size: 1.25rem; font-weight: 600; color: var(--primary); margin-bottom: 14px;">
                <?php echo $profile['title']; ?>
            </p>
            <p class="hero-desc"><?php echo $profile['summary']; ?></p>

            <div class="hero-buttons">
                <a href="mailto:<?php echo $profile['email']; ?>" class="btn btn-primary">Get in Touch</a>
                <a href="<?php echo $profile['github']; ?>" target="_blank" class="btn btn-outline">GitHub Profile</a>
            </div>
        </div>
        <div class="hero-image-wrapper">
            <div class="avatar-card">
                <div class="avatar-placeholder">
                    <?php echo mb_substr($profile['name'], 0, 1); ?>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 4px;"><?php echo $profile['name']; ?></h3>
                <p style="font-size: 0.85rem; color: var(--text-muted);"><?php echo $profile['location']; ?></p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="section-header">
            <span>SERVICES</span>
            <h2>What I Provide</h2>
        </div>
        <div class="services-grid">
            <?php foreach ($services as $srv): ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo $srv['icon']; ?></div>
                    <h3><?php echo $srv['title']; ?></h3>
                    <p><?php echo $srv['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Skills & Experience Area -->
    <section id="skills">
        <div class="section-header">
            <span>EXPERTISE & PATH</span>
            <div>
                <h2>My Experience & Skills</h2>
            </div>
        </div>

        <div class="skills-experience-grid">
            <!-- Left: Skills with Progress Bars -->
            <div class="content-box">
                <h3>Technical Proficiency</h3>
                <?php foreach ($skills_bars as $skill): ?>
                    <div class="skill-bar-item">
                        <div class="skill-info">
                            <span><?php echo $skill['name']; ?></span>
                            <span><?php echo $skill['level']; ?></span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-fill" style="width: <?php echo $skill['level']; ?>;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <h3 style="margin-top: 35px;">Certifications & Awards</h3>
                <ul style="padding-left: 18px; color: var(--text-muted); font-size: 0.9rem;">
                    <?php foreach ($awards as $award): ?>
                        <li style="margin-bottom: 8px;"><?php echo $award; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Right: Work Experience Timeline -->
            <div class="content-box">
                <h3>Work Experience</h3>
                <div>
                    <?php foreach ($experiences as $exp): ?>
                        <div class="timeline-item">
                            <h4><?php echo $exp['title']; ?></h4>
                            <div class="timeline-company"><?php echo $exp['company']; ?></div>
                            <div class="timeline-period"><?php echo $exp['period']; ?></div>
                            <div class="timeline-desc"><?php echo $exp['desc']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Works Section -->
    <section id="projects">
        <div class="section-header">
            <span>PORTFOLIO</span>
            <h2>Featured Projects</h2>
        </div>
        <div class="projects-grid">
            <?php foreach ($projects as $proj): ?>
                <div class="project-card">
                    <div>
                        <span class="project-tag"><?php echo $proj['category']; ?></span>
                        <h3><?php echo $proj['title']; ?></h3>
                        <p><?php echo $proj['desc']; ?></p>
                    </div>
                    <div>
                        <!-- 在 section.php 中替换对应的链接 -->
                        <a href="<?php echo $proj['page']; ?>" class="project-link">View Project &rarr;</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" style="margin-bottom: 60px;">
        <div class="content-box" style="text-align: center; max-width: 700px; margin: 0 auto; background: var(--accent-bg);">
            <span style="color: var(--primary); font-weight: 600; font-size: 0.9rem;">GET IN TOUCH</span>
            <h2 style="font-size: 2rem; margin: 10px 0 15px 0;">Let's Build Something Amazing Together</h2>
            <p style="color: var(--text-muted); margin-bottom: 25px;">
                Phone: <a href="tel:<?php echo $profile['phone']; ?>" style="color: var(--primary); text-decoration: none; font-weight: 600;"><?php echo $profile['phone']; ?></a><br>
                Email: <a href="mailto:<?php echo $profile['email']; ?>" style="color: var(--primary); text-decoration: none; font-weight: 600;"><?php echo $profile['email']; ?></a>
            </p>
            <a href="mailto:<?php echo $profile['email']; ?>" class="btn btn-primary">Say Hello via Email</a>
        </div>
    </section>
</main>