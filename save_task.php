<?php 

include_once 'db.php';

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Erro ao conectar-se ao Banco de Dados.');
    }

    $_SESSION['message'] = 'Tarefa Salva com Sucesso!';
    $_SESSION['message_type'] = 'success';

    header('Location: index.php');
}