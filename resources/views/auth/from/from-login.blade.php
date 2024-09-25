                    <form method="post" action="{{ url('/login') }}" id="" class="p-4 border rounded shadow-lg">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="*Email@ address" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" placeholder="*Ingresa contraseña" required maxlength="8">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-block"> <i class="fas fa-sign-in-alt"></i> Entrar</button>
                        </div>

                        <div class="text-center">
                            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Registrarse</a></p>
                            <p><a href="{{ route('reset') }}">¿Olvidó su contraseña?</a></p>

                            <div class="mt-3">

                                </button>
                            </div>
                        </div>
                    </form>
