<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css";
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
            <form method="POST" action="update_product.php?id={$product.id}">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <td>Name</td>
                        <td><input type='text' name='name' value="{$product.name}" class='form-control' /></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type='text' name='price' value="{$product.price}" class='form-control' /></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name='description' class='form-control'>{$product.description}</textarea></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <option value="{$product.id}">{$product.cat_name}</option>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </td>
                    </tr>
                </table>
            </form>
             </div>
            </div>
        {include file="footer.tpl"}
    </body>
</html>