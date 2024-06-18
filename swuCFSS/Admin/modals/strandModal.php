<div class="modal fade" id="addStrand" tabindex="-1" role="dialog" aria-labelledby="addStrandTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStrandTitle">Add Strands</h5>
            </div>
            <div class="modal-body">
                <form id="addStrandForm">
                    <div class="mb-3">
                        <label for="strandName" class="form-label">Strand Name</label>
                        <input type="text" class="form-control" id="strandName" name="strandName" required>
                    </div>
                    <div class="mb-3">
                        <label for="strandCode" class="form-label">Strand Code (STEM)</label>
                        <input type="text" class="form-control" id="strandCode" name="strandCode" required>
                    </div>
                    <div class="mb-3">
                        <label for="classSize" class="form-label">Class Size</label>
                        <input type="number" class="form-control" id="classSize" name="strandName" required>
                    </div>
                    <div class="mb-1">
                        <h4>Strand Specializations</h4>
                    </div>
                    <div id="specializationsContainer">
                        <!-- Specialization input boxes will be added here dynamically -->
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="addSpecialization()">Add
                        Another Specialization</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    onclick="clearSpecializations()">Close</button>
                <button type="button" class="btn btn-primary" onclick="clearSpecializations()">Add
                    Strand</button>
            </div>
        </div>
    </div>
</div>