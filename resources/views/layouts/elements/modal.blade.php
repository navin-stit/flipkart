<!-- ADD ROOMS MODAL-->
<div class="modal fade" id="modalRoomsAddForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Rooms</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="javascript:void(0)" class="AddRoomsData" enctype="multipart/form-data">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-plus prefix grey-text"></i>
                        <input type="text" id="form3"  class="form-control uncheck" name="room_number">
                        <label data-error="wrong" data-success="right" for="form3">Room Number</label>
                    </div>

                    <div class="md-form mb-4">                        
                        <i class="far fa-images prefix grey-text"></i>
                        <input type="file" name="images">                       
                    </div>
                </div> 

                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-indigo">Add<i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

