  <!--datos paciente-->
  <div class="tab-pane show active mb-3" id="infoPaciente" role="tabpanel" aria-labelledby="infoPaciente-tab">
    <div class="row">
      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre Completo" required
            autocomplete="off" value="<?php echo $nombreC ?>">
          <label for="nombreC" title="Nombre Completo" data-title="Nombre Completo">Nombre Completo</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required
            autocomplete="off" value="<?php echo $_SESSION['email'] ?>">
          <label for="email" title="Email" data-title="Email">Email</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="number" class="form-control" id="numeroPersonal" name="numeroPersonal"
            placeholder="Telefono o Celular" required autocomplete="off" maxlength="10"
            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <label class="d-lg-block d-none" for="numeroPersonal" title="Telefono o Celular"
            data-title="Telefono o Celular">Telefono
            o Celular</label>
          <label class="d-lg-none d-block" for="numeroPersonal" title="Telefono" data-title="Telefono">Telefono</label>
        </div>

      </div>

    </div>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="curp" name="curp" placeholder="Curp" required maxlength="18"
            autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
          <label for="curp" title="CURP" data-title="CURP">CURP</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="RFC" name="RFC" placeholder="RFC" required maxlength="10"
            autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
          <label for="RFC" title="RFC" data-title="RFC">RFC</label>
        </div>
      </div>

      <div class="col-md-2">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="homoC" name="homoC" placeholder="Homoclave" required maxlength="3"
            autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
          <label for="homoC" title="Homoclave" data-title="Homoclave">Homoclave</label>
        </div>
      </div>


    </div>


    <!-- Domicilio -->
    <div class="row mt-3">
      <legend>Domicilio Consultorio</legend>
      <div class="col-md-5">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required
            autocomplete="off">
          <label for="direccion" title="Dirección" data-title="Dirección">Calle y Número</label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-floating text-muted field Ajusttex">
          <input type="number" class="form-control" id="cp" name="cp" placeholder="C.P." required autocomplete="off"
            minlength="5" maxlength="5" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <label class="d-lg-block d-none" for="cp" title="Codigo Postal" data-title="Codigo Postal">Código
            Postal</label>
          <label class="d-lg-none d-block" for="cp" title="C.P." data-title="C.P.">C.P.</label>
          <div class="invalid-feedback">
            Ingresa un C.P. valido
          </div>
        </div>
      </div>

      <div class="col-md-4 validForm">
        <div class="custom-select">
          <select id="colonia" name="colonia" required>
            <option></option>
            <option disabled>Digita tu C.P.</option>
          </select>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="estadoDom" name="estadoDom" placeholder="Estado" required
            autocomplete="off">
          <label for="estadoDom" title="Estado" data-title="Estado">Estado</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="municipioDom" name="municipioDom" placeholder="Municipio" required
            autocomplete="off">
          <label for="municipioDom" title="Municipio" data-title="Municipio">Municipio</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="number" class="form-control" id="numeroConsult" name="numeroConsult"
            placeholder="Telefono o Celular" required autocomplete="off" maxlength="10"
            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <label class="d-lg-block d-none" for="numeroConsult" title="Tel. Consultorio"
            data-title="Tel. Consultorio">Tel. Consultorio</label>
        </div>
      </div>
    </div>

    <!-- Info Estudios -->

    <div class="row mt-3">
      <legend>Estudios</legend>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="nomUni" name="nomUni" placeholder="Nombre Universidad" required
            autocomplete="off">
          <label for="nomUni" title="Nombre Universidad" data-title="Nombre Universidad">Nombre Universidad</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Titulo" required
            autocomplete="off">
          <label for="carrera" title="Titulo" data-title="Titulo">Titulo</label>
        </div>
      </div>


      <div class="col-md-3">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="number" class="form-control" id="cedProf" name="cedProf" placeholder="Ced. Profesional" required
            autocomplete="off" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <label for="cedProf" title="Ced. Profesional" data-title="Ced. Profesional">Ced. Profesional</label>
        </div>
      </div>

      <div class="col-md-1 m-auto">
        <div class="form-check form-check-inline">

          <div class="form-group m-2 checkMo" data-bs-toggle="modal" data-bs-target="#formEspecialidad">
            <input class="form-check-input" type="checkbox" id="especialidad" name="especialidad" value="true">
            <label class="form-check-label" for="especialidad">Especialidad</label>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="formEspecialidad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="especialidadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="especialidadLabel">Especialidad</h5>
                </div>
                <div class="modal-body">
                  <div class="px-3">
                    <?php
                    require_once '../functions/db_conexion.php';  /* archivo requerido, crea conexion */
                    try {
                      $sql = 'SELECT clave, nombre FROM especialidades ORDER BY nombre';
                      $info = $conn->query($sql);
                    } catch (\Throwable $th) {
                      $error = $e->getMessage();
                      echo `<div class="info-box bg-danger"> Hubo un error!!: $error</div>`;
                    }
                    ?>
                    <div class="custom-select">
                      <select id="nombreEspecialidad" name="nombreEspecialidad" form="infoUsuario">
                        <?php while ($especialidad = $info->fetch_assoc()) : ?>
                        <option value="<?php echo $especialidad['clave'] ?>"><?php echo $especialidad['nombre'] ?>
                        </option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="px-3">
                    <div class="form-floating text-muted field Ajusttex">
                      <input type="number" class="form-control" id="cedProfEsp" name="cedProfEsp"
                        placeholder="Ced. Profesional" autocomplete="off" maxlength="8" form="infoUsuario"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                      <label for="cedProfEsp" title="Ced. Especialidad" data-title="Ced. Especialidad">Ced.
                        Especialidad</label>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button id="butModal" type="button" class="btn btn-primary" data-bs-dismiss="modal"
                    data-origen="#aviPriva">Aceptar</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="row my-3">
      <div class="col-md-3">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="number" class="form-control" id="costoCons" name="costoCons" placeholder="Costo de Consulta"
            step="any" required autocomplete="off">
          <label for="costoCons" title="Costo de Consulta" data-title="Costo de Consulta">Costo de Consulta</label>
        </div>
      </div>

      <div class="col-md-5">
        <div class="form-floating text-muted field Ajusttex validForm">
          <input type="text" class="form-control" id="clabe" name="clabe" placeholder="Clabe Interbancaria" required
            autocomplete="off" maxlength="18" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          <label for="clabe" title="Clabe Interbancaria" data-title="Clabe Interbancaria">Clabe Interbancaria</label>
        </div>
      </div>

    </div>

    <!-- Firma -->
    <div class="row mt-3 imgCapt">
      <div class="card">

        <div class="card-title">
          <label for="formFile" class="form-label m-3">Firma</label>
        </div>

        <div class="card-body">
          <div class="imgUpload d-flex justify-content-between align-items-center">
            <div class="form-img col-12 col-lg-6">
              <div class="custom-file input-group">
                <input type="hidden" name="firmaDig" id="firmaDig">
                <input class="custom-file-input form-control" id="upload-file" name="firma" type="file" accept="image/*"
                  required>
                <label class="custom-file-label" for="upload-file"></label>
                </input>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <canvas id="canvas" width="80" height="50"></canvas>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 mb-3">
              <p class="form-text m-0">Favor de subir una imagen con fondo blanco y con una buena iluminación, presiona
                "DIGITALIZAR" para modificar la imagen en el formato requerido</p>
            </div>
            <button type="button" class="btn btn-primary col-12 d-block filter-btn pinhole-add col-md-3"
              id="dig">Digitalizar</button>
          </div>
        </div>

      </div>
    </div>
  </div>