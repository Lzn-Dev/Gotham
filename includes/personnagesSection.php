

<!-- CREATION DE MA TABLE DE PERSONNAGE MIS À JOURS À CHAQUE CHANEGEMENT -->

    <div class="container">
        <h2>Liste des personnages</h2>
        <table>
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Profession</th>
                <th scope="col">Points de vie</th>
                <th scope="col">Attaque</th>
                <th scope="col">Détails</th>
                <th scope="col">Sup.</th>
            </tr>
            </thead>
            <br>
            <?php foreach ($personnageArray as $perso): ?> <!-- $personnageArray récupéré depuis index.php -->
                <tr>
                    <th scope="row"><?= $perso['name'] ?></th>
                    <td><?= $perso['profession'] ?></td>
                    <td><?= $perso['pv'] ?></td>
                    <td><?= $perso['atk'] ?></td>
                    <td><a href="http://localhost:8000/personnage.php?id=<?=$perso['id']?>">details</a></td>
                    <td><a href="http://localhost:8000/delete.php?id=<?=$perso['id']?>">
                            <img src="../image/trash-can-solid.svg" alt="Delete Icon"
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>


