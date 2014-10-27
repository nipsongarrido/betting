<?php 

class HomeController extends BaseController {

    public function Login()
    {
        try
        {

            $email = Input::get('email');
            $clave = Input::get('password');

            // Credenciales
            $Credenciales = array(
                'email'    => $email,
                'password' => $clave
            );

            // Autentifica al usuario
            /*
                para mantener al usuario autentificado de manera
                permanente se usa authenticateAndRemember
            */
            $usuario = Sentry::authenticate($Credenciales, false);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Nombre de usuario requerido.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'La Contraseña es requerida.';
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            echo 'Contraseña incorrecta, intentelo nuevamente'.;
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'Usuario no encontrado.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            echo 'Usuario no activado.';
        }

        // The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            echo 'Usuario suspendido.';
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            echo 'Usuario Baneado.';
        }

    }
}