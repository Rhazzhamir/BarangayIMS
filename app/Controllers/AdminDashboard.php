<?php

namespace App\Controllers;
use App\Models\ResidentRecordModel;
class AdminDashboard extends BaseController
{
    public function index()
    {
        // Get tab parameter from URL (if any)
        $activeTab = $this->request->getGet('tab');
        
        // Load resident data if resident tab is active or specified
        $residentModel = new ResidentRecordModel();
        $data['residents'] = ($activeTab == 'resident' || !$activeTab) ? $residentModel->findAll() : [];

        // Fetch resident count for dashboard
        $data['residentCount'] = $residentModel->countAll(); 

        // Pass active tab information to the view
        $data['activeTab'] = $activeTab ?: 'dashboard'; // Default to dashboard if no tab specified
        
        return view('main', $data);
    }
}
