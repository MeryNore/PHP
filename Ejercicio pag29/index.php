<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio pag. 29 POO - PHP</title>
</head>

<body>
    <p>
    <?php
	class Asignatura {
	private $nombre;
	private $Profesor = null;
	function __construct($nombre) {
	$this->nombre = $nombre;
	}
	function getNombre() {
	return $this->nombre;
	}
	function setProfesor(Profesor $profesor) {
	$this->Profesor = $profesor;
	}
	function getProfesor() {
	return $this->Profesor;
	}
	}
	class Persona {
	private $nombre;
	private $apellidos;
	// Constructor. Se ejecuta al crear una instancia de esta clase
	function __construct($nombre = '', $apellidos = '') {
	$this->nombre = $nombre;
	$this->apellidos = $apellidos;
	}
	function setNombre($nombre) {
	$this->nombre = $nombre;
	}
	function getNombre() {
	return $this->nombre;
	}
	function setApellidos($apellidos) {
	$this->apellidos = $apellidos;
	}
	function getNombreCompleto() {
	return $this->nombre.' '.$this->apellidos;
	}
	}
	class Profesor extends Persona{
	private $skype;
	function __construct($nombre='', $apellidos='', $skype='') {
	// Llama al constructor de la clase padre Persona
	parent::__construct($nombre,$apellidos);
	$this->skype = $skype;    
	}
	function getSkype() {
	return $this->skype;
	}
	}
	// Aunque no es utilizada en este ejemplo puedes
	// imaginar la de clases que podríamos crear que
	//extiendan de Persona
	class Alumno extends Persona{
	private $skype;
	private $numeroMatricula;
	function __construct($nombre='', $apellidos='', $skype='') {
	// Llama al constructor de la clase padre Persona
	parent::__construct($nombre,$apellidos);
	$this->skype = $skype;    
	}
	function setNumeroMatricula($numeroMatricula) {
	$this->numeroMatricula = $numeroMatricula;
	}
	function getNumeroMatricula() {
	return $this->numeroMatricula;
	}
	}
	// Definimos un profesor
	$profesor1 = new Profesor('Carlos','Prueba clases', 'direccion_skype');
	// Definimos unas asignaturas
	$asignatura1 = new Asignatura('HTML');
	$asignatura2 = new Asignatura('PHP');
	$asignatura3 = new Asignatura('MYSQL');
	// Asignamos un profesor a las asignaturas
	$asignatura1->setProfesor($profesor1);
	$asignatura2->setProfesor($profesor1);
	// a la asigantura3 no le asignamos profesor
	// Obtenemos un objeto de tipo Profesor
	$profesorAsignatura = $asignatura1->getProfesor();
	// Si el objeto no es nulo, es que existe un profesor
	if(!is_null($profesorAsignatura)) {
	echo 'El profesor de la asignatura '.$asignatura1->getNombre();
	// Llamamos a un método de la clase Persona
	// la cual ha sido heredada por la clase Profesor
	echo ' es '.$profesorAsignatura-> getNombreCompleto();
	// Por último llamamos a un metodo de la misma clase
	echo ' y su contacto de Skype es '.$profesorAsignatura->getSkype();
	} else {
	echo 'La asignatura '.$asignatura1->    getNombre().' no tiene un profesor asignado    todavía';
	}
	echo '<br />';
	// Hacemos lo mismo con la asignatura3
	$profesorAsignatura = $asignatura3->getProfesor();
	if(!is_null($profesorAsignatura)) {
	echo 'El profesor de la asignatura '.$asignatura3->getNombre();
	echo ' es '.$profesorAsignatura->getNombreCompleto();
	echo ' y su contacto de Skype es '.        $profesorAsignatura->getSkype();
	} else {
	echo 'La asignatura '.$asignatura3->getNombre().' no tiene un profesor asignado';
	}
	?>
    </p>
</body>

</html>