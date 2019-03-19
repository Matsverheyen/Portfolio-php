<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <title>Documentatie | Mats Verheyen</title>
</head>

<body>
  <?php include 'components/nav.php' ?>
  <div class="container ">
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">PHP tags</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een PHP tag in de tag die aangeeft dat er een PHP script begint, Dit geef je aan met &#60;?php 'Code hiertussen' ?></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Boolean</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een Boolean is een expressie die alleen true of false kan zijn.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Integer</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een integer is een getal dus bijvoorbeeld: 2 een getal zet je niet tussen quotes</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Float</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een float is een getal met punt dus bijvoorbeeld: 3.14 een float zet je niet tussen quotes</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">String</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een string is een woord dus bijvoorbeeld: "woord" Een string geef je altijd aan met " of met ' </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Array</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een array is een collectie van; Strings, integers, booleans of floats dit geef je aan met blokhaakjes dus bijvoorbeeld: ["woord1", "woord2", 3, True, "woord5"]</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Expressions</a>
              </h4>

            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een expression is iets wat een waarde heeft. Je kan hiervan een variable maken door een Dollar-teken '$' voor iets te zetten dus bijvoorbeeld: $1 = "Dit is getal één";</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
                 <h4 class="panel-title">
                    <a href="#" class="ing">elseif | else if</a>
              </h4>

            </div>
            <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>elseif of else if is een statement die letterlijk kijkt of ander wel de waarde is dus bijvoorbeeld: if 1+1 == 2 { echo 1 } elseif 1+1 == 3 { echo 3}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question8">
                 <h4 class="panel-title">
                    <a href="#" class="ing">foreach</a>
              </h4>

            </div>
            <div id="question8" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een foreach is een een manier om makkelijk dingen uit een array te halen. Hij doet het net zovaak als iets in de array staat dus als je foreach gebruikt, en er staan 3 dingen in een array dan doet de loop iets 3 keer en gebruikt die variable uit de array voor iets anders.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question9">
                 <h4 class="panel-title">
                    <a href="#" class="ing">break</a>
              </h4>

            </div>
            <div id="question9" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een break staat voor het einde van een switch statement</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question10">
                 <h4 class="panel-title">
                    <a href="#" class="ing">continue</a>
              </h4>

            </div>
            <div id="question10" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Continue gebruik je ook in een switch statements en die skipt alles en begint weer opnieuw</p>
                </div>
            </div>
        </div>
               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question11">
                 <h4 class="panel-title">
                    <a href="#" class="ing">switch</a>
              </h4>

            </div>
            <div id="question11" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Een switch is in eigenlijk bijna het zelfde als meerdere if else statements alleen is het overichtelijker en kan je het makkelijker gebruiken</p>
                </div>
            </div>
        </div>
               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question12">
                 <h4 class="panel-title">
                    <a href="#" class="ing">function</a>
              </h4>

            </div>
            <div id="question12" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>een functie is een soort blok waarin een bepaalde code staat, dit maakt alles overzichtelijker en je kan code makkelijk hergebruiken.</p>
                </div>
            </div>
        </div>
               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question13">
                 <h4 class="panel-title">
                    <a href="#" class="ing">function arguments</a>
              </h4>

            </div>
            <div id="question13" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>argumenten die je kan meegeven in een fucntie die daarna in de functie zelf gebruikt worden.</p>
                </div>
            </div>
        </div>
               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question14">
                 <h4 class="panel-title">
                    <a href="#" class="ing">returning value</a>
              </h4>

            </div>
            <div id="question14" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>De return is iets wat de functie teruggeeft wanneer hij is aangeroepen</p>
                </div>
            </div>
        </div>
               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question15">
                 <h4 class="panel-title">
                    <a href="#" class="ing">variable function</a>
              </h4>

            </div>
            <div id="question15" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>geen idee</p>
                </div>
            </div>
        </div>
                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question16">
                 <h4 class="panel-title">
                    <a href="#" class="ing">date_sunset</a>
              </h4>

            </div>
            <div id="question16" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>geeft de tijd van de zonsopkomst van een bepaalde locatie</p>
                </div>
            </div>
        </div>
                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question17">
                 <h4 class="panel-title">
                    <a href="#" class="ing">cal_days_in_month</a>
              </h4>

            </div>
            <div id="question17" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Geeft het aantal dagen in een maand weer</p>
                </div>
            </div>
        </div>
                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question18">
                 <h4 class="panel-title">
                    <a href="#" class="ing">chmod</a>
              </h4>

            </div>
            <div id="question18" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Veranderd de permission van een bestand</p>
                </div>
            </div>
        </div>
                               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question19">
                 <h4 class="panel-title">
                    <a href="#" class="ing">copy</a>
              </h4>

            </div>
            <div id="question19" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Kopieert het bestand</p>
                </div>
            </div>
        </div>
                               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question20">
                 <h4 class="panel-title">
                    <a href="#" class="ing">delete</a>
              </h4>

            </div>
            <div id="question20" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Delete het bestand</p>
                </div>
            </div>
        </div>
                               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question21">
                 <h4 class="panel-title">
                    <a href="#" class="ing">dirname</a>
              </h4>

            </div>
            <div id="question21" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Geeft het pad waarin gewerkt wordt.</p>
                </div>
            </div>
        </div>
                               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question22">
                 <h4 class="panel-title">
                    <a href="#" class="ing">disk_free_space</a>
              </h4>

            </div>
            <div id="question22" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Laatde ruimte zien die beschikbaar is op een bepaalde schijf</p>
                </div>
            </div>
        </div>
                               <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question23">
                 <h4 class="panel-title">
                    <a href="#" class="ing">disk_total_space</a>
              </h4>

            </div>
            <div id="question23" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Laat de totale ruimte op een schijf zien</p>
                </div>
            </div>
        </div>
                                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question24">
                 <h4 class="panel-title">
                    <a href="#" class="ing">fopen</a>
              </h4>

            </div>
            <div id="question24" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Opent een bestand of een URL</p>
                </div>
            </div>
        </div>
                                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question25">
                 <h4 class="panel-title">
                    <a href="#" class="ing">fclose</a>
              </h4>

            </div>
            <div id="question25" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Sluit het bestand of URL</p>
                </div>
            </div>
        </div>
                                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question26">
                 <h4 class="panel-title">
                    <a href="#" class="ing">filesize</a>
              </h4>

            </div>
            <div id="question26" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Laat de groote van het bestand zien</p>
                </div>
            </div>
        </div>
                                       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question27">
                 <h4 class="panel-title">
                    <a href="#" class="ing">mail</a>
              </h4>

            </div>
            <div id="question27" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Antwoord</span></h5>

                    <p>Stuurt een mail naar iemand, met headers. (Werkt niet op localhost, Je moet hiervoor een server met mailadress hebben.)</p>
                </div>
            </div>
        </div>
    </div>
    <!--/panel-group-->
</div>
  <?php include 'components/footer.php' ?>
</body>

</html>