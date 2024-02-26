    <!-- Begin Page Content -->
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-lg-12 mb-3" style = "display: flex; justify-content: left;">
                <form action = "" method = "GET">
                    <div class = "row">
                        <div class = "col-3">
                            <input type = "date" name = "start" class = "form-control">

                            <?= form_error('start', '<small class = "text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class = "col-3">
                            <input type = "date" name = "end" class = "form-control">

                            <?= form_error('end', '<small class = "text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class = "col-4">
                            <select class = "form-control" name = "dept">
                                <option disabled>Department</option>

                                <?php foreach ($department as $d) : ?>
                                    <option value = "<?= $d['id']; ?>"><?= $d['name']; ?></option>
                                <?php endforeach; ?>
                            </select>

                            <?= form_error('dept', '<small class = "text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class = "col-2">
                            <button
                                type = "submit"
                                class = "btn btn-fill btn-block"
                                style = "background-color: orange; border: none; color: #FFFFFF;"
                            >
                                SHOW
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of row show -->

        <div class = "table-responsive">
            <table class = "table" width = "100%" cellspacing = "0" style = "border: 1px solid #E0E0E0;">
                <thead style = "background-color: #E0E0E0; border-bottom: none;">
                    <tr>
                        <th style = "border: none;">Date</th>
                        <th style = "border: none;">Name</th>
                        <th style = "border: none;">Basic Salary</th>
                        <th style = "border: none;">Overtime Salary</th>
                        <th style = "border: none;">Salary Deduction</th>
                        <th style = "border: none;">Income Tax</th>
                        <th style = "border: none;">Net Salary</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($attendance == false) : ?>

                    <tr><td style = "text-align: center;" colspan = "9">No Data Available</td></tr>

                    <?php else : ?>

                    <?php if ($attendance != null) : ?>

                    <?php $i = 1; foreach ($attendance as $atd) : ?>

                    <tr>
                        <td><?= date('Y-m-d', $atd['date']) ?></td>
                        <td><?= $atd['name'] ?></td>
                        <td>IDR <?= $atd['basic_salary'] ?></td>
                        <td>IDR <?= $atd['overtime_salary']?></td>
                        <td>IDR <?= $atd['salary_deduction']; ?></td>

                        <?php $total = $atd['basic_salary'] + $atd['overtime_salary'] - $atd['salary_deduction']; ?>

                        <td>IDR 
                            <?php
                                $tax_amount = $total * 10 / 100;
                                echo $tax_amount;
                            ?>
                        </td>
                        <td>IDR 
                            <?php
                                $net_salary = $total - $tax_amount;
                                echo $net_salary;
                            ?>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                    <?php endif; ?>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if ($attendance == false) : ?>

        <?php else : ?>

        <?php if ($attendance != null) : ?>

        <a
            href = "<?= base_url('report/print/') . $start . '/' . $end . '/' . $dept_code ?>" 
            target = "blank"
            class = "btn btn-md float-right"
            style = "background-color: orange; border: none; color: #FFFFFF;"
        >
            <i class = "fas fa-download fa-sm text-white"></i> View Report
        </a>

        <?php endif; ?>

        <?php endif; ?>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->