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
       
        <form action="/editinsert/{{$task->id}}" method="POST" style="align-content: center; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif"  >
            @csrf
            @method('PUT')
            <h3 class="mb-4"><u>Enter the Details of the Task</u></h3>
            <h4>Task Title</h4>
            <input type="text" name="Title" placeholder="title" value="{{ $task->Title }}">
            <h4>Task Description</h4>
            <textarea name="Description" placeholder="body content...">{{ $task->Description }}</textarea>
            <h4>Priority(Smallest has highest Priority)</h4>
            <div class="mb-2">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="Priority" value="Priority1" 
                    <?php
                    if( $task->Priority =="Priority1")
                        echo "checked";
                    
                    ?>
                    >
                    <label class="form-check-label" for="radio1">Priority1</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="Priority" value="Priority2"
                    <?php
                    if( $task->Priority =="Priority2")
                        echo "checked";
                    
                    ?>>
                    <label class="form-check-label" for="radio2">Priority2</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio3" name="Priority" value="Priority3"
                    <?php
                    if( $task->Priority =="Priority3")
                        echo "checked";
                    
                    ?>>
                    <label class="form-check-label" for="radio3">Priority3</label>
                  </div>
                  
              </div>
            
              <h4>Status</h4>
              <div class="mb-2">
                
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio1" name="Status" value="NotStarted" 
                  <?php
                    if( $task->Status =="NotStarted")
                        echo "checked";
                    
                    ?>>
                  <label class="form-check-label" for="radio1">Not Started</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio2" name="Status" value="Ongoing"
                  <?php
                    if( $task->Status =="Ongoing")
                        echo "checked";
                    
                    ?>>
                  <label class="form-check-label" for="radio2">Ongoing</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio3" name="Status" value="Completed"
                  <?php
                    if( $task->Status =="Completed")
                        echo "checked";
                    
                    ?>>
                  <label class="form-check-label" for="radio3">Completed</label>
                </div>
           
            </div>
              <h4>Category</h4>
              <select class="custom-select" name="Category" style="width: 300px; margin-bottom:4px;">
                <option value="No Category" {{ $task->Category=="No Category" ? 'selected' : '' }}>No Category</option>
                @foreach($types as $type)
                <option value={{ $type }} {{ $task->Category==$type? 'selected' : '' }}>{{ $type }}</option>
            @endforeach
                
                <!-- Add more options as needed -->
              </select>
              <h4>Due Date</h4>
              <input type="date" name="DueDate" placeholder="Due Date" value="{{ $task->Duedate }}"><br>
              <x-primary-button class="ms-6 mt-4">
                {{ __('Submit') }}
            </x-primary-button>
              
    
    
    
        </form>
    </body>
    </html>
    </x-guest-layout>