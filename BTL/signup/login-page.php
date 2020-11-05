<?php
    include("includes/header.php");
?>
      <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="process-login.php" method="POST">
                        <div class="form-group">
                          <label for="txtEmail">Email:</label>
                          <input type="email" class="form-control" name="txtEmail" id="txtEmail">
                        </div>
                        <div class="form-group">
                          <label for="txtPassword">Password:</label>
                          <input type="password" class="form-control" name="txtPassword" id="txtPassword">
                        </div
                        <div class="form-group">
                          <input type="submit" class="form-control bg-success text-light" name="sbmLogin" id="sbmLogin" value="Login">
                        </div>
                    </form>
                </div>
            </div>
      </main>
<?php
    include("includes/footer.php");
?>