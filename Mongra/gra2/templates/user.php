<?php if (isset($out['id'])): ?>

<!--- Profil użytkownika i jego zasoby -->
<div class="user">
    <div class="user__row user__row--differentColor"><h2> Witaj <?=$out['user']?>! </h2> </div>
    <div class="user__row user__row--content">
        <div class="user__content">
            <div> <?= image("drewno.png")  ?> </div>
            <?= $out['drewno'] ?>
        </div>
        <div class="user__content user__content--different">
            <div> <?= image("kamien.png")  ?> </div>
            <?= $out['kamien'] ?>
        </div>
        <div class="user__content">
            <div> <?= image("zboze.png")  ?> </div>
            <?= $out['zboze'] ?>
        </div>
    </div>
    <div class="user__row user__row--differentColor">
        <p><b>Email:</b> <?= $out['email'] ?> </p>
    </div>
    <div class="user__row">
        <p><b>Dni premium:</b> <?= $out['dnipremium'] ?> </p>
    </div>
</div>
</br> </br>
<?php else: ?>
<h1><i>Aby wyświetlić swój profil musisz się zalogować</i> </br></br></h1>
<?php endif ?>