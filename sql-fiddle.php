<?php
$current_page = 'sql-fiddle';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> SQL Fiddle</h1>
    <p class="subtitle">Interactive SQL environment to experiment with database queries</p>
    
    <div class="content-section">
        <p class="text-lg">
            The SQL Fiddle allows you to experiment with SQL queries against a simulated database 
            environment. You can test various SQL commands and see their results instantly.
        </p>

        <div class="sql-fiddle-container">
            <div class="sql-input">
                <h3 class="neon-text">Query Editor</h3>
                <p>Enter your SQL query below:</p>
                <textarea id="sql-input" placeholder="Enter SQL query here...">SELECT * FROM products LIMIT 5;</textarea>
                <button id="run-sql-btn" class="btn" style="margin-top: 15px;">Run Query</button>
            </div>
            
            <div class="sql-output" id="sql-output">
                <h3 class="sql-output-title">Results</h3>
                <p>Execute a query to see results here.</p>
            </div>
        </div>

        <h2>Sample Tables</h2>
        
        <div class="code-block">
            <pre>
<span class="sql-comment">-- Products Table</span>
<span class="sql-keyword">CREATE TABLE</span> products (
  id <span class="sql-keyword">SERIAL PRIMARY KEY</span>,
  name <span class="sql-keyword">VARCHAR</span>(100) <span class="sql-keyword">NOT NULL</span>,
  description <span class="sql-keyword">TEXT</span>,
  price <span class="sql-keyword">DECIMAL</span>(10, 2) <span class="sql-keyword">NOT NULL</span>,
  sku <span class="sql-keyword">VARCHAR</span>(50) <span class="sql-keyword">UNIQUE NOT NULL</span>,
  current_stock <span class="sql-keyword">INTEGER NOT NULL DEFAULT</span> 0,
  supplier_id <span class="sql-keyword">INTEGER REFERENCES</span> suppliers(id),
  active <span class="sql-keyword">BOOLEAN DEFAULT TRUE</span>,
  created_at <span class="sql-keyword">TIMESTAMP DEFAULT NOW</span>()
);

<span class="sql-comment">-- Orders Table</span>
<span class="sql-keyword">CREATE TABLE</span> orders (
  id <span class="sql-keyword">SERIAL PRIMARY KEY</span>,
  user_id <span class="sql-keyword">INTEGER REFERENCES</span> users(id),
  order_date <span class="sql-keyword">TIMESTAMP DEFAULT NOW</span>(),
  status <span class="sql-keyword">VARCHAR</span>(20) <span class="sql-keyword">NOT NULL DEFAULT</span> <span class="sql-string">'pending'</span>,
  total_amount <span class="sql-keyword">DECIMAL</span>(12, 2) <span class="sql-keyword">NOT NULL</span>,
  shipping_address <span class="sql-keyword">TEXT NOT NULL</span>,
  billing_address <span class="sql-keyword">TEXT NOT NULL</span>,
  payment_method <span class="sql-keyword">VARCHAR</span>(50) <span class="sql-keyword">NOT NULL</span>
);

<span class="sql-comment">-- Order Items Table</span>
<span class="sql-keyword">CREATE TABLE</span> order_items (
  id <span class="sql-keyword">SERIAL PRIMARY KEY</span>,
  order_id <span class="sql-keyword">INTEGER REFERENCES</span> orders(id),
  product_id <span class="sql-keyword">INTEGER REFERENCES</span> products(id),
  quantity <span class="sql-keyword">INTEGER NOT NULL</span>,
  unit_price <span class="sql-keyword">DECIMAL</span>(10, 2) <span class="sql-keyword">NOT NULL</span>,
  <span class="sql-keyword">UNIQUE</span>(order_id, product_id)
);
            </pre>
        </div>

        <h2>Example Queries</h2>
        
        <div class="highlight-box">
            <h3 class="neon-text">Try These Queries</h3>
            <ul class="feature-list">
                <li><code>SELECT * FROM products LIMIT 5;</code></li>
                <li><code>SELECT * FROM orders WHERE status = 'completed' LIMIT 5;</code></li>
                <li><code>SELECT u.name, SUM(o.total_amount) AS total_spent FROM users u JOIN orders o ON u.id = o.user_id GROUP BY u.name ORDER BY total_spent DESC LIMIT 5;</code></li>
                <li><code>INSERT INTO products (name, price, sku) VALUES ('New Product', 19.99, 'NP12345');</code></li>
                <li><code>UPDATE products SET price = price * 1.1 WHERE supplier_id = 3;</code></li>
            </ul>
        </div>
    </div>


</main>

<?php include 'footer.php'; ?>
