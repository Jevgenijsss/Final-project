<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'comment_section');


if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}