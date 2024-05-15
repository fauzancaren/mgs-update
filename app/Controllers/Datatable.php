<?php namespace App\Controllers;


use CodeIgniter\Controller;

use App\Models\StoreDatatable; 
use App\Models\karyawanDatatable; 
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
    public function getkaryawan()
    {
        $request = Services::request();
        $datatable = new karyawanDatatable($request);

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