<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            label{
                width: 4em;
                float: left;
                text-align: right;
                margin-right: 0.5em;
                display: block
            }
        </style>

    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">MITWPU ERP
             




            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            
            </ul>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Student details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="student-details.php">PERSONAL</a>
                                    <a class="nav-link" href="academic-details.php">ACADEMIC</a>
                                
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Modify
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="insert.php">Insert student,marks</a>
                                    <a class="nav-link" href="update.php">Update</a>
                             </nav>
                            </div>

                            <a class="nav-link" href="projects.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Projects
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="results.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Results
                            </a>
                            <a class="nav-link" href="delete.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Delete Info
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:user1</div>
                       
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 ">
                        <h1 class="mt-4 customColor">Delete Student Details</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                Enter the student PRN
                            </div>
                        </div>
                         
                        <form action="deleteStudent.php" method="post">     
                            <div style="text-align:centre">

                                    <div >
                                        <label class="customColor" style="text-align: center;">PRN</label>
                                        <input type="text" name="prn" id="">  
                                    </div>

                            <input type="submit" name="button2"
                            class="button" value="Delete">
                            
                        </form>
                            
                        <div class="details">
                        
                        <h2 class="customColor">Student Details</h2>

                        <table class="table table-dark">
                            <tr>
                                <th>PRN</th>
                                <th>Student Name</th>
                                <th>Date of Birth</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Department</th>
                            </tr>

        
                            <?php
                            $baseq="SELECT * FROM student";
                            // $query = $baseq."where ind < 21";
                            function button($query,$b,$e){
                        
                            //include "dbConn.php"; // Using database connection file here
                            $db = mysqli_connect("localhost","root","","studenterp_final");

                            $records = mysqli_query($db, $query); // fetch data from database
                                $i=1;
                            while($data = mysqli_fetch_array($records))
                            {
                                if($i>$e)
                                    break;
                            
                                if($i>=$b)
                                {
                            ?>
                            <tr>
                                <td><?= $data['prn'] ?></td>
                                <td><?= $data['studName'] ?></td>
                                <td><?= $data['dob'] ?></td>
                                <td><?= $data['emailID'] ?></td>
                                <td><?= $data['mobNo'] ?></td>
                                <td><?= $data['dept_id'] ?></td>
                            </tr>	
                            <?php
                                }
                                $i++;
                            }
                            ?>
                        </table>

                        <?php mysqli_close($db);} // Close connection ?>
                        <?php
                        if(array_key_exists('button1', $_POST)) {
                            button1();
                        }
                        function button1() {
                            global $baseq;
                            $query = $baseq;
                            button($query,1,20);
                        }
                        ?>


                        <form method="post">
                            <input type="submit" name="button1"
                            class="button" value="View" />
                </div>

                        </div>
                        <div class="details">
                        
                     
                    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
