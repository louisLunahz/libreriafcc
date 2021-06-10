# libreriafcc
Este es un proyecto que hice en conjunto con dos compañeros de mi clase para la materia de Aplicaciones web. 
Aunque el trabajo fue en equipo, debo decir sin animo de pretenciosidad que el 80 por ciento del mismo fue realizado por mi.

OBJETIBVO
Este sitio es de compra y venta de libros de texto en el cual se puede iniciar sesión, registrarse, publicar un libro a vender y comprar un libro.
Para la compra de un libro no se necesita tener cuenta pero si para venderlo. 
Existen 4 categorias para clasificar los libros: Computación, Hardware, Matemáticas, Física, Otros.
El sistema tiene dos tipos de usuarios: Internautas, y usuarios registrados.
Un internauta podrá comprar un libro dando los datos de su matrícula, carrera, teléfono, mail 
(y se pondrán de acuerdo para la venta en algún lugar de la facultad)

Cada usuario registrado subirá los datos de los libros: Nombre del libro, Área, Descripción 
(aquí decir para que materias podría utilizarse), el costo del libro, Una Imagen del libro, y el 
estado actual del libro (Impecable, regular, maltratado).

Los usuarios registrados además de subir los datos de los libros, podrán actualizar el precio, la 
imagen, la descripción, etc. Deberá tener un campo para saber si ya se vendió o no un libro y 
darlo de baja

La base de datos está en MySQL y alojada en CleverCloud la cual es una plataforma que permite almacenar bases de datos en MySQL 
El sitio está alojado en la plataforma Heroku haciendo uso de continuous Deployment 
por medio de la integración que tiene Github con la misma.

Para registrarse es necesaria una matricula la cual es un numero de 8 numeros. 
El sistema detecta si un email ya está en uso.
La contraseña debe ser de al menos 6 caracteres.

Tecnologías usadas: PHP, HTML, MySQL, CSS, Bootstrap 4, GIT.  

Vista Previa. 

https://libreriafcc.herokuapp.com/



