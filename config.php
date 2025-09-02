<?php
const OutputFile = "form_data.json";

$intro = <<<END
<p>Lorem ipsum. Tervetuloa ja niin edelleen. Täytä kentät</p>
END;

$fields = [
  [ "subtitle" => "Henkilötiedot" ],
  [
    "id" => "givenname",
    "name" => "Etunimi",
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "surname",
    "name" => "Sukunimi",
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "email",
    "name" => "Sähköposti",
    "type" => "email",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "phone",
    "name" => "Puhelinnumero",
    "type" => "text",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "languagepreference",
    "name" => "Mitä kieltä suosit (suomi, ruotsi, englanti)?",
    "type" => "text",
    "required" => true,
  ],
  [
    "id" => "allegies",
    "name" => "Terveydelle vaaralliset allergiat, joista järjestäjien on syytä tietää",
    "type" => "textarea",
    "required" => false,
  ],
  [ "subtitle" => "Tiedot sukuelimistä" ],
  [
    "id" => "sexorgans",
    "name" => "Millaiset sukuelimet sinulla on? Naaras, uros, vai muu?",
    "type" => "text",
    "required" => true,
  ],
  [
    "id" => "interest-in-females",
    "name" => "Oletko kiinnostunut lempimään sellaisten ihmisten kanssa, joilla on naaraan sukuelimet?",
    "type" => "text",
    "required" => true,
  ],
  [
    "id" => "interest-in-males",
    "name" => "Oletko kiinnostunut lempimään sellaisten ihmisten kanssa, joilla on uroksen sukuelimet?",
    "type" => "text",
    "required" => true,
  ],
  [ "subtitle" => "Avecit ja epätoivotut henkilöt" ],
  [
    "id" => "avecs",
    "name" => "Mahdollisten avecciesi nimet",
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "nongratas",
    "name" => "Keiden kanssa et haluaisi olla samoissa lempeissä orgioissa? (yksittäisten henkilöiden nimiä)",
    "type" => "textarea",
    "required" => false,
  ],
  [ "subtitle" => "Muuta" ],
  [
    "id" => "info",
    "name" => "Muut asiat, jotka haluaisit meidän tietävän",
    "type" => "textarea",
    "required" => true,
  ],
  [
    "id" => "codeword",
    "name" => "Kirjoita tähän koodisana (porkkana)",
    "type" => "riddle",
    "required" => true,
    "answer" => "porkkana",
    "errormessage" => "Porkkana! Ei selleri!",
  ],
  [
    "id" => "consenttosave",
    "name" => "Suostutko siihen että henkilötietosi tallennetaan rakastajien killan osallistujarekisteriin",
    "checkboxlabel" => "Kyllä",
    "type" => "checkbox",
    "required" => true,
  ]
];
