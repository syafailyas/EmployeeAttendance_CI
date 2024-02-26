<!-- Begin Page Content -->
<div class="container-fluid">
  <div class = "row text-right">
    <div class = "col-lg-12">
      <a
        href = "<?= base_url('master/a_location'); ?>"
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

  <!-- Data Table Location-->
  <table class = "table" width = "100%" cellspacing = "0" style = "border: 1px solid #E0E0E0;">
    <thead style = "background-color: #E0E0E0; border-bottom: none;">
      <tr>
        <th style = "border: none;">Position</th>
        <th style = "border: none;">&ensp; Action</th>
      </tr>
    </thead>
 
    <tbody>
      <?php
        $i = 1;
        foreach ($location as $lct) :
      ?>

      <tr>
        <td class = "align-middle" style = "border: none;"><?= $lct['name']; ?></td>
                        
        <td class = "align-middle text-left" style = "border: none;">
          <a href = "<?= base_url('master/e_location/') . $lct['id'] ?>" class = "btn btn-basic">
            <span class = "icon text-black" title = "Edit">
              <i class = "fas fa-edit"></i>
            </span>
          </a>

          <a
            href = "<?= base_url('master/d_location/') . $lct['id'] ?>"
            class = "btn btn-basic"
            onclick = "return confirm('Are you sure want to delete this position?')"
          >
            <span class = "icon text-black" title = "Delete">
              <i class="fas fa-trash-alt"></i>
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