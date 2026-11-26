<?php
include 'inc/header.php';
echo '<header class = "head">';
echo '<p>Extra info kan hier</p>';
echo '</header>';

echo '<main class = "main-content">';
echo '<div id = "formDetail">';
?>
<div>
    <form action = "dataverwerken.php" method = "post" class = "frmDetail">
        <input type = "hidden" name = "action" value = "insertKlant">
        <label for = "fklantnaam">Naam klant: </label>
        <input type = "text" name = "klantnaam" value = "" id ="fklantnaam" placeholder = "Volledige naam klant..." required>
        <label for = "fcontactpersoon">Contactpersoon:</label>
        <input type = "text" name = "contactpersoon" id = "fcontactpersoon">
        <label for = "fstraat">Straat:</label>
        <input type = "text" name = "straat" id = "fstraat">
        <label for = "fhuisnummer">Huisnummer:</label>
        <input type = "text" name = "huisnummer" id = "fhuisnummer">
        <label for = "ftoevoeging">Toevoeging:</label>
        <input type = "text" name = "toevoeging" id = "ftoevoeging">
        <label for = "fpostcode">Postcode:</label>
        <input type = "text" name = "postcode" id = "fpostcode">
        <label for = "fplaats">Plaats:</label>
        <input type = "text" name = "plaats" id = "fplaats">
        <label for = "ftelefoon">Telefoonnr:</label>
        <input type = "text" name = "telefoon" id = "ftelefoon">
        <label for = "fnotitie">Emailadres:</label>
        <input type = "text" name = "notitie" id = "fnotitie">
        <div class = "submitbtn">   
            <input type = "submit" name = "submit" value = "Opslaan" class = "btnDetailSubmit">
        </div>
    </form>
</div>

</div>
</main>
<?php 
    include 'inc/footer.php';
?>