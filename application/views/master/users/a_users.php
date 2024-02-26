    <!-- Begin Page Content -->
    <div class = "container-fluid">
      <div class = "row justify-content-center mt-5 pt-5">
        <form action = "<?= base_url('master/a_users/') . $e_id; ?>" method = "POST" class = "col-lg-5 p-0">
          <div class = "card">
            <div
              class = "card-header py d-flex flex-row align-items-center justify-content-between"
              style = "background-color: white;"
            >
              <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Add User</h6>
            </div>

            <div class = "card-body">
              <input type = "hidden" name = "e_id" value = "<?= $e_id; ?>">

              <div class = "form-group row">
                <label for = "u_username" class="col-form-label col-lg-4">Username</label>

                <div class = "col p-0">
                  <input
                    type = "text"
                    readonly
                    class = "form-control-plaintext col-lg"
                    name = "u_username"
                    id = "u_username"
                    value = "<?= $username; ?>"
                  >

                  <?= form_error('u_username', '<small class = "text-danger">', '</small>') ?>
                </div>
              </div>

              <div class = "form-group row">
                <label for = "u_password" class = "col-form-label col-lg-4">Password</label>

                <div class = "col p-0">
                  <input type = "password" class = "form-control col-lg" name = "u_password" id = "u_password">

                  <?= form_error('u_password', '<small class = "text-danger">', '</small>') ?>
                </div>
              </div>
            </form>

            <div
              class = "card-footer py d-flex flex-row align-items-center justify-content-between"
              style = "background-color: white;"
            >
              <button type = "submit" class = "btn btn-block" style = "background-color: orange; border: none;">
                <span class = "text-white">SAVE</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->