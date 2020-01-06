<?php

include_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}

?>

<?php include_once"includes/header.php"; ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Atualizar Título">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2"><?php echo $description; ?></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once"includes/footer.php"; ?>