
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"> -->
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Home Maintenance</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#floor" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-building me-2"></i>
                           Floor Info
                        </a>
                        <ul id="floor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="floor_list.php" class="sidebar-link">Floor List</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="floor_add.php" class="sidebar-link">Add Floor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#unit" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-coins me-2"></i>
                            Unit Info
                        </a>
                        <ul id="unit" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 2</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Post 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#owner" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-user me-2"></i>
                            Owner
                        </a>
                        <ul id="owner" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Unit Details</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Renter Details</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Employee Info</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Rent Statement</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Owner Utility</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">maintence Cost</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#tenant" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-users me-2"></i>
                            Tenant
                        </a>
                        <ul id="tenant" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Rent Statement</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Tenant Details</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Tenant Complain</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#employee" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-user-tie me-2"></i>
                            Employee
                        </a>
                        <ul id="employee" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Tenant Details</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Management Commitee</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Owner Details</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Visitor</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Salary Statement</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#service" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-brands fa-servicestack me-2"></i>
                            Service
                        </a>
                        <ul id="service" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Register</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#notice" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-pen me-2"></i>
                            Notice Board
                        </a>
                        <ul id="notice" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Register</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="branch.php" class="sidebar-link">
                        <i class="fa-solid fa-code-branch"></i>
                            Branch
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="register.php" class="sidebar-link">
                        <i class="fa-solid fa-registered"></i>
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </aside>