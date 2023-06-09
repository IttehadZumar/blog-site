<?php include "pages/template-parts/head.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs->blogs as $blog){ ?>
            <div class="col-md-4 pb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $blog["img"]; ?>" class="card-img-top w-100" height="200px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $blog["title"]; ?></h5>
                        <p class="card-text"><?php echo $blog["sd"]; ?></p>
                        <a href="?page=details&img=<?php echo $blog["img"]; ?>&fitle=<?php echo $blog["title"]; ?>&ld=<?php echo $blog["ld"]; ?>" class="btn btn-primary">Show Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "pages/template-parts/footer.php"; ?>