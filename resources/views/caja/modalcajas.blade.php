<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
                        <div class="panel">
                                <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Caja</span>


                    </div>
                    <div class="card-body">
                        <form method="POST" action="http://localhost/CONTABILIDADJETXCEL/public/cajas" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="oeInZYgzurIgKOfzZ1PqCsXUreUAmjuPZ99KjHkf">
                            <div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
            <label for="id_empresa">Id Empresa</label>
            <select class="form-control" id="id_empresa" name="id_empresa"><option selected="selected" value="">Id Empresa</option><option value="1">Wilmer Esteban Reuto Romero</option></select>
            
        </div>
            </div>

            <div class="col-sm-4">
            <div class="form-group">
            <label for="Nombre de Caja">Nombre De Caja</label>
            <input class="form-control" placeholder="Descripcion" name="Descripcion" type="text">
            
        </div>
            </div>

            <div class="col-sm-4">
            <div class="form-group">
            <label for="Estado">Estado</label>
            <select class="form-control" id="Estado" name="Estado"><option selected="selected" value="">Estado</option><option value="Activo">Activo</option><option value="Inactivo">Inactivo</option></select>
            
        </div>
            </div>
        

        </div>
    
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
                           
                            <!--===================================================-->
                            <!--End Buttons Addon-->
                        </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>