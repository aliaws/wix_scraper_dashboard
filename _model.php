<!-- Dashboard password model -->

<div id="exampleModalCenter" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block; padding-right: 14px;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-0" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Enter Password</h5>
      </div>
      <div class="modal-body">
        <form id="passwordForm" method="POST" action="">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control <?php echo $borderRed != "" ? $borderRed : "" ?>" id="password" aria-describedby="emailHelp" placeholder="Enter password" name="password">
            <?php if ($borderRed != "") { ?>
              <small id='emailHelp' class='form-text text-danger '>Please Ender correct password.</small>
            <?php } ?>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>