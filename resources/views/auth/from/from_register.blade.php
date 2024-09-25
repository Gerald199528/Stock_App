                        <form method="POST" action="/register" class="p-4 shadow-lg bg-light rounded">

                            @include('auth.from.Alertas_register')

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="form-outline mb-4">
                                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder=" *Nombre y apellido" required autofocus>

                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="*Email@ address" required autofocus>

                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" name="password" placeholder="*Ingresa contraseña" required maxlength="8">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="*Repita contraseña" required maxlength="8">
                            </div>



                            <div class="alert alert-danger" role="alert">
                                Estimado usuario la contraseña debe cumplir lo siguiente: 8 caracteres, alfanumérica con al menos 2 números, una letra "Mayuscula" y al menos un símbolo '#$/*.@'
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"> <i class="fas fa-user-plus"></i> Registrarse</button>

                            </div>
                            <br>
                            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>

                    <div class="mt-3">

                        </form>

