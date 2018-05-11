 <?php include 'header.php';
 ?>
 
 <div class="wrapper">
        <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="https://web.njit.edu/~jdn23/IS218FinalProject/v3/BS4/project/mainpage.php" class="simple-text logo-normal">
                    To Do App Main
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="../project/login.php">
                            <i class="material-icons">dashboard</i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="../project/register.php">
                            <i class="material-icons">person</i>
                            <p>Register</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="">Please Log In</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Login In</h4>
                                </div>
                                <div class="card-body">
                                    <form action="." method="POST">
                                    <input type="hidden" name="action" value="login"></input>
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="************">
                                                </div>
                                            </div>
                                         </div>   
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Log In</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>