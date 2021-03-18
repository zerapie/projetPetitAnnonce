<?php namespace App\Controllers;
 
use CodeIgniter\Controller;



/* 
Sur le contrôleur "Dashboard.php", il n'y a qu'une seule fonction, à savoir la fonction index() qui fonctionne pour afficher le texte "Bienvenue en arrière [nom d'utilisateur de connexion]".

Le but de ce contrôleur est de le protéger afin que les utilisateurs ne puissent pas accéder au tableau de bord sans se connecter.

De cette façon, vous aurez une idée générale de la façon de protéger les pages ou les itinéraires contre les utilisateurs non autorisés.
*/
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');

        echo view('common/Header');
        echo view('index');
        echo view('common/Footer');

    }
}