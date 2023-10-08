@include('body.header')
        <!-- Create todo section -->
        <div class="row m-1 p-3">
            <div class="col col-11 mx-auto">
                <form action="{{route('store.todo')}}" method="post">
                    @csrf
                <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                   
                     <div class="col">
                        <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="todo" type="text" placeholder="Add new list ..">
                    </div>
                   
                    <div class="col-auto px-0 mx-0 mr-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    
            </div>
        </form>
                </div>
            
            </div>
        </div>
        <div class="p-2 mx-4 border-black-25 border-bottom"></div>
        @include('body.footer')