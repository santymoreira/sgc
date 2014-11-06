
        {{ HTML::style('css/bootstrap.min.css'); }}
        <a align="center" class="navbar-brand" style="cursor:default;" href="#">Documentos públicos</a>
<div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                            {{ Form::open(array('url'=>'uploadPublicFile/', 'method' => 'post','enctype'=>'multipart/form-data') )}}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre del Archivo" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Descripción" id="desc" name="desc" required>
                                </div>
    
                   				<input type="file" id="file1" name="file1" accept=".pdf" class="form-control" required> 
                   				<center>{{ Form::submit('Subir Archivo') }}</center>
                   				<!--<center><input id="kk" class="btn btn-xl" type="button" value="texto del botón"></center>-->
                                <div id="success"></div>
                                	{{ Form::close()}}
                            </div>
                        </div>
                        

                
                </div>
            </div>