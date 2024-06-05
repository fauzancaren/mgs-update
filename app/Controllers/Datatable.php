<?php namespace App\Controllers;


use CodeIgniter\Controller;

use App\Models\StoreDatatable; 
use App\Models\KaryawanDatatable; 
use App\Models\VendorDatatable; 

use Config\Services;

class Datatable extends BaseController
{
    public function gettoko()
    {
        $request = Services::request();
        $datatable = new StoreDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no; 
                $row[] = $list->MsWorkplaceCode;
                $row[] = $list->MsWorkplaceName;
                $row[] = $list->MsWorkplaceAddress;
                $row[] = '<div class="dropdown action">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:var(--color-dark-variant)">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu" style="background-color:var(--color-white)">
                                <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="show_data(\''.$list->MsWorkplaceId.'\')"><i class="fas fa-eye" style="width:20px;"></i>Show</a></li>
                                <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="edit_data(\''.$list->MsWorkplaceId.'\')"><i class="fas fa-pencil-alt" style="width:20px;"></i>Edit</a></li>
                                <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="delete_data(\''.$list->MsWorkplaceId.'\')"><i class="fas fa-trash" style="width:20px;"></i>Delete</a></li>
                            </ul>
                        </div>';
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
    public function getkaryawan()
    {
        $request = Services::request();
        $datatable = new KaryawanDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no; 
                $row[] = $list->MsEmpCode;
                $row[] = $list->MsEmpName;
                $row[] = $list->MsEmpAddress;
                $row[] = '<div class="dropdown action">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:var(--color-dark-variant)">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu" style="background-color:var(--color-white)">
                        <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="show_data(\''.$list->MsEmpId.'\')"><i class="fas fa-eye" style="width:20px;"></i>Show</a></li>
                        <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="edit_data(\''.$list->MsEmpId.'\')"><i class="fas fa-pencil-alt" style="width:20px;"></i>Edit</a></li>
                        <li><a class="dropdown-item" style="text-align:left;margin:0px" onclick="delete_data(\''.$list->MsEmpId.'\')"><i class="fas fa-trash" style="width:20px;"></i>Delete</a></li>
                    </ul>
                </div>';
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
    public function getvendor()
    {
        $request = Services::request();
        $datatable = new VendorDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no; 
                $row[] = $list->MsVendorCode;
                $row[] = $list->MsVendorName;
                $row[] = $list->MsVendorAddress;
                $row[] = "ACTION";
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}