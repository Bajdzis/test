<?php if (isset($out['id'])): ?>

<!--- Profil użytkownika i jego zasoby -->
<div id="user">
    <div id="welcome"><h2> Witaj <?=$out['user']?>! </h2> </div>
    <div class="col">
       <?= image("drewno.png")  ?>
        <?= $out['drewno'] ?>
    </div>
    <div class="coll">
        <?= image("kamien.png")  ?>
        <?= $out['kamien'] ?>

    </div>
    <div class="col">
        <?= image("zboze.png")  ?>
        <?= $out['zboze'] ?>
    </div>
    <div class="roww">
        <p><b>Email:</b> <?= $out['email'] ?> </p>
    </div>
    <div class="row">
        <p><b>Dni premium:</b> <?= $out['dnipremium'] ?> </p>
    </div>
</div>
</br> </br>
<?php else: ?>
<h1><i>Aby wyświetlić swój profil musisz się zalogować</i> </br></br></h1>
<?php endif ?>