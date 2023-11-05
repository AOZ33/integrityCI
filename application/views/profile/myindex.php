<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- Optional JavaScript; choose one of the two! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<div class="row">
    <div class="col-lg-8">
    
    <?= form_open_multipart('profile'); ?>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
            </div>
    </div>
    
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Full name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>">
 <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        
</div>
    </div>
    
    <div class="form-group row">

       <div class="col-sm-2">Picture</div>
       <div class="col-sm-10">
           <div class="row">
               <div class="col-sm-3">
                   <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="img-thumbnail">
               </div>
 		<div class="col-sm-9">
			<div class="custom-file">
  			<input type="file" class="custom-file-input" id="image" name="image">
			<label class="custom-file-label" for="image">Choose file</label>
			</div>   
		</div>     
           </div>
       </div>
    </div>

 	 <div class="form-group row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>

    </form>  
    

    </div>
</div>
</div>
</div>

<script>
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().spilt('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
        
    });
</script>






