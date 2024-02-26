<!-- Begin Page Content -->
<div class = "container-fluid">
  <div class = "row text-right">
    <div class = "col-lg-12">
      <a 
        href = "<?= base_url('master/a_dept'); ?>"
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

  <!-- Department Table -->
  <table class = "table" width = "100%" cellspacing = "0" style = "border: 1px solid #E0E0E0;">
    <thead style = "background-color: #E0E0E0; border-bottom: none;">
      <tr>
        <th style = "border: none;">ID</th>
        <th style = "border: none;">Department Name</th>
        <th style = "border: none;">&ensp; Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $i = 1;

        foreach ($department as $dpt) :
      ?>

      <tr>
        <td class = "align-middle" style = "border: none;"><?= $dpt['id']; ?></td>

        <td class = "align-middle" style = "border: none;"><?= $dpt['name']; ?></td>

        <td class = "align-middle text-left" style = "border: none;">
          <a href = "<?= base_url('master/e_dept/') . $dpt['id'] ?>" class = "btn btn-basic">
            <span class = "icon text-black" title = "Edit">
              <i class = "fas fa-edit"></i>
            </span>
          </a>

          <a 
            href = "<?= base_url('master/d_dept/') . $dpt['id'] ?>"
            class = "btn btn-basic"
            onclick = "return confirm('Are you sure want to delete this department?')"
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