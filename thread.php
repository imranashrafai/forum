<?php include 'partials/_dbconnect.php'; ?>
<?php include 'partials/_header.php'; ?>


<div class="container mt-5">
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE `thread_id`=$id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $cattitle = $row['thread_title'];
        $catdesc = $row['thread_desc'];
        $up_date = $row['dt'];

        echo '<div class="card mb-3" >
        <div class="row">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/650x400/?'.$cattitle.',coding" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">' . $cattitle . '</h5>
                    <p class="card-text">' . $catdesc . '</p>
                    <p class="card-text"><small class="text-muted">Last updated ' . $up_date . '</small></p>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>


    <h3 class="my-5 text-center">Discussion</h3>
    
</div>






















<?php include 'partials/_footer.php'; ?>