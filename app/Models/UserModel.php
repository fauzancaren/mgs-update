<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'TblMsEmployee';
    protected $allowedFields = [
        'MsEmpCode',
        'MsEmpName',
        'MsEmpBirthDate',
        'MsEmpGender',
        'MsEmpEmail',
        'MsEmpTlp',
        'MsEmpWhatsapp',
        'MsEmpAddress',
        'MsEmpIsActive',
        'MsEmpStartWork',
        'MsEmpPositionId',
        'MsWorkplaceId',
        'MsWorkplaceId',
        'MsEmpBank',
        'MsEmpRekNo',
        'MsEmpRekName',
        'MsEmpNip',
        'MsEmpBirthPlace',
        'MsEmpPass',
        'MsEmpMode',
        'MsEmpCard',
        'MsEmpLastUpdate',
        'MsEmpLastUpdateUser'
    ];
} 