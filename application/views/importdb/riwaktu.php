<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800">Import Tabel Waktu Rawat Inap</h3>
    <div class="row">
        <div class="col-md">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <!-- Card Body -->
                    <div class="card-body ">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="row pb-5">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus animi molestiae ut minima amet excepturi doloribus ratione neque. Minima quidem aliquid deleniti veniam eos tenetur quisquam architecto tempore blanditiis nobis!</p>
                                    <ul>
                                        <li>
                                            pastikan data berextensi xls
                                        </li>
                                        <li>
                                            pastikan data berextensi xls
                                        </li>
                                        <li>
                                            pastikan data berextensi xls
                                        </li>
                                        <li>
                                            pastikan data berextensi xls
                                        </li>
                                        <li>
                                            pastikan data berextensi xls
                                        </li>
                                    </ul>
                                </div>
                                <form action="<?= base_url('importdb/importriwaktu') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-2">
                                        <div class="col-md">
                                            <input type="file" name="file" id="file" class="" accept=".xlsx,.xls">
                                        </div>
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-download"></i>
                                                </span>
                                                <span class="text">Import</span>
                                            </button>
                                        </div>
                                        <div class="col-md">
                                            <?= $this->session->flashdata('pesan'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>