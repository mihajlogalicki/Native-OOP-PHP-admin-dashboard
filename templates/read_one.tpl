<!DOCTYPE html>
<html>
    <head>
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
                <a href="create.php" class="btn btn-info pull-right btn-sm">Create Products</a>
            </div>
            </div>
            <div class="row">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>{$product.name}</td>
                        <td>{$product.cat_name}</td>
                        <td>{$product.price}</td>
                        <td>{$product.description}</td>
                        <td>{$product.created}</td>
                        <td><img src='uploads/{$product.image}' style="width:100px;" /></td>
                        <td>
                            <a href="retrieve_one.php?id={$product.id}" class='btn btn-primary left-margin'>
                                <span class='glyphicon glyphicon-eye-open'></span> Read
                            </a>
                            <a href="update_product.php?id={$product.id}" class='btn btn-info left-margin'>
                                <span class='glyphicon glyphicon-edit'></span> Edit
                            </a>
                            <a delete-id="{$product['id']}" class='btn btn-danger delete-object'>
                                <span class='glyphicon glyphicon-remove'></span> Delete
                            </a>
                        </td>
                    </tr>
                </table>
             </div>
            </div>
        {include file="footer.tpl"}
    </body>
</html>