<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm text-lowercase" data-toggle="modal" data-target="#exampleModaldelete{{$item->id}}">
  Delete   
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModaldelete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeldelete{{$item->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeldelete{{$item->id}}"> delete <span class="mx-2"></span> {{$item->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="jumbotron">
          <div class="row">
             <div class="mx-auto"> <a href="{{url('/admin/category-delete',['id'=>$item->id])}}" class="btn btn-danger">Yes</a>
                <span class="mx-3"></span>
              <button type="button" class="close pt-4" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Cancel</span>
              </button>
            </div>
          </div>
          </div>
          </div>
          
        </div>
      </div>
    </div>