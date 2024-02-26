<!-- Begin Page Content -->
<div class = "container-fluid">
  <table class = "table" width = "100%" cellspacing = "0" style = "border: 1px solid #E0E0E0;">
    <thead style = "background-color: #E0E0E0; border-bottom: none;">
      <tr>
        <th style = "border: none;">Employee ID</th>
        <th style = "border: none;">Employee Name</th>
        <th style = "border: none;">Department ID</th>
        <th style = "border: none;">Username</th>
        <th style = "border: none;">&nbsp; Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $i = 1;

        foreach ($data as $dt) :
      ?>

      <tr>
        <td class = "align-middle" style = "border: none;"><?= $dt['e_id']; ?></td>
        <td class = "align-middle" style = "border: none;"><?= $dt['e_name']; ?></td>
        <td class = "align-middle" style = "border: none;"><?= $dt['d_id']; ?></td>

        <?php if ( $dt['u_username'] ) : ?>

        <td class = "align-middle text-left" style = "border: none;">
          <?= $dt['u_username']; ?>
        </td>

        <td class = "text-left align-middle" style = "border: none;">
          <a href = "<?= base_url('master/e_users/') . $dt['u_username'] ?>" class = "btn btn-basic">
            <span class = "icon text-black" title = "Edit">
              <i class = "fas fa-edit"></i>
            </span>
          </a>

          <a 
            href = "<?= base_url('master/d_users/') . $dt['u_username'] ?>"
            class = "btn btn-basic"
            onclick = "return confirm('Are you sure want to delete this user?')"
          >
            <span class = "icon text-black" title = "Delete">
              <i class = "fas fa-trash-alt"></i>
            </span>
          </a>
        </td>

        <?php else : ?>

        <td class = " align-middle text-left" style = "border: none;">
          <a
            href = "<?= base_url('master/a_users/') . $dt['e_id'] . '/' . $dt['d_id']; ?>"
            class = "btn btn-info"
            style = "background-color: orange; border: none;">Create Account
          </a>
        </td>

        <td class = "text-left align-middle" style = "border: none;">
          <button class = "btn btn-basic" disabled>
            <span class = "icon text-black" title = "Edit">
              <i class = "fas fa-edit"></i>
            </span>
          </button>

          <button class = "btn btn-basic" disabled>
            <span class = "icon text-black" title = "Delete">
              <i class = "fas fa-trash-alt"></i>
            </span>
          </button>
        </td>

        <?php endif; ?>
      </tr>

      <?php endforeach; ?>
    </tbody>
  </table>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->