    <?php 
$categories = CategoryData::getAll();
    ?>
<div class="row">
	<div class="col-md-12">
	<h1>Nuevo producto</h1>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addproduct" action="index.php?view=addproduct" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
    <div class="col-md-6">
      <input type="file" name="image" id="image" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre del producto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoría</label>
    <div class="col-md-6">
    <select name="category_id" class="form-control">
    <option value="">-- Ninguna --</option>
    <?php foreach($categories as $category):?>
      <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripción</label>
    <div class="col-md-6">
      <textarea name="description" class="form-control" id="description" placeholder="Descripción del producto"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de entrada*</label>
    <div class="col-md-6">
      <input type="text" name="price_in" required class="form-control" id="price_in" placeholder="Precio de entrada">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de salida*</label>
    <div class="col-md-6">
      <input type="text" name="price_out" required class="form-control" id="price_out" placeholder="Precio de salida">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Unidad*</label>
    <div class="col-md-6">
      <input type="text" name="unit" required class="form-control" id="unit" placeholder="Unidad de producto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Presentación</label>
    <div class="col-md-6">
      <input type="text" name="presentation" class="form-control" id="inputEmail1" placeholder="Presentación del producto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Mínima en inventario:</label>
    <div class="col-md-6">
      <input type="text" name="inventary_min" class="form-control" id="inputEmail1" placeholder="Mínima en inventario (Default 10)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Inventario inicial:</label>
    <div class="col-md-6">
      <input type="text" name="q" class="form-control" id="inputEmail1" placeholder="Inventario inicial">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar producto</button>
    </div>
  </div>
</form>
	</div>
</div>