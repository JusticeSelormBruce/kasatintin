<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm text-lowercase" data-toggle="modal" data-target="#exampleModaldescription{{$item->id}}">
    Description
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModaldescription{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeldescription{{$item->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeldescription{{$item->id}}"> News Description</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="jumbotron">
            <p>{{$item->description}}</p>
          </div>
          </div>
          
        </div>
      </div>
    </div>