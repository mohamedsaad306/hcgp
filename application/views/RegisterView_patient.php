<?php require_once 'header2.php'; ?>
<div class="row" >
    <div class="panel panel-default">
        <div class="panel-heading">Patient Registeration </div>
        <div class="panel-body">

            <form class="form-inline">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name" placeholder="enter your name ">
                </div>
                <br> <br>

                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="email" class="form-control" id="email" placeholder="your email@example.com">
                </div>
                <br> <br>

                <div class="form-group">
                    <label for="Password">Password</label><br>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div><br> <br>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label><br>
                    <input type="password" class="form-control" id="cpassword" placeholder="">
                </div><br> <br>
                <label for="radio">Select Gender</label><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Male  </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Female
                    </label>
                </div><br><br>

                <input type="number" class="form-control" name="day" min="1" max="31" placeholder="Day"> - 
                <input type="number" class="form-control" name="month" min="1" max="12" placeholder="month"> - 
                <input type="number" class="form-control" name="year" min="1900" max="2015" placeholder="year"><br><br>


                <form>
                    <div class="form-group">
                        <label for="address"> Address</label><br>
                        <input type="address" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                    <br> <br>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
        </div>
    </div>



    <?php require_once 'footer.php'; ?>