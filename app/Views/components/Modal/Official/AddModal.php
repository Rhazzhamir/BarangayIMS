<!-- Add Official Modal -->
<div class="modal fade" id="addOfficialModal" tabindex="-1" aria-labelledby="addOfficialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ✅ enctype for file uploads -->
            <form action="/officials/store" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOfficialModalLabel">Add Barangay Official</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <div class="mb-3">
                        <label for="term" class="form-label">Term Start-End</label>
                        <input type="text" class="form-control" id="term" name="term" placeholder="e.g., 2022-2025">
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="e.g., 09123456789" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="e.g., example@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Official</button>
                </div>
            </form>
        </div>
    </div>
</div>
