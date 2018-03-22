<?php

$id = requireLogin();
requireGet('weight');
requireGet('calc');

DB::query('UPDATE  users SET  weight = "'.$_GET['weight'].'", calc = "'.$_GET['calc'].'" WHERE ID = "'.$id.'"');
