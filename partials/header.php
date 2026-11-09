<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : $profile['name'] . ' - Portfolio'; ?></title>
    <!-- 兼容路径：如果在子文件夹，$base 会变成 ../ -->
    <link rel="stylesheet" href="<?php echo $base ?? ''; ?>assets/style.css">
</head>
<body>
    <header>
        <div class="container nav-flex">
            <a href="<?php echo $base ?? ''; ?>index.php" class="logo"><?php echo explode(' ', $profile['name'])[0]; ?><span>.</span></a>
            <nav>
                <!-- 加上 $base 确保能跳回首页对应的锚点 -->
                <a href="<?php echo $base ?? ''; ?>index.php#about">Home</a>
                <a href="<?php echo $base ?? ''; ?>index.php#services">Services</a>
                <a href="<?php echo $base ?? ''; ?>index.php#skills">Skills & Exp</a>
                <a href="<?php echo $base ?? ''; ?>index.php#projects">Works</a>
                <a href="<?php echo $base ?? ''; ?>index.php#contact" class="btn-cta">Contact</a>
            </nav>
        </div>
    </header>