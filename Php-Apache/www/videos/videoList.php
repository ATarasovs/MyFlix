<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 2/7/2019
 * Time: 22:27
 */

    include '.. /config/mongo_connect.php';

//    $videosQuery = array('Name' => 'Big Buck Bunny');
    $videos = $videosCollection->find();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <table>
            <?php foreach ($videos as $video) { ?>
                <tr>
                    <td><?php echo $video['Name']; ?></td>
                    <td><a href="videoWatch.php?id=<?php echo $video['_id']; ?>">Watch Video</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

<!--<html>-->
<!--<body> -->
<!--<video width="400" controls>-->
<!--  <source src="http://35.246.5.249:8888/bunny.mp4" type="video/mp4">-->
<!--  Your browser does not support HTML5 video.-->
<!--</video>-->
<!---->
<!--<a href="http://35.246.5.249:8888/bunny.mp4">Big Buck Bunny</a>-->
<!--</body> -->
<!--</html>-->