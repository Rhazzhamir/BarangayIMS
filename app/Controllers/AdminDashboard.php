<?php

namespace App\Controllers;
use App\Models\ResidentRecordModel;
use App\Models\BudgetModel;
class AdminDashboard extends BaseController
{
    public function index()
    {
        $activeTab = $this->request->getGet('tab');
        
        $residentModel = new ResidentRecordModel();
        $data['residents'] = ($activeTab == 'resident' || !$activeTab) ? $residentModel->findAll() : [];

        $data['residentCount'] = $residentModel->countAll(); 

        $BudegetModel = new BudgetModel();
        $data['budgetCount'] = $BudegetModel->countAll();
        
        $data['activeTab'] = $activeTab ?: 'dashboard';
        
        return view('main', $data);
    }
}
