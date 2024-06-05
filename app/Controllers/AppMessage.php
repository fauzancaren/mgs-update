<?php
namespace App\Controllers;

use CodeIgniter\Controller; 
use App\Models\database\TblMsWorkplace; 
class AppMessage extends BaseController
{
    function toko_add(){
        $data_html = view("app/message/tokoadd");
        echo $data_html;
    }
    function toko_add_data(){
        $request = \Config\Services::request();
 
        $data = $request->getPost();  
        $model = new TblMsWorkplace();  
        if ($model->insert($data)) {
            $array = array(
                "status"=>"true",
                "message"=>"Berhasil Menyimpan Data"
            );
            echo json_encode($array);
        } else {
            $array = array(
                "status"=>"false",
                "message"=>"Gagal Menyimpan Data"
            );
            echo json_encode($array);
        } 
    }
    function toko_edit($id){
        $model = new TblMsWorkplace(); 
        $data["toko"] = $model->where('MsWorkplaceId', $id)->first();
        $data_html = view("app/message/tokoedit",$data);
        echo $data_html;
    }
    function toko_edit_data($id){
        $request = \Config\Services::request(); 
        $data = $request->getPost();  
        
        $model = new TblMsWorkplace();  
        if ($model->update($id,$data)) {
            $array = array(
                "status"=>"true",
                "message"=>"Berhasil Menyimpan Data"
            );
            echo json_encode($array);
        } else {
            $array = array(
                "status"=>"false",
                "message"=>"Gagal Menyimpan Data"
            );
            echo json_encode($array);
        } 
    }
    function toko_show($id){
        $model = new TblMsWorkplace(); 
        $data["toko"] = $model->where('MsWorkplaceId', $id)->first();
        $data_html = view("app/message/tokoshow",$data);
        echo $data_html;
    }
    function toko_delete_data($id){
        $model = new TblMsWorkplace(); 
        if ($model->where('MsWorkplaceId', $id)->delete()) {
            $array = array(
                "status"=>"true",
                "message"=>"Berhasil Menghapus Data"
            );
            echo json_encode($array);
        } else {
            $array = array(
                "status"=>"false",
                "message"=>"Gagal Menghapus Data"
            );
            echo json_encode($array);
        } 
      

    }

    function karyawan_add(){
        $model = new TblMsWorkplace(); 
        $data["TblMsWorkplace"] = $model->get_store();
        $data_html = view("app/message/karyawanadd",$data);
        echo $data_html;
    }
    
}