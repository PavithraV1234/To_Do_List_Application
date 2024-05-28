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
            <h3 class="mb-4"><u>Tasks under this category</u></h3>
            <h4 class="mb-3"></h4>
            @foreach ($Titles as $Title )
            <h5>{{ $Title }} </h5>
            @endforeach
            
            
             
              
    
    
    
        </form>
    </body>
    </html>
    </x-guest-layout>