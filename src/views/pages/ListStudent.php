<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Student</title>
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
<a href="liststudent/add">Add Student</a>

<?php

if (is_array($data[0])) {

    ?>

    <table class="table table-bordered">
        <thead class="black white-text">
        <tr>
            <th scope="col">#</th>

            <?php

            $keyList = $this->studentmodels->getStudentColumModels();
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

        foreach ($data[0] as $key => $val) {
            echo "<tr>";
            echo "<th scope=\"row\">" . ($key + 1) . "</th>";
            echo "<td>" . $val->getStudentID() . "</td>";
            echo "<td>" . $val->getFirstName() . "</td>";
            echo "<td>" . $val->getLastName() . "</td>";
            echo "<td>" . $val->getBirthday() . "</td>";
            echo "<td>" . $val->getGender() . "</td>";
            echo "<td>" . $val->getAddress() . "</td>";
            echo "<td>" . $val->getBirthplace() . "</td>";
            echo "<td>" . $val->getFacID() . "</td>";
            echo "<td><a href='liststudent/edit/" .  $val->getStudentID() . "'><button type=\"button\" class=\"btn btn-success\">Edit</button></a> &nbsp; <a href='liststudent/delete/" .  $val->getStudentID() . "'><button type=\"button\" class=\"btn btn-danger\">Delete</button></td>";
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
        <?= $data[0] ?>
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