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
        
        <button class="btn btn-success"   type="button" data-toggle="modal" data-target="#exampleModal">
     <i class="fas fa-plus"></i>
Tambah
</button>
<br>
<br>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> No </th>
                    <th> Name </th>
                    <th> Type </th>
                    <th> Amount </th>
                    <th> Date </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>

                  <?php
                    $no = 1;
                    foreach($databarang as $data  => $barang){
                ?>

                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $barang['nama_barang'];?></td>
                    <td><?= $barang['jenis'];?></td>
                    <td><?= $barang['jumlah'];?></td>
                    <td><?= $barang['input_date'];?></td>
                    <td><?= $barang['status'];?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?= base_url('dashboard/edit_barang/'.$barang['id'])?>"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" href="<?= base_url('dashboard/delete_barang/'.$barang['id'])?>"><i class="icon_close_alt2"></i></a>
                    </div>
                    </td>
                  </tr>
                <?php

                $no++;
                }
                ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="<?= base_url('dashboard/create_barang'); ?>">
            <div class="form-group">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- page end-->
      </section>
    </section>