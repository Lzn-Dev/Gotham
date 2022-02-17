

<!-- FORMULAIRE CREATION DE PERSONNAGES // AJOUT DANS INDEX.PHP -->

<div class="container">
    <form action="../create.php" method="post">
        <h2>Créer votre personnage</h2>
        <div class="input-section">
            <div class="label-style">
                <label for="name">Nom :</label>
                <label for="profession">Profession :</label>
                <label for="pv">Points de vie :</label>
                <label for="atk">Points d'attaque :</label>
            </div>
            <div class="input-style">
                <input type="text" name="name" id="name" placeholder="Nom de votre personnage">
                <input type="text" name="profession" id="profession" placeholder="Profession du personnage">
                <input type="number" name="pv" id="pv" placeholder="PV du personnage" min="0">
                <input type="number" name="atk" id="atk" placeholder="ATK du personnage" min="0">
            </div>
        </div>
        <label for="submit" hidden>Envoyez</label>
        <input type="submit" value="Envoyer" id="submit">

    </form>
</div>
