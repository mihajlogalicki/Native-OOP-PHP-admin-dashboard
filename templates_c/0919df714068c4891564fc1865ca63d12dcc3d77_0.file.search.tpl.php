<?php
/* Smarty version 3.1.33, created on 2019-06-28 08:33:36
  from 'C:\xampp\htdocs\smarty-3.1.33\webshop\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d15b4c0c00002_96880380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0919df714068c4891564fc1865ca63d12dcc3d77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.33\\webshop\\templates\\search.tpl',
      1 => 1561703614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d15b4c0c00002_96880380 (Smarty_Internal_Template $_smarty_tpl) {
?>    <form method="POST" role="search" action="search.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        <?php if ('count' > 0) {?>
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
    
        <?php }
}
}
