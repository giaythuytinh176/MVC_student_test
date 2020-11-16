<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
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
<h3>Add Student</h3>

<form method="post">

    <table class="table table-bordered">
        <thead class="black white-text">
        <tbody>

        <?php
        foreach ($data[0] as $k => $v) {
        ?>
        <tr>
        <th scope="col"><?= $v; ?></th>
        <?php
        if ($v == "Gender") {
            echo "<td>
                            <select name='" . $v . "'>
                            <option value='Male' selected>Male</option>
                            <option value='Female'>Female</option>
                            </select>
                        </td>";
        } else echo '<td scope="col"><input type="text" name="' . $v . '"></td>';
        ?>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </thead>

        <tr>
            <th colspan="2">
                <div class="form-row text-center">
                    <div class="col-12">
                        <button class="btn btn-primary" name="btn" value="submit" type="submit">Submit</button>
                    </div>
                </div>
            </th>
        </tr>

    </table>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>
</html>