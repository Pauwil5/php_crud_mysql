<?php
    include("db.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("Query Failed");
        }
        $_SESSION['message'] = 'Tarea Removida Exitosamente en Prim Prueba';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

?>