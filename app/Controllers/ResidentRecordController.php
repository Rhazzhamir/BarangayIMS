<?php
// ResidentREcord.php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResidentRecordModel;

class ResidentRecordController extends BaseController
{
    public function create()
    {
        $fetchResident = new ResidentRecordModel();
        $data['residents'] = $fetchResident->findAll(); // Fetch all residents
        $data['resident'] = [];
        return view('residentRecord' , $data);
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
        return redirect()->to(base_url('resident/create'))->with('AddSuccess' , 'Resident Added Successfully!');
    }
    public function EditResident($id){
        $fetchResident = new ResidentRecordModel();
        $data['residents'] = $fetchResident->where('id' , $id)->first();
        return view('residentRecord' , $data);
        
    }
    public function UpdateResident($id)
{
    $updateResident = new ResidentRecordModel();
    $imageName = null;
    if ($img = $this->request->getFile('photo')) {
        if ($img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move('uploads/', $imageName);
            $data['photo'] = $imageName;
        }
    }
    $data = [
        'full_name'       => $this->request->getPost('full_name'),
        'date_of_birth'   => $this->request->getPost('date_of_birth'),
        'age'             => (int) $this->request->getPost('age'),
        'gender'          => $this->request->getPost('gender'),
        'civil_status'    => $this->request->getPost('civil_status'),
        'address'         => $this->request->getPost('address'),
        'contact'         => $this->request->getPost('contact'),
        'occupation'      => $this->request->getPost('occupation'),
        'date_registered' => $this->request->getPost('date_registered'),
        'updated_at'      => date('Y-m-d H:i:s')
    ];
    
    if (!$imageName) {
        unset($data['photo']);
    }
    $updateResident->update($id, $data);
    return redirect()->to(base_url('resident/create'))->with('UpdateSuccess', 'Resident Updated Successfully!');
}
public function DeleteResident($id)
{
    $deleteResident = new ResidentRecordModel();
    
    // Check if resident exists
    $resident = $deleteResident->find($id);
    
    if (!$resident) {
        return redirect()->to(base_url('resident/create'))->with('error', 'Resident not found!');
    }
    
    $deleteResident->delete($id);
    
    return redirect()->to(base_url('resident/create'))->with('DeleteSuccess', 'Resident Deleted Successfully!');
}

}