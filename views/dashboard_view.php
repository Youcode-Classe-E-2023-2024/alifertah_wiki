<style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #ffffff;
        }

        .card {
            margin-bottom: 20px;
        }

        .metric-card {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .metric-value {
            font-size: 2em;
        }

        .graph-card {
            border: 2px solid #007bff;
        }

        .user-table {
            background-color: #ffffff;
        }

        .user-row:hover {
            background-color: #f0f8ff; /* Light blue background on hover */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <!-- Linear Graph -->
                <div class="card graph-card">
                    <div class="card-header bg-white">
                        Linear Graph
                    </div>
                    <div class="card-body">
                        <!-- Include your graph here (e.g., using Chart.js) -->
                        <img src="https://via.placeholder.com/600x200" alt="Linear Graph" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Metrics -->
                <div class="card metric-card">
                    <h5 class="card-title">Statistics</h5>
                    <div class="row">
                        <div class="col">
                            <div class="metric-value"><?= getTotalUsers()?></div>
                            <div class="metric-label">USERS</div>
                        </div>
                        <div class="col">
                            <div class="metric-value"><?=getTotalCategories()?></div>
                            <div class="metric-label">CATEGORIES</div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="metric-value"><?=getTotalTags()?></div>
                            <div class="metric-label">TAGS</div>
                        </div>
                        <div class="col">
                            <div class="metric-value"><?=getTotalPosts()?></div>
                            <div class="metric-label">POSTS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- User Table -->
        <div class="card user-table">
            <div class="card-header bg-white">
                User Table
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <!-- <th scope="col">Status</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="user-row">
                            <th scope="row">1</th>
                            <td>User 1</td>
                            <td>user1@example.com</td>
                            <!-- <td><span class="">Active</span></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

