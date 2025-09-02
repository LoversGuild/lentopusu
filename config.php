<?php
const OutputFile = "form_data.json";

$fields = [
  [
    "id" => "givenname",
    "name" => "Etunimi",
    "type" => "text",
    "required" => true,
  ],
  [
    "id" => "surname",
    "name" => "Sukunimi",
    "type" => "textarea",
    "required" => true,
  ],
  [
    "id" => "email",
    "name" => "Sähköposti",
    "type" => "email",
    "required" => true,
  ],
  [
    "id" => "phone",
    "name" => "Puhelinnumero",
    "type" => "text",
    "required" => false,
  ],
  [
    "id" => "languagepreference",
    "name" => "Mitä kieltä suosit (suomi, ruotsi, englanti)?",
    "type" => "text",
    "required" => true,
  ],
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
  [
    "id" => "allegies",
    "name" => "Terveydelle vaaralliset allergiat, joista järjestäjien on syytä tietää",
    "type" => "textarea",
    "required" => false,
  ],
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
  [
    "id" => "info",
    "name" => "Muut asiat, jotka haluaisit meidän tietävän",
    "type" => "textarea",
    "required" => true,
  ],
  [
    "id" => "consenttosave",
    "name" => "Suostutko siihen että henkilötietosi tallennetaan rakastajien killan osallistujarekisteriin",
    "type" => "checkbox",
    "required" => true,
  ]
];
