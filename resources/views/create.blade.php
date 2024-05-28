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
    <form action="/insert" method="POST" style="align-content: center; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif"  >
        @csrf
        <h3 class="mb-4"><u>Enter the Details of the Task</u></h3>
        <h4>Task Title</h4>
        <input type="text" name="Title" placeholder="title">
        <h4>Task Description</h4>
        <textarea name="Description" placeholder="body content..."></textarea>
        <h4>Priority(Smallest has highest Priority)</h4>
        <div class="mb-2">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="Priority" value="Priority1" checked>
                <label class="form-check-label" for="radio1">Priority1</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="Priority" value="Priority2">
                <label class="form-check-label" for="radio2">Priority2</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" name="Priority" value="Priority3">
                <label class="form-check-label" for="radio3">Priority3</label>
              </div>
              
          </div>
        
          <h4>Status</h4>
          <div class="mb-2">
            
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio1" name="Status" value="NotStarted" checked>
              <label class="form-check-label" for="radio1">Not Started</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio2" name="Status" value="Ongoing">
              <label class="form-check-label" for="radio2">Ongoing</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio3" name="Status" value="Completed">
              <label class="form-check-label" for="radio3">Completed</label>
            </div>
       
        </div>
          <h4>Category</h4>
          
            <select class="custom-select" name="Category" style="width: 300px; margin-bottom:4px;">
              <option selected value="No Category">No Category</option>
              @foreach($types as $type)
              <option value={{ $type }}>{{ $type }}</option>
          @endforeach
              
              <!-- Add more options as needed -->
            </select>
         
      
          <h4>Due Date</h4>
          <input type="date" name="DueDate" placeholder="Due Date"><br>
          <x-primary-button class="ms-6 mt-4">
            {{ __('Submit') }}
        </x-primary-button>
          



    </form>
</body>
</html>
</x-guest-layout>