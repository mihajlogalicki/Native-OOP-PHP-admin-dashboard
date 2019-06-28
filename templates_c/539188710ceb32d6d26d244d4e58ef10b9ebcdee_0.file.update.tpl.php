<?php
/* Smarty version 3.1.33, created on 2019-06-26 09:19:57
  from 'C:\xampp\htdocs\smarty-3.1.33\webshop\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d131c9de54c82_05463659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '539188710ceb32d6d26d244d4e58ef10b9ebcdee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\webshop\\templates\\update.tpl',
      1 => 1561533012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d131c9de54c82_05463659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css";
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         <div class="container">
          <div class="row">
            <div class="right-button-margin">
                <a href="retrieve.php" class="btn btn-info pull-right btn-sm">Read Products</a>
            </div>
            </div>
            <div class="row">
            <form method="POST" action="update_product.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <td>Name</td>
                        <td><input type='text' name='name' value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class='form-control' /></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type='text' name='price' value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class='form-control' /></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name='description' class='form-control'><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
</option>
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
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
