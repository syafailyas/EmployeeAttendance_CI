  <!-- Begin Page Content -->
  <div class = "container-fluid">
    <div class = "row justify-content-center mt-5 pt-5">
      <form action = "" method = "POST" class = "col-lg-5  p-0">
        <div class = "card">
          <div
            class = "card-header py d-flex flex-row align-items-center justify-content-between"
            style = "background-color: white;">
            <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Add Position</h6>
          </div>

          <div class = "card-body">
            <form>
              <div class = "form-group">
                <label for = "l_name" class = "col-form-label-lg">Position</label>

                <input type = "text" class = "form-control form-control-lg" name = "l_name" id = "l_name">

                <?= form_error('l_name', '<small class = "text-danger">', '</small>') ?>
              </div>
            </form>
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