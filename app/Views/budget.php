<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Budget Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }

        .budget-summary-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .budget-summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 10px;
        }

        .footer {
            background: #fff;
            padding: 15px;
            margin-top: 30px;
            border-top: 2px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <strong>Budget</strong> Management
                </a>
            </div>
        </nav>

        <div class="container">
            <!-- Budget Summary -->
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-primary text-white">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Budget</h5>
                            <h2 class="display-6 fw-bold">₱500,000</h2>
                            <small>Annual Allocation</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-success text-white">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Spent</h5>
                            <h2 class="display-6 fw-bold">₱275,000</h2>
                            <small>Current Expenditure</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card budget-summary-card border-0 bg-warning text-dark">
                        <div class="card-body text-center">
                            <h5 class="card-title">Remaining Budget</h5>
                            <h2 class="display-6 fw-bold">₱225,000</h2>
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
                            <div class="mb-3">
                                <label for="inputEstimatedBudget">Estimated Budget</label>
                                <input type="number" id="inputEstimatedBudget" class="form-control" value="500000">
                            </div>
                            <div class="mb-3">
                                <label for="inputSpentBudget">Total Amount Spent</label>
                                <input type="number" id="inputSpentBudget" class="form-control" value="275000">
                            </div>
                            <div class="mb-3">
                                <label for="inputEstimatedDuration">Remaining Budget</label>
                                <input type="number" id="inputEstimatedDuration" class="form-control" value="12">
                            </div>
                        </div>
                        <!-- Save Button Aligned to the Right -->
                        <div class="text-end mt-2 p-3">
                            <button class="btn btn-success w-100">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transaction Management -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="mb-0">Add New Transaction</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label">Budget Category</label>
                                        <select class="form-select">
                                            <option selected>Select Category</option>
                                            <option>Infrastructure</option>
                                            <option>Social Services</option>
                                            <option>Administration</option>
                                            <option>Community Development</option>
                                            <option>Emergency Fund</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Transaction Type</label>
                                        <select class="form-select">
                                            <option selected>Select Type</option>
                                            <option>Expense</option>
                                            <option>Income</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">₱</span>
                                            <input type="number" class="form-control" placeholder="Enter amount">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Add Transaction
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer text-center">
            <small class="text-muted">Barangay Budget Management System © 2024</small>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
