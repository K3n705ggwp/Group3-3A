<?php
$current_page = 'queries';
include 'header.php';
?>

<main class="container">
    <h1><span class="neon-text">#</span> Queries</h1>
    <p class="subtitle">Key SQL queries that power our database functionality</p>
    
    <div class="content-section">
        <p class="text-lg">
            Efficient queries are the backbone of our database system. Below are examples of the core 
            queries that power our application, optimized for performance and readability.
        </p>

        <h2>Common Queries</h2>
        
        <div class="code-block">
            <pre>
<span class="sql-comment">-- Get top selling products for the current month</span>
<span class="sql-keyword">SELECT</span> p.id, p.name, p.price, <span class="sql-function">SUM</span>(oi.quantity) <span class="sql-keyword">AS</span> total_sold
<span class="sql-keyword">FROM</span> products p
<span class="sql-keyword">JOIN</span> order_items oi <span class="sql-keyword">ON</span> p.id = oi.product_id
<span class="sql-keyword">JOIN</span> orders o <span class="sql-keyword">ON</span> oi.order_id = o.id
<span class="sql-keyword">WHERE</span> o.order_date >= <span class="sql-function">DATE_TRUNC</span>('month', <span class="sql-function">CURRENT_DATE</span>)
<span class="sql-keyword">GROUP BY</span> p.id, p.name, p.price
<span class="sql-keyword">ORDER BY</span> total_sold <span class="sql-keyword">DESC</span>
<span class="sql-keyword">LIMIT</span> 10;
            </pre>
        </div>

        <div class="code-block">
            <pre>
<span class="sql-comment">-- Find products with low inventory (less than 10 items)</span>
<span class="sql-keyword">SELECT</span> p.id, p.name, p.sku, p.current_stock, s.name <span class="sql-keyword">AS</span> supplier_name, s.email <span class="sql-keyword">AS</span> supplier_email
<span class="sql-keyword">FROM</span> products p
<span class="sql-keyword">JOIN</span> suppliers s <span class="sql-keyword">ON</span> p.supplier_id = s.id
<span class="sql-keyword">WHERE</span> p.current_stock < 10 <span class="sql-keyword">AND</span> p.active = <span class="sql-keyword">TRUE</span>
<span class="sql-keyword">ORDER BY</span> p.current_stock <span class="sql-keyword">ASC</span>;
            </pre>
        </div>
        
        <h2>Complex Queries</h2>
        
        <div class="code-block">
            <pre>
<span class="sql-comment">-- Calculate customer lifetime value</span>
<span class="sql-keyword">WITH</span> customer_orders <span class="sql-keyword">AS</span> (
  <span class="sql-keyword">SELECT</span> 
    u.id <span class="sql-keyword">AS</span> user_id,
    u.first_name,
    u.last_name,
    u.email,
    <span class="sql-function">COUNT</span>(o.id) <span class="sql-keyword">AS</span> order_count,
    <span class="sql-function">SUM</span>(o.total_amount) <span class="sql-keyword">AS</span> total_spent,
    <span class="sql-function">MIN</span>(o.order_date) <span class="sql-keyword">AS</span> first_order_date,
    <span class="sql-function">MAX</span>(o.order_date) <span class="sql-keyword">AS</span> last_order_date
  <span class="sql-keyword">FROM</span> users u
  <span class="sql-keyword">JOIN</span> orders o <span class="sql-keyword">ON</span> u.id = o.user_id
  <span class="sql-keyword">WHERE</span> o.status = <span class="sql-string">'completed'</span>
  <span class="sql-keyword">GROUP BY</span> u.id, u.first_name, u.last_name, u.email
)
<span class="sql-keyword">SELECT</span>
  user_id,
  first_name,
  last_name,
  email,
  order_count,
  total_spent,
  total_spent / order_count <span class="sql-keyword">AS</span> avg_order_value,
  <span class="sql-function">DATE_PART</span>('day', now() - last_order_date) <span class="sql-keyword">AS</span> days_since_last_order,
  <span class="sql-function">DATE_PART</span>('day', last_order_date - first_order_date) / 30 <span class="sql-keyword">AS</span> customer_age_months
<span class="sql-keyword">FROM</span> customer_orders
<span class="sql-keyword">ORDER BY</span> total_spent <span class="sql-keyword">DESC</span>;
            </pre>
        </div>

        <div class="code-block">
            <pre>
<span class="sql-comment">-- Product recommendation query based on purchase patterns</span>
<span class="sql-keyword">SELECT</span> 
  p2.id,
  p2.name,
  p2.price,
  <span class="sql-function">COUNT</span>(*) <span class="sql-keyword">AS</span> frequency
<span class="sql-keyword">FROM</span> order_items oi1
<span class="sql-keyword">JOIN</span> order_items oi2 <span class="sql-keyword">ON</span> oi1.order_id = oi2.order_id <span class="sql-keyword">AND</span> oi1.product_id != oi2.product_id
<span class="sql-keyword">JOIN</span> products p1 <span class="sql-keyword">ON</span> oi1.product_id = p1.id
<span class="sql-keyword">JOIN</span> products p2 <span class="sql-keyword">ON</span> oi2.product_id = p2.id
<span class="sql-keyword">WHERE</span> oi1.product_id = 123 <span class="sql-comment">-- ID of the target product</span>
<span class="sql-keyword">GROUP BY</span> p2.id, p2.name, p2.price
<span class="sql-keyword">ORDER BY</span> frequency <span class="sql-keyword">DESC</span>
<span class="sql-keyword">LIMIT</span> 5;
            </pre>
        </div>
        
        <h2>Optimized Queries</h2>
        
        <div class="highlight-box primary">
            <h3 class="neon-text">Performance Considerations</h3>
            <p>
                All queries are optimized using appropriate indexes and query planning techniques. 
                We regularly analyze query performance using EXPLAIN ANALYZE and adjust our approach 
                based on actual usage patterns and data volume.
            </p>
        </div>
    </div>

 
</main>

<?php include 'footer.php'; ?>
