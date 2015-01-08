<?php
unlink($_FILES['file']['tmp_name']);
echo $_FILES['file']['name'];
?>