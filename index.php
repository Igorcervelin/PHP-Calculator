<?php include_once "assets/partials/_head.php" ?>
<?php include_once "assets/partials/_header.php" ?>
 
        <div class="row">
            <aside class="col-md-3">
                <h1>aside</h1>
            </aside>
            <section class="col-md-9">
              <form id="formulario" method="get" action="Calcular.php">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Número 1</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="n1" name='n1' placeholder="Número 1">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Número 2</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="n2" name='n2' placeholder="Número 2">
                  </div>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Operações</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="op" id="adicionar" value="+" checked>
                        <label class="form-check-label" for="adicionar">
                          Adicionar
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="op" id="subtrair" value="-">
                        <label class="form-check-label" for="subtrair">
                          Subtrair
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="op" id="multiplicar" value="*">
                        <label class="form-check-label" for="multiplicar">
                          Multiplicar
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="op" id="dividir" value="/">
                        <label class="form-check-label" for="dividir">
                          Dividir
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Calcular!</button>
                  </div>
                </div>
              </form>
            </section>
        </div>
        <div class="row">
            <footer class="col-md-12">
                <h1>Footer</h1>
            </footer>
        </div>
    </div>
</body>
</html>