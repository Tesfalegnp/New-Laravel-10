@extends('admin.admin_header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Admin Dashboard</title>
    <style>
        body {
            background-color: #f9fafb;
        }
        .section-header {
            margin: 40px 0;
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
        }
        .card:hover {
            transform: scale(1.02);
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Admin Dashboard</h1>
        <div class="row text-center mb-5">
            <!-- Summary Cards -->
            <div class="col-md-4">
                <div class="card text-white bg-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Reservations</h5>
                        <p class="display-6">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Active Subscribers</h5>
                        <p class="display-6">85</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pending Comments</h5>
                        <p class="display-6">45</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservations Management Section -->
        <div class="section-header">
            <h2>Manage Reservations</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Reservation ID</th>
                        <th>Customer Name</th>
                        <th>Room Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>RES12345</td>
                        <td>John Doe</td>
                        <td>Deluxe</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Subscribers Section -->
        <div class="section-header">
            <h2>View Subscribers</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Jane Smith
                <span class="badge bg-primary rounded-pill">Active</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Mark Johnson
                <span class="badge bg-secondary rounded-pill">Inactive</span>
            </li>
        </ul>

        <!-- Comments Management Section -->
        <div class="section-header">
            <h2>Manage Comments</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Comment ID</th>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>COM45678</td>
                        <td>Emily Rose</td>
                        <td>Great service!</td>
                        <td>
                            <button class="btn btn-sm btn-success"><i class="fa fa-check"></i> Approve</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- News Posting Section -->
        <div class="section-header">
            <h2>Post News</h2>
        </div>
        <form>
            <div class="mb-3">
                <label for="newsTitle" class="form-label">News Title</label>
                <input type="text" class="form-control" id="newsTitle" placeholder="Enter news title">
            </div>
            <div class="mb-3">
                <label for="newsContent" class="form-label">Content</label>
                <textarea class="form-control" id="newsContent" rows="4" placeholder="Write news content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post News</button>
        </form>

        <!-- Reports Section -->
        <div class="section-header">
            <h2>Generate Reports</h2>
        </div>
        <button class="btn btn-dark me-2"><i class="fa fa-file-pdf"></i> Download Reservation Report</button>
        <button class="btn btn-dark"><i class="fa fa-file-excel"></i> Download Subscriber Report</button>
    </div> <br><br><br>

  </body>
</html>

@endsection
