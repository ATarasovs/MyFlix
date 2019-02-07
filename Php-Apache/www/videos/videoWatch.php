<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 2/7/2019
 * Time: 22:27
 */

    include '../config/mongo_connect.php';

    $videoId = $_GET['id'];
    $video = $videosCollection->findOne(array("_id" => new MongoId($videoId)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1><?php echo $video['Name']; ?></h1>
    <video width="400" controls>
        <source src="<?php echo $video['ip']?>/videos/<?php echo $video['file']; ?>" type="video/mp4">
    </video>
</body>
</html>
