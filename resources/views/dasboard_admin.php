<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 255, 255);
        }
        /* Sidebar */
        .sidebar {
            height: 100vh;
            background-color: #f9fafe;
            border-right: 1px solid #e4eaf1;
        }
        .sidebar a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            display: block;
            padding: 10px 15px;
        }
        .sidebar a.active {
            color: #0d6efd;
            background-color: #eaf2ff;
            border-radius: 4px;
        }
        /* Header */
        .header-banner {
            background-color: #eef3ff;
            border-radius: 8px;
            padding: 20px;
        }
        /* Table */
        .role-badge {
            background-color: #fce9e9;
            color: #f16161;
            border-radius: 12px;
            padding: 4px 8px;
            font-size: 12px;
            text-align: center;
        }
        .icon-delete {
            cursor: pointer;
            color: #dc3545;
        }
        .form-control {
            width: 250px;
        }
        .employee-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
         /* Top Menu */
         .top-menu {
            background-color: white;
            border-bottom: 1px solid #e4eaf1;
            margin-top:-40px;
        }
        .top-menu i {
            cursor: pointer;
            margin-left: 15px;
            color: #555;
        }
        .top-menu .profile-img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }
        .sidebar {
            height: 100vh;
            background-color:rgb(255, 255, 255);
            border-right: 1px solid #e4eaf1;
        }
        .sidebar a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            display: block;
            padding: 10px 15px;
        }
        .sidebar a.active {
            color: #0d6efd;
            background-color: #eaf2ff;
            border-radius: 4px;
        }
        /* Top Menu */
        .top-menu {
            background-color: white;
            border-bottom: 1px solid #e4eaf1;
        }
        .top-menu i {
            cursor: pointer;
            margin-left: 15px;
            color: #555;
        }
        .top-menu .profile-img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }
        /* Header */
        .header-banner {
            background-color: #eef3ff;
            border-radius: 8px;
            padding: 20px;
        }
        /* Table */
        .role-badge {
            background-color: #fce9e9;
            color: #f16161;
            border-radius: 12px;
            padding: 4px 8px;
            font-size: 12px;
            text-align: center;
        }
        .icon-delete {
            cursor: pointer;
            color: #dc3545;
        }
        .form-control {
            width: 250px;
        }
        .employee-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar p-3">
                <h4 class="fw-bold mb-4 text-primary">KANTORKU</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home me-2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa fa-briefcase me-2"></i> Management</a>
                        <ul class="nav flex-column ps-3">
                            <li><a href="#" class="nav-link">Employees</a></li>
                            <li><a href="#" class="nav-link">Roles</a></li>
                            <li><a href="#" class="nav-link">Performance</a></li>
                            <li><a href="#" class="nav-link active text-primary">Salary</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-calendar-check me-2"></i> Attendance</a>
                        <ul class="nav flex-column ps-3">
                            <li><a href="#" class="nav-link">Routine</a></li>
                            <li><a href="#" class="nav-link">Overtime</a></li>
                            <li><a href="#" class="nav-link">One-time</a></li>
                            <li><a href="#" class="nav-link">Holiday</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            
                <!-- Top Menu -->
                <div class="d-flex justify-content-between align-items-center top-menu p-3">
                    <div>
                        <button class="btn btn-outline-secondary d-md-none" id="menuToggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span class="fs-5 fw-bold">Management</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-bell fa-lg"></i>
                        <i class="fa fa-globe fa-lg"></i>
                        <i class="fa fa-cog fa-lg"></i>
                        <img src="img/admin.jpeg" class="profile-img ms-3" alt="Profile">
                    </div>
                </div>
                <!-- Header Banner -->
                <div class="header-banner mb-4 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold mb-0">Salary</h4>
                        <small class="text-muted">Management • Salary</small>
                    </div>
                    <div>
                        <i class="fa fa-search fa-lg text-muted"></i>
                    </div>
                </div>
                <!-- Search and Table -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Search Here"><button id="addNew" class="btn btn-success">
                              <i class="fa fa-plus"></i> New
                            </button>
                        </div>
                       
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Employee</th>
                                    <th scope="col">Salary/hour</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="salaryTable">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        Reyhan Angka
                                    </td>
                                    <td>Rp 35.000</td>
                                    <td>
                                        <span class="role-badge">CEO</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        Rana Andara
                                    </td>
                                    <td>Rp 70.000</td>
                                    <td>
                                        <span class="role-badge">Sekertry</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        wawan Antan
                                    </td>
                                    <td>Rp 65.000</td>
                                    <td>
                                        <span class="role-badge">Disigner</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        Soni Sumarga
                                    </td>
                                    <td>Rp 65.000</td>
                                    <td>
                                        <span class="role-badge">Disigner</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        Doni Sumarga
                                    </td>
                                    <td>Rp 65.000</td>
                                    <td>
                                        <span class="role-badge">Disigner</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
                                        Doni Sumarga
                                    </td>
                                    <td>Rp 65.000</td>
                                    <td>
                                        <span class="role-badge">Disigner</span>
                                    </td>
                                    <td>
                                        <i class="fa fa-trash icon-delete" onclick="deleteRow(this)"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Script -->
    <script>
                // Sidebar Toggle for Mobile
                $("#menuToggle").on("click", function () {
            $(".sidebar").toggleClass("d-none");
        });

        // Search Functionality
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#salaryTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });


        let idCounter = 2; // Incrementing ID for new entries

// Add New Row
$("#addNew").click(function () {
  let newRow = `
    <tr>
      <td>${idCounter}</td>
      <td>
        <img src="img/user.jpeg" class="employee-img me-2" alt="Avatar">
        Employee ${idCounter}
      </td>
      <td>Rp 30.000</td>
      <td><span class="badge bg-secondary">Staff</span></td>
      <td>
       <i class="fa fa-trash icon-delete" onclick="deleteRow(this)">
      </td>
    </tr>`;
  $("#salaryTable").append(newRow);
  idCounter++;
});
        // Delete Row Functionality
        function deleteRow(icon) {
            $(icon).closest("tr").remove();
        }
    </script>
</body>
</html>
