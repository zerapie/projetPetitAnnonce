<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 

/* 
 *Dans le contrôleur "Login.php" ci-dessus, il y a deux fonctions, à savoir : 
 *      - la fonction index(),
 *      - la fonction auth(),
 *      - la fonction logout().
 */
class Login extends Controller
{
    /* 
     * ----------------------------------------------------------------
     *  La fonction index() est utilisée pour afficher une vue nommée "login" qui affichera le formulaire de connexion.
     * ----------------------------------------------------------------
    */
    public function index()
    {
        helper(['form']);

        echo view('common/Header');
        echo view('login');
        echo view('common/Footer');

    } 
    /* 
     * ----------------------------------------------------------------
     *  La fonction auth() pour effectuer l'authentification et définir la variable de session si l'authentification est valide.
     * ----------------------------------------------------------------
    */
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
    /* 
     * ----------------------------------------------------------------
     *  La fonction logout() pour se déconnecter et détruire les variables de session.
     * ----------------------------------------------------------------
    */
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 