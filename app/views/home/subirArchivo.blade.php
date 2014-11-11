
        {{ HTML::style('css/bootstrap.min.css'); }}
    <center> <h3>Subir documentos públicos</h3></center>
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
                                <br/>
                   				 <center><input type="submit" value="Guardar" class="btn btn-success"></center>
                               @if(Session::has('message'))
                                        <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
                               @endif
                          <div id="success"></div>
                                	{{ Form::close()}}
                            </div>
                        </div>
                        

                
                </div>
            </div>