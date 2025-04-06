<!-- File: components/viewProfile.php -->
<div class="modal fade" id="viewResidentModal" tabindex="-1" aria-labelledby="viewResidentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title fw-bold" id="viewResidentModalLabel">Resident Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 text-center mb-3">
              <img id="residentPhoto" src="<?= base_url('template/img/default-avatar.png') ?>" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;" alt="Resident Photo">
              <h5 id="residentName" class="fw-bold"></h5>
              <span id="residentId" class="badge bg-primary"></span>
            </div>
            <div class="col-md-8">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Age</label>
                  <p id="residentAge" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Gender</label>
                  <p id="residentGender" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Civil Status</label>
                  <p id="residentCivilStatus" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Occupation</label>
                  <p id="residentOccupation" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-12">
                  <label class="form-label fw-semibold">Address</label>
                  <p id="residentAddress" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Contact Number</label>
                  <p id="residentContact" class="form-control-plaintext"></p>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Date Registered</label>
                  <p id="residentDateRegistered" class="form-control-plaintext"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" id="editResidentBtn">Edit</button>
      </div>
    </div>
  </div>
</div>