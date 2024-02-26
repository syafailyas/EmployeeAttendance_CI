    <!-- Begin Page Content -->
    <div class = "container-fluid">
      <div class = "row justify-content-center mt-5 pt-5">
        <form action = "" method = "POST" class = "col-lg-5 p-0">
          <div class = "card">
            <div
              class = "card-header py d-flex flex-row align-items-center justify-content-between"
              style = "background-color: white;"
            >
              <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Edit User</h6>
            </div>

            <div class = "card-body">
              <div class = "form-group row col-lg-12">
                <label for = "u_username" class = "col-form-label-lg">Username : &nbsp;</label>

                <div class = "col-sm-15">
                  <input
                    type = "text"
                    class = "form-control-plaintext form-control-lg"
                    name = "u_username"
                    value = "<?= $users['username']; ?>"
                  >
                </div>
              </div>

              <div class = "form-group">
                <label for = "password" class = "col-form-label-lg">Reset Password</label>

                <input type = "password" class = "form-control form-control-lg" name = "password" id = "password">

                <?= form_error('password', '<small class = "text-danger">', '</small>') ?>
              </div>
            </div>

          <div
            class = "card-footer py d-flex flex-row align-items-center justify-content-between"
            style = "background-color: white;"
          >
            <button type = "submit" class = "btn btn-block" style = "background-color: orange; border: none;">
              <span class = "text-white">SAVE</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->