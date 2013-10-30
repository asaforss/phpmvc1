 <?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexted";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<p>Här skriver du all din redovisningstext, kursmoment för kursmoment och avslutar med projektet.</p>

<h2>Kmom01: En boilerplate</h2>

<h3>Litteraturen</h3>
<p>Mycket av det som stod kände jag igen. Jag fick dock en tydligare bild av statiska klasser och metoder 
    så det var klart läsvärt.</p>
        
<h3>Utvecklingsmiljö</h3>
<p>Jag använder WAMP och NetBeans och har Windows 7.</p>
<h3>HTML5Boilerplate</h3>
<p>Jag tycker om tanken att kunna använda sig av andras kunskap på ett organiserat sätt. HTML5Boilerplate 
    verkar stort och bra att få lära sig. Jag hade lite problem att få till min style på elementen men det löste sig till slut.
   Det märktes att det var ett tag sen jag gjorde första kursen så jag fick titta tillbaks rätt mycket. Jag fick efter en 
  fråga på forumet mer koll på vad som menas med webbserverns rot och hur det fungerar med faviconen något jag funderat lite på även i tidigare kursen
 (då gällde det fel-loggfilars placering). Så jag insåg att jag själv behövde lägga in faviconen med en kodsnutt.</p>
        
<h3>GIT</h3>
<p>Eftersom HTML5Boilerplate inte hade tagit så lång tid tog jag mig även an extrauppgiften redan nu. Jag följde Mikaels guide och det gick bra förutom
    ett litet felsteg där jag höll på att lägga alla filerna från användarkatalogen i repositoryt.  Och jag hamnade på den blå rutan med ”LF replaced with CRLF”
    också förstås men följde bara trådens råd och det löste sig.</p>
<h3>Allmänt</h3>
<p>Jag tycker kursmomentet var roligt och en skön mjukstart in i phpmvc kursen.</p>



EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 