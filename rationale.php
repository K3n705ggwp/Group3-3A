<?php
$current_page = 'rationale';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> Rationale</h1>
    <p class="subtitle">The reasoning and motivation behind our database system</p>
    
    <div class="content-section">
        <p class="text-lg">
            Our database system was developed to address the increasing need for efficient data management 
            in modern applications. The existing solutions weren't adequate for our specific use case because 
            of scaling issues, complex querying limitations, and lack of proper data relationships.
        </p>

        <h2>Key Motivations</h2>
        
        <ul class="feature-list">
            <li>Improve data consistency and integrity across all system components</li>
            <li>Reduce redundancy and optimize storage requirements</li>
            <li>Enable complex querying capabilities for advanced reporting</li>
            <li>Support real-time data access with minimal latency</li>
            <li>Ensure scalability to accommodate growing data volumes</li>
        </ul>

        <h2>Approach</h2>
        
        <p>
            We adopted a relational database approach with carefully normalized tables to ensure data 
            integrity while maintaining query performance. The design incorporates indexing strategies, 
            views, and stored procedures to optimize common operations and ensure consistent data manipulation.
        </p>

        <p>
            Careful consideration was given to the trade-offs between normalization and query performance, 
            resulting in a hybrid approach that balances both concerns effectively.
        </p>
    </div>

   

    <div class="highlight-box primary">
        <h3 class="neon-text">Business Impact</h3>
        <p>
            The implementation of this database system has resulted in a 40% improvement in query response 
            times and a 25% reduction in storage requirements. These efficiency gains translate directly 
            to improved application performance and reduced operational costs.
        </p>
    </div>
</main>

<?php include 'footer.php'; ?>
