<?php require_once 'header2.php'; ?>

type:  <?php $cat = isset($_POST['cat']) ? $_POST['cat'] : "";
echo $cat; ?><br>
<div class="row">
    <div class="span-12">
        <div class="well">
            <center>
                <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
            </center>
        </div>
    </div>
</div>



<?php require_once 'footer.php'; ?>