<?php
include("../../path.php");
include("../../app/controllers/posts.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4cdb3a5b68.js" crossorigin="anonymous"></script>
    <!--  Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css">
    <!-- My css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

  <body>
    <!-- Header include-->
    <?php include("../../app/include/header-admin.php"); ?>
    
    <div class="container">
        <div class="row">
        <?php include("../../app/include/sidebar-admin.php") ?>

            <div class="posts col-9">
                <div class="row title-table">
                    <h2>Editing Post</h2>
                </div>
                
                <div class="row add-post">
                    <div class="mb-12 col-12 col-md-12 error">
                        <p>
                            <!-- error aray output -->
                            <?php include("../../app/helps/errorInfo.php") ?>
                        </p>
                    </div>
                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id;?>">
                    <form>
                        <div class="col mb-4">
                            <input value="<?=$post['title']; ?>" name="title" type="text" class="form-control" placeholder="Title" aria-label="Name of post">
                        </div>

                        <div class="col">
                            <label for="editor" class="form-label">Post</label>
                            <textarea name="content" id="editor" class="form-control" rows="12"><?=$post['content']; ?></textarea>
                        </div>

                        <div class="input-group col mb-4 mt-4">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <select name="category" class="form-select mb-2" aria-label="Default select example">
                            
                            <?php foreach ($categories as $key => $category): ?>
                            <option value="<?=$category['id'];?>"><?=$category['name'];?></option>
                            <?php endforeach;?>
                        </select>

                        <div class="form-check">
                            <?php if (empty($is_publish) && $is_publish == 0): ?>
                                <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">Publish </label>
                            <?php else:?> 
                                <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">Unpublish</label>
                            <?php endif;?>
                        </div>

                        <div class="col col-6">
                            <button name="edit-post" class="btn btn-primary" type="submit">Save post</button>
                        </div>
                        

                    </form>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("../../app/include/footer.php"); ?>
    <!-- BootSreap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- My js script -->
    <script src="../../assets/js/script.js" defer></script>
</body>
</html>