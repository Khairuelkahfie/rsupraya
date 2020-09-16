<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Immport Database</h1>
    <div class="row">
        <div class="col-md">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p> Extensi file .xls, .Xlsx
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut repellat laboriosam assumenda harum consequuntur sequi, nihil, error saepe pariatur alias vel porro fuga accusamus, deserunt sit. Sed laborum distinctio enim.</p>
                                <form action="<?= base_url('importdb/import') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="file" id="file">
                                    <button type="submit" required accept=".xls, .xlsx">import</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>