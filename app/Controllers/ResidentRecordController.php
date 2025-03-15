<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResidentRecordModel;

class ResidentRecordController extends BaseController
{
    public function index()
    {
        $fetchResident = new ResidentRecordModel();
        $data['residents'] = $fetchResident->findAll(); // Fetch all residents
        
        // Check if this is a standalone request or should be embedded
        if ($this->request->getGet('standalone') === 'true') {
            return view('residentRecord', $data);
        } else {
            // Redirect to main page with tab parameter
            return redirect()->to('/?tab=resident');
        }
    }
    
    public function store()
    {
        $insertResident = new ResidentRecordModel();
        $imageName = null;
        if ($img = $this->request->getFile('photo')) {
            if ($img->isValid() && !$img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }
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
        $insertResident->insert($data);
        
        // Use session flash data for the success message
        session()->setFlashdata('AddSuccess', 'Resident Added Successfully!');
        
        // Redirect to main page with tab parameter
        return redirect()->to('/?tab=resident');
    }
}