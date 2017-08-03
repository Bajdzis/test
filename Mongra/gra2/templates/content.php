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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates consequuntur sapiente rem provident magni dolores ad recusandae eligendi maiores quis odit porro obcaecati atque ullam ipsum placeat quibusdam quia similique nulla, error laborum quisquam est veniam veritatis. Illo voluptatibus nostrum rem necessitatibus, distinctio cum quia eligendi, ex repudiandae commodi beatae?</p>
    </br>
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
    W grze Osadnicy Online możesz zbudować swoją osadę. Zbieraj surowce, buduj domy i podbijaj wioski innych użytkowników!
    </br> </br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora saepe, quo reiciendis esse totam dicta porro sunt consectetur in consequatur impedit sed neque harum? Ex nobis maxime dicta magnam sed! Iste placeat aliquam facere quas consectetur animi quo, modi velit in sint vitae nam laborum officia est magni cumque similique ab earum eos incidunt optio consequatur. Hic porro ratione ducimus nesciunt ipsa repellendus, excepturi cum laudantium, architecto laborum dignissimos magnam facere at voluptatem perspiciatis dolores similique ipsam fugit. Dignissimos vel ratione, possimus impedit dicta quo quibusdam atque incidunt aspernatur? Officia eveniet commodi sed neque ut hic molestiae quaerat distinctio sequi.</p>
<?php endif ?>
