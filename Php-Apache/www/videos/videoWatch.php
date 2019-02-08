<?php
    /**
     * Created by PhpStorm.
     * User: atara
     * Date: 2/7/2019
     * Time: 22:27
     */

    include '../include/header.php';

    $videoId = $_GET['id'];
    $video = $videosCollection->findOne(array("_id" => new MongoId($videoId)));
?>

<h1><?php echo $video['Name']; ?></h1>
<video id='my-video' class='video-js' controls preload='auto' width='640' height='264'
       poster="http://vjs.zencdn.net/v/oceans.png"  data-setup='{}'>
    <source src="<?php echo $video['ip']?>/videos/<?php echo $video['file']; ?>" type="video/mp4">
</video>

<?php include '../include/header.php'; ?>


