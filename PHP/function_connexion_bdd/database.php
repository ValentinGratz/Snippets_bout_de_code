// Pour se connecter à la bdd une seule fois et ne pas saisir sur chaque page, faire un fichier database.php et mettre ceci :

function getDb()
{
    try {
        $db = new PDO('mysql:host=' . DBHOST . ':' . DBPORT . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPWD);
        return $db;
    } catch (PDOException $e) {
        die('Erreur PDO : ' . $e->getMessage());
    }
}
