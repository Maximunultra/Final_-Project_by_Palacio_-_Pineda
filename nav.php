<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitory Admin Dashboard</title>
    <style>body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
}

.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #2c3e50;
    color: #ecf0f1;
    display: flex;
    flex-direction: column;
}

.sidebar-header {
    padding: 20px;
    background-color: #34495e;
    text-align: center;
}

.sidebar-header h2 {
    margin: 0;
    font-size: 1.5em;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1;
}

.sidebar-menu li {
    padding: 15px 20px;
}

.sidebar-menu li a {
    color: #ecf0f1;
    text-decoration: none;
    display: block;
}

.sidebar-menu li a:hover {
    background-color: #16a085;
}

.main-content {
    flex-grow: 1;
    padding: 20px;
    background-color: #ecf0f1;
}</style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Dashboard</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="view.php">Visitor</a></li>
            <li><a href="users.php">User Management</a></li>
            
            
            
            <li><a href="log.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <!-- Main content goes here -->
    </div>
</body>
</html>