<button type="button" class="btn btn-secondary text-lowercase h2" data-toggle="modal" data-target="#exampleModallogo">
<span class="mx-2">upload App Logo</span>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModallogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabellogo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-sm">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabellogo">Upload System Logo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form action="/admin/system-logo/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group-sm">
                <input type="file" name="path" required
                       onchange="document.getElementById('value').src = window.URL.createObjectURL(this.files[0])">
            </div>
            <div class=" input-group-sm pt-3">
                <img class=" w-100 img-raised img-fluid" id="value"/>
            </div>

            <div class="row ">
                <div class="mx-auto">
                    <button class="btn btn-success btn-sm" type="submit">   <span class="mx-5">Save</span></button>
                </div>

            </div>
           </form>
        </div>
      </div>
    </div>
  </div>