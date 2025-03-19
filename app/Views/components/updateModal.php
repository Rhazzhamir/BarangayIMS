<!-- Update Resident Modal -->
<div class="modal fade" id="updateResidentModal" tabindex="-1" aria-labelledby="updateResidentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title text-dark" id="updateResidentModalLabel">
                    <i class="bi bi-pencil-square me-2"></i>Update Resident
                </h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <form action="<?= base_url('resident/update/') ?>" method="POST" enctype="multipart/form-data"
                    id="updateResidentForm">
                    <input type="hidden" id="residentId" name="resident_id">

                    <div class="mb-3">
                        <label for="residentPhoto" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="residentPhoto" name="photo">
                        <small class="text-muted">Leave empty to keep current photo</small>
                    </div>

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="full_name" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="date_of_birth"
                                onchange="computeAge()" required>
                        </div>
                        <div class="col-md-6">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control bg-light" id="age" name="age" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="civilStatus" class="form-label">Civil Status</label>
                            <select class="form-select" id="civilStatus" name="civil_status" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" class="form-control" id="occupation" name="occupation">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="dateRegistered" class="form-label">Date Registered</label>
                        <input type="date" class="form-control" id="dateRegistered" name="date_registered" required>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning text-dark">Update Resident</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>