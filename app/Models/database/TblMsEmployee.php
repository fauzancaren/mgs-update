<?php

namespace App\Models\database;

use CodeIgniter\Model;

class TblMsEmployee extends Model
{
    protected $table = "TblMsEmployee";
    protected $primaryKey = 'MsEmpId';
    protected $allowedFields = ["MsEmpCode", "MsEmpName", "MsEmpBirthDate","MsEmpGender","MsEmpEmail","MsEmpTlp","MsEmpWhatsapp","MsEmpAddress","MsEmpStartWork","MsEmpPositionId","MsWorkplaceId","MsEmpBank","MsEmpRekNo","MsEmpRekName","MsEmpRekName","MsEmpNip","MsEmpBirthPlace","MsEmpPass","MsEmpMode"];
  
    
    function get_next_code(){
        
        $db = db_connect(); 
        $query = $db->query("SELECT CAST((ifnull(MAX(SUBSTRING(MsEmpCode, 3, 5)),0) + 1) AS SIGNED) as max FROM TblMsEmployee")->getRow(); 
        $id = $query->max;
        switch (strlen($id)) {
            case 1:
                $nextid = "ID0000" . $id;
                return $nextid;
            case 2:
                $nextid = "ID000" . $id;
                return $nextid;
            case 3:
                $nextid = "ID00" . $id;
                return $nextid;
            case 4:
                $nextid = "ID0" . $id;
                return $nextid;
            case 5:
                $nextid = "ID" . $id;
                return $nextid;
            default:
                $nextid = "ID00000";
                return $nextid;
        } 
    }
}