<?php
/* Smarty version 3.1.33, created on 2019-06-27 10:46:27
  from 'C:\xampp\htdocs\smarty-3.1.33\webshop\templates\retrieved.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1482633eba42_02206829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '049775e9318c21b762dde37d588dcd2dfd6e5da6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\webshop\\templates\\retrieved.tpl',
      1 => 1561625186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d1482633eba42_02206829 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
      <head>
         <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js" ntegrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
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
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
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
                        <td><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" style="width:100px;"/></td>
                        <td>
                            <a href="retrieve_one.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class='btn btn-primary left-margin'>
                                <span class='glyphicon glyphicon-eye-open'></span> Read
                            </a>
                            <a href="update_product.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class='btn btn-info left-margin'>
                                <span class='glyphicon glyphicon-edit'></span> Edit
                            </a>
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"  class='btn btn-danger delete-object'>
                                <span class='glyphicon glyphicon-remove'></span> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
             </div>
            </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- jQuery JS -->
        <?php echo '<script'; ?>
>
            // JavaScript for deleting product
            $(document).on('click', '.delete-object', function(){
            var id = $(this).attr('data-id');
                    $.post('delete.php', {
                        object_id: id
                    }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
            });
        <?php echo '</script'; ?>
>;
    </body>
</html>
<?php }
}
