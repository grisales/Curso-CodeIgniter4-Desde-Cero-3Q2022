<?php

namespace App\Controllers\dashboard;
use App\Models\UserModel;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundException;


class User extends BaseController {


    /**
     * ===================================
     *    ---:::[ FUNCIÓN INDEX ]:::---   
     * ===================================
     * 
     * Descripción
     */

    public function index()
    {
        
        $user = new UserModel();
        
        $data = [
                'users' => $user->asObject()
                ->paginate(10),
                'pager' => $user->pager,
            ];

        $this->_loadDefaultView('Listado de usuarios',$data,'index');
            
    }

        
    /**
     * ===================================
     *    ---:::[ FUNCIÓN NUEVO REGISTRO ]:::---   
     * ===================================
     * 
     * Descripción
     */

    public function new()
    {
        $user = new UserModel();
        
        $validation = \Config\Services::validation();
        $this->_loadDefaultView
        (
            'Crear usuario',
            [
                'validation'=>$validation,
                'user'=> new UserModel()
            ],
            'new'
        );
        
    }

        
    /**
     * ===================================
     *    ---:::[ FUNCIÓN CREAR REGISTRO ]:::---   
     * ===================================
     * 
     * Descripción
     */

    public function create()
    {
        helper("user");

        $user = new UserModel();
        
        if($this->validate('users'))
        {
            $id = $user->insert(
            [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'user_type' => 'admin',
                'password' => hashPassword($this->request->getPost('password'))
            ]);
            return redirect()->to("dashboard/user/edit/$id")->with('message', 'Usuario '.$this->request->getPost('username').' creado con éxito!');
        }
        return redirect()->back()->withInput();
        
    }

        
    /**
     * ==========================================
     *    ---:::[ FUNCIÓN EDITAR REGISTRO ]:::---   
     * ==========================================
     * 
     * Descripción
     */

    public function edit($id = null)
    {

        $user = new UserModel();

        if ($user->find($id) == null)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        $validation = \Config\Services::validation();
        $this->_loadDefaultView
        (
            'Actualizar usuario',
            [
                'validation'=>$validation,
                'user'=>$user->asObject()->find($id),
            ],
            'edit'
        );
        
    }

        
    /**
     * ==============================================
     *    ---:::[ FUNCIÓN ACTUALIZAR REGISTRO ]:::---   
     * ==============================================
     * 
     * Descripción
     */

    public function update($id = null)
    {
        helper("user");

        $user = new UserModel();

        if ($user->find($id) == null)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        if($this->validate('usersUpdate'))
        {

            $user->update($id, [
                'password' => hashPassword($this->request->getPost('password'))
            ]);

            return redirect()->to('dashboard/user')->with('message', 'Usuario '.$id.' actualizado con éxito! - <span '.$this->request->getPost('password').'> ');
            
        }
        
        return redirect()->back()->withInput();
        
    }

        
    /**
     * ==========================================
     *    ---:::[ FUNCIÓN BORRAR REGISTRO ]:::---   
     * ==========================================
     * 
     * Descripción
     */

    public function delete($user_id = null)
    {
        $user = new UserModel();

        if ($user->find($user_id) == null)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        $user->delete($user_id);
        return redirect()->to('user')->with('message', 'Usuario '.$user->user_name.' eliminado con éxito!');
    }

        
    /**
     * ===================================
     *    ---:::[ FUNCIÓN CARGAR LAYOUT ]:::---   
     * ===================================
     * 
     * Descripción
     */
    
    private function _loadDefaultView($title, $data, $view)
    {
        $config = new \Config\Web();
        
        $dataHeader = [
            'title' => $title,
            'site' => $config->siteName
        ];
        
        echo view ("dashboard/templates/header", $dataHeader);
        echo view ("dashboard/user/$view", $data);
        echo view ("dashboard/templates/footer");

    }

}