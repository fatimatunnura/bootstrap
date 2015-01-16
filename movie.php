
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

</head>
<body>
<header class="container">



</header>
<?php
$films=array(
   array('title'=>'funnymovie 3',
    'genre'=>'comedy',
    'stars'=>array('leading actress','leading actor'.'expendable dude','somebody else')),
        array('title'=>'fright nite',
            'genre'=>'horror',
            'stars'=>array('leading actress','leading actor'.'expendable dude','somebody else'))



);
?>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Films</div>

                <!-- Table -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>genre</th>
                        <th>stars</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($films as $value){ ?>
                        <tr>
                            <td><?php echo $value['title']?></td>
                            <td><?php echo $value['genre']?></td>
                            <td>
                                <?php foreach($value['stars'] as $mov){?>
                                <ul>
                                    <li>
                                        <?php echo $mov?>
                                    </li>
                                </ul>
                                <?php } ?>

                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<footer class="container">

</footer>
</body>

</html>