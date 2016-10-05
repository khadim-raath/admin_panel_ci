<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>

    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title ?></span>
            <?php $this->load->view('message'); ?>
        </div>
        <div id="form-wrap">
            <?php $form_data = $this->session->flashdata('form_data'); ?>
            <form id="admin-register" method="post" action="<?= base_url();?>items/export_to_CSV">

                <fieldset>
                    <div class="row">
                        <div class="input-wrap">
                            <label>API Key</label>
                            <input type="text"  name="key" placeholder="Enter API key" data-trigger="change" data-parsley-required />
                        </div>
                    </div>
                </fieldset>

              
                <fieldset>

                    <div class="row">
                        <input type="submit" value="Export">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 