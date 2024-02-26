    <!-- Begin Page Content -->
    <div class = "container-fluid">
      <div class = "row justify-content-center pt-1">
        <div class = "col-lg-10 p-0">
          <?= form_open_multipart('master/a_employee'); ?>

          <div class = "card">
            <div
              class = "card-header py d-flex flex-row align-items-center justify-content-between"
              style = "background-color: white;"
            >
              <h6 class = "m-0 font-weight" style = "font-size: 20px; color: #1B1b1B;">Add Employee</h6>
            </div>

            <div class = "card-body">
              <div class = "row">
                <div class = "col-lg-6">
                  <div class = "form-group">
                    <label for = "e_name" class = "col-form-label-lg-12">Employee Name</label></br>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <input type = "text" class = "form-control col-lg" name = "e_name" id = "e_name" autofocus>

                        <?= form_error('e_name', '<small class = "text-danger">', '</small>') ?>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group">
                    <label for = "email" class = "col-form-label-lg-12">Email</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <input type = "text" class = "form-control col-lg" name = "email" id = "email">

                        <?= form_error('email', '<small class = "text-danger">', '</small>') ?>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group">
                    <label for = "d_id" class = "col-form-label-lg-12">Department Name</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <select class = "form-control" name = "d_id" id = "d_id">
                          <?php foreach ($department as $dpt) : ?>
                            <option value = "<?= $dpt['id'] ?>"><?= $dpt['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group">
                    <label for = "image" class = "col-form-label-lg-12">Employee Image</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <input type = "file" name = "image" id = "image">
                      </div>
                    </div>
                  </div>
                </div>

                <div class = "col-lg-6">
                  <div class = "form-group">
                    <label for = "e_birth_date" class = "col-form-label-lg-12">Employee Date of Birth</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <input
                          type = "date"
                          class = "form-control col-lg"
                          name = "e_birth_date"
                          id = "e_birth_date"
                          min = "1990-01-01"
                          max = "2002-01-01"
                        >

                        <?= form_error('e_birth_date', '<small class = "text-danger">', '</small>') ?>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group">
                    <label for = "e_hire_date" class = "col-form-label-lg-12">Hired Date</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <input
                          type = "date"
                          class = "form-control col-lg"
                          name = "e_hire_date"
                          id = "e_hire_date"
                          min = "2004-04-16"
                          max = "<?= date( 'Y-m-d', time() ); ?>"
                        >

                        <?= form_error('e_hire_date', '<small class="text-danger">', '</small>') ?>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group">
                    <label for = "s_id" class = "col-form-label-lg-12">Attendance Time</label>

                    <div class = "row">
                      <div class = "col-lg-12">
                        <select class = "form-control" name = "s_id" id = "s_id">
                          <?php foreach ($shift as $sft) : ?>

                          <option
                            value = "<?= $sft['id'] ?>"><?= $sft['id'] . ' = ' . $sft['start'] . ' - ' . $sft['end']; 
                          ?>
                          </option>

                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class = "form-group float-right text-right">
                    <label for = "e_gender" class = "col-form-label-lg-12">Gender</label>

                    <div class = "row">
                      <div class = "form-check form-check-inline my-0">
                        <input
                          class = "form-check-input"
                          type = "radio"
                          name = "e_gender"
                          id = "m"
                          value = "M"
                          checked
                        >

                        <label class = "form-check-label" for = "m">Male</label>

                        <?= form_error('e_gender', '<small class = "text-danger">', '</small>') ?>
                      </div>

                      <div class = "form-check form-check-inline">
                        <input class = "form-check-input" type = "radio" name = "e_gender" id = "f" value = "F">

                        <label class = "form-check-label" for = "f">Female</label>
                      </div>
                    </div>
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
                style = "background-color: orange; border: none; width: 208px;"
              >
                <span class = "text-white">SAVE</span>
              </button>

              <?= form_close(); ?>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on(
    "change",
    function()
    {
      var fileName = $(this).val().split("\\").pop();

      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }
  );
</script>