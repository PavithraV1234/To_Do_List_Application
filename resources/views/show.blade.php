<x-guest-layout>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
        <title>Document</title>
    </head>
    <body >
        @csrf
        <form action="" method="POST" style="align-content: center; text-align:left; font-family:Georgia, 'Times New Roman', Times, serif;margin:10px;"  >
            @csrf
            <h3 class="mb-4"><u>Details of the Task</u></h3>
            <h4 class="mb-3">Task Title : {{ $task->Title }}</h4>
            <h4 class="mb-3">Task Description : {{ $task->Description }}</h4>
            <h4 class="mb-3">Priority(Smallest has highest Priority) : {{ $task->Priority  }}</h4>
            <h4 class="mb-3">Category :{{ $task->Category }}</h4>
              <h4 class="mb-3">Status : {{ $task->Status  }}</h4>
              <h4 class="mb-3">Due Date : {{ $task->Duedate  }}</h4>
             
              
    
    
    
        </form>
    </body>
    </html>
    </x-guest-layout>