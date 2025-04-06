<?php
$current_page = 'architecture';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> Database Architecture</h1>
    <p class="subtitle">The technical architecture and design of our database system</p>
    
    <div class="content-section">
        <p class="text-lg">
            Our database architecture follows a carefully planned design that balances performance, 
            scalability, and maintainability. We've implemented a multi-tier approach that separates 
            concerns and allows for future expansion.
        </p>

        <h2>Architecture Overview</h2>
        
        <div class="highlight-box primary">
            <p>
                The database system is built on a relational database management system (RDBMS) with 
                additional caching layers and specialized storage for different types of data. The 
                architecture follows a hybrid approach that combines normalized tables for transactional 
                data with denormalized structures for reporting.
            </p>
        </div>

        <h2>Key Components</h2>
        
        <div class="card-grid">
            <div class="card">
                <div class="card-icon"><i class="fas fa-server icon"></i></div>
                <h3 class="neon-text">Core Database</h3>
                <p>PostgreSQL 13 cluster with primary and replica nodes for high availability and load distribution.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-layer-group icon"></i></div>
                <h3 class="neon-text">Caching Layer</h3>
                <p>Redis-based caching system for frequently accessed data to reduce database load.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-search icon"></i></div>
                <h3 class="neon-text">Search Engine</h3>
                <p>Elasticsearch integration for advanced text search and analytics capabilities.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-tasks icon"></i></div>
                <h3 class="neon-text">ETL Pipeline</h3>
                <p>Automated data extraction, transformation, and loading processes for data warehousing.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-shield-alt icon"></i></div>
                <h3 class="neon-text">Security Layer</h3>
                <p>Role-based access control, data encryption, and audit logging systems.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-chart-line icon"></i></div>
                <h3 class="neon-text">Analytics Engine</h3>
                <p>Dedicated analytics database for complex reporting without impacting transactional performance.</p>
            </div>
        </div>

        <h2>Technical Specifications</h2>
        
        <div class="code-block">
            <pre>
<span class="sql-comment">-- Database Configuration</span>
<span class="sql-keyword">SET</span> max_connections = <span class="sql-number">300</span>;
<span class="sql-keyword">SET</span> shared_buffers = <span class="sql-string">'4GB'</span>;
<span class="sql-keyword">SET</span> effective_cache_size = <span class="sql-string">'12GB'</span>;
<span class="sql-keyword">SET</span> work_mem = <span class="sql-string">'64MB'</span>;
<span class="sql-keyword">SET</span> maintenance_work_mem = <span class="sql-string">'512MB'</span>;
<span class="sql-keyword">SET</span> random_page_cost = <span class="sql-number">1.1</span>;
<span class="sql-keyword">SET</span> effective_io_concurrency = <span class="sql-number">200</span>;
<span class="sql-keyword">SET</span> max_wal_size = <span class="sql-string">'2GB'</span>;
<span class="sql-keyword">SET</span> checkpoint_completion_target = <span class="sql-number">0.9</span>;
<span class="sql-keyword">SET</span> default_statistics_target = <span class="sql-number">100</span>;
            </pre>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
