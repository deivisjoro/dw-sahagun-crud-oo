<div class="container m-5">
    <?php
    if(!isset($_SESSION["admin"]) || empty($_SESSION["admin"])){
    ?>
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h2>Iniciar Sesion</h2>
            </div>
            <form action="?modulo=inicio&accion=login" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" placeholder="Ingrese usuario..">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña..">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-block" name="entrar" value="entrar">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</div>