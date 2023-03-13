<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Employee payment schedule</title>
</head>
<?php require 'sales_staff.php';?>
<body class="container">
<h1 class="text-center">Payment date for <?php echo date("Y"); ?> </h1>

<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Month Name</th>
        <th>Salary payment date</th>
        <th>Bonus payment date</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($data as $monthsData){
    ?>
    <tr>
        <?php
            foreach($monthsData as $value){
        ?>
        <td><?php echo $value ;?></td>
    <?php
    }
    ?>
    </tr>
    <?php
    }
    ?>
    </tr>
    </tbody>
    
</table>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.mark.min.js"></script>
<script type="text/javascript" src="js/datatables.mark.js"></script>
<script type="text/javascript" src="js/buttons.colVis.min.js"></script>
</body>

</html>