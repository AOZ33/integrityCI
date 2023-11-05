<!doctype html>
<html lang="en">
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Latest compiled and minified CSS -->

    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>


    <!-- Optional theme -->


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- jQuery -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if($this->session->flashdata('flash') ): ?>
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            </div>
        </div>
        <?php endif;?>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Techmeet</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
            <div class="row">
                    <div class="col-md-4">
                        <form action="<?= base_url('Techmeet') ;?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="search data" name="keyword" autocomplete="off" autofocus >
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                            <h6>Results Data : <?= $total_rows; ?></h6>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name CPW & CPP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($card as $cd) : ?>
                                <tr>
                                    <td><?= $cd['name']; ?></td>
                                    <td>
                                    <div class="dropdown col-md-6    ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= base_url(); ?>techmeet/edit_techmeet/<?= $cd['id']; ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url(); ?>techmeet/detail_techmeet/<?= $cd['id']; ?>">Detail</a>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete<?= $cd['id']; ?>">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <?php if( empty($card)): ?>
                            <tr>
                                <td colspan="10">
                                <div class="alert alert-danger" role="alert">
                                Data Not Found!
                                </div>
                                </td>
                            </tr>
                            <?php endif?>
                    </table>
                    <?= $this->pagination->create_links();?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <?php
    foreach ($card as $cd) :
        $id = $cd['id'];
        $name = $cd['name'];

    ?>
        <div class="modal fade" id="delete<?= $id; ?>" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="  text-red-800">Delete Data</h5>
                    </div>
                    <form action="<?= base_url() ?>techmeet/delete_techmeet/<?= $cd['id'] ?>" method="post">
                        <div class="modal-body">
                            Apakah anda yakin menghapus data ini ? <?= $cd['name'] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- /.container-fluid -->