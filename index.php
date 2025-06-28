<?php include 'partials/_dbconnect.php';?>
<?php include 'partials/_header.php';?>
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1200x400/?coding,python" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400/?coding,html" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400/?coding,react" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container">
    <h3 class="text-center my-5">IAdiscuss - Browse Categories </h3>
    <div class="row">
    <?php
    $sql="SELECT * FROM `threadlists`";
    $result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $cattitle= $row['cat_title'];
        $catdesc= $row['cat_desc'];
        $catid= $row['cat_id'];

        echo '<div class="col-md-4">
        <div class="card">
        <img src="https://source.unsplash.com/700x400/?'.$cattitle.',coding" class="card-img-top" alt="image">
        <div class="card-body">
          <h5 class="card-title"><a href="threadlist.php?catid='.$catid.'">'.$cattitle.'</a></h5>
          <p class="card-text">'.substr($catdesc,0,96).'...</p>
          <a href="threadlist.php?catid='.$catid.'" class="btn btn-success">Explore thread</a>
        </div>
      </div>
      </div>';
    }
    ?>
    </div>
</div>
<?php include 'partials/_footer.php';?>