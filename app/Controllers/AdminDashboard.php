<?php

namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        // Get tab parameter from URL (if any)
        $activeTab = $this->request->getGet('tab');
        
        // Load resident data if resident tab is active or specified
        if ($activeTab == 'resident' || !$activeTab) {
            $residentModel = new \App\Models\ResidentRecordModel();
            $data['residents'] = $residentModel->findAll();
        } else {
            $data['residents'] = [];
        }
        
        // Pass active tab information to the view
        $data['activeTab'] = $activeTab ?: 'dashboard'; // Default to dashboard if no tab specified
        
        return view('main', $data);
    }
}