document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }
    
    // SQL Fiddle execution
    const runSqlBtn = document.getElementById('run-sql-btn');
    const sqlInput = document.getElementById('sql-input');
    const sqlOutput = document.getElementById('sql-output');
    
    if (runSqlBtn && sqlInput && sqlOutput) {
        runSqlBtn.addEventListener('click', function() {
            // Simulate SQL execution
            const query = sqlInput.value.trim();
            
            if (query === '') {
                sqlOutput.innerHTML = '<p class="text-warning">Please enter a SQL query.</p>';
                return;
            }
            
            // In a real application, you would send this to the server for execution
            // Here we're just simulating a response
            
            // Check if it's a SELECT query (simple check)
            if (query.toLowerCase().startsWith('select')) {
                simulateSelectQuery(query);
            } else if (query.toLowerCase().startsWith('create') || 
                      query.toLowerCase().startsWith('insert') || 
                      query.toLowerCase().startsWith('update') || 
                      query.toLowerCase().startsWith('delete')) {
                simulateNonSelectQuery(query);
            } else {
                sqlOutput.innerHTML = '<p class="text-warning">Unsupported SQL statement. Try a SELECT, CREATE, INSERT, UPDATE, or DELETE statement.</p>';
            }
        });
    }
    
    function simulateSelectQuery(query) {
        // Simulate delay for "processing"
        sqlOutput.innerHTML = '<p>Executing query...</p>';
        
        setTimeout(() => {
            // Generate fake results
            const resultTable = document.createElement('table');
            resultTable.className = 'sql-result-table';
            
            // Create header
            const thead = document.createElement('thead');
            const headerRow = document.createElement('tr');
            ['id', 'name', 'description', 'created_at'].forEach(col => {
                const th = document.createElement('th');
                th.textContent = col;
                headerRow.appendChild(th);
            });
            thead.appendChild(headerRow);
            resultTable.appendChild(thead);
            
            // Create body with sample data
            const tbody = document.createElement('tbody');
            
            // Generate 5 rows of sample data
            for (let i = 1; i <= 5; i++) {
                const row = document.createElement('tr');
                
                const idCell = document.createElement('td');
                idCell.textContent = i;
                row.appendChild(idCell);
                
                const nameCell = document.createElement('td');
                nameCell.textContent = `Sample Item ${i}`;
                row.appendChild(nameCell);
                
                const descCell = document.createElement('td');
                descCell.textContent = `This is a description for sample item ${i}`;
                row.appendChild(descCell);
                
                const dateCell = document.createElement('td');
                dateCell.textContent = new Date().toISOString().split('T')[0];
                row.appendChild(dateCell);
                
                tbody.appendChild(row);
            }
            
            resultTable.appendChild(tbody);
            
            // Display result
            sqlOutput.innerHTML = '<h3 class="sql-output-title">Query Results</h3>';
            sqlOutput.appendChild(resultTable);
            
            // Add query execution message
            const executionMsg = document.createElement('p');
            executionMsg.textContent = `5 rows returned. Query executed in 0.02 seconds.`;
            executionMsg.style.marginTop = '15px';
            executionMsg.style.fontSize = '0.9rem';
            executionMsg.style.color = '#aaa';
            sqlOutput.appendChild(executionMsg);
            
        }, 500);
    }
    
    function simulateNonSelectQuery(query) {
        // Simulate delay for "processing"
        sqlOutput.innerHTML = '<p>Executing query...</p>';
        
        setTimeout(() => {
            // Generate fake result message
            sqlOutput.innerHTML = `
                <h3 class="sql-output-title">Query Executed</h3>
                <p>Statement executed successfully.</p>
                <div class="highlight-box">
                    <code>Query OK, 1 row affected (0.01 sec)</code>
                </div>
            `;
        }, 500);
    }
});
