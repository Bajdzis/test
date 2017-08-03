<!-- Dane o użytkowniku -->
<?php include 'user.php' ?>

<!-- Lista użytkowników -->
<?php if ($out['page'] === 'users'): ?>
    <table>
    <tr>
        <td><h1>Nazwa użytkownika</h1></td>
        <td><h1>Ilość drewna</h1></td>
    </tr>
<?php foreach ($out['listUser'] as $klucz => $wartosc): ?>
    <tr>  
        <td> <?=  $wartosc['name'] ?></td> 
        <td> <?=  $wartosc['drewno'] ?></td>        
    </tr>
<?php endforeach ?>
    </table>
<?php endif ?>

<?php if ($out['page'] === 'index'): ?>
<!-- Strona główna -->
    <img src="templates/images/osada.jpg" alt="Rysunek osady" id="image_village">
<?php endif ?>

<?php if (isset ($out['succecLogout']) && $out['succecLogout'] === true): ?>
<!-- Wylogowywanie -->
    Zostałeś pomyślnie wylogowany
<?php endif ?>

<?php if ($out['page'] === 'login'): ?>
<!-- Zalogowany -->
    Możesz obejrzeć zgromadzone zasoby
<?php endif ?>

<?php if ($out['page'] === 'game'): ?>
<!-- Informacje o grze -->
    <h2> W grze Osadnicy Online możesz zbudować swoją osadę. Zbieraj surowce, buduj domy i podbijaj wioski innych użytkowników! </h2>
<?php endif ?>
