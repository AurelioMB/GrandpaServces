<?php
	include("header.php");

	$infoo = mysql_query("SELECT * FROM users WHERE email='$login_cookie'");
	$info = mysql_fetch_assoc($infoo);

	if (isset($_POST['criar'])) {
		$enf = $_POST['enf'];
		$edad = $_POST['edad'];
		$pass = $_POST['pass'];
        $estado = $_POST['estado'];
        $desc = $_POST['desc'];
        

        if($edad==""){
			echo "<h2>Selecciona tu edad</h2>";
		}elseif($pass==""){
			echo "<h2>Escribe una palabra</h2>";
		}
        elseif($desc==""){
			echo "<h2>Cuentanos sobre ti</h2>";
		}
        elseif($enf==""){
			echo "<h2>Selecciona un tipo de enfermedad</h2>";
		}
        elseif($estado==""){
			echo "<h2>Selecciona tu estado civil</h2>";
		}else{
			$query = "UPDATE users SET `password`='$pass',`edad`='$edad', `desc`='$desc', `estado`='$estado', `enf`='$enf' WHERE email='$login_cookie'";
			$data = mysql_query($query);
			if ($data) {
				header("Location: myprofile.php");
			}else{
				echo "<h2>Algo salio mal...</h2>";
			}
		}
	}

	if (isset($_POST['cancel'])) {
		header("Location: myprofile.php");
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
        
        h2{text-align: center; color: #1E90FF; margin-top: 15px;}
        
        h1{text-align: center; color: #f2f2f2; margin-top: 15px;}
        
        h4{text-align: left; color: #f2f2f2; margin-top: 15px;}
        
        
    </style>
    
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
            <h1>Tus Datos</h1>
            <br>
            <br>
            
			<form class="formulario" name="formulario_registro" method="POST">
				<div>
					<div class="input-group">
						<label class="label" for="A">Nombre: <?php echo $info['nome']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Edad: <?php echo $info['edad']; ?> años</label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Tipo De Cuenta: <?php echo $info['apelido']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Email: <?php echo $info['email']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Teléfono: <?php echo $info['tel']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Genero: <?php echo $info['sexo']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Estado Civil: <?php echo $info['estado']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Código Postal: <?php echo $info['code']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Localidad: <?php echo $info['local']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Dirección: <?php echo $info['dire']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Enfermedades: <?php echo $info['enf']; ?></label><br>
					</div>
                    <div class="input-group">
						<label class="label" for="A">Biografía: <?php echo $info['desc']; ?></label><br>
					</div>
                    <br>
                    
                    <h1>Actualiza tus datos</h1>
                    <br>
                    <br>
                    
					<div class="input-group">
						<input type="password" id="pass" name="pass" placeholder="Contraseña" value="<?php echo $info['password']; ?>">
						<label class="label" for="pass">Contraseña: </label>
					</div>
                    
                    <!-- Select field -->
			 <div class="select-field">
				<select name="edad">
				    <option><?php echo $info['edad']; ?></option>
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
						<input type="text" id="desc" name="desc" value="<?php echo $info['desc']; ?>">
						<label class="label" for="desc">Cuentanos más acerca sobre ti... (Pasatiempos,Gustos,etc)</label>
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
                    
					<input type="submit" value="Atualizar" name="criar">&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Cancelar" name="cancel">
				</div>
			</form>
		</div>
	</div>

	<script src="js/formulario.js"></script>
</body>
</html>