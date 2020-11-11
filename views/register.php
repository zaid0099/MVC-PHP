<?php?>
<h3>Register</h3>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="firstName">FirstName</label>
                <input type="firstName" class="form-control" name="firstName" id="firstName">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="lastName">LastName</label>
                <input type="lastName" class="form-control" name="lastName" id="lastName">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>