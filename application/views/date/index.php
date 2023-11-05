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

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- jQuery -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Tanggal</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name CPW & CPP</th>
                                <th>Lamaran</th>
                                <th>Prewedd</th>
                                <th>Wedding</th>
                                <th>Pengajian & Siraman</th>
                                <th>Live</th>
                                <th>Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($appointment as $ap) : ?>
                                <tr>
                                    <td><?= $ap['name']; ?></td>
                                    <td><?= $ap['date_l']; ?></td>
                                    <td><?= $ap['date_p']; ?></td>
                                    <td><?= $ap['date_w']; ?></td>
                                    <td><?= $ap['date_m']; ?></td>
                                    <td><?= $ap['date_s']; ?></td>
                                    <td><?= $ap['date_a']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>