<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Categories') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        th,td{
        border: 1px solid #dddddd;
        text-align: left;
        padding: 15px;
        }
        .primary-button-link {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #1F2937; /* Change color as needed */
    color: #fff; /* Text color */
    border: none;
    border-radius: 0.20rem;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-size: 15px;
    font-style: inherit;
}
        </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
                        <x-primary-button type="button"  data-bs-toggle="modal" data-bs-target="#myModal">Create Category</x-primary-button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Create Category</h5>
                                        <x-primary-button type="button" class="btn-close" data-bs-dismiss="modal"></x-primary-button>
                                    </div>
                                    <form action="/catcreate" method="POST">
                                        @csrf
                                    <div class="modal-body">
                                        
                                            <div class="mb-3">
                                                <label class="form-label required">Category</label>
                                                <input type="text" name="Type" class="form-control">
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <x-primary-button type="submit" >Submit</x-primary-button>
                                      
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
                    <form action="/catsearch" method="GET"><x-text-input  style="margin: 30px;width:300px"  name='Type' placeholder="Search your category" required autofocus autocomplete="username" />
                    <x-primary-button>Search</x-primary-button></form>
                    <form action="/catshowall" method="GET" style="margin-left:28px">
                        <x-primary-button>Show all</x-primary-button>
                        </form>
                    <table class="table table-bordered" style=" font-family: arial, sans-serif; width: 95%;margin:30px;"
>
    <tr style="border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;">
        <th>ID</th>
        <th>CATEGORY</th>
        <th>SHOW</th>
        
        <th>DELETE</th>
       
    </tr>
    @foreach ($types as $type)
    <tr>
        <td>{{$type['id']}} </td>
        <td>{{$type['Type']}} </td>
        
    
        <td >
            <a class="primary-button-link " href="{{ route('types.show', $type->id) }}">Show</a>
        </td>
        <td>
            <form action="/deleteet/{{$type->id}}" method="POST">
                @csrf
                @method('DELETE')
                <x-primary-button >Delete</x-primary-button>
              </form>
        
        </td>
                    
                
    </tr>
    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
