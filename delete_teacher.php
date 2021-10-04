<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
<body>

    <!-- Navbar included -->
    <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>

    <!-- Main Section Start Here -->
    <main>
        <div class="container">
            <h1>Delete Teacher</h1>

            <section>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Search By</label>
                        <select class="form-select">
                            <option selected>Please Select one</option>
                            <option>Registration Number</option>
                            <option>Roll No</option>
                            <option>Student Name</option>
                            <option>Student CNIC</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Enter Data</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Delete Record</button>
                    </div>
                </form>

            </section>
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>
