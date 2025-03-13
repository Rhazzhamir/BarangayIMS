<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- modal -->
    <?= view('components/modal'); ?>

    <div class="container mt-4">
        <h2 class="mb-4 text-light">Resident Records</h2>
        
        <!-- Search & Filter -->
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Search by Name or ID">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Filter by Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected>Filter by Civil Status</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                </select>
            </div>
        </div>
        
        <!-- Add Resident Button -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addResidentModal">Add Resident</button>
        
        <!-- Residents Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Resident ID</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Civil Status</th>
                    <th>Occupation</th>
                    <th>Date Registered</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="default.jpg" alt="Resident" class="img-thumbnail" width="50"></td>
                    <td>1001</td>
                    <td>Juan Dela Cruz</td>
                    <td>30</td>
                    <td>Male</td>
                    <td>Purok 1, Barangay ABC</td>
                    <td>09123456789</td>
                    <td>Single</td>
                    <td>Engineer</td>
                    <td>2025-03-12</td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Pagination -->
        <ul class="pagination pagination-sm float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
    
    
    <script>
        function computeAge() {
            const dob = document.getElementById("dob").value;
            if (dob) {
                const today = new Date();
                const birthDate = new Date(dob);
                let age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                document.getElementById("age").value = age;
            }
        }
    </script>
</body>
</html>
