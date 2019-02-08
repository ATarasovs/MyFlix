<?php
    /**
     * Created by PhpStorm.
     * User: atara
     * Date: 2/7/2019
     * Time: 22:27
     */

    include '../include/header.php';

    $videos = $videosCollection->find();
?>

<table>
    <?php foreach ($videos as $video) { ?>
        <tr>
            <td><?php echo $video['Name']; ?></td>
            <td><a href="videoWatch.php?id=<?php echo $video['_id']; ?>">Watch Video</a></td>
        </tr>
    <?php } ?>
</table>

<?php include '../include/header.php'; ?>