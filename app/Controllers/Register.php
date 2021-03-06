<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;


/* 
Dans le contrôleur "Register.php" ci-dessus, il y a deux fonctions, à savoir : la fonction index() et la fonction save().

Fonction index() pour afficher une vue appelée "register",  
fonction save() enregistre les données dans la table "users" de la base de données ainsi que chiffrer les mots de passe avec la méthode password_hash().
 */
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        
        echo view('common/Header');
        echo view('register', $data);
        echo view('common/Footer');

    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}