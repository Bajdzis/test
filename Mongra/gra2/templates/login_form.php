<?php if (isset($out['id']) === false): ?>
<!--- Formularz logowania -->

<div class="logowanie">
    <h2> Zaloguj się! </h2>
    <form action="index.php?page=login" method="post">
        <p> Login
        <input type="text" name="login" /> </p>
        <br /><br />
        <p> Hasło
        <input type="password" name="haslo"> </p>
        <br /><br />
        <input id="log_in" type="submit" value="Zaloguj się" />
    </form>
</div>


<?php else: ?>
    <div class="logowanie">
    <h1>Jesteś zalogowany</h1>
</div>
<?php endif; ?>

