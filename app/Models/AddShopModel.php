<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AddShopModel extends Model{
    protected $table = 'addShop';
    protected $allowedFields = ['id_vendeur','nom_article','favori','categorie','description','prix','article_creer'];
}