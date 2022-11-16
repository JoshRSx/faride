<!DOCTYPE html>
<html lang="es">
<head>
   @extends('components.head')
</head>
<body>
    
    <div class="container">
        <div class="screen">
          
            <div class="screen__content">
                <div class="title-session">
                    <div class="image-faride" style="position: relative; left: 25%; width: 50%; ">
                        <img src="https://static.wixstatic.com/media/83c504_3d0ba570164c479f970f85c1142e056f~mv2.png/v1/fill/w_302,h_151,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/83c504_3d0ba570164c479f970f85c1142e056f~mv2.png" alt="">
                    </div><br>
                        <h2> Iniciar  Sesión</h2>
                 </div> 
                
                <!--
                <div class="select-type">
                    <div class="employee_box">
                    </div>
                    <div class="client_box">
                    </div>
                </div>
<br>-->
<br><br><br>
                <form class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Correo">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Contraseña">
                    </div>
                    <button class="button login__submit">
                        <a href="{{ url('Supervisor') }}" class="button__text">Login</a>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">            
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>