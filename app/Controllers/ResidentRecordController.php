<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResidentRecordModel;
use CodeIgniter\HTTP\ResponseInterface;

class ResidentRecordController extends BaseController
{
    public function index()
    {
        return view('residentRecord');
    }
    public function store(){
        $insertResident = new ResidentRecordModel();
        if($img = $this->request->getFile('residentPhoto')){
            if($img->isValid() && !$img->hasMoved()){
                $imageName = $img->getRandomName();
                $img->move('uploads/' , $imageName);
            }
        };
        $data = array(
            'photo'           => $imageName,
            'full_name'       => $this->request->getPost('full_name'),
            'date_of_birth'   => $this->request->getPost('date_of_birth'),
            'age'             => (int) $this->request->getPost('age'),
            'gender'          => $this->request->getPost('gender'),
            'civil_status'    => $this->request->getPost('civil_status'),
            'address'         => $this->request->getPost('address'),
            'contact'         => $this->request->getPost('contact'),
            'occupation'      => $this->request->getPost('occupation'),
            'date_registered' => $this->request->getPost('date_registered'),
            'created_at'      => date('Y-m-d H:i:s')
        );
        $insertResident -> insert($data);
        return redirect()->to('/residentRecord')->with('AddSuccess' , 'Resident Added Successfully!');
    }
}
