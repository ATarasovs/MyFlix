<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 2/7/2019
 * Time: 22:27
 */

include '../include/header.php';

$videos = $videosCollection->find();
$count = 0;
?>
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($videos as $video) {
                if ($count == 0) { ?>
                    <div class="carousel-item active">
                        <a href="videoWatch.php?id=<?php echo $video['_id']; ?>">
                            <img height="800px" src="<?php echo $video['ip']?>/images/<?php echo $video['image']; ?>" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <?php $count++;
                }
                else { ?>
                    <div class="carousel-item">
                        <a href="videoWatch.php?id=<?php echo $video['_id']; ?>">
                            <img height="800px" src="<?php echo $video['ip']?>/images/<?php echo $video['image']; ?>" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <?php $count++;
                }
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Movie Title">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Genre</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include '../include/footer.php'; ?>