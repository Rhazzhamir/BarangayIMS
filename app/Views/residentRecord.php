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
        <?php if(session() ->getFlashdata('AddSuccess')):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session() ->getFlashdata('AddSuccess')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif?>
34:50
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
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addResidentModal">Add
            Resident</button>


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
                <?php if (!empty($residents)): ?>
                <?php foreach ($residents as $resident): ?>
                <tr>
                    <td><img src="<?= base_url('uploads/' . $resident['photo']) ?>" alt="Resident" class="img-thumbnail"
                            width="50"></td>
                    <td><?= $resident['id'] ?></td>
                    <td><?= $resident['full_name'] ?></td>
                    <td><?= $resident['age'] ?></td>
                    <td><?= $resident['gender'] ?></td>
                    <td><?= $resident['address'] ?></td>
                    <td><?= $resident['contact'] ?></td>
                    <td><?= $resident['civil_status'] ?></td>
                    <td><?= $resident['occupation'] ?></td>
                    <td><?= $resident['date_registered'] ?></td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="11" class="text-center">No residents found.</td>
                </tr>
                <?php endif; ?>
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
        var dob = document.getElementById('dob').value;
        if (dob) {
            var birthDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDiff = today.getMonth() - birthDate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            document.getElementById('age').value = age;
        }
    }

    // Set today's date as default for date registered
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('dateRegistered').value = today;
    });
    </script>
</body>

</html>