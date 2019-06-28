<?php
/* Smarty version 3.1.33, created on 2019-06-28 11:03:37
  from 'C:\xampp\htdocs\smarty-3.1.33\webshop\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d15d7e97f6813_06691637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c592a38ac4b3f2203905ac0c77a771be805edb2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\webshop\\templates\\create.tpl',
      1 => 1561712615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d15d7e97f6813_06691637 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
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
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
>
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
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
