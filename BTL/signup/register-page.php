<?php
    include("includes/header.php");
?>
      <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="process-register.php" method="POST">
                        <div class="form-group">
                          <label for="txtFirstName">First Name:</label>
                          <input type="text" class="form-control" name="txtFirstName" id="txtFirstName">
                        </div>
                        <div class="form-group">
                          <label for="txtLastName">Last Name:</label>
                          <input type="text" class="form-control" name="txtLastName" id="txtLastName">
                        </div>
                        <div class="form-group">
                          <label for="txtEmail">Email:</label>
                          <input type="email" class="form-control" name="txtEmail" id="txtEmail">
                        </div>
                        <div class="form-group">
                          <label for="txtPassword1">Password:</label>
                          <input type="password" class="form-control" name="txtPassword1" id="txtPassword1">
                        </div>
                        <div class="form-group">
                          <label for="txtPassword2">Password Confirm:</label>
                          <input type="password" class="form-control" name="txtPassword2" id="txtPassword2">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="form-control bg-success text-light" name="sbmRegister" id="sbmRegister" value="Register">
                        </div>
                    </form>
                </div>
            </div>
      </main>
<?php
    include("includes/footer.php");
?>