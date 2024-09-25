<form method="post"  action="{{ route('reset.post') }}" id="" class="p-4 border rounded shadow-lg">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="email" />

    @include('auth.from.Alertas_reset')
    <div class="form-group mb-4">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="*Email@ address" required>

    </div>

    <div class="alert alert-danger" role="alert">
      Para recuperar su contraseña, le invitamos a ingresar su dirección de correo electrónico en el campo correspondiente . Así mismo recibirá un enlace de recuperación que le permitirá restablecer su contraseña.
    </div>

    <div class="text-center">
        <a href="{{ route('login') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>  Atrás</a>
        <button type="submit" class="btn btn-primary">
            <i class="fa-regular fa-envelope"></i>  Enviar
        </button>
    </div>
</form>

