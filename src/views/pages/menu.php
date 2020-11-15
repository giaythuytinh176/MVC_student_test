<?php

use MVC\controllers\UrlControllers;

?>
<br>
<!-- A horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark">
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= UrlControllers::url("homepage");?>">Homepage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= UrlControllers::url("liststudent");?>">List Student</a>
        </li>
    </ul>
</nav>