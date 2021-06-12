<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> MASTER DATA </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html"> Home </a></li>
              <li><i class="fa fa-table"></i> Master Data </li>
              <li><i class="fa fa-th-list"></i> Item </li>
            </ol>
          </div>
        </div>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Menu</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
        </div>
        <div class="card-body">

        <form method="POST" enctype="multipart/form-data" action="<?= base_url('dashboard/proses_edit_barang/'.$datamenu[0]['id']); ?>">
                < <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" name="jenis" required>
            </div>


            
            <div class="form-group">
                <label for="exampleInputEmail1">Amount</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" name="input_date" required>
            </div>
            
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
        </div>
    </div>

</div>