<?php
$current_page = 'objectives';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> Objectives</h1>
    <p class="subtitle">The goals and targets that guided our database system development</p>
    
    <div class="content-section">
        <p class="text-lg">
            A clear set of objectives guided the development of our database system, ensuring that the 
            final product would meet all the requirements of our stakeholders and support our long-term 
            business needs.
        </p>

        <h2>Primary Objectives</h2>
        
        <div class="card-grid">
            <div class="card">
                <div class="card-icon"><i class="fas fa-lock icon"></i></div>
                <h3 class="neon-text">Data Integrity</h3>
                <p>Ensure consistent and accurate data throughout the database using constraints, triggers, and validation rules.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-bolt icon"></i></div>
                <h3 class="neon-text">Performance</h3>
                <p>Optimize query execution times to ensure fast data retrieval even with large datasets and complex joins.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-shield-alt icon"></i></div>
                <h3 class="neon-text">Security</h3>
                <p>Implement robust access control mechanisms and encryption to protect sensitive data.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-expand-arrows-alt icon"></i></div>
                <h3 class="neon-text">Scalability</h3>
                <p>Design the database to handle growth in data volume and user load without compromising performance.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-tools icon"></i></div>
                <h3 class="neon-text">Maintainability</h3>
                <p>Create a well-documented and organized schema that is easy to understand and modify.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-sync-alt icon"></i></div>
                <h3 class="neon-text">Availability</h3>
                <p>Ensure continuous access to data with minimal downtime through replication and backup strategies.</p>
            </div>
        </div>

        <h2>Metrics & Success Criteria</h2>
        
        <div class="highlight-box">
            <ul class="feature-list">
                <li>Query response time under 100ms for 95% of common operations</li>
                <li>Support for at least 1,000 concurrent users</li>
                <li>Ability to handle 10+ million records with proper indexing</li>
                <li>99.9% uptime guarantee</li>
                <li>Data backup and recovery in under 1 hour</li>
                <li>Compliance with industry security standards</li>
            </ul>
        </div>
    </div>


</main>

<?php include 'footer.php'; ?>