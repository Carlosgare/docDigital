  <!--datos paciente-->
  <div class="tab-pane show active animate animationfadeIn" id="infoPaciente" role="tabpanel"
    aria-labelledby="infoPaciente-tab">
    <!-- info Person -->
    <div class="row">
      <div class="col-lg-4 col-md-3">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre Completo" require
            autocomplete="off" value="<?php echo $nombreC ?>">
          <label for="nombreC" title="Nombre Completo" data-title="Nombre Completo">Nombre Completo</label>
        </div>
      </div>

      <div class="col-lg-4 col-md-3">
        <div class="form-floating text-muted field Ajusttex">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" require
            autocomplete="off" value="<?php echo $_SESSION['email'] ?>">
          <label for="email" title="Email" data-title="Email">Email</label>
        </div>
      </div>

      <div class="col-lg-2 col-md-3">
        <div class="custom-select">
          <select id="sexo" name="sexo" require>
            <option></option>
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
          </select>
        </div>
      </div>

      <div class="col-lg-2 col-md-3">
        <div class="custom-select">
          <select id="estadoCivil" name="estadoCivil" require>
            <option></option>
            <option value="sol">Soltero(a)</option>
            <option value="cas">Casado(a)</option>
            <option value="uniL">Unión Libre</option>
            <option value="div">Divorciado(a)</option>
            <option value="viu">Viudo(a)</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Info Nacimiento -->
    <div class="row">
      <legend>Lugar y Fecha de nacimiento</legend>
      <div class="col-lg-2 col-md-3">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="dd/mm/aaaa"
            require autocomplete="off" data-toggle="datepicker">
          <label for="fechaNacimiento" title="Fecha" data-title="Fecha">Fecha</label>
        </div>
      </div>

      <div class="col-md-2">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="edad" name="edad" placeholder="xx Años" require autocomplete="off"
            maxlength="12" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          <label for="edad" title="Edad" data-title="Edad">Edad</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="custom-select">
          <select id="estadoNacimiento" name="estadoNacimiento" require>
            <option></option>
          </select>
        </div>
      </div>

      <div class="col-lg-4 col-md-3">
        <div class="custom-select">
          <select id="municipioNacimiento" name="municipioNacimiento" require>
            <option></option>
            <option disabled>Selecciona un estado</option>
          </select>
        </div>
      </div>

    </div>

    <!-- Domicilio -->
    <div class="row">
      <legend>Domicilio Personal</legend>
      <div class="col-md-5">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" require
            autocomplete="off">
          <label for="direccion" title="Dirección" data-title="Dirección">Calle y Número</label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="cp" name="cp" placeholder="C.P." require autocomplete="off"
            maxlength="5" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          <label class="d-lg-block d-none" for="cp" title="Codigo Postal" data-title="Codigo Postal">Código
            Postal</label>
          <label class="d-lg-none d-block" for="cp" title="C.P." data-title="C.P.">C.P.</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="custom-select">
          <select id="colonia" name="colonia" require>
            <option></option>
            <option disabled>Digita tu C.P.</option>
          </select>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="estadoDom" name="estadoDom" placeholder="Estado" require
            autocomplete="off">
          <label for="estadoDom" title="Estado" data-title="Estado">Estado</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="municipioDom" name="municipioDom" placeholder="Municipio" require
            autocomplete="off">
          <label for="municipioDom" title="Municipio" data-title="Municipio">Municipio</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="numeroPersonal" name="numeroPersonal"
            placeholder="Telefono o Celular" require autocomplete="off" maxlength="10"
            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          <label class="d-lg-block d-none" for="numeroPersonal" title="Telefono o Celular" data-title="Telefono o Celular">Telefono
            o Celular</label>
          <label class="d-lg-none d-block" for="numeroPersonal" title="Telefono" data-title="Telefono">Telefono</label>
        </div>
      </div>
    </div>

    <!-- Escolaridad -->
    <div class="row">
      <legend class="mt-2">Eduacion y Profesión</legend>
      <div class="col-md-4">
        <div class="custom-select">
          <select id="escolaridad" name="escolaridad" require>
            <option></option>
            <option value="pri">Primaria</option>
            <option value="sec">Secundaria</option>
            <option value="bach">Bachillerato</option>
            <option value="tecS">Técnico Superior</option>
            <option value="lic">Licenciatura</option>
            <option value="pos">Posgrado</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <div class="custom-select">
          <select id="ocupacion" name="ocupacion" require>
            <option></option>
            <option value="emp">Empleado(a)</option>
            <option value="pens">Pensionado(a)</option>
            <option value="desemp">Desempleado(a)</option>
            <option value="jub">Jubilado(a)</option>
            <option value="cuentProp">Cuenta Propia</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Profesión" require
            autocomplete="off">
          <label for="profesion" title="Profesión" data-title="Profesión">Profesión</label>
        </div>
      </div>
    </div>

    <!-- Adicionales -->
    <div class="row">
      <legend>Religión / Referencia Personal</legend>
      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="religion" name="religion" placeholder="Religión" require
            autocomplete="off">
          <label for="religion" title="Religión" data-title="Religión">Religión</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Referencia" require
            autocomplete="off">
          <label for="referencia" title="Referencia" data-title="Referencia">Referencia</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-floating text-muted field Ajusttex">
          <input type="text" class="form-control" id="numRef" name="numRef" placeholder="Telefono o Celular" require
            maxlength="10" autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
          <label class="d-lg-block d-none" for="numRef" title="Telefono o Celular" data-title="Telefono o Celular">Telefono
            o Celular</label>
          <label class="d-lg-none d-block" for="numRef" title="Telefono" data-title="Telefono">Telefono</label>
        </div>
      </div>
    </div>

  </div>

  <!--datos pago-->
  <div class="tab-pane animate animationfadeInRight" id="datosPago" role="tabpanel" aria-labelledby="datosPago-tab">
    <div class="tarjeta">
      <?php require('templates/exp/card.php') ?>
    </div>
  </div>
  
