<x-app-layout>
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
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <script>
            alert("Task Created Successfully");
            </script>
        </div>
    @endif
<div class="tit">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
    @csrf
    <form action="/createtask" method="POST">
    @csrf
    <x-primary-button style="margin: 40px">
        {{ __('Create Task') }}
    </x-primary-button>
    </form>
    <form action="/search" method="GET">
    <x-text-input  style="margin: 30px" type="text" name="Title" placeholder="Search your task title"  />
    <x-primary-button>Search</x-primary-button>
    </form>
    <form action="/showall" method="GET" style="margin-left:28px">
    <x-primary-button>Show all</x-primary-button>
    </form>
            
</div>
<table class="table table-bordered" style=" font-family: arial, sans-serif; width: 95%;margin:30px;"
>
    <tr style="border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;">
        <th>ID</th>
        <th>TITLE</th>
        <th>STATUS</th>
        <th>DUE DATE</th>
        <th>SHOW</th>
        <th>EDIT</th>
        <th>DELETE</th>
       
    </tr>
    
        @foreach ($tasks as $task)
        <tr>
            <td>{{$task['id']}} </td>
            <td>{{$task['Title']}} </td>
            <td>{{ $task['Status'] }}</td>
            <td>{{ $task['Duedate'] }}</td>
        
            <td >
                <a class="primary-button-link" href="{{ route('tasks.show',$task->id) }}">Show</a>
                    <td>
                        <a class="primary-button-link" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                   
                    </td>
                    <td>
                        <form action="/deletee/{{$task->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-primary-button >Delete</x-primary-button>
                          </form>
                    
                    </td>
            </td>
        </tr>
        @endforeach
    
    
    
</table>  

</div>
</div>
</div>
</div>
</div>
</x-app-layout>
