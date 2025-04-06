<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Budget Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --light-bg: #f8f9fa;
        --border-radius: 0.5rem;
    }

    body {
        background-color: #f0f2f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
        border-radius: 0 0 var(--border-radius) var(--border-radius);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="page-header mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1><i class="fas fa-users me-2"></i>Barangay Budget Directory</h1>
                        <p class="lead mb-0">Budget information for transparency and planning</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-light"><i class="fas fa-print me-2"></i>Print Directory</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <!-- alert -->
            <?= view('components/Alert/AlertBudget') ?>
            <!-- Budget Summary -->
            <!-- Put here the data from the form budget  -->
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-primary text-white">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Budget</h5>
                            <?php if(!empty($budget)):?>
                            <?php foreach($budget as $budgets)?>
                            <h2 class="display-6 fw-bold">₱<?= $budgets['total_budget']?></h2>
                            <?php endif;?>
                            <small>Annual Allocation</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-success text-white">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Spent</h5>
                            <?php if(!empty($budget)):?>
                            <?php foreach($budget as $budgets)?>
                            <h2 class="display-6 fw-bold">₱<?= $budgets['total_spent'];?></h2 <?php endif;?> <small>
                            Current Expenditure</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-warning text-dark">
                        <div class="card-body text-center">
                            <h5 class="card-title">Remaining Budget</h5>
                            <?php if(!empty($budget)):?>
                            <?php foreach($budget as $budgets)?>
                            <h2 class="display-6 fw-bold">₱<?= $budgets['remaining_budget'];?></h2>
                            <?php endif;?>
                            <small>Available Funds</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Budget Breakdown & Budget Information -->
            <div class="row">
                <!-- Left: Budget Breakdown -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Budget Breakdown</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Infrastructure</span>
                                    <span>₱200,000 / ₱125,000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 62.5%">62.5%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Social Services</span>
                                    <span>₱100,000 / ₱75,000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 75%">75%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Administration</span>
                                    <span>₱50,000 / ₱30,000</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 60%">60%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Budget Information -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="mb-0">Budget Information</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Budget/store')?>" method="POST">
                                <div class="mb-3">
                                    <label for="inputEstimatedBudget">Estimated Budget</label>
                                    <?php foreach($budgets as $budget)?>
                                    <input type="number" id="inputEstimatedBudget" name="total_budget"
                                        class="form-control" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="inputSpentBudget">Total Amount Spent</label>
                                    <input type="number" id="inputSpentBudget" name="total_spent" class="form-control"
                                        value="">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEstimatedDuration">Remaining Budget</label>
                                    <input type="number" id="inputEstimatedDuration" name="remaining_budget"
                                        class="form-control" value="">
                                </div>
                                <div class="text-end mt-2 p-3">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- Save Button Aligned to the Right -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>