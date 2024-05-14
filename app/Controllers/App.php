<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel; 

class App extends BaseController
{
    function index(){
        if(session()->get('logged_in')){ 
            return redirect()->to('/admin/dashboard'); 
        }
        helper(['form']);
        echo view('app/login'); 
    }
    function auth(){  
        helper(['encripty']); 
        $session = session();

        $model = new UserModel();
        $email = $this->request->getVar('username');
        $password = EncryptedPassword($this->request->getVar('password'));
        $data = $model->where('MsEmpCode', $email)->first();  
        if($data){
            $pass = $data['MsEmpPass'];  
            if($password == $pass) {
                $ses_data = [
                    'user_id'       => $data['MsEmpId'],
                    'user_name'     => $data['MsEmpName'],
                    'user_email'    => $data['MsEmpEmail'],
                    'logged_in'     => TRUE,
                    'dark_mode'     => false
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password yang anda masukan salah'); 
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'username Tidak ditemukan');
            $session->setFlashdata('email', $email); 
            return redirect()->to('/login');
        }
    }
    function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    function darkmode($export_type){
        $session = session();
        $session->set('dark_mode', $export_type); 
        echo 'Session set!';
        return;
    }
    function dashboard(){    
        $data["_title"] = "MGS-ERP | Dashboard";
        $data["_menu"] = "Dashboard";
        echo $this->template('app/dashboard',$data);
    }
    function toko(){    
        $data["_title"] = "MGS-ERP | Master Toko";
        $data["_menu"] = "Toko";
        echo $this->template('app/toko',$data);
    }
    function karyawan(){    
        $data["_title"] = "MGS-ERP | Master Karyawan";
        $data["_menu"] = "Karyawan";
        echo $this->template('app/karyawan',$data);
    }
}
