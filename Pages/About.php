
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">
<title> Scholarity HTML </title>
    <link href="/MUM/Css/About.css" rel="stylesheet">
</head>


<body vocab="http://schema.org/"  xmlns:xsd="http://www.w3.org/2001/XMLSchema#" xmlns:sa="https://ns.science.ai/">




<article resource="#" typeof="schema:ScholarlyArticle">

<h1>MuM (Music Review Manager) </h1>
  <section>
  <h2>Contributors List</h2>
    <ol>
      <!-- Zaharia Bogdan -->
      <li property="schema:author" typeof="sa:ContributorRole">
        <a property="schema:author" href="#" typeof="schema:Person">
          <span property="schema:givenName">Bogdan</span>
          <span property="schema:familyName">Zaharia</span>
        </a>
        <a href="#scienceai" property="sa:roleAffiliation" resource="https://ns.science.ai/"></a>
        <sup property="sa:roleContactPoint" typeof="schema:ContactPoint">
          <a property="schema:email" href="mailto:bogdan.zaharia98@gmail.com" title="contributor">✉</a>
        </sup>
      </li>
      <!--Marius Dinu-->
      <li property="schema:author" typeof="sa:ContributorRole">
        <a property="schema:author" href="#" typeof="schema:Person">
          <span property="schema:givenName">Marius</span>
          <span property="schema:familyName">Dinu</span>
        </a>
        <a href="#scienceai" property="sa:roleAffiliation" resource="https://ns.science.ai/"></a>
        <sup property="sa:roleContactPoint" typeof="schema:ContactPoint">
          <a property="schema:email" href="mailto:" title="contributor">✉</a>
        </sup>
      </li>
    </ol>
    </section>

    <section>
    
    <h2>Documentatie</h2>
   
    <aside>
    <pre>
Se doreste crearea unei aplicatii Web care permite specificarea adnotarilor textuale si a meta-datelor 
(a se studia The Ultimate Guide to Music Metadata), plus exprimarea opiniilor vizand auditiile muzicale 
realizate de o persoana sau grup de persoane. Sistemul va realiza managementul productiilor muzicale,
 inclusiv organizarea lor pe diverse criterii: categorie, artist, album, an, legaturi cu alte melodii inrudite etc. 
Se vor oferi statistici diverse ce pot fi exportate in formate deschise – minimal, CSV si PDF. 
Diversele anunturi (o persoana a comentat un album muzical, a aparut o alta compilatie de interes,
modificarea clasamentului celor mai apreciate cantece ale lunii etc.) vor fi expuse ca flux de stiri RSS.
 Listele de melodii preferate vor fi importate/exportate in format JSPF/XSPF. 
Resurse de interes: MusicBrainz - The Open Music Encyclopedia. 
Bonus: recurgerea la un serviciu online precum Last.fm, Spotify etc.   
</pre>
</aside>
</section>




<section>

<h2>Arhitectura Aplicatiei</h2>
<h3>Diagrame UML</h3>

<figure typeof="sa:Image">
<img src="/MUM/Images/bd.jpg">
<figcaption><h4>Fig.1 - Structura (modelarea) datelor şi provenienţa lor</figcaption>
</figure>


<section>
<h2>Etapele intermediare ale dezvoltării proiectului</h2>





<section role="doc-abstract" aria-label="Abstract">

<h2>html</h2>

<figure typeof="sa:Image">
<img src="/MUM/Images/nav-bar-svg.png">
<figcaption><h4>Fig.2 - NavBar </h4></figcaption>
</figure>

  <h3>head</h3>
<figure typeof="sa:Image">
<img src="/MUM/Images/code1.png">
</br>
<img src="/MUM/Images/code2.png">
<br>
<img src="/MUM/Images/code3.png">
<figcaption><h4>Fig.3 - Template Bara de Navigatie </h4></figcaption>

<pre>
<aside>
    Bara de navigatie este implementata diferit pentru utilizatorii cu drepturi de admin si fara,
     spre exemplu daca nu exista drepturi, trebuie adaugat butonul de favorite. 

</aside>
<pre>
<aside>

</aside>
</figure>


<figure typeof="sa:Image">
<img src="/MUM/Images/js1.png">
<figcaption><h4>Fig.4 - Search</h4></figcaption>

<pre>
<aside>
    
    Cand este cautat un sir vid melodiile se reactualizeaza dupa ultimul apel ajax.

</aside>
<pre>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/search1.png">
<figcaption><h4>Fig.5 - Search JS </h4></figcaption>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/register1.png">
<figcaption><h4>Fig.6 - Register </h4></figcaption>
</figure>
</section>



<figure typeof="sa:Image">
<img src="/MUM/Images/inregistrare.png">
<figcaption><h4>Fig.7 - Register JS </h4></figcaption>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/AdminDetails.png">
<br>
<img src="/MUM/Images/verificare.png">
<figcaption><h4>Fig.8 - Password formal verification  </h4></figcaption>
<pre>
<aside>
    Sunt trimise datele folosind metoda post intr un container data.
    </aside>
<pre>
</figure>

<section role="doc-abstract" aria-label="Abstract">

  <h2>body</h2>
  
  <h3>PHP</h3>


  <figure typeof="sa:Image">
<img src="/MUM/Images/Top101.png">
<figcaption><h4>Fig.9 - Top 10 </h4></figcaption>
</figure>


<figure typeof="sa:Image">
<img src="/MUM/Images/pdf-export1.png">
<figcaption><h4>Fig.10 - PDF export </h4></figcaption>
<pre>
<aside>
    Se interogheaza baza de date pentru ultimele 10 melodii adaugate recent si se ofera optiunea de a exporta in pdf.
</aside>
<pre>
</figure>


<figure typeof="sa:Image">
<img src="/MUM/Images/aisaremelodii-php.png">
</br>
<img src="/MUM/Images/melodii.png">
<figcaption><h4>Fig.11 - Template Melodii  </h4></figcaption>

<pre>
<aside>
    Daca utilizatorul are drepturi de admin, sunt adaugate butoane pentru modificarea metadatelor melodiei si pentru stergere.
    Daca nu are drepturi, este adaugat butonul de favorite. 
    </aside>
<pre>
</figure>

</section>


<section role="doc-abstract" aria-label="Abstract">


<figure typeof="sa:Image">
<img src="/MUM/Images/butoane Admin.png">
<figcaption><h4>Fig.12 - butoane  User, Admin</h4></figcaption>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/comentarii2.png">
<figcaption><h4>Fig.13 - Comentarii </h4></figcaption>
</figure>

</section>

<section>

<h3>JS</h3>

<figure typeof="sa:Image">
<img src="/MUM/Images/ajax.png">
<figcaption><h4>Fig.14 -Afisare</h4></figcaption>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/js2.png">
<figcaption><h4>Fig.15 -Melodii</h4></figcaption>
</figure>

<figure typeof="sa:Image">
<img src="/MUM/Images/addLista1.png">
<figcaption><h4>Fig.16 - Favorite</h4></figcaption>
</figure>


<figure typeof="sa:Image">
<img src="/MUM/Images/delete1.png">
<figcaption><h4>Fig.17 - Delete </h4></figcaption>
</figure>





</section>




</section>









</article>

</body>




</html>