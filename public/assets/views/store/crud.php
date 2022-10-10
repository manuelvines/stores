<?php ob_start(); ?>
<!--
ESTUAR MAÑANA => https://www.pradipdebnath.com/2019/08/17/how-to-add-page-template-from-plugin-in-wordpress/
-->
<div class="container">
    
  
    <div class="row">
        <div class="col-xs-12">

                <h2>INGRESA LA UBICACIÓN</h2>
                
                <form id="crud_stores_form_create"  action="" method="POST">

                 
                    <input type="text" name="method" value="POST">
                    <input type="text" name="action" value="create-store">
                    <input type="text" name="_wpnonce" value="<?php echo wp_create_nonce('create-store'); ?>">
    

                    <div class="form-group">
                        <input type="text"  name="store_name" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="store_address"  class="form-control" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="store_latitud"  class="form-control" placeholder="Latitud">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="store_longitud"  class="form-control" placeholder="Longitud">
                    </div>
                    <div class="form-group">
                
                        <input type="submit" class="btn btn-success">

                    </div>

                </form>

        </div>
    </div>

    
</div>

<?php  $view_crud_store = ob_get_contents(); ?>
<?php ob_end_clean(); ?>