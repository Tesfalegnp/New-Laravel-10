<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Laravel CRUD Example</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="/items" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>

        <hr>

        <h3>Items List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>    
                    <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($items as $item)
                       <tr>
                           <td>{{ $item->id }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->description }}</td>
                           <td>
                               <form action="/items/{{ $item->id }}" method="POST" style="display:inline;">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                               </form>
                               <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $item->id }}">Edit</button>
                           </td>
                       </tr>

                       <!-- Edit Modal -->
                       <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form action="/items/{{ $item->id }}" method="POST">
                                           @csrf
                                           @method('PUT')
                                           <div class="form-group">
                                               <label for="name">Name</label>
                                               <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                                           </div>
                                           <div class="form-group">
                                               <label for="description">Description</label>
                                               <textarea class="form-control" name="description">{{ $item->description }}</textarea>
                                           </div>
                                           <button type="submit" class="btn btn-primary">Update Item</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </tbody>
           </table>
       </div>

       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
   </html>