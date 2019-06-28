<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        {include file="header.tpl"}
         <div class="container">
          <div class="row">
            <div class="right-button-margin">
                <a href="retrieve.php" class="btn btn-info pull-right btn-sm">Read Products</a>
            </div>
            </div>
            <div class="row">
            <form id="form" method="POST" action="create.php" enctype="multipart/form-data">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <td>Name</td>
                        <td><input type='text' name='name' id="name" class='form-control' /></td>
                        <h6 id="name_error" class="form-text"></h6>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type='text' name='price' id="price" class='form-control' /></td>
                        <h6 id="price_error"></h6>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name='description' id="description" class='form-control'></textarea></td>
                        <h6 id="description_error" class="form-text text-muted"></h6>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                          <select class="form-control" name="category_id">
                             <option>Select category..</option>
                             {foreach from=$categories item=category}
                                <option value="{$category.id}">{$category.name}</option>
                             {/foreach}
                          </select>
                        </td>
                         <h6 id="category_error" class="form-text text-muted"></h6>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td><input type="file" id="image" name="image" class='form-control' /></td>
                         <h6 id="photo_error" class="form-text text-muted"></h6>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"/>
                        </td>
                    </tr>
                </table>
            </form>
             </div>
            </div>
        {include file="footer.tpl"}
        <script>
          $(document).on("submit", "#form", function(e){

              var name = $("#name");
              var price = $("#price");
              var description = $("#description");
              var image = $("#description");
              var category = $("#description");

              if(name.val() == "" || name.val().length < 3){
                  e.preventDefault();
                  name.addClass("border-danger");
                  $("#name_error").html("<span>Input name not valid</span>");
              }
              if(price.val() == "" || isNaN(price.val().length)){
                  e.preventDefault();
                  price.addClass("border-danger");
                  $("#price_error").html("<span>Input price not valid</span>");
              }
              if(description.val() == "" || description.val().length < 7){
                  e.preventDefault();
                  description.addClass("border-danger");
                  $("#description_error").html("<span>Input description not valid</span>");
              }
              if(image.val() == ""){
                  e.preventDefault();
                  image.addClass("border-danger");
                  $("#photo_error").html("<span>Input Image not valid</span>");
              }
              if(category.val() == ""){
                  e.preventDefault();
                  category.addClass("border-danger");
                  $("#category_error").html("<span>Select Category not valid</span>");
              }
          });
        </script>
    </body>
</html>
