<?php include("db.php")?>

<?php include("includes.php/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])) {?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Indique un Título" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Escriba la descripción aquí"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Enviar" >
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class= "table table-bordered">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Creado a...</th>
                        <th>Edita/Elimina</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query ="SELECT * FROM task";
                        $result_tasks = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tasks)) { ?>
                            <tr>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $row['created_at']?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class = "fas fa-marker"></i>                                   
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class = "far fa-trash-alt"></i>                                    
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
                </table>
        </div>
        <!--Prueba-->
        <td>
             <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
             <i class = "fas fa-magic"></i>                                   
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-warning">
             <i class = "fas fa-heartbeat"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-success">
             <i class = "fas fa-cat"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
             <i class = "fas fa-brain"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-info">
             <i class = "fas fa-leaf"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-primary">
             <i class = "fas fa-sign-language"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-dark">
             <i class = "fas fa-hat-wizard"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-light">
             <i class = "fas fa-star"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-info">
             <i class = "far fa-star"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
             <i class = "fas fa-user-astronaut"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-dark">
             <i class = "fas fa-hand-spock"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-primary">
             <i class = "fab fa-galactic-republic"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-warning">
             <i class = "fas fa-barcode"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-success">
             <i class = "fas fa-paper-plane"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-primary">
             <i class = "fas fa-cookie"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-light">
             <i class = "fas fa-hamburger"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
             <i class = "fas fa-cloud-meatball"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-warning">
             <i class = "fas fa-spa"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-dark">
             <i class = "fas fa-cocktail"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-secondary">
             <i class = "fas fa-plane-departure"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-light">
             <i class = "fas fa-passport"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-primary">
             <i class = "fas fa-swimmer"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning">
             <i class = "far fa-comments"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger">
             <i class = "fas fa-microphone-alt"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-link">
             <i class = "fas fa-bullseye"></i>                                    
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-primary">
             <i class = "far fa-check-circle"></i>                                  
             </a>
             <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning">
             <i class = "far fa-check-circle"></i>                                  
             </a>
         </td>
    </div>
</div>
<?php include("includes.php/footer.php") ?>