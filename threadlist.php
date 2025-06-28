<?php include 'partials/_dbconnect.php'; ?>
<?php include 'partials/_header.php'; ?>


<div class="container mt-5">
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threadlists` WHERE `cat_id`=$id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $cattitle = $row['cat_title'];
        $up_date = $row['dt'];
        $catdesc = $row['cat_desc'];
        $catid = $row['cat_id'];

        echo '<div class="card mb-3" >
        <div class="row">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/650x400/?'.$cattitle.',coding" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Welcome to ' . $cattitle . ' forums</h5>
                    <p class="card-text">' . $catdesc . '</p>
                    <p class="card-text"><small class="text-muted">Last updated ' . $up_date . '</small></p>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>


    <h3 class="my-5 text-center">Browse Questions</h3>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE `thread_cat_id`=$id";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['thread_id'];
        $thtitle=$row['thread_title'];
        $thdesc=$row['thread_desc'];

    echo '<div class="media d-flex">
        <div class="media-left px-2">
            <img src="partials/images/user-1.jpg" class="media-object" style="width:60px">
        </div>
        <div class="media-body px-2">
            <a href="thread.php?threadid='.$id.'"><h5 class="media-heading">'.$thtitle.'</h5></a>
            <p>'.substr($thdesc,0,90).'...</p>
        </div>
    </div>';
    }
    ?>

</div>






















<?php include 'partials/_footer.php'; ?>