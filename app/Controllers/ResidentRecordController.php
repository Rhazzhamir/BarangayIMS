<?php

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
        
        // Use session flash data for the success message
        
        // Redirect to main page with tab parameter
        return redirect()->to(base_url('resident/create'))->with('AddSuccess' , 'Resident Added Successfully!');
    }
    public function EditResident($id){
        $fetchData = new ResidentRecordModel();
        $data['resident'] = $fetchData->find($id);
        $data['residents'] = $fetchData->findAll(); // Keep the list of residents for the main view
    
    return view('residentRecord', $data); // Create a separate edit view
    }
    public function UpdateResident()
{
    $updateResident = new ResidentRecordModel();
    $id = $this->request->getPost('resident_id');
    
    // Handle image upload if a new image is provided
    if ($img = $this->request->getFile('photo')) {
        if ($img->isValid() && !$img->hasMoved()) {
            // Get the old image first to delete it later
            $oldData = $updateResident->find($id);
            $oldImage = $oldData['photo'] ?? null;
            
            // Upload new image
            $imageName = $img->getRandomName();
            $img->move('uploads/', $imageName);
            
            // Delete the old image if it exists
            if ($oldImage && file_exists('uploads/' . $oldImage)) {
                unlink('uploads/' . $oldImage);
            }
            
            // Set the image name to be included in the update data
            $imageToUpdate = $imageName;
        }
    }
    
    // Prepare data for update
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
    
    // Only include the photo in the update if a new one was uploaded
    if (isset($imageToUpdate)) {
        $data['photo'] = $imageToUpdate;
    }
    
    // Update the record
    $updateResident->update($id, $data);
    
    // Redirect with success message
    return redirect()->to(base_url('resident/create'))->with('UpdateSuccess', 'Resident Updated Successfully!');
}
}