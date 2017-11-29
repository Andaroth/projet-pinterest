<?php 
class Account {
    // global $bdd;

    public function __construct($action) {
        // extract($_POST);
        // extract($_GET);
        switch($action) {
            case 'register':
                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $pass = $_POST['pass'];
                    $pass = hash("sha256", htmlentities($_POST['pass']) ); // hash le password
                    $this->Signup($name,$mail,$pass);
                break;
            case 'login':
                $name = $_POST["username"];
                $pass = hash("sha256", htmlentities($_POST['mdp']) );
                $this->Login($name,$pass);
                break;
            default: break;
            // $this->$bdd = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
        } // switch end
    } // contruct end

    private function Signup($name, $mail, $pass)
    {
        global $bdd;
        $req = $bdd->query("SELECT COUNT(name) AS count FROM users WHERE name = '".$name."'");
        $row = $req->fetch();
        $test = $row['count'];
        if($test == 0) {
            try {
                $bdd->exec("INSERT INTO users (name, mail, pass) VALUES ('".$name."','".$mail."','".$pass."')");
                echo "<div id=\"passedmsg\">Vous êtes bien enregistré</div>";
            } catch(Exception $e){echo "erreur signup: ".($e->getMessage());die();}
        } else  {
            echo "<div id=\"errormsg\">Ce nom d'utilisateur existe deja !</div>";
        } // if end
    } // func signup end

    private function Login($name, $pass)
    {
        global $bdd;
        $req = $bdd->query("SELECT COUNT(*) AS count FROM users WHERE name = '".$name."' AND pass ='".$pass."'");
        $row = $req->fetch();
        $test = $row['count'];
        if($test==1)
        {
                $_SESSION ['login'] = true;
                $_SESSION ['name'] = $name;
                echo "<div id=\"passedmsg\">Vous êtes bien connecté</div>";
        } else {
            echo "<div id=\"errormsg\">Vous avez entré de mauvais identifiants !</div>";
        }

    }
} // class Register end
?>