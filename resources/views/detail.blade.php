<div class="modal fade" id="modal-id" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="model-id" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title" id="masterdataModel"> View Detail</h4>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form class="form-horizontal mt-4" id="masterdata">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label> External Id </label>
                        <input type="text" class="form-control" id="external_id" name="external_id" value="">
                    </div>

                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="form-group">
                        <label> Is Active </label>
                        <div class="form-check">
                            <input type="radio" id="active" name="isactive"
                                class="form-check-input" value="active">
                            <label class="form-check-label mb-0" for="customRadio1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="inactive" name="isactive"
                                class="form-check-input" value="inactive">
                            <label class="form-check-label mb-0" for="customRadio2"> Inactive </label>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label> List Order </label>
                        <input type="text" class="form-control" id="list_order" name="list_order" value="">
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div> 