<?php
$str = addcslashes("we are sena ADSI  !","s");
echo($str);
echo "<br>";
/* 'la funcion str agraga un slas en un comentario y despues de la coma puedes '
. 'indicar donde desea agregar el slas en el parrafo ';
*/
$str = addslashes('What does "ADSI" mean?');
echo($str); 

echo "<br>";
/* "Devuelve una cadena con barras invertidas delante de caracteres predefinidos"
 */
$str = bin2hex("SENA ADSI!");
echo($str); 

echo "<br>";
/*echo "Convierte una cadena de caracteres ASCII,que en estos momento es la palabra (ADSI SENA) y la convierte en  valores hexadecimales."
 * 
 */
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");

echo "<br>";
/*echo "Elimina espacios en blanco u otros caracteres del extremo derecho de una cadena."
 * 
 */
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex 

echo "<br>";
/*"Devuelve un carÃ¡cter de un valor ASCII especificado";
 * 
 */
$str = "Hello world!";
echo chunk_split($str,1,".");

echo "<br>";
/*"Divide una cadena en una serie de partes mÃ¡s pequeÃ±as"
 * 
 */
$str = "Hello world! Ã¦Ã¸Ã¥";
echo $str . "<br>";
echo convert_cyr_string($str,'w','a'); 

echo "<br>";
/*'"In this example we convert a string from the character-set "w" (windows-1251) to "a" (x-cp866)."';

echo "Convierte una cadena de caracteres de un conjunto de caracteres cirÃ­licos a otro";
*/
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);

echo "<br>";
/*"Decodifica una cadena uuencode";
 * 
 */
$str = "ADSI SENA!";
echo convert_uuencode($str);

echo "<br>";
/*"Codifica una cadena utilizando el algoritmo uuencode";
 * 
 */
$str = "Hello World!";
echo count_chars($str,3);

echo "<br>";
/*"Devuelve informaciÃ³n sobre los caracteres utilizados en una cadena.";
 * 
 */
$str = crc32("Hello World!");
printf("%u\n",$str);

echo "<br>";
/*"Calcula un CRC de 32 bits para una cadena";
 * 
 */
// 2 character salt
if (CRYPT_STD_DES == 1)
{
echo "Standard DES: ".crypt('something','st')."\n<br>"; 
}
else
{
echo "Standard DES not supported.\n<br>";
}

// 4 character salt
if (CRYPT_EXT_DES == 1)
{
echo "Extended DES: ".crypt('something','_S4..some')."\n<br>";
}
else
{
echo "Extended DES not supported.\n<br>";
}

// 12 character salt starting with $1$ 
if (CRYPT_MD5 == 1)
{
echo "MD5: ".crypt('something','$1$somethin$')."\n<br>"; 
}
else
{
echo "MD5 not supported.\n<br>";
}

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters 
if (CRYPT_BLOWFISH == 1)
{
echo "Blowfish: ".crypt('something','$2a$09$anexamplestringforsalt$')."\n<br>"; 
}
else
{
echo "Blowfish DES not supported.\n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1) 
{
echo "SHA-256: ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>"; }
else
{
echo "SHA-256 not supported.\n<br>";
}

// 16 character salt starting with $6$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1) 
{
echo "SHA-512: ".crypt('something','$6$rounds=5000$anexamplestringforsalt$'); 
}
else
{
echo "SHA-512 not supported.";
}
echo "<br>";
echo "<br>";
/*"DescomposiciÃ³n unidireccional de cadenas";
 * 
 */

echo "ADSI!";
echo "<br>";
/*"Muestra en pantalla caracteres strings";
 * 
 */
$str = "We are the best ADSI, we will be the best..";
print_r (explode(" ",$str));

echo "<br>";
/*"Rompe una cadena en una matriz";
 * 
 */
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);

echo "<br>";
/*"Escribe una cadena formateada a un flujo de salida especificado";
 * 
 */
print_r (get_html_translation_table()); // HTML_SPECIALCHARS is default.

echo "<br>";
/*'"Devuelve la tabla de traducciÃ³n usada por htmlspecialchars() y htmlentities()"';
 * 
 */
echo hebrev("×‘ ×—×©×•×Ÿ ×”×ª×©×¡×’");

echo "<br>";
/*"Convierte texto hebreo en texto visual";
 * 
 */
echo hebrevc("×‘ ×—×©×•×Ÿ ×”×ª×©×¡×’\n ×‘ ×—×©×•×Ÿ ×”×ª×©×¡×’");

echo "<br>";
/*"Convierte texto hebreo a texto visual y nuevas lÃ­neas (\n) a <br>";
 * 
 */
echo hex2bin("48656c6c6f20576f726c6421");

echo "<br>";
/*"Convierte una cadena de valores hexadecimales en caracteres ASCII";
 * 
 */
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);

echo "<br>";
/*"Convierte entidades HTML en caracteres"
 * 
 */
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

echo "<br>";
echo 'La conversiÃ³n de caracteres en entidades se utiliza a menudo para evitar que los navegadores la utilicen como elemento HTML. Esto puede ser especialmente Ãºtil para evitar que el cÃ³digo se ejecute cuando los usuarios tienen acceso a la entrada de pantalla en su pÃ¡gina principal.';

echo "<br>";
/*"Convierte caracteres a entidades HTML";
 * 
 */
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

echo "<br>";
/* "Convierte algunas entidades HTML predefinidas en caracteres";
 * 
 */
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

echo "<br>";
/*"La conversiÃ³n &lt; y &gt; en entidades se utiliza a menudo para evitar que los navegadores la usen como elemento HTML. Esto puede ser especialmente Ãºtil para evitar que el cÃ³digo se ejecute cuando los usuarios tienen acceso a la entrada de pantalla en su pÃ¡gina principal.";

echo "Convierte algunos caracteres predefinidos a entidades HTML";
 * 
 */
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);

echo "<br>";
/*"Devuelve una cadena de los elementos de una matriz";
 * 
 */
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

echo "<br>";
/*"Alias de implode()";
 * 
 */
echo lcfirst("Adsi the best!");

echo "<br>";
/*"Convierte el primer carÃ¡cter de una cadena a minÃºsculas";
 * 
 */
echo levenshtein("Hello World","ello World");
echo "<br>";
echo levenshtein("Hello World","ello World",10,20,30);

echo "<br>";
/*"Devuelve la distancia Levenshtein entre dos cadenas";
 * 
 */
setlocale(LC_ALL,"US");
$locale_info = localeconv();
print_r($locale_info);

echo "<br>";
/*"Devuelve informaciÃ³n de formato numÃ©rico y monetario del lugar";
 * 
 */
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");


echo "<br>";
/*"Devuelve informaciÃ³n de formato numÃ©rico y monetario del lugar";
 * 
 */
$str = "ADSI";
echo md5($str);

echo "<br>";
/*"Calcula el hash MD5 de un archivo.";
 * 
 */
$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;

echo "<br>";
/*"Calcula el hash MD5 de un archivo";
 * 
 */
echo metaphone("World");

echo "<br>";
/*"Calcula la clave de metaphone de una cadena";
 * 
 */


/*
NO SE ENTENDIO ESTA FUNCIÓN (PENDIENTE)
 string nl_langinfo ( int $item );
*/
echo nl2br("One line.\nAnother line.");
/*
 Inserta saltos de línea HTML delante de cada nueva línea en una cadena
*/
echo '<br>';
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
/*
La función Number_format () da formato a un número con los miles agrupados.
Nota: Esta función es compatible con uno, dos o cuatro parámetros (no tres).
*/
echo '<br>';
echo ord("h")."<br>";
echo ord("hello")."<br>";
/*
Devuelve el valor ASCII del primer carácter de un string
*/
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;
/*
Analiza una cadena de consulta en variables
*/
echo '<br>';
print "Hello world!"; 
/*
Emite una o más cadenas
*/
echo '<br>';
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
/*
Emite una cadena formateada
*/
echo '<br>';
$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);
/*
Convierte una cadena de texto imprimible por comillas en una cadena de 8 bits
*/
echo '<br>';
$str = "Hello=0Aworld.";
echo quoted_printable_encode($str);
/*
Convierte una cadena de 8 bits en una cadena imprimible cotizada
*/
echo '<br>';
$str = "Hello world. (can you hear me?)";
echo quotemeta($str);
/*
Citas meta caracteres
*/
echo '<br>';
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
/*
Elimina espacios en blanco u otros caracteres del lado derecho de una cadena.
*/
echo '<br>';
echo setlocale(LC_ALL,"US");
echo "<br>";
echo setlocale(LC_ALL,NULL);
/*
Establece la información de localización
*/
echo '<br>';
$str = "Hello";
echo sha1($str);
/*
Calcula el hash SHA-1 de una cadena
*/
echo '<br>';
$filename = "test.txt";
$sha1file = sha1_file($filename);
echo $sha1file;
/*
Calcula el hash SHA-1 de un archivo
*/
echo '<br>';
echo similar_text("Hello World","Hello Peter");
/*
Calcula la similitud entre dos cadenas
*/
echo '<br>';
$str = "Hello";
echo soundex($str);
/*
Calcula la clave de soundex de una cadena
*/
echo '<br>';
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
/*
Escribe una cadena formateada a una variable
*/
echo '<br>';
$str = "age:30 weight:60kg";
sscanf($str,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);
/*
Analiza la entrada de una cadena según un formato
*/
echo '<br>';
/*
str_getcsv(string,separator,enclosure,escape)
 * NO SE ENTENDIO ESTA FUNCIÓN (PENDIENTE)
 * La función str_getcsv () analiza una cadena de campos en formato CSV y devuelve una matriz que contiene los campos de leer.
 */
echo '<br>';
echo str_ireplace("WORLD","Peter","Hello world!");
/*
Reemplaza algunos caracteres en una cadena (insensible a mayúsculas y minúsculas)
*/
echo '<br>';
$str = "Hello World";
echo str_pad($str,20,".");
/*
Acolcha una cuerda a una nueva longitud
*/
echo '<br>';
echo str_repeat(".",13);
/*
Repite una cadena un número determinado de veces
*/
echo '<br>';
echo str_replace("world","Peter","Hello world!");
/*
Reemplaza algunos caracteres de una cadena (distingue entre mayúsculas y minúsculas)
*/
echo '<br>';
echo str_rot13("Hello World");
echo "<br>";
echo str_rot13("Uryyb Jbeyq");
/*
Realiza la codificación ROT13 en una cadena
*/
echo '<br>';
echo str_shuffle("Hello World");
/*
Mezcla aleatoriamente todos los caracteres de una cadena
*/
echo '<br>';
print_r(str_split("Hello"));
/*
Divide una cadena en una matriz
*/
echo '<br>';
echo str_word_count("Hello world!");
/*
Contar el número de palabras de una cadena
*/
echo '<br>';
echo strcasecmp("Hello world!","HELLO WORLD!");
/*
Compara dos cadenas (insensible a mayúsculas y minúsculas)
*/
echo '<br>';
echo strchr("Hello world!","world");
/*
Encuentra la primera aparición de una cadena dentro de otra cadena (alias de strstr())
*/
echo '<br>';
echo strcmp("Hello world!","Hello world!");
/*
Compara dos cadenas (distingue entre mayúsculas y minúsculas)
*/
echo '<br>';
setlocale (LC_COLLATE, 'NL');
echo strcoll("Hello World!","Hello World!");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');
echo strcoll("Hello World!","Hello World!");
/*
Compara dos cadenas (comparación de cadenas basada en la localización)
*/
echo '<br>';
echo strcspn("Hello world!","w");
/*
Devuelve el número de caracteres que se encuentran en una cadena antes de que se encuentre cualquier parte de algunos caracteres especificados.
*/
echo '<br>';
echo strip_tags("Hello <b>world!</b>");
/*
Elimina etiquetas HTML y PHP de una cadena
*/
echo '<br>';
/**
 * Esta funciÃ³n elimina el elemento contra slash antes del string "World!"
 */
echo stripcslashes("Hello \People!");
  echo '<br>';
/**
 * Elimina slashes en el interior del string
 */
echo stripslashes("Who\'s Sheldon Cooper?");
  echo '<br>';
/**
 * Busca y delimita una bÃºsqueda de un elemento en el interior del string
 */
echo stripos("I love you, I love you too!","YOU");
  echo '<br>';
/**
 * Busca una ocurrencia segÃºn las caracterÃ­sticas especÃ­ficadas en el interior del string
 */  
echo stristr("Hello world!","WORLD");
  echo '<br>';
/**
 * Da el largo de caracteres de un string
 */
echo strlen("Adventure");
  echo '<br>';
/**
 * Asigna un elemento nÃºmerico y compara las funciones entre si
 */
echo strnatcasecmp("2Hello world!","10Hello WORLD!");
  echo "<br>";
echo strnatcasecmp("10Hello world!","2Hello WORLD!");
  echo '<br>';
/**
 * Da un valor de la posiciÃ³n que le damos en el string
 */
echo strncasecmp("Hello world!","hello earth!",6);
  echo '<br>';
/**
 * Compara y aplica una bÃºsqueda entre los dos strings segÃºn el elemento asignado
 */
echo strncmp("Hello world!","Hello earth!",6);
  echo '<br>';
/**
 * "e" es la primera apariciÃ³n de los caracteres especificados. 
 * Esta funciÃ³n emitirÃ¡ "ello world!", 
 * porque devuelve el resto de la cadena desde donde encontrÃ³ la primera ocurrencia de "e".
 */
echo strpbrk("Hello world!","oe");
 echo '<br>';
/**
 * Busca la posiciÃ³n de una ocurrencia especificada
 */

echo strpos("I love this, I love this too!","this");
echo '<br>';
/**
 * Busca en el string earth y imprime su contenido o valor
 */
echo strrchr("Hello earth!","earth");
  echo '<br>';
/**
 * Revierte el valor o contenido del string
 */
echo strrev("Hello World!");
  echo '<br>';
/**
 * Encuentra la posiciÃ³n de la Ãºltima apariciÃ³n de "php" dentro de la cadena
 */
echo strripos("I love php, I love php too!","PHP");
  echo '<br>';
/**
 * Busca la ocurrencia de too en el interior del string
 */
echo strrpos("I love too, I love php too!","too");
  echo '<br>';
/**
 * Nos da la cantidad de elementos que se encuentran en el interior del string
 */
echo strspn("Hello world!","kHlleo");
  echo '<br>';
/**
 *Busca man en el string y retorna el valor restante del producto 
 */
echo strstr("Hello man!","man");
  echo '<br>';
/**
 * Toma los elementos despuÃ©s de donde usted se ubica en el string
 */
echo substr("Hello girl",6);
  echo '<br>';
/**
 * 
 */
echo substr_compare("Hello persons","Hello persons",0);
  echo '<br>';
/**
 * Busca y cuenta las ocurrencias definidas anteriormente
 */
echo substr_count("Hello people. The people is beautiful","people");
  echo '<br>';
/**
 * Reemplaza Hi por guys
 */
echo substr_replace("Hi","guys",0);
  echo '<br>';
/**
 * Remueve los caracteres BeP en el interor del string 
 */
$str = "Broken People!";
echo $str . "<br>";
echo trim($str,"BeP!");
  echo '<br>';
/**
 * Convierte el primer caracter del string en una mayÃºscula
 */
echo ucfirst("mister Alexander!");
  echo '<br>';
/**
 * Convierte los primeros elementos de cada frase del string en una mayÃºscula
 */
echo ucwords("hello world");
  echo '<br>';
/**
 * Cuenta y une elementos en la cadena de caracteres
 */
$number = 9;
$strs = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"t %s.",array($number,$strs));
  echo '<br>';
/**
 * Completa el string y lo imprime en pantalla
 */
$numbers = 9;
$strn = "Beijing";
vprintf("There are %u million bicycles in %s.",array($number,$str));
  echo '<br>';
/**
 * Escribe una cadena con formato a una variable
 */
$numbers2 = 9;
$strng = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
echo $txt;
  echo '<br>';
/**
 * Envuelva una cadena en nuevas lÃ­neas cuando alcanza una longitud especÃ­fica
 */
$strn1 = "this is an example of a long word is: Supercalifragulistic";
echo wordwrap($strn1,15,"<br>\n");
