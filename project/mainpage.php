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
                        <a class="navbar-brand" href="">Please Log In/Sign Up</a>
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
            
        </div>
    </div>
    
    <?php include 'footer.php'; ?>