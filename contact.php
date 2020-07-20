
<?php require "back/layouts/header.php" ?>
  <main>
    <div class="contact" method="post">
      <fieldset>
        <legend>Vos coordonnées</legend>
        <div class="colonne">
          <!--bouton type pour choisir son genre-->
          <p>
            <input type="radio" name="civilite" value="M." id="monsieur">
            <label for="monsieur" class="petit">M.</label>
            <input type="radio" name="civilite" value="Mme" id="madame">
            <label for="madame" class="petit">Mme</label>
          </p>      
          <p>
            <!--Ici input nom/prénom ainsi que pour l'objet du message et le message-->
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" placeholder="Nom de famille" required>
            <span id="missNom"></span><br>
          </p>
          <p>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <span id="missprenom"></span><br>
          </p>
          <p>
            <label for="phone">Téléphone :</label>
            <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone" required>
            <span id="missPhone"></span><br>
          </p>
          <p>
            <label for="street">Adresse :</label>
            <input type="text" name="street" id="street" placeholder="Votre adresse" required>
            
            <p id="search"></p>
          </p>
          <p>
            <label for="mail">Mail :</label>
            <input type="email" name="mail" id="mail" placeholder="Votre e-mail" required>
            <span id="mailError"></span><br>
          </p>
        </div>
      </fieldset>
      <fieldset>
        <legend>Votre Message</legend>
        <div>
          <p>
            <label for="objetmessage">Objet :</label>
            <input type="text" name="objetmessage" id="objetmessage" placeholder="Objet du message">
          </p>
          <p>
            <label for="message">Message :</label>
            <textarea name="message" id="message" placeholder="Veuillez taper votre message" cols="100" rows="10"></textarea>
          </p>
        </div>
      </fieldset>
        <p class="bouton">
            <button id="submit">Go</button>
            <input type="reset" value="Annuler">
        </p>
    </div>
  </main>
<?php require "back/layouts/footer.php" ?>
  <script src="public/js/creds.js"></script>
  <script src="public/js/apislack.js"></script> 
  <script src="public/js/api.js"></script>
  <script src="public/js/regex.js"></script>
  <script src="public/js/active.js"></script>


  <script>menuAct(4);</script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
  
</body>
</html>