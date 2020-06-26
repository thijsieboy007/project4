<link rel="stylesheet" href="./css/contactpagina.css">

<div class="container">

<h1>Contact formulier</h1>

 

    <label for="voornaam">Voornaam:</label>
    <input type="text" id="voornaam" name="voornaam" placeholder="Vul uw naam in...">

    <label for="achternaam">Achternaam:</label>
    <input type="text" id="achternaam" name="achternaam" placeholder="Vul uw achernaam in...">

    <label for="land">Land:</label>
    <select id="land" name="land">
      <option value="Nederland">Nederland</option>
      <option value="België">België</option>
    </select>

    <label for="subject">Probleem:</label>
    <textarea id="subject" name="subject" placeholder="Vul uw probleem in..." style="height:200px"></textarea>
 
    
    <a href="index.php?content=contact_formulier" class="button">Versturen</a>
    
</div>
