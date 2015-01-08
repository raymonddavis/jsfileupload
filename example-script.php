<?php
rename($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
echo $_FILES['file']['name'];
?>