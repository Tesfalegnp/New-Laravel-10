@extends('fixed.header_footer')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <style>
        a{
            text-decoration:none;
        }
    </style>
<div class="container mt-5 mb-5"> 
        <div class="row">
            <div class="col-md-6 offset-md-3"> 
                <h2>Add Bed</h2>
                <form action="/items" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="mb-3">
                        <label for="bedType" class="form-label">Bed Type</label>
                        <select class="form-select" id="bedType" name="bed_type" required>
                            <option value="">Select Bed Type</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Queen">Queen</option>
                            <option value="King">King</option> 
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="room" class="form-label">Room Number</label>
                        <input type="number" class="form-control" id="room" name="room" requireed>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-2">
                        <label for="price" class="form-label">Price</label> 
                        <input type="number" class="form-control" id="price" name="price" required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Add Bed</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

@endsection