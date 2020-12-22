// Pour se connecter à la bdd une seule fois et ne pas saisir sur chaque page, faire un fichier database.php et mettre ceci :

<select name="catProducts" class="form-controll">


    <?php
    foreach (getAllCat() as $cat) {
        ?>
        <option value="<?= $cat->id ?>"><?= $cat->name ?></option>
        <?php
    }
    ?>
    
    
</select>
