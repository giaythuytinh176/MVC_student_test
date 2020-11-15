<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .table {
            margin: auto;
            width: 75% !important;
        }
    </style>


</head>


<body>
<?php

include_once "menu.php";

?>
<br>
<h3>List Student</h3>

<?php

if (is_array($studentlist)) {

    ?>

    <table class="table table-bordered">
        <thead class="black white-text">
        <tr>
            <th scope="col">#</th>

            <?php

            $keyList = array_keys($studentlist[0]);
            foreach ($keyList as $value) {
                ?>
                <th scope="col"><?= $value; ?></th>
                <?php
            }

            ?>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($studentlist as $key => $val) {
            echo "<tr>";
            echo "<th scope=\"row\">" . ($key + 1) . "</th>";
            foreach ($val as $v) {
                echo "<td>" . $v . "</td>";
            }
            echo "<td><a href='liststudent/edit/" . $val['StudentID'] . "'><button type=\"button\" class=\"btn btn-success\">Edit</button></a> &nbsp; <a href='liststudent/delete/" . $val['StudentID'] . "'><button type=\"button\" class=\"btn btn-danger\">Delete</button></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <?php

} else {

    ?>

    <br>
    <div class="alert alert-primary" align="center" role="alert">
        <?= $studentlist ?>
    </div>

    <?php

}

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>