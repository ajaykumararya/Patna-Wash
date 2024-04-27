<div class="row">
    <div class="col-md-6">
        {form}
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">Add Testimonial</h3>
            </div>
            <div class="card-body">
                <div class="form-group mt-4">
                    <label for="field1" class="form-label">Image</label>
                    <input type="file" required name="field1" id="field1" value="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="field2" id="field2" value="" class="form-control"
                        placeholder="Enter Title">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Description</label>
                    <textarea name="field3" maxlength="250" value="" class="form-control"
                        placeholder="Enter Description"></textarea>
                </div>
                <!--begin::Input wrapper-->
                <div class="form-group mt-4">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold mb-2">
                        Star
                    </label>
                    <!--end::Label-->
                    <div class="form-control">
                        <input type="range" name="field4" class="star-step" min="0" max="5" step="0.1">
                        <div><span class="star"></span> Star(s)</div>
                    </div>
                </div>
                <!--end::Input wrapper-->
                <div class="form-group mt-4">
                    <label for="" class="form-label">Update Time</label>
                    <input typpe="text" class="form-control date-with-time" name="field5" required>
                </div>
            </div>
            <div class="card-footer">
                {save_button}
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 mb-5">
        <form action="" class="extra-setting" enctype="multipart/form-data" data-page_load="true">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">Setting</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="form-label">Section Title</label>
                        <input type="text" name="testimonial_box_title" class="form-control"
                            value="<?= ES('testimonial_box_title', '') ?>" placeholder="Enter Title">

                    </div>
                </div>
                <div class="card-footer">
                    {save_button}
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-5">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List Testimonial</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" setting-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Star(s)</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $this->SiteModel->get_contents($type);
                            if ($data->num_rows()):
                                $index = 1;
                                foreach ($data->result() as $row):
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $index++ ?>.
                                        </td>
                                        <td>
                                            <?=$row->field4?> Star(s)
                                        </td>
                                        <td>
                                            <?= $row->field2 ?>
                                        </td>
                                        <td>
                                            <?= base64_encode($row->id) ?>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>