<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communication Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
            transition: background-color 0.3s ease;
        }
    </style>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Association</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('items.abi')}}"><i class="fas fa-bed"></i> Manage Reservations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#news"><i class="fas fa-newspaper"></i> Post News</a>
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="#profile"><i class="fas fa-user-cog"></i> Profile Settings</a>
                    </li>
                    <li class="nav-ite">
                        <a class="nav-link" class="text-danger" href="{{route('items.index')}}"><i class="fas fa-sign-out-alt" >Log Out</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>This is a student association website. We aim to connect students, foster collaboration, and provide resources.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Home</a></li>
                    <li><a href="#" class="text-light">Events</a></li>
                    <li><a href="#" class="text-light">Members</a></li>
                    <li><a href="#" class="text-light">Contact</a></li>
                </ul>
                            <div class="container">
                                    <label for="backgroundSelector" class="form-label">Change Background Color:</label>
                                    <select id="backgroundSelector" class="form-select">
                                        <option value="white">White</option>
                                        <option value="lightblue">Light Blue</option>
                                        <option value="lightgreen">Light Green</option>
                                        <option value="lightyellow">Light Yellow</option>
                                        <option value="lightpink">Light Pink</option>
                                    </select>
                                </div>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>
                    Email: <a href="mailto:contact@studentassociation.com" class="text-light">peterhope935@gmail.com</a><br>
                    Phone: +251-916225842  <br>
                    Address: Addis Abeba, Ethiopia.
                </p>
                <ul class="list-inline social-icons">
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center py-2 bg-dark">
        <p class="mb-0">&copy; 2024 Student Association. All Rights Reserved.</p>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('backgroundSelector').addEventListener('change', function() {
            document.body.style.backgroundColor = this.value;
        });
    </script>
</body>
</html>
