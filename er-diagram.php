<?php
$current_page = 'er-diagram';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> ER Diagram</h1>
    <p class="subtitle">Entity Relationship diagrams showing the database structure</p>
    
    <div class="content-section">
        <p class="text-lg">
            The Entity-Relationship (ER) diagram provides a visual representation of our database 
            structure, showing the entities (tables), their attributes (columns), and the relationships 
            between them. This diagram serves as a blueprint for our database design.
        </p>

        <h2>Core Entities</h2>
        
        <div class="card-grid">
            <div class="card">
                <div class="card-icon"><i class="fas fa-user icon"></i></div>
                <h3 class="neon-text">Users</h3>
                <p>Stores user account information including authentication and profile data.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-box icon"></i></div>
                <h3 class="neon-text">Products</h3>
                <p>Contains all product information including name, description, pricing, and inventory status.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-shopping-cart icon"></i></div>
                <h3 class="neon-text">Orders</h3>
                <p>Tracks customer orders, including status, payment information, and shipping details.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-tags icon"></i></div>
                <h3 class="neon-text">Categories</h3>
                <p>Hierarchical product categorization system for organizing the product catalog.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-star icon"></i></div>
                <h3 class="neon-text">Reviews</h3>
                <p>Customer feedback and ratings for products, including textual reviews and star ratings.</p>
            </div>
            
            <div class="card">
                <div class="card-icon"><i class="fas fa-truck icon"></i></div>
                <h3 class="neon-text">Suppliers</h3>
                <p>Information about product suppliers, including contact details and supply chain data.</p>
            </div>
        </div>

        <h2>ER Diagram</h2>
        
        <div class="er-diagram-container">
            <!-- In a real application, this would be an actual ER diagram image -->
            <p class="text-center">Upload an image of your ER diagram below</p>
        </div>

        <h2>Key Relationships</h2>
        
        <div class="code-block">
            <pre>
<span class="sql-comment">-- One-to-Many: Users to Orders</span>
<span class="sql-keyword">ALTER TABLE</span> orders 
<span class="sql-keyword">ADD CONSTRAINT</span> fk_orders_users 
<span class="sql-keyword">FOREIGN KEY</span> (user_id) <span class="sql-keyword">REFERENCES</span> users(id);

<span class="sql-comment">-- One-to-Many: Products to OrderItems</span>
<span class="sql-keyword">ALTER TABLE</span> order_items 
<span class="sql-keyword">ADD CONSTRAINT</span> fk_order_items_products 
<span class="sql-keyword">FOREIGN KEY</span> (product_id) <span class="sql-keyword">REFERENCES</span> products(id);

<span class="sql-comment">-- Many-to-Many: Products to Categories</span>
<span class="sql-keyword">CREATE TABLE</span> product_categories (
  product_id <span class="sql-keyword">INTEGER REFERENCES</span> products(id),
  category_id <span class="sql-keyword">INTEGER REFERENCES</span> categories(id),
  <span class="sql-keyword">PRIMARY KEY</span> (product_id, category_id)
);

<span class="sql-comment">-- One-to-Many: Products to Reviews</span>
<span class="sql-keyword">ALTER TABLE</span> reviews 
<span class="sql-keyword">ADD CONSTRAINT</span> fk_reviews_products 
<span class="sql-keyword">FOREIGN KEY</span> (product_id) <span class="sql-keyword">REFERENCES</span> products(id);

<span class="sql-comment">-- One-to-Many: Suppliers to Products</span>
<span class="sql-keyword">ALTER TABLE</span> products 
<span class="sql-keyword">ADD CONSTRAINT</span> fk_products_suppliers 
<span class="sql-keyword">FOREIGN KEY</span> (supplier_id) <span class="sql-keyword">REFERENCES</span> suppliers(id);
            </pre>
        </div>
    </div>

</main>

<?php include 'footer.php'; ?>