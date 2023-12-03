<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

         

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Danh
                        sách góp ý từ khách hàng</h4>

                    <!-- Bootstrap Table with Header - Footer -->
                    <div class="card ">
                        <h5 class="card-header">Danh sách góp ý từ khách hàng</h5>
                        <div class=" p-2 table-responsive text-nowrap">

                            <table class="table mb-2" id="example">
                                <thead>
                                    <tr>
                                        <th>ID góp ý</th>
                                        <th>Nội dung góp ý</th>
                                        <th>Email</th>
                                        <th>Tên khách hàng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $feedbackList = $feedback->get_list();
                                    foreach ($feedbackList as $row) :
                                        extract($row);
                                        $editFeedback = "routerAdmin.php?act=gopy";
                                    ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                    <?= $feedbackId ?>
                                                </strong></td>
                                            <td>
                                                <?= $content ?>
                                            </td>
                                            <td>
                                                <?= $email ?>
                                            </td>
                                            <td>
                                                <?= $name ?>
                                            </td>
                                            <td>
                                                <form action="<?= $editFeedback ?>" method="post">
                                                    <input type="hidden" value="<?= $feedbackId ?>" name="feedbackId">
                                                    
                                                    <select name="status" id="status" class='form-control border  <?=($status==1)?"border-success":"border-secondary";?>' >
                                                        <option value=1 <? if ($status == 1)
                                                                            echo "selected" ?>>Đã trả lời
                                                        </option>
                                                        <option value=9 <? if ($status == 9)
                                                                            echo "selected" ?>>Chưa trả lời
                                                        </option>
                                                    </select>
                                                    <button type="submit" class='btn btn-outline-success mt-1' name='luu'>Lưu</button>
                                                </form>


                                            </td>
                                        </tr>


                                    <? endforeach; ?>
                                    
                                    
                                </tbody>
                                <tfoot class="table-border-bottom-0">
                                <?php
                                                    if (isset($Note['true']))
                                                        echo "<br><span style='color: green;'>" . $Note['true'] . "</span><br>";
                                                    if (isset($Note['false']))
                                                        echo "<br><span style='color: red;'>" . $Note['false'] . "</span><br>"; ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap Table with Header - Footer -->


                </div>
                <!-- / Content -->

                <!-- Footer -->

                <!-- / Footer -->


            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>