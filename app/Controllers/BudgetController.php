<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BudgetModel;
use CodeIgniter\HTTP\ResponseInterface;

class BudgetController extends BaseController
{
    public function create()

    {
        $fecthBudget = new BudgetModel();
        $data['budget'] = $fecthBudget->findAll();
        return view('budget' , $data);
    }
    public function store()
    {
        $insertBudget = new BudgetModel();
        $data = array(
            'total_budget' => $this->request->getPost('total_budget') ?? 0,
            'total_spent' => $this->request->getPost('total_spent') ?? 0,
            'remaining_budget' => $this->request->getPost('remaining_budget') ?? 0,
            'created_at'=> date('Y-m-d H:i:s'),
            'update_at'=> date('Y-m-d H:i:s'),
        );
        $insertBudget->insert($data);
        return redirect()->to(base_url('Budget/create'))->with('AddSuccess' , 'Budget Added Successfully!');
    }
}
