<?php
/* Smarty version 3.1.33, created on 2019-06-27 11:40:42
  from 'C:\xampp\htdocs\smarty-3.1.33\webshop\templates\read_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d148f1a8ff1a8_16019750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4845ed719942a52ae036f5e75108de0c5b0ab5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\webshop\\templates\\read_one.tpl',
      1 => 1561628439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d148f1a8ff1a8_16019750 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['created'];?>
</td>
                        <td><img src='uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
' style="width:100px;" /></td>
                        <td>
                            <a href="retrieve_one.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class='btn btn-primary left-margin'>
                                <span class='glyphicon glyphicon-eye-open'></span> Read
                            </a>
                            <a href="update_product.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class='btn btn-info left-margin'>
                                <span class='glyphicon glyphicon-edit'></span> Edit
                            </a>
                            <a delete-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class='btn btn-danger delete-object'>
                                <span class='glyphicon glyphicon-remove'></span> Delete
                            </a>
                        </td>
                    </tr>
                </table>
             </div>
            </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
