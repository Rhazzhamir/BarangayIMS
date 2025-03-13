<!-- Add Resident Modal -->
<div class="modal fade" id="addResidentModal" tabindex="-1" aria-labelledby="addResidentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addResidentModalLabel">
                    <i class="bi bi-person-plus-fill me-2"></i>Add Resident
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="row">
                        <!-- Resident ID -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Resident ID</label>
                            <input type="text" class="form-control bg-light" value="Auto-generated" readonly>
                        </div>
                        
                        <!-- Photo -->
                        <div class="col-md-6 mb-3">
                            <label for="residentPhoto" class="form-label fw-bold">Photo</label>
                            <input type="file" class="form-control" id="residentPhoto">
                        </div>
                    </div>
                    
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter resident's full name" required>
                    </div>
                    
                    <div class="row">
                        <!-- Date of Birth -->
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label fw-bold">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" onchange="computeAge()" required>
                        </div>
                        
                        <!-- Age -->
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label fw-bold">Age</label>
                            <input type="text" class="form-control bg-light" id="age">
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label fw-bold">Gender</label>
                            <select class="form-select" id="gender" required>
                                <option value="" selected disabled>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        
                        <!-- Civil Status -->
                        <div class="col-md-6 mb-3">
                            <label for="civilStatus" class="form-label fw-bold">Civil Status</label>
                            <select class="form-select" id="civilStatus" required>
                                <option value="" selected disabled>Select status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widowed</option>
                                <option>Separated</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter complete address" required>
                    </div>
                    
                    <div class="row">
                        <!-- Contact -->
                        <div class="col-md-6 mb-3">
                            <label for="contact" class="form-label fw-bold">Contact</label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter contact number" required>
                        </div>
                        
                        <!-- Occupation -->
                        <div class="col-md-6 mb-3">
                            <label for="occupation" class="form-label fw-bold">Occupation</label>
                            <input type="text" class="form-control" id="occupation" placeholder="Enter occupation">
                        </div>
                    </div>
                    
                    <!-- Date Registered -->
                    <div class="mb-4">
                        <label for="dateRegistered" class="form-label fw-bold">Date Registered</label>
                        <input type="date" class="form-control" id="dateRegistered" required>
                    </div>
                    
                    <!-- Form Buttons -->
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i>Save Resident
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>