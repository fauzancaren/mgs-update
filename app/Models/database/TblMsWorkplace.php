<?php

namespace App\Models\database;

use CodeIgniter\Model;

class TblMsWorkplace extends Model
{
    protected $table = "TblMsWorkplace";
    protected $primaryKey = 'MsWorkplaceId';
    protected $allowedFields = ["MsWorkplaceCode", "MsWorkplaceName", "MsWorkplaceAddress","MsWorkplaceEmail","MsWorkplaceTelp1","MsWorkplaceTelp2","MsWorkplaceLat","MsWorkplaceLng","MsWorkplaceMap"];

    function get_store(){
        $db = db_connect(); 
        return $db->table("TblMsWorkplace")->get()->getResult();
    }
}