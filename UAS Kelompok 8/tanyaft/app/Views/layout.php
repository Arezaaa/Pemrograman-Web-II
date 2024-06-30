<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        /* Hide scrollbar for Firefox, Chrome, Safari */
        .sidebar::-webkit-scrollbar,
        .main-content::-webkit-scrollbar {
            display: none;
        }

        /* Optional: Hide scrollbar for Edge and IE */
        .sidebar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        .main-content {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        .sidebar {
            height: 100vh; /* Full height of viewport */
            overflow-y: auto; /* Enable vertical scrolling */
            background-color: #f8f9fa; /* Optional: Adjust sidebar background */
        }

        .main-content {
            height: 100vh; /* Full height of viewport */
            overflow-y: auto; /* Enable vertical scrolling */
            background-color: #f8f9fa; /* Optional: Adjust sidebar background */
        }

        .sidebar .nav-link:hover {
            background-color: #ededed;
            border-radius: 0.25rem;
        }

        .sidebar .nav-item.active .nav-link {
            background-color: lightblue;
            border-radius: 0.25rem;
        }

        .custom-orange-bg {
            background-color: rgba(255, 239, 213, 0.5);
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    <?= $this->include('partials/navbar') ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <?= $this->include('partials/sidebar') ?>
            </div>
            
            <!-- Main content -->
            <div class="col-md-10 main-content">
                <!-- Main content will be loaded here -->
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
