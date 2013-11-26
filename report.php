<?php

// My own me-page
include ("config.php");



$data['title'] 			  = "Redovisning";
$data['meta_description'] = "Min egna me-sida";
$data['main'] 			  = <<<EOD

<h1>Redovisningar</h1>

<h2>Kmom01: En boilerplate</h2>

<p>Operativsystemet jag använder är Windows 7. 
WAMP är min lokala webbserver, i Notepad++ skriver jag kod och med FileZilla laddar jag upp filerna till BTH.</p>

<p>Boilerplate-konceptet är klart intressant. 
Det verkar vara en bra grund att stå på, ungefär som Anax i den tidigare kursen. 
Men precis som Mos nämner så är det mycket kod i boilerplaten, vilket inte är alltför lätt för en nybörjare att förstå.</p>

<p>Detta kursmoment gick fort. 
Istället för att pröva min vingar följde jag Mos och tittade på hur han hade gjort. 
Det är viktigt att allt blir rätt i början och i grunden. 
Då kan jag därefter börja testa mina färdigheter.
Sen ändrade jag om i style.css. 
Jag lät grunden kvarstå men ändrade några element till min egen smak.</p>

<p>Det som i första hand är intressant med Boilerplate är det att projektet utvecklas av webbutvecklare som vet vad dom pratar om efter mängder av år inom branschen. 
Det ger ett gott första intryck. 
Mycket är integrerat i boilerplaten, vilket gör att man kan börja med sitt egna projekt direkt. 
Boilerplate är en god grund att stå på när jag själv ska utveckla ett projekt, jag gillar det helt klart. 
Det är även anpassat till olika versioner av IE, något som ofta kan skapa problem och konflikter.</p>

<p>Jag skapade och laddade upp mitt första kursmoment på GitHub. 
Efter att ha använt GitHub en kort stund känner jag att det verkligen är något jag kommer ha nytta av.</p>


EOD;

// Template
include(__DIR__."/theme/template.php");