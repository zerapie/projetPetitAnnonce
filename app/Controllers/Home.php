<?php   namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AddShopModel;
use App\Models\UserModel;

class Home extends BaseController
{
        public $addshopModel    = null;
        public $userModel       = null;

        public function __construct()
        {
            $this->addshopModel = new AddShopModel();
            $this->userModel    = new UserModel();
        }
    
	public function index()
	{

                $querryAddShop  = $this->addshopModel->findAll(); //requette affiche tout les elements de la DB addShop
                // dd($querryAddShop);
                $data = [
                    'addShopDB' => $querryAddShop,
                    'userModel' => $this->userModel,
                ];

                echo view('common/Header');
                echo view('index', $data);
                echo view('common/Footer');
	}
}

