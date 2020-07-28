<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm text-lowercase" data-toggle="modal" data-target="#exampleModaledit{{$item->id}}">
    Edit
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModaledit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeledit{{$item->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit{{$item->id}}"> News Description</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="jumbotron">
           
                <form action="/admin/category-edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="form-group input-group-sm py-2">
                        <label for="name">News Category Name</label>
                        <input type="text" class="form-control" required name="name" value="{{$item->name}}">
                    </div>
                    <div class="form-group ">
                        <label for="name">News Category Description</label>
                        <textarea type="text" class="form-control" required name="description">  {{$item->description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="mx-auto"><button class="btn btn-primary btn-sm" type="submit"><span class="mx-3">Update</span></button></div>
                    </div>
                </form>
               </div>
          </div>
          </div>
          
        </div>
      </div>
    </div>