 <?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.

$asfoByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
 <img class ="right" src="img/me.jpg" alt="Bild på Åsa Forss">
  <div id="content">
  <h1>Åsa Forss</h1>
  <p>Jag heter Åsa och jag tycker att det är spännande och lärorikt att läsa kurspaketet. 
    Våren 2011 tog jag en kandidatexamen i Data- och systemvetenskap på
    Stockholms universitet. Det jag fastnade mest för där var databaser och programmering. 
    Människa- datorinteraktion var också kul. 
    Sen jag gick ut har jag fått mitt tredje barn, varit föräldraledig och jobbat lite deltid. 
    Nu vill jag lära mig webbutveckling för att kunna hitta något roligt jobb till våren.
    Jag har erfarenhet av C# och ASP.NET och skulle verkligen vilja lära mig de tekniker som
    gås igenom i paketet så att jag kan arbeta bredare inom webbutveckling.
  </p>
  <p>
    Jag bor i Gustavsberg och på fritiden springer jag bland annat. I somras spran jag tjejmilen
    för första gången  och det var riktigt kul! Jag har redan anmält mig till tjejmilen nästa år.
  </p>
  </div>
 


EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 