<!-- Update Resident Modal -->
<div class="modal fade" id="updateResidentModal" tabindex="-1" aria-labelledby="updateResidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="updateResidentModalLabel">
                    <i class="bi bi-pencil-square me-2"></i>Update Resident
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                
                <form action="<?= base_url('/resident/update') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="residentId" name="resident_id">
                    <div class="row">
                        <!-- Resident ID -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Resident ID</label>
                            <input type="text" class="form-control bg-light" id="residentIdDisplay" readonly>
                        </div>

                        <!-- Photo -->
                        <div class="col-md-6 mb-3">
                            <label for="residentPhoto" class="form-label fw-bold">Photo</label>
                            <input type="file" class="form-control" id="residentPhoto" name="photo">
                        </div>
                    </div>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="full_name" required>
                    </div>

                    <div class="row">
                        <!-- Date of Birth -->
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label fw-bold">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="date_of_birth" onchange="computeAge()" required>
                        </div>

                        <!-- Age -->
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label fw-bold">Age</label>
                            <input type="text" class="form-control bg-light" id="age" name="age" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label fw-bold">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <!-- Civil Status -->
                        <div class="col-md-6 mb-3">
                            <label for="civilStatus" class="form-label fw-bold">Civil Status</label>
                            <select class="form-select" id="civilStatus" name="civil_status" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="row">
                        <!-- Contact -->
                        <div class="col-md-6 mb-3">
                            <label for="contact" class="form-label fw-bold">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>

                        <!-- Occupation -->
                        <div class="col-md-6 mb-3">
                            <label for="occupation" class="form-label fw-bold">Occupation</label>
                            <input type="text" class="form-control" id="occupation" name="occupation">
                        </div>
                    </div>

                    <!-- Date Registered -->
                    <div class="mb-4">
                        <label for="dateRegistered" class="form-label fw-bold">Date Registered</label>
                        <input type="date" class="form-control" id="dateRegistered" name="date_registered" required>
                    </div>

                    <!-- Form Buttons -->
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning text-white">
                            <i class="bi bi-save me-1"></i>Update Resident
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
