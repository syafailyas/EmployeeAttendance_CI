  <!-- Begin Page Content -->
  <div class = "container-fluid">
    <div class = "row justify-content-center mt-4 pt-1">
      <form action = "" method = "POST" class = "col-lg-10 p-0">
        <div class = "card">
          <div 
            class = "card-header py d-flex flex-row align-items-center justify-content-between"
            style = "background-color: white;"
          >
            <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Add Attendance Time</h6>
          </div>

          <div class = "card-body">
            <div class = "form-group row">
              <label class = "col-sm-4 col-form-label col-form-label-lg">Attendance Time Number &nbsp; :</label>

              <div class = "col-sm-4">
                <input
                  type = "text"
                  readonly
                  class = "form-control-plaintext form-control-lg"
                  value = "<?= $s_id; ?>">
              </div>
            </div>

            <?= form_error('s_id', '<small class = "text-danger">', '</small>') ?>

            <div class = "form-group">
              <label for = "s_start_h" class = "col-form-label-lg">Attendance In Time</label>

              <div class = "row">
                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_start_h"
                    id = "s_start_h"
                    max = "23"
                    min = "0"
                    placeholder = "Hour"
                  >

                  <?= form_error('s_start_h', '<small class = "text-danger">', '</small>') ?>
                </div>

                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_start_m"
                    id = "s_start_m"
                    max = "59"
                    min = "0"
                    placeholder = "Minutes"
                  >

                  <?= form_error('s_start_m', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_start_s"
                    id = "s_start_s"
                    max = "59"
                    min = "0"
                    placeholder = "Seconds"
                  >

                  <?= form_error('s_start_s', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>
            </div>

            <div class = "form-group">
              <label for = "s_end_h" class = "col-form-label-lg">Attendance Out Time</label>

              <div class = "row">
                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_end_h"
                    id = "s_end_h"
                    max = "23"
                    min = "0"
                    placeholder = "Hour"
                  >

                  <?= form_error('s_end_h', '<small class = "text-danger">', '</small>') ?>
                </div>

                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_end_m"
                    id = "s_end_m"
                    max = "59"
                    min = "0"
                    placeholder = "Minutes"
                  >

                  <?= form_error('s_end_m', '<small class = "text-danger">', '</small>') ?>
                </div>

                <div class = "col-sm-4">
                  <input
                    type = "number"
                    class = "form-control form-control-lg"
                    name = "s_end_s" id = "s_end_s"
                    max = "59"
                    min = "0"
                    placeholder = "Seconds"
                  >

                  <?= form_error('s_end_s', '<small class = "text-danger">', '</small>') ?>
                </div>
              </div>
            </div>
          </div>

          <div
            class = "card-footer py d-flex flex-row align-items-center justify-content-between" 
            style = "background-color: white;"
          >
            <button
              type = "submit"
              class = "btn btn-block ml-auto"
              style = "background-color: orange; border: none; width: 250px;"
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