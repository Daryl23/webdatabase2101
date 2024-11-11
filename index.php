<?php include 'inc/header.php'; ?>
    <!--HTTP Request Methods
        Get     : Select/ Insert (Not Secured)
        Post    : Insert/ Select (More Secured)
        Put     : Update
        Delete  : Delete
        -->
        <div class="container d-flex flex-column align-items-center">
            <img src="img/logo.png" alt="logo">
            <h2>Form Validation</h2>
            <p>Input your credentials:</p>
            <div class="mb-3">
                <label for="name" class="form-label">User Name:</label>
                <input type="text" class="form-control" placeholder="Enter your user name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <input type="submit" value="Login" class="btn btn-dark w-45">
                <input type="submit" value="Sign up" class="btn btn-dark w-45">
            </div>
<?php include 'inc/footer.php'; ?>