<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin-analytics.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="admin.js"></script>
        <script src="admin-analytics.js"></script>
    </head>
    <body>
        <div id="sidebar">
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn active" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
        </div>
        <div class="mainbar" id="main-panel">
            <div id="cards-collection">
                <div class="cards-item">
                    <h3 class="card-header">Cars Sold</h3>
                    <h2 class="card-detail">######</h2>
                    <p class="card-date">Jan - June 2022</p>
                </div>
                <div class="cards-item">
                    <h3 class="card-header">Customers</h3>
                    <h2 class="card-detail">#####</h2>
                    <p class="card-date">Jan - June 2022</p>
                </div>
            </div>
            <div id="chart-canvas">
                <canvas id="myChart" width="400"></canvas>
            </div>
        </div>
    </body>
</html>
