<!-- Delete Resident Confirmation Modal -->
<div class="modal fade" id="deleteResidentModal" tabindex="-1" aria-labelledby="deleteResidentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteResidentModalLabel">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Confirm Deletion
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-4">
                <p class="fs-5 text-dark">Are you sure you want to delete this resident?</p>
                <p class="text-muted">This action cannot be undone.</p>
            </div>
            <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <?= csrf_field() ?>
                <form id="deleteResidentForm" method="POST">
                    <input type="hidden" id="deleteResidentId" name="resident_id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>