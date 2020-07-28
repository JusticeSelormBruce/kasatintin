<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm text-lowercase" data-toggle="modal" data-target="#exampleModal">
  Add News Category
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New News Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="jumbotron">
            <form action="/admin/category-store" method="POST">
                @csrf
                <div class="form-group input-group-sm py-2">
                    <label for="name">News Category Name</label>
                    <input type="text" class="form-control" required name="name">
                </div>
                <div class="form-group ">
                    <label for="name">News Category Description</label>
                    <textarea type="text" class="form-control" required name="description"></textarea>
                </div>
                <div class="row">
                    <div class="mx-auto"><button class="btn btn-primary btn-sm" type="submit"><span class="mx-3">Save</span></button></div>
                </div>
            </form>
          
        </div>
        </div>
        
      </div>
    </div>
  </div>