<form id="my-form">
    <input type="hidden" class="form-control" id="Element_id" name="Element_id" value=null>
    <input type="hidden" class="form-control" id="update_at" name="update_at" value=null>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_nombre" id="Element_nombre" placeholder="Name">
        <label for="Element_nombre">Nombre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_imagen" id="Element_imagen" placeholder="Name">
        <label for="Element_imagen">Imagen</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_serial" id="Element_serial" placeholder="Name">
        <label for="Element_serial">Serial</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_marca" id="Element_marca" placeholder="Name">
        <label for="Element_marca">Marca</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_modelo" id="Element_modelo" placeholder="Name">
        <label for="Element_modelo">Modelo</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_procesador" id="Element_procesador" placeholder="Name">
        <label for="Element_procesador">Procesador</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_memoria_ram" id="Element_memoria_ram" placeholder="Name">
        <label for="Element_memoria_ram">RAM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_disco" id="Element_disco" placeholder="Name">
        <label for="Element_disco">DISCO</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="Element_valor" id="Element_valor" placeholder="Name">
        <label for="Element_valor">VALOR</label>
    </div>
    <div class="form-floating mb-3 col-12">
        <select class="form-select" aria-label="Id Parent" id="Category_fk" name="Category_fk" disabled>
            <option value=NULL selected>Open this select Categoria</option>
                <?php if ($categories) : ?>
                    <?php foreach ($categories as $obj) : ?>
                        <option value="<?= $obj['Category_id'] ?>"><?= $obj['Category_nombre'] ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
        </select>
        </div>
        <div class="form-floating mb-3 col-12">           
            <select class="form-select" aria-label="Id Parent" id="Element_status_fk" name="Element_status_fk" disabled>
                <option value=NULL selected>Open this select User Status</option>
                    <?php if ($element_status) : ?>
                        <?php foreach ($element_status as $obj) : ?>
                            <option value="<?= $obj['Element_status_id'] ?>"><?= $obj['Element_status_name'] ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </select>            
        </div>
</form>