<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
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

if (!empty($params)) {

    ?>

    <br>
    <h3>Edit Student</h3>

    <?php
    if (is_array($editmodels)) {
        ?>

        <form method="post">
            <table class="table table-bordered">
                <thead class="black white-text">
                <tr>
                    <?php

                    $keyList = array_keys($editmodels);
                    foreach ($keyList as $value) {
                        ?>
                        <th scope="col"><?= $value; ?></th>
                        <?php
                    }
                    ?>
                    <!--                    <th></th>-->
                </tr>
                </thead>
                <tbody>
                <?php

                echo "<tr>";
                foreach ($editmodels as $key => $val) {
                    if ($key == "StudentID") {
                        echo "<td><input type=\"text\" name=\"" . $key . "\" class=\"form-control\" value=\"" . $val . "\" readonly></td>";
                    } else echo "<td><input type=\"text\" name=\"" . $key . "\" class=\"form-control\" value=\"" . $val . "\"></td>";
                }
                //echo '<td><button type="button" class="btn btn-primary">Submit</button></td>';
                //echo '<td><input type="submit" name="btn" class="btn btn-primary" value="Submit">&nbsp;<a href="javascript:history.go(-1)" class="btn btn-warning">Cancel</a></td>';
                echo "</tr>";

                ?>
                </tbody>
            </table>
            <br>
            <div class="col-sm-offset-2 col-xs-6">
                <button type="submit" class="btn btn-success form-control" value="submit" name="btn">Submit</button>
            </div>
            <div class="text-center"><a href="javascript:history.go(-1)" class="btn btn-warning">Cancel</a></div>
        </form>

        <?php
    } else {
        ?>
        <br>
        <div class="alert alert-danger" align="center" role="alert">
            <?= $editmodels ?><br>
        </div>
        <div align="center"><a href="javascript:history.go(-1)" class="btn btn-warning">Back</a>
        </div>
        <?php
    }

} else {
    ?>
    <br>
    <div class="alert alert-danger" align="center" role="alert">
        <?= $editmodels ?>
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