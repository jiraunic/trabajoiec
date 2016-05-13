// Using PDO_MySQL (connecting from App Engine)
$db = new pdo(
  'mysql:unix_socket=/cloudsql/serviciosnubetec:basededatosiec',
  'root',  // username
  'toor'       // password
);

// Using mysqli (connecting from App Engine)
$sql = new mysqli(
  null, // host
  'root', // username
  '',     // password
  '', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );

// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(':/cloudsql/serviciosnubetec:basededatosiec',
  'root', // username
  ''      // password
  );
$con =mysqli_connect(
  '173.194.225.117', // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );