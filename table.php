<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Place(Bootstrap)</div>

    <!-- Table -->
    <table class="table">
        <thead>
        <tr>
            <th>City</th>
            <th>Country</th>
            <th>Continent</th>
        </tr>
        </thead>

        <tbody>
        <tr>

            <td>Tokyo</td>
            <td>Japan</td>
            <td>Asia</td>
        </tr>

        <tr>
            <td>Maxico city</td>
            <td>Maxico</td>
            <td>North America</td>
        </tr>
        <tr>
            <td>New York City</td>
            <td>USA</td>
            <td>North America</td>
        </tr>

        <tr>
            <td>Mumbai</td>
            <td>India</td>
            <td>Asia</td>
        </tr>

        <tr>
            <td>Seoul</td>
            <td>Korea</td>
            <td>North America</td>
        </tr>

        <tr>
            <td>Buens Aires</td>
            <td>Argentina</td>
            <td>South America</td>
        </tr>

        <tr>
            <td>London</td>
            <td>UK</td>
            <td>Europe</td>
        </tr>

        <tr>
            <td>Shanghai</td>
            <td>China</td>
            <td>Asia</td>
        </tr>

        <tr>
            <td>Cairo</td>
            <td>Egypt</td>
            <td>Africa</td>
        </tr>

        </tbody>
    </table>
<?php
    $place=array(
    array(

    'city'=>'Tokyo',
    'country'=>'Japan',
    'continent'=>'Asia',
    ),

    array(

    'city'=>'Maxico city',
    'country'=>'Maxico',
    'continent'=>'North America',
    ),


    array(

    'city'=>'New york city',
    'country'=>'USA',
    'continent'=>'North America',
    ),

    array(

    'city'=>'Mumbai',
    'country'=>'India',
    'continent'=>'Asia',
    ),

    array(

    'city'=>'Seoul',
    'country'=>'Korea',
    'continent'=>'Asia',
    ),

    array(

    'city'=>'London',
    'country'=>'UK',
    'continent'=>'Europe',
    ),

    array(

    'city'=>'Buens Aires',
    'country'=>'Argentina',
    'continent'=>'Africa',
    ),

    array(

    'city'=>'Cario',
    'country'=>'Egypt',
    'continent'=>'Africa',
    ),

    array(

    'city'=>'Lagos',
    'country'=>'Nigeria',
    'continent'=>'Africa',
    )
    );
?>
    <br><br>
    <div class="panel-heading">Place(PHP)</div>

    <!-- Table -->
    <table class="table">
        <thead>
        <tr>
            <th>City</th>
            <th>Country</th>
            <th>Continent</th>
        </tr>
        </thead>

        <tbody>


        <?php
        foreach($place as $key){ ?>
            <tr>
                <td><?php echo $key['city']?></td>
                <td><?php echo $key['country']?></td>
                <td><?php echo $key['continent']?></td>
            </tr>
       <?php } ?>


    </table>


</div>
</body>
</html>