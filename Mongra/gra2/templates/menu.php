<div id="menu">
    <a href="index.php"> <div class="button"> Strona Główna </div> </a>
    <a href="index.php?login"> <div class="button"> Twoje konto </div> </a>
    <a href="index.php?page=users"> <div class="button"> Użytkownicy </div> </a>
    <?php if (isset($out['id'])) { ?>
        <a href="index.php?page=logout"> <div class="button"> Wyloguj </div> </a>
    <? } else { ?>
        <a href="index.php?page=game"> <div class="button"> O grze </div> </a>
    <?php } ?>
</div>
