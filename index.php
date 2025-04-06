<?php
$current_page = 'home';
include 'header.php';
?>

<main class="container">
    <div class="hero">

    <h1 style="font-size: 45px;">
  <span class="neon-text">Parcel Lockbox</span> with Centralized Management System
</h1>    
 <p>A comprehensive showcase of my database system project, including rationale, architecture, and implementation details.</p>
    </div>



    <div class="card-grid">
        <div class="card">
            <div class="card-icon"><i class="fas fa-file-code icon"></i></div>
            <h3 class="neon-text">Rationale</h3>
            <p>Understand the reasoning and motivation behind the database system design.</p>
            <a href="rationale.php" class="btn">View Details</a>
        </div>
        
        <div class="card">
            <div class="card-icon"><i class="fas fa-bullseye icon"></i></div>
            <h3 class="neon-text">Objectives</h3>
            <p>Explore the goals and targets that guided the development process.</p>
            <a href="objectives.php" class="btn">View Details</a>
        </div>
        
        <div class="card">
            <div class="card-icon"><i class="fas fa-database icon"></i></div>
            <h3 class="neon-text">DB Architecture</h3>
            <p>Dive into the technical architecture of the database system.</p>
            <a href="architecture.php" class="btn">View Details</a>
        </div>
        
        <div class="card">
            <div class="card-icon"><i class="fas fa-project-diagram icon"></i></div>
            <h3 class="neon-text">ER Diagram</h3>
            <p>Visualize the entity relationships and data structure.</p>
            <a href="er-diagram.php" class="btn">View Details</a>
        </div>
        
        <div class="card">
            <div class="card-icon"><i class="fas fa-code icon"></i></div>
            <h3 class="neon-text">Queries</h3>
            <p>Examine the key queries that power the database functionality.</p>
            <a href="queries.php" class="btn">View Details</a>
        </div>
        
        <div class="card">
            <div class="card-icon"><i class="fas fa-list icon"></i></div>
            <h3 class="neon-text">SQL Fiddle</h3>
            <p>Interact with the database through an SQL fiddle environment.</p>
            <a href="sql-fiddle.php" class="btn">View Details</a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
