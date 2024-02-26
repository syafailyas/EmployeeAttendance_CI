  <!-- Begin Page Content -->
  <div class = "container-fluid">
    <div class = "row justify-content-center mt-4 pt-4">
      <form action = "" method = "POST" class = "col-lg-5  p-0">
        <div class = "card">
          <div
            class = "card-header py d-flex flex-row align-items-center justify-content-between"
            style = "background-color: white;"
          >
            <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Edit Department</h6>
          </div>

          <div class = "card-body">
            <div class = "form-group">
              <label for = "department_id" class = "col-form-label-lg">Department ID</label>

              <input type = "text" class = "form-control form-control-lg" name = "d_id" value = "<?= $d_old['id']; ?>">
            </div>

            <div class = "form-group">
              <label for = "d_name" class = "col-form-label-lg">Department Name</label>

              <input
                type = "text"
                class = "form-control form-control-lg" 
                name = "d_name"
                id = "d_name"
                value = "<?= $d_old['name']; ?>"
              >

              <?= form_error('d_name', '<small class = "text-danger">', '</small>') ?>
            </div>
          </div>

          <div
            class = "card-footer py d-flex flex-row align-items-center justify-content-between"
            style = "background-color: white;"
          >
            <button
              type = "submit"
              class = "btn btn-info btn-user btn-block"
              style = "background-color: orange; border: none;"
            >
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