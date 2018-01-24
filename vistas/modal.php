
<div id="modal_cita" class="modal fade" role="dialog">
  <div class="modal-dialog modal-Ig">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cita de <span id="title_cita"></span></h4>
      </div>
      <div class="modal-body" id="modal_body_cita">
          
          <div class="row">
              <div class="col-md-6">
                  <label for="">Fecha de Ingreso</label>
                  {{$personal->fecha_ingreso}}
              </div>
          </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal historia -->

<div id="modal_hitoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="terminar_cita.php" method="post" accept-charset="utf-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">NUEVA HISTORIA CLINICA</h4>
      </div>
      <div class="modal-body" id="modal_body_cita">
          <div class="row">
                    <div class="col-md-6">
                        <label for="">Enfermedad actual</label>
                      <select class="form-control"  name="enf_cod" id="enf_cod" style="width:250px" required>
                        <?php
                        
                        //esto es para mostrar un select que trae datos de la BDD
                        $query = "Select enf_cod,enf_nom from enfermedad where enf_activo='t' ";
                        $resultadoSelect = pg_query($query);
                        while ($row = pg_fetch_row($resultadoSelect)) {
                            echo "<option value=".$row[0].">";
                            echo $row[1];
                            echo "</option>";
                        }
                        ?>
                        </select>
                         <a data-toggle="modal" href="#myModal2" class="btn btn-primary">Carga Rápida</a>
                    </div>
                </div>
                <br>
               
          <br>
            <div class="row">
                <div class="col-md-6">
                    PA<input name="pa" width="10px" id="pa" class="form-control" type="number" autofocus>
                    FC<input name="fc" id="fc" class="form-control" type="number" >
                </div>
                <div class="col-md-6">
                    EF<input name="ef" id="ef" class="form-control" type="number" >
                    HR<input name="hr" id="hr" class="form-control" type="number" >
                </div>
            </div>
          <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Diagnósticos</label>
                        <textarea name="diagnostico" id="diagnostico" class="form-control" placeholder=""></textarea>
                    </div>
                     <div class="col-md-6">
                        <label for="">Tratamiento</label>
                        <textarea name="tratamiento" id="tratamiento" class="form-control" placeholder=""></textarea>
                    </div>
                </div><br>
               
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Plan</label>
                        <textarea name="plan" id="plan" class="form-control" placeholder=""></textarea>
                    </div>
                     <div class="col-md-6">
                        <label for="">Comentarios</label>
                        <textarea name="comentarios" id="comentarios" class="form-control" placeholder=""></textarea>
                    </div>
                </div><br>
            
                <h4 class="modal-title">EXAMENES</h4>
                <div class="row">
                    <div class="col-md-10">
                      <div>  Hematologia</div>
                     <input type="checkbox" id="radiografia" value=""><label for="cbox2">Hemograma/Eritro</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">Hemograma/Plaquetas</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Frotis de Sangre Periférica</label><br>
                     <input type="checkbox" id="analisisorina" value=""><label for="cbox2">Coagulograma</label><br>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">TP/INR</label>   
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Tipificación</label>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                      <div>  Química</div>
                     <input type="checkbox" id="radiografia" value=""><label for="cbox2">Glucosa</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">HhbA1C</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Urea/Creatinina</label><br>
                     <input type="checkbox" id="analisisorina" value=""><label for="cbox2">Acido Urico</label><br>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Colesterol/Triglicéridos</label>   
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Lipidograma</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">GOT/GPT/yGT</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Bilirrubinas (T-D-I)</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Fosfatasa Alcalina</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Amilasa</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Lipasa</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Proteínas Totales</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Relación A/G</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">CK Total/CK mb/GOT/LDH</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Troponina I</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Electrolitos(Na,K,Cl)</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">PCR</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Calcio Iónico</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Calcio, Magnesio, Fósforo</label>
                </div>
             </div>
                <div class="row">
                    <div class="col-md-6">
                      <div>  Serología</div>
                     <input type="checkbox" id="radiografia" value=""><label for="cbox2">TSH</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">FT4</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">FT3</label><br>
                     <input type="checkbox" id="analisisorina" value=""><label for="cbox2">Tiroglobulina</label><br>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">VDRL</label>   
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">FTA- ABS IgG</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">FTA- ABS IgM</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">HIV 1 Ag + HIV 1-2 ac</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">ANA</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Factor Reumatoideo</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">ASTO</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">C3</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">C4</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Inmunoglobulinas (IgA,IgG,IgM)</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">IgE</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Pas Total</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Pas Libre</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">CEA</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">CA 125</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">CA 15-3</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">CA 19-9</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Chagas IgG e IgM</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Toxoplasmosis IgG e IgM</label>
                     <input type="checkbox" id="tomografia" value=""><label for="cbox2">Citomegalovirus IgG e IgM</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                      <div>  Orina</div>
                     <input type="checkbox" id="radiografia" value=""><label for="cbox2">Orina Simple</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">Orina Frotis</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Orina Cultivo</label><br>  
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-10">
                      <div>  Heces/Parasitología</div>
                     <input type="checkbox" id="radiografia" value=""><label for="cbox2">Heces V y P</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">Heces Seriado</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Heces Frotis</label><br>
                      <input type="checkbox" id="radiografia" value=""><label for="cbox2">Coprofuncional</label><br>
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">Coprocultivo</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Sangre Oculta</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                      <div> Microbiología</div>
                     <label for="">Material</label>
                        <input name="material" id="plan" class="form-control" placeholder="">
                     <input type="checkbox" id="ecografia" value=""><label for="cbox2">Frotis</label><br>
                     <input type="checkbox" id="analisissangre" value=""><label for="cbox2">Cultivo</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                      <div> Otros</div>
                     <label for="">Especificar</label>
                        <input name="material" id="plan" class="form-control" placeholder="">
                    </div>
                </div>
                
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_cita" id="id_cita">
        <input type="hidden" name="id_pacnt" id="id_pacnt" value="">
        <input type="submit" name="" class="btn btn-primary" value="Guardar">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
       </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal2" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Carga rápida de Enfermedad</h4>
        </div><div class="container"></div>
        <div class="modal-body">
            <form method="POST" id="registrar_medicos" action="../control/reg_carga_rapida_enfermedad.php" autocomplete="off">
                    

                        <div>
                            <label>Enfermedad:</label><br>
                            <div class="col-md-6">
                                <input name="enf_nom" id="enf_nom" class="form-control" type="text" placeholder="Ingrese Aqui" required type="text" autofocus required>
                            </div>                            
                        </div><br>
                        <div class="modal-footer">
                            <input type="submit" name="" class="btn btn-primary" value="Guardar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
        </div>
        
      </div>
    </div>
</div>

