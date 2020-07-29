
<div class="jumbotron py-2 bg-light">
    <form  action="/admin/system-info/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">App Name</label>
        <input type="text" class="form-control" name="name" required value="{{$info->name ?? ""}}">
        </div>
        <div class="form-group">
            <label for="date">App Start Date</label>
        <input type="date" class="form-control" name="date" required value="{{$info->date ?? ""}}">
        </div>
        <div class="form-group">
            <label for="name">App About Information</label>
       <textarea name="about" id="" cols="30" rows="10" class="form-control" required>{{$info->about ?? ""}}</textarea>
        </div>
        <div class="row">
            <div class="mx-auto"><button class="btn btn-primary btn-sm text-capitalize" type="submit">
            @if ($info == null)
            <span class="mx-4">Save System Info</span>
            @else
            <span class="mx-4">Update System Info</span>
            @endif    
            </button></div>
        </div>
    </form>
</div>

