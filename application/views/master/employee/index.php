<!-- Begin Page Content -->
<div class = "container-fluid">
  <div class = "row text-right">
    <div class = "col-lg-12">
      <a 
        href = "<?= base_url('master/a_employee'); ?>"
        class = "btn btn-info btn-icon mb-4"
        style = "background-color: orange; border: none;"
      >
        <span class = "icon text-white-600">
          <i class = "fas fa-plus"></i>
        </span>

        <span class = "text">Add</span>
      </a>
    </div>
  </div>

  <!-- Data Table employee-->
  <table class = "table" width = "100%" cellspacing = "0" style = "border: 1px solid #E0E0E0;">
    <thead style = "background-color: #E0E0E0; border-bottom: none;">
      <tr>
        <th style = "border: none;">ID</th>
        <th style = "border: none;">Name</th>
        <th style = "border: none;">Gender</th>
        <th style = "border: none;">Image</th>
        <th style = "border: none;">Date of Birth</th>
        <th style = "border: none;">Hire Date</th>
        <th style = "border: none;">&ensp; Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $i = 1;

        foreach ($employee as $emp) :
      ?>

      <tr>
        <td class = "align-middle" style = "border: none;"><?= $emp['id']; ?></td>
        <td class = "align-middle" style = "border: none;"><?= $emp['name']; ?></td>
        <td class = "align-middle" style = "border: none;">
          <?php
            if ( $emp['gender'] == 'M' )
            {
              echo 'Male';
            }
            else
            {
              echo 'Female';
            };
          ?>
        </td>
        <td class = "text-center" style = "border: none;">
          <img
            src = "<?= base_url('images/pp/') . $emp['image']; ?>"
            style = "width: 55px; height:55px"
            class = "img-rounded"
          >
        </td>
        <td class = "align-middle" style = "border: none;" ><?= $emp['birth_date']; ?></td>
        <td class = "align-middle" style = "border: none;"><?= $emp['hire_date']; ?></td>
        <td class = "align-middle" style = "border: none;">
          <a href = "<?= base_url('master/e_employee/') . $emp['id'] ?>" class = "btn btn-basic">
            <span class = "icon text-black" title = "Edit">
              <i class = "fas fa-edit"></i>
            </span>
          </a>

          <a 
            href = "<?= base_url('master/d_employee/') . $emp['id'] ?>"
            class = "btn btn-basic"
            onclick = "return confirm('Are you sure want to delete this employee?')"
          >
            <span class = "icon text-black" title = "Delete">
              <i class = "fas fa-trash-alt"></i>
            </span>
          </a>
        </td>
      </tr>

      <?php endforeach; ?>
    </tbody>
  </table>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->