<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AddShopModel;


/* 
Dans le contrôleur "AddShop.php" ci-dessus, il y a deux fonctions, à savoir : la fonction index() et la fonction save().

Fonction index() pour afficher une vue appelée "AddShop",  
fonction save() enregistre les données dans la table "addShop" de la base de données.
 */
class AddShop extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        
        $data = [];

        echo view('common/Header');
        echo view('AddShop', $data);
        echo view('common/Footer');

    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'produit'       => 'required',
            'categorie'     => 'required',
            'ccomment0'     => 'required',
            'prix0'         => 'required'
        ];
        echo 'teste';
        echo $this->request->getVar('nom_article');
         
        if($this->validate($rules)){
            $model = new AddShopModel();
            $data = [
                'nom_vendeur'   => $this->request->getVar('vendeur0'),
                'nom_article'   => $this->request->getVar('produit'),
                'categorie'     => $this->request->getVar('categorie'),
                'description'   => $this->request->getVar('ccomment0'),
                'prix'          => $this->request->getVar('prix0')
            ];
            echo 'teste2';
            $model->save($data);
            return redirect()->to('/index');
        }else{
            $data['validation'] = $this->validator;

            echo view('common/Header');
            echo view('AddShop', $data);
            echo view('common/Footer');
            
            echo 'teste3';
        }
         
    }
 
}