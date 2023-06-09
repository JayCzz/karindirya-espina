<?php if ($edit) { ?>
    <h3 class="fw-boold">Edit Product</h3>
<?php } else { ?>
    <h3 class="fw-boold">View Product</h3>
<?php } ?>


<?php if (!null == validation_errors()) : ?>
    <div class="alert alert-danger col-md-4" role="alert">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>
<div class="row p-5">
    <div class="col-4"></div>
    <div class="col-md-4">
        <!-- when the form is submitted this function in the controller will be called. -->
        <?php echo form_open_multipart('Products/processEditProduct'.  $product->prod_id); ?>
        <form>
            <br>
            <div class="form-group">
                <label for="prod_name">Product Name</label>
                <input name="prod_name" type="text" class="form-control" id="prod_name" placeholder="Product Name" value="<?php echo $product->prod_name; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="prod_description">Product Description</label>
                <input name="prod_description" type="text" class="form-control" id="prod_description" placeholder="Product Description" value="<?php echo $product->prod_description; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="prod_description">Product Price</label>
                <input name="prod_price" type="text" class="form-control" id="prod_price" placeholder="Product Price" value="<?php echo $product->prod_price; ?>">
            </div>
            <br>
            <br>
            
            <a type="a" href="<?= base_url('home/view_products'); ?>" class="btn btn-primary">Back</a>
            <?php if ($edit) : ?>
                <button type="submit" class="btn btn-success">Update</button>
            <?php endif ?>
        </form>
    </div>
</div>