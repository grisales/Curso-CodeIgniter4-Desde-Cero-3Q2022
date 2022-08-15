<?php

namespace App\Controllers\Store;

use Config\Web;
use App\Models\MovieModel;
use App\Models\CategoryModel;
use App\Models\MovieImageModel;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundException;

helper('text');

// use PayPalCheckoutSdk\Core\PayPalHttpClient;
// use PayPalCheckoutSdk\Core\SandboxEnvironment;
// use App\Controllers\Store\CustomBaseController;
// use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
// use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
// use App\Models\PaymentModel;

class Movie extends BaseController
{
    public function index()
    {

        $movie = new MovieModel();

        $data = [
            'movies' => $movie->asObject()
            ->select('movies.*, categories.category_name')
            ->join('categories','categories.category_id = movies.category_id')
            ->join('movies_images','movies_images.movie_id = movies.movie_id','left')
            ->groupBy('movies.movie_id')
            ->paginate(6),
            'pager' => $movie->pager
        ];

        $this->_loadDefaultView('Listado de películas',$data,'index');
    }

    public function show()
    {
        # code...
    }

    /**
     * ==========================================
     *    ---:::[ FUNCIÓN CARGAR LAYOUT ]:::---   
     * ==========================================
     * 
     * Descripción
     */
    
    private function _loadDefaultView($title, $data, $view)
    {
        $config = new Web();
        $dataHeader = [
            'title' => $title,
            'site' => $config->siteName
        ];
        
        echo view ("store/templates/header", $dataHeader);
        echo view ("store/movie/$view", $data);
        echo view ("store/templates/footer");
    }

}
