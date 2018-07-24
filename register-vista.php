<?php
	include("db.php");

	if (isset($_POST['criar'])) {
		$nome = $_POST['nome'];
		$apelido = $_POST['apelido'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
        $edad = $_POST['edad'];
        $desc = $_POST['desc'];
        $sexo = $_POST['sexo'];
        $estado = $_POST['estado'];
        $code = $_POST['code'];
        $dire = $_POST['dire'];
        $local = $_POST['local'];
        $tel = $_POST['tel'];
        $enf = $_POST['enf'];
		$data = date("Y/m/d");

		$email_check = mysql_query("SELECT email FROM users WHERE email='$email'");
		$do_email_check = mysql_num_rows($email_check);
        
        $tel_check = mysql_query("SELECT tel FROM users WHERE tel='$tel'");
		$do_tel_check = mysql_num_rows($tel_check);
        
		if ($do_email_check >= 1) {
			echo '<h3>Este email ya está registrado, inicia sesión <a href="login-vista.php">aqui</a></h3>';
		}elseif ($do_tel_check >= 1) {
			echo '<h3>¡Este telefono a fue registrado con otra cuenta!</h3>';
        }elseif ($nome == '' OR strlen($nome)<3) {
			echo '<h3>¡Escribe tu nombre correctamente!</h3>';
		}elseif ($email == '' OR strlen($email)<10) {
			echo '<h3>¡Escribe tu email correctamente!</h3>';
		}elseif ($pass == '' OR strlen($pass)<8) {
			echo '<h3>¡Escribe tu contraseña correctamente, debe tener más de 8 caracteres!</h3>';
		}else{
			$query = "INSERT INTO users (`nome`,`apelido`,`email`,`password`,`edad`,`desc`,`sexo`,`estado`,`code`,`dire`,`local`,`tel`,`enf`,`data`) VALUES ('$nome','$apelido','$email','$pass','$edad','$desc','$sexo','$estado','$code','$dire','$local','$tel','$enf','$data')";
			$data = mysql_query($query) or die(mysql_error());
			if ($data) {
				setcookie("login",$email);
				header("Location: ./");
			}else{
				echo "<h3>Lo sentimos, hubo un error al registrarte ...</h3>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css2/estilos.css">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/FondoRegister.css">
    
    <style type="text/css">
        h3{text-align: center; color: #1E90FF; margin-top: 15px;}
        
        h1{text-align: center; color: #f2f2f2; margin-top: 15px;}
        
        h4{text-align: left; color: #f2f2f2; margin-top: 15px;}
        
        
    </style>
    
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Registro</title>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
            <h1>Registro</h1>
            <br>
            <br>
            
			<form class="formulario" name="formulario_registro" method="POST">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nome">
						<label class="label" for="nombre">Nombre Completo:</label>
					</div>
                    
                    <div class="input-group radio">
						<input type="radio" name="apelido" id="solicitante" value="Solicitante">
						<label for="solicitante">Solicitante</label>
						<input type="radio" name="apelido" id="cuidador" value="Cuidador">
						<label for="cuidador">Cuidador</label>
					</div>
                    
					<div class="input-group">
						<input type="email" id="correo" name="email">
						<label class="label" for="correo">Correo:</label>
					</div>
                    
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
                    
                    <!-- Select field -->
			 <div class="select-field">
				<select name="edad">
				    <option selected hidden>Edad</option>
				    <option>18</option> <option>19</option>
				    <option>20</option> <option>21</option>
				    <option>22</option> <option>23</option>
                    <option>24</option> <option>25</option>
				    <option>26</option> <option>27</option>
                    <option>28</option> <option>29</option>
                    <option>30</option> <option>31</option>
                    <option>32</option> <option>33</option>
                    <option>34</option> <option>35</option>
                    <option>36</option> <option>37</option>
                    <option>38</option> <option>39</option>
                    <option>40</option> <option>41</option>
                    <option>42</option> <option>43</option>
                    <option>44</option> <option>45</option>
                    <option>46</option> <option>47</option>
                    <option>48</option> <option>49</option>
                    <option>50</option> <option>51</option>
                    <option>52</option> <option>53</option>
                    <option>54</option> <option>55</option>
                    <option>56</option> <option>57</option>
                    <option>58</option> <option>59</option>
                    <option>60</option> <option>61</option>
                    <option>62</option> <option>63</option>
                    <option>64</option> <option>65</option>
                    <option>66</option> <option>67</option>
                    <option>68</option> <option>69</option>
                    <option>70</option> <option>71</option>
                    <option>72</option> <option>73</option>
                    <option>74</option> <option>75</option>
                    <option>76</option> <option>77</option>
                    <option>78</option> <option>79</option>
                    <option>80</option> <option>81</option>
                    <option>82</option> <option>83</option>
                    <option>84</option> <option>85</option>
                    <option>86</option> <option>87</option>
                    <option>88</option> <option>89</option>
                    <option>90</option> <option>91</option>
                    <option>92</option> <option>93</option>
                    <option>94</option> <option>95</option>
                    <option>96</option> <option>97</option>
                    <option>98</option> <option>99</option>
                    <option>100</option>
				</select>
                 <label class="label"></label>
			 </div>
                    <br>
                    <br>
                    
                    <div class="input-group">
						<input type="text" id="desc" name="desc">
						<label class="label" for="desc">Cuentanos más acerca sobre ti... (Pasatiempos,Gustos,etc)</label>
					</div>
                    
                    Sexo:
                    <br>
                    <br>
                    <div class="input-group radio">
						<input type="radio" name="sexo" id="hombre" value="Hombre">
						<label for="hombre">Hombre</label>
						<input type="radio" name="sexo" id="mujer" value="Mujer">
						<label for="mujer">Mujer</label>
					</div>
                    
                    Estado Civil:
                    <br>
                    <br>
                    <div class="input-group radio">
						<input type="radio" name="estado" id="soltero" value="Soltero/a">
						<label for="soltero">Soltero/a</label><br>
                        
						<input type="radio" name="estado" id="comprometido" value="Comprometido/a">
						<label for="comprometido">Comprometido/a</label><br>
                        
                        <input type="radio" name="estado" id="casado" value="Casado/a">
						<label for="casado">Casado/a</label><br>
                        
						<input type="radio" name="estado" id="divorciado" value="Divorciado/a">
						<label for="divorciado">Divorciado/a</label><br>
                        
                        <input type="radio" name="estado" id="viudo" value="Viudo/a">
						<label for="viudo">Viudo/a</label><br>
					</div>
                    
                    <div class="input-group">
						<input type="text" id="code" name="code">
						<label class="label" for="code">Codigo Postal:</label>
					</div>
                    
                    <div class="input-group">
						<input type="text" id="dire" name="dire">
						<label class="label" for="dire">Dirección:</label>
					</div>
                    
                    <div class="input-group">
						<input type="text" id="local" name="local">
						<label class="label" for="local">Localidad:</label>
					</div>
                    
                    
                    <div class="input-group">
						<input type="tel" id="tel" name="tel">
						<label class="label" for="tel">Telefono:</label>
					</div>
                    
                    
                    
                    ¿Sufre alguna de las siguientes enfermedades?
                    <br>
                    <br>
                    <div class="input-group radio">
						<input type="radio" name="enf" id="ninguna" value="Ninguna">
						<label for="ninguna">Ninguna</label><br>
                        
                        <input type="radio" name="enf" id="artritis" value="Artritis">
						<label for="artritis">Artritis</label><br>
                        
                        <input type="radio" name="enf" id="diabetes" value="Diabetes">
						<label for="diabetes">Diabetes</label><br>
                        
                        <input type="radio" name="enf" id="párkinson" value="Párkinson">
						<label for="párkinson">Párkinson</label><br>
                        
						<input type="radio" name="enf" id="alzheimer" value="Alzheimer">
						<label for="alzheimer">Alzheimer</label><br>
                        
                        <input type="radio" name="enf" id="desnutrición" value="Desnutrición">
						<label for="desnutrición">Desnutrición</label><br>
                        
                        <input type="radio" name="enf" id="problemas auditivos y visuales" value="Problemas auditivos y visuales">
						<label for="problemas auditivos y visuales">Problemas auditivos y visuales</label><br>
                        
                        <input type="radio" name="enf" id="hipertensión" value="Hipertensión">
						<label for="hipertensión">Hipertensión</label><br>
                        
                        <input type="radio" name="enf" id="otras" value="Otras">
						<label for="otras">Otras</label>
					</div>
                    
                    
                    <p align="right" class="label"><a href="login-vista.php">Ya tengo una cuenta</a></p>
                    <br>
                    <br>
                    
					<input type="submit" id="btn-submit" value="Registrarse" name="criar">
				</div>
			</form>
		</div>
	</div>

	<script src="js/formulario.js"></script>
</body>
</html>