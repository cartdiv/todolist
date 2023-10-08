@include('body.header')

  <!-- Create todo section -->
  <div class="row m-1 p-3">
    <div class="col col-11 mx-auto">
        <form action="{{route('update.list')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$edit_todo->id}}">
        <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
           
             <div class="col">
                <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" value="{{$edit_todo->todo}}" name="todo" type="text">
            </div>
           
            <div class="col-auto px-0 mx-0 mr-2">
                <button type="submit" class="btn btn-primary">Edit</button>
            
    </div>
</form>
        </div>
    
    </div>
</div>
<div class="p-2 mx-4 border-black-25 border-bottom"></div>