<?php

requireGet('mail');
requireGet('password');
requireGet('weight');
requireGet('calc');

DB::query('INSERT INTO users VALUES(null, "'.$_GET['mail'].'", "'.md5($_GET['password']).'", "'.$_GET['weight'].'", "'.$_GET['calc'].'")');

echo "Udało sie stworzyc profil.";