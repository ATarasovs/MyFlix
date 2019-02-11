<?php
    /**
     * Created by PhpStorm.
     * User: atara
     * Date: 2/7/2019
     * Time: 22:27
     */

    include '../include/header.php';
    $videoTitle = $_GET['title'];
    if ($videoTitle == null || $videoTitle == "") {
        $videos = $videosCollection->find();
    }
    else {
        $videos = $videosCollection->find(["name" => $videoTitle]);
    }
?>

<div class="container">
    <ul class="list-unstyled video-list-thumbs row">
        <?php foreach ($videos as $video) { ?>
            <li class="col-lg-4 col-sm-6 col-xs-12">
                <a href="videoWatch.php?id=<?php echo $video['_id']; ?>" title="<?php echo $video['Name']; ?>">
                    <img src="<?php echo $video['ip']?>/images/<?php echo $video['image']; ?>" alt="<?php echo $video['Name']; ?>" class="img-responsive" height="130px" />
                    <h2><?php echo $video['Name']; ?> <small>(<?php echo $video['category']; ?>)</small></h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="duration"><?php echo $video['duration']; ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<table>

<?php include '../include/footer.php'; ?>