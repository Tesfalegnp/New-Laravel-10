@extends('fixed.header_footer')

@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Items List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>bed_type</th>
                    <th>Description</th>    
                    <th>room</th>
                    <th>image</th>
                    <th>price</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($items as $item)
                       <tr>
                           <td>{{ $item->id }}</td>
                           <td>{{ $item->bed_type }}</td>
                           <td>{{ $item->Description }}</td>
                           <td>{{ $item->room }}</td>
                           <td>{{ $item->image }}</td>
                           <td>{{ $item->price }}</td>
                           <td> 
                            <!-- for Delete  -->
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
                                               <input type="text" class="form-control" name="name" value="{{ $item->room }}" required>
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
</body>
</html>


@endsection