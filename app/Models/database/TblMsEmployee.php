<?php

namespace App\Models\database;

use CodeIgniter\Model;

class TblMsEmployee extends Model
{
    protected $table = "TblMsEmployee";
    protected $primaryKey = 'MsEmpId';
    protected $allowedFields = ["MsEmpCode", "MsEmpName", "MsEmpBirthDate","MsEmpGender","MsEmpEmail","MsEmpTlp","MsEmpWhatsapp","MsEmpAddress","MsEmpStartWork","MsEmpPositionId","MsWorkplaceId","MsEmpBank","MsEmpRekNo","MsEmpRekName","MsEmpRekName","MsEmpNip","MsEmpBirthPlace","MsEmpPass","MsEmpMode"];
  
    
}