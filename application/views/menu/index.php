<!doctype html>
<html lang="en">
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Latest compiled and minified CSS -->

    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>


    <!-- Optional theme -->


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



        <!-- Begin Page Content -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#menuModal"><i class="fa fa-plus"></i> Add New Menu</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $m['menu']; ?></td>
                                    <td><a class="m-0 font-weight-bold btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#edit<?= $m['id']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url() ?>menu/hapusmenu/<?= $m['id'] ?>" class=" m-0 font-weight-bold btn btn-danger" onclick="return confirm('yakin?');"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuModalLabel">Add Menu</h5>
                </div>
                <form class="form-horizontal" action="<?= base_url('menu') ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="Add Menu">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    foreach ($menu as $m) :
        $id = $m['id'];
        $menu = $m['menu'];
    ?>
        <div class="modal fade" id="edit<?= $id; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="menuModalLabel">Edit Menu</h5>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('menu/editmenu') ?>" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" placeholder="Add id" value="<?= $m['id']; ?>">
                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Add Menu" value="<?= $m['menu']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>