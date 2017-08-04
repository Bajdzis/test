<?php if (isset($out['id'])): ?>

<!--- Profil użytkownika i jego zasoby -->
<div id="user">
    <div class="roww"><h2> Witaj <?=$out['user']?>! </h2> </div>
    <div class="items">
        <div class="col">
        <div> <?= image("drewno.png")  ?> </div>
            <?= $out['drewno'] ?>
        </div>
        <div class="coll">
            <div> <?= image("kamien.png")  ?> </div>
            <?= $out['kamien'] ?>

        </div>
        <div class="col">
            <div> <?= image("zboze.png")  ?> </div>
            <?= $out['zboze'] ?>
        </div>
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