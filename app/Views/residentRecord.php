<!-- residentRecord -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <div class="container-fluid p-3">


        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1><i class="fas fa-users "></i>Resident Record Directory</h1>
                        <p class="lead mb-0">Detailed records of all barangay residents</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-light"><i class="fas fa-print me-2"></i>Print Directory</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Include modals at the start -->
        <?= view('components/Modal/Resident/modal'); ?>
        <?= view('components/Modal/Resident/viewProfile'); ?>
        <?= view('components/Modal/Resident/updateModal'); ?>
        <?= view('components/Modal/Resident/deleteModal'); ?>

        <!-- alert -->
        <?= view('components/Alert/AlertResident') ?>


        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-dark">Residents List</h3>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addResidentModal">
                + Add Resident
            </button>
            
        </div>

        <!-- Residents Table -->
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-primary">
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
                    <?php if(!empty($residents)): ?>
                    <?php foreach($residents as $resident): ?>
                    <tr>
                        <td>
                            <img src="<?= base_url('uploads/' . ($resident['photo'] ?? 'template/img/default-avatar.png')) ?>"
                                class="rounded-circle" width="50" height="50" alt="Resident">
                        </td>
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
                            <button type="button" class="btn btn-sm btn-info text-dark view-btn" data-bs-toggle="modal"
                                data-bs-target="#viewResidentModal">
                                View
                            </button>
                            <button type="button" class="btn btn-sm btn-warning text-dark view-btn"
                                data-bs-toggle="modal" data-bs-target="#updateResidentModal">
                                Update
                            </button>

                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteResidentModal">
                                Delete
                            </button>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="11" class="text-center text-muted">No residents found.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </nav>
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

    // View resident modal functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Set today's date as default for date registered
        if (document.getElementById('dateRegistered')) {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('dateRegistered').value = today;
        }

        // Get all view buttons with class view-btn
        const viewButtons = document.querySelectorAll('.view-btn');

        // Add click event listener to each button
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the parent row
                const row = this.closest('tr');

                // Extract data from the row
                const imgElement = row.querySelector('td:first-child img');
                const photoSrc = imgElement ? imgElement.getAttribute('src') :
                    '<?= base_url('template/img/default-avatar.png') ?>';

                const id = row.cells[1].textContent.trim();
                const fullName = row.cells[2].textContent.trim();
                const age = row.cells[3].textContent.trim();
                const gender = row.cells[4].textContent.trim();
                const address = row.cells[5].textContent.trim();
                const contact = row.cells[6].textContent.trim();
                const civilStatus = row.cells[7].textContent.trim();
                const occupation = row.cells[8].textContent.trim();
                const dateRegistered = row.cells[9].textContent.trim();

                console.log("Image source:", photoSrc); // Debug

                // Populate the modal with data
                const photoElement = document.getElementById('residentPhoto');
                photoElement.src = photoSrc;

                // Error handling for image
                photoElement.onerror = function() {
                    console.log("Image failed to load, using default"); // Debug
                    this.src = '<?= base_url('template/img/default-avatar.png') ?>';
                };

                document.getElementById('residentName').textContent = fullName;
                document.getElementById('residentId').textContent = 'ID: ' + id;
                document.getElementById('residentAge').textContent = age;
                document.getElementById('residentGender').textContent = gender;
                document.getElementById('residentAddress').textContent = address;
                document.getElementById('residentContact').textContent = contact;
                document.getElementById('residentCivilStatus').textContent = civilStatus;
                document.getElementById('residentOccupation').textContent = occupation;
                document.getElementById('residentDateRegistered').textContent = dateRegistered;

                // Set the edit button to redirect to the edit page with the resident ID
                document.getElementById('editResidentBtn').onclick = function() {
                    window.location.href = '<?= base_url('residents/edit/') ?>' + id;
                };
            });
        });
    });
    </script>
    <script>
    // View resident modal functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Set today's date as default for date registered
        if (document.getElementById('dateRegistered')) {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('dateRegistered').value = today;
        }

        // Code for view modal (your existing code)

        // Code for update modal
        const updateButtons = document.querySelectorAll('.update-btn');
        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the parent row
                const row = this.closest('tr');

                // Extract data from the row
                const id = row.cells[1].textContent.trim();
                const fullName = row.cells[2].textContent.trim();
                const age = row.cells[3].textContent.trim();
                const gender = row.cells[4].textContent.trim();
                const address = row.cells[5].textContent.trim();
                const contact = row.cells[6].textContent.trim();
                const civilStatus = row.cells[7].textContent.trim();
                const occupation = row.cells[8].textContent.trim();
                const dateRegistered = row.cells[9].textContent.trim();

                // Fill the update form
                document.getElementById('residentId').value = id;
                document.getElementById('residentIdDisplay').value = id;
                document.getElementById('fullName').value = fullName;
                document.getElementById('age').value = age;

                // Set gender dropdown
                const genderSelect = document.getElementById('gender');
                for (let i = 0; i < genderSelect.options.length; i++) {
                    if (genderSelect.options[i].value === gender) {
                        genderSelect.selectedIndex = i;
                        break;
                    }
                }

                // Set civil status dropdown
                const civilStatusSelect = document.getElementById('civilStatus');
                for (let i = 0; i < civilStatusSelect.options.length; i++) {
                    if (civilStatusSelect.options[i].value === civilStatus) {
                        civilStatusSelect.selectedIndex = i;
                        break;
                    }
                }

                document.getElementById('address').value = address;
                document.getElementById('contact').value = contact;
                document.getElementById('occupation').value = occupation;

                // We need to convert the date format if it's displayed differently
                // For example, if date is displayed as MM/DD/YYYY but needs to be YYYY-MM-DD for input
                try {
                    // Assuming dateRegistered is in YYYY-MM-DD format already
                    document.getElementById('dateRegistered').value = dateRegistered;
                } catch (e) {
                    console.error("Error setting date:", e);
                }
            });
        });
    });
    </script>
    <!-- UPdateMOdal -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all update buttons with class btn-warning
        const updateButtons = document.querySelectorAll('.btn-warning');

        // Add click event listener to each button
        updateButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Only proceed if this is the Update button (not Delete or other buttons)
                if (this.textContent.trim() === 'Update' || this.innerHTML.includes('Update')) {
                    // Get the parent row
                    const row = this.closest('tr');

                    // Extract data from the row
                    const id = row.cells[1].textContent.trim();
                    const fullName = row.cells[2].textContent.trim();
                    const age = row.cells[3].textContent.trim();
                    const gender = row.cells[4].textContent.trim();
                    const address = row.cells[5].textContent.trim();
                    const contact = row.cells[6].textContent.trim();
                    const civilStatus = row.cells[7].textContent.trim();
                    const occupation = row.cells[8].textContent.trim();
                    const dateRegistered = row.cells[9].textContent.trim();

                    console.log("Updating resident:", fullName); // Debug

                    // Update the form action to include the ID
                    const form = document.getElementById('updateResidentForm');
                    form.action = '<?= base_url('/resident/update/') ?>' + id;

                    // Fill the update form
                    document.getElementById('residentId').value = id;
                    document.getElementById('fullName').value = fullName;
                    document.getElementById('age').value = age;

                    // We need to calculate an approximate birthdate based on age
                    // This is just an estimate since we don't have the actual birth date
                    const birthYear = new Date().getFullYear() - parseInt(age);
                    const estimatedBirthdate = birthYear + '-01-01'; // Default to January 1st
                    document.getElementById('dob').value = estimatedBirthdate;

                    // Set gender dropdown
                    const genderSelect = document.getElementById('gender');
                    for (let i = 0; i < genderSelect.options.length; i++) {
                        if (genderSelect.options[i].value === gender) {
                            genderSelect.selectedIndex = i;
                            break;
                        }
                    }

                    // Set civil status dropdown
                    const civilStatusSelect = document.getElementById('civilStatus');
                    for (let i = 0; i < civilStatusSelect.options.length; i++) {
                        if (civilStatusSelect.options[i].value === civilStatus) {
                            civilStatusSelect.selectedIndex = i;
                            break;
                        }
                    }

                    document.getElementById('address').value = address;
                    document.getElementById('contact').value = contact;
                    document.getElementById('occupation').value = occupation;

                    // Parse the date to ensure correct format (YYYY-MM-DD)
                    try {
                        // Try different date formats
                        let formattedDate;
                        if (dateRegistered.includes('/')) {
                            // If date is in MM/DD/YYYY format
                            const dateParts = dateRegistered.split('/');
                            formattedDate =
                                `${dateParts[2]}-${dateParts[0].padStart(2, '0')}-${dateParts[1].padStart(2, '0')}`;
                        } else if (dateRegistered.includes('-')) {
                            // If already in YYYY-MM-DD format
                            formattedDate = dateRegistered;
                        } else {
                            // Try to parse as date object
                            const dateObj = new Date(dateRegistered);
                            formattedDate = dateObj.toISOString().split('T')[0];
                        }
                        document.getElementById('dateRegistered').value = formattedDate;
                    } catch (e) {
                        console.error("Error setting date:", e);
                        // Fallback to today's date
                        document.getElementById('dateRegistered').value = new Date()
                            .toISOString().split('T')[0];
                    }
                }
            });
        });
    });
    </script>
    <!-- Update -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.btn-danger');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const residentId = row.cells[1].textContent.trim(); // Get ID from table

                // Update form action dynamically
                document.getElementById('deleteResidentForm').action =
                    "<?= base_url('resident/delete/') ?>" + residentId;

                // Set hidden input value
                document.getElementById('deleteResidentId').value = residentId;
            });
        });
    });
    </script>

</body>

</html>