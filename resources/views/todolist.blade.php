
 @php
 $todo = App\Models\Todolist::latest()->get();
@endphp
        <!-- Todo list section -->
        <div class="row mx-1 px-5 pb-3 w-80">
            <div class="col mx-auto">
                @foreach ( $todo as $key=>$item)
                    
                
                <!-- Todo Item 1 -->
                <div class="row px-3 align-items-center todo-item rounded">
                    {{$key+1}}.
                    <div class="col px-1 m-1 d-flex align-items-center">
                        {{$item->todo}}
                          </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0">
                        <div class="row d-flex align-items-center justify-content-end">
                            <h5 class="m-0 p-0 px-2">
                                <a href="{{route('edit.list',$item->id)}}" class=" text-info btn m-0 p-0 ">Edit </a>
                            </h5>
                            <h5 class="m-0 p-0 px-2">
                               <p ><a href="{{route('delete.list',$item->id)}}" class=" text-danger btn m-0 p-0">Delete</a></p> 
                            </h5>
                        </div>
                        
                    </div>
                </div>
               
                @endforeach
                
            </div>
        </div>