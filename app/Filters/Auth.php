<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 

/* 
 * Dans le filtre "Auth.php" ci-dessus, il y a 2 fonctions, à savoir : 
 *      - la fonction before(),
 *      - la fonction after().
 * Dans ce cas, nous utilisons uniquement la fonction before().
 * La fonction before sert à valider la demande avant que la demande elle-même ne soit exécutée.
 */

class Auth implements FilterInterface
{
    /* 
     * Dans le filtre "Auth.php" ci-dessus, nous redirigeons les utilisateurs vers la page de connexion s'ils accèdent à une page avant de se connecter.
     * Cela peut s'appliquer globalement, c'est-à-dire qu'il s'applique à chaque demande, ou cela ne peut être que pour quelques demandes.
     * Dans ce cas, nous ne l'utilisons que pour protéger le contrôleur "Dashboard.php".
     * Nous ne l'appliquons donc pas globalement, car nous voulons que les contrôleurs "Login.php" et "Register.php" soient accessibles sans se connecter.
    */
    public function before(RequestInterface $request, $arguments = null)
    {
        // if user not logged in
        if(! session()->get('logged_in')){
            // then redirct to login page
            return redirect()->to('/login'); 
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}