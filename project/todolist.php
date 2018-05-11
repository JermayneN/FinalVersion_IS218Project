<?php include 'header.php';
 ?>
 
 <div class="wrapper">
        <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
          
            <div class="logo">
                <a href="https://web.njit.edu/~jdn23/IS218FinalProject/v3/BS4/project/todolist.php" class="simple-text logo-normal">
                    Welcome, <?php echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName'])?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://web.njit.edu/~jdn23/IS218FinalProject/v3/BS4/project/backend/logout.php">
                            <i class="material-icons">dashboard</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="main-panel">
            <?php if(count($todos) == 0):
            ?>
              <p class="card-text">You don't have any thing to do.</p>
            <?php else: 
            ?>          
            
                  <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                    
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Incomplete Tasks:</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <?php foreach($todos as $todo): ?>
                                                    <?php if(!$todo['isdone']):  ?>
                                                    <tr>
                                                    <?php if((int)$todo['id'] == $edit_id): ?>
                                                    <form class="form" action="." method="POST">

                                                    <input type="hidden" name="action" value="edit_todo">
                                                    <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                                                        <td>
                                                            <input type="text" class="form-control" name="title" value="<?php echo $todo['message'] ?>">
                                                        </td>
                                                        <td>
                                                            <?php echo date("F d Y", strtotime($todo['createddate'])) ?> 
                                                        </td>
                                                        <td>
                                                            <input type="datetime-local" class="form-control" name="due-date" value="<?php echo date("Y-m-d\TH:i", strtotime($todo['duedate'])) ?>">
                                                        </td>  //FIX 2 BUTTONS
                                                        <td class="td-actions text-right">
                                                            <button type="submit" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                            </form>
                                                        </td>
                                                        <?php else:  ?>
                                                        <td>
                                                            <?php echo $todo['message'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date("F d Y", strtotime($todo['createddate'])) ?>
                                                        </td>
                                                        <td>  
                                                            <?php echo date("m/d/Y g:ia", strtotime($todo['duedate'])) ?>
                                                        </td>

                                                        <td>
                                                    </tr>
                                                    
                                                    <?php endif; ?>
                                                    <?php endforeach;  ?>
                                          </tbody>
                                          </table>
                                     </div>
                                  </div>   
                                </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                  
    <?php include 'footer.php'; ?>