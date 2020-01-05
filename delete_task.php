<?php

include_once 'db.php';

 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = "DELETE FROM task WHERE id = $id";
     $result = mysqli_query($conn, $query);

     if (!$result) {
         die('Falha ao deletar!');
     }

     $_SESSION['message'] = 'Tarefa Excluída com Sucesso!';
     $_SESSION['message_type'] = 'danger';
     header('Location: index.php');
 }

?>