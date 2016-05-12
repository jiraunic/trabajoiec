application: serviciosenlanubetec
version: 1
runtime: php55
api_version: 1


handlers:
- url: /css
  static_dir: css

- url: /
  script: inicio.php

- url: /inicio.php
  script: inicio.php

- url: /AgregarAlumno.php
  script: AgregarAlumno.php

- url: /agregarcalificacion.php
  script: agregarcalificacion.php

 - url: /agregardocumentaion.php
  script: agregardocumentaion.php
 
- url: /AgregarMaestro.php
  script: AgregarMaestro.php

- url: /AgregarMateria.php
  script: AgregarMateria.php

- url: /alumno.php
  script: alumno.php

- url: /areadepago.php
  script: areadepago.php

- url: /calificacion.php
  script: calificacion.php

- url: /calificacionprofesional.php
  script: calificacionprofesional.php

- url: /calificacionsecretariado.php
  script: calificacionsecretariado.php

- url: /catalogoreportealumno.php
  script: catalogoreportealumno.php

- url: /doc.php
  script: doc.php

- url: /documentos.php
  script: documentos.php

- url: /documentosalumnos.php
  script: documentosalumnos.php

- url: /Logout.php
  script: Logout.php

- url: /maestro.php
  script: maestro.php

- url: /maestromateria.php
  script: maestromateria.php

- url: /maestroprofesional.php
  script: maestroprofesional.php

- url: /maestrosecretariado.php
  script: maestrosecretariado.php

- url: /materia.php
  script: materia.php

- url: /mostraralumnos.php
  script: mostraralumnos.php

- url: /mostrarmaestro.php
  script: mostrarmaestro.php

- url: /Relacion.php
  script: Relacion.php

- url: /relacionalumnodocumento.php
  script: relacionalumnodocumento.php

- url: /relacionmm.php
  script: relacionmm.php

- url: /relacionprofesional.php
  script: relacionprofesional.php

- url: /relacionsecretariado.php
  script: relacionsecretariado.php

- url: /reportealumno.php
  script: reportealumno.php

- url: /reporteprofesional.php
  script: reporteprofesional.php

- url: /Reportes.php
  script: Reportes.php

- url: /reportesecretariado.php
  script: reportesecretariado.php

- url: /tipocalificacion.php
  script: tipocalificacion.php