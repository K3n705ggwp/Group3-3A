<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Portfolio</title>
    <meta name="description" content="A comprehensive database system portfolio with rationale, architecture, ER diagrams, and more">
    <meta name="author" content="Database Portfolio">
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <h1 class="site-title">
                    <a href="index.php"><span class="neon-text">DB</span>Portfolio</a>
                </h1>
                
                <nav class="main-nav">
                    <ul class="nav-links">
                        <li><a href="index.php" class="<?php echo $current_page === 'home' ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="rationale.php" class="<?php echo $current_page === 'rationale' ? 'active' : ''; ?>">Rationale</a></li>
                        <li><a href="objectives.php" class="<?php echo $current_page === 'objectives' ? 'active' : ''; ?>">Objectives</a></li>
                        <li><a href="architecture.php" class="<?php echo $current_page === 'architecture' ? 'active' : ''; ?>">Database Architecture</a></li>
                        <li><a href="er-diagram.php" class="<?php echo $current_page === 'er-diagram' ? 'active' : ''; ?>">Entity Relationship Diagram</a></li>
                        <li><a href="queries.php" class="<?php echo $current_page === 'queries' ? 'active' : ''; ?>">Queries</a></li>
                        <li><a href="https://www.db-fiddle.com/f/d8tc4g9k7BSRkVXAZckXiw/0" class="<?php echo $current_page === 'sql-fiddle' ? 'active' : ''; ?>">DB-Fiddle</a></li>
                    </ul>
                </nav>
                
                <button class="mobile-menu-btn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>