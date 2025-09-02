<?php
const OutputFile = "form_data.json";
const SecretPassword = "porkkana";

$formTitle = "Ilmoittaudu";
$intro = <<<END
<p>Lorem ipsum. Tervetuloa ja niin edelleen. Täytä kentät</p>
END;

$interest_choices = [
  "Kyllä kiitos!",
  "Riippuu ihmisestä",
  "Ehkä",
  "Ei kiitos",
];

$fields = [
  [ "subtitle" => "Henkilötiedot" ],
  [
    "id" => "givenname",
    "name" => "Kutsumanimesi",
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
    "info" => "Pyydämme nimeäsi avoimuuden hengessä. Me järjestämme juhlat avoimesti omilla nimillämme ja uskomme tämän luottamuksen olevan tärkeä osa orgioita."
  ],
  [
    "id" => "phone",
    "name" => "Puhelinnumero",
    "info" => "Soitamme sinulle vain tiedottaaksemme äkillisistä muutoksista.",
    "type" => "text",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "birthyear",
    "name" => "Syntymävuotesi",
    "info" => "Käytämme tätä tietoa osallistujien ikäjakauman selvittämiseen.",
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "languagepreference",
    "name" => "Mitä kieltä suosit?",
    "type" => "radio",
    "choices" => ["suomi", "ruotsi", "englanti"],
    "required" => true,
  ],
  [
    "id" => "allegies",
    "name" => "Terveydelle vaaralliset allergiat, joista järjestäjien on syytä tietää",
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "sexorgans",
    "name" => "Millaiset sukuelimet sinulla on?",
    "info" => "Yhdessä kiinnostustesi kanssa hyödynnämme tätä tietoa mahdollisimman tasapainoisen osallistujaryhmän kokoamisessa.",
    "type" => "radio",
    "choices" => ["naaras", "uros", "muu"],
    "required" => true,
  ],
  [ "subtitle" => "Kiinnostukset" ],
  [
    "info" => "Jos rakastelukumppanien sukupuolielinten tyypillä on sinulle jotakin merkitystä, kerro siitä meille."
  ],
  [
    "id" => "interest-in-females",
    "name" => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on naaraan sukuelimet?",
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "id" => "interest-in-males",
    "name" => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on uroksen sukuelimet?",
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "info" => "Minkä ikäisistä olet kiinnostunut?"
  ],
  [
    "id" => "min-age",
    "name" => "Vähimmäisikä",
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "max-age",
    "name" => "Enimmäisikä",
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [ "subtitle" => "Avecit ja epätoivotut henkilöt" ],
  [
    "id" => "avecs",
    "name" => "Mahdollisten avecciesi nimet ja sähköpostiosoitteet",
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "nongratas",
    "name" => "Niiden henkilöiden nimet, joiden kanssa et koe voivasi osallistua orgioihin ja joiden uskot voivan osallistua näihin juhliin",
    "info" => "Kerromme sinulle onko joku heistä ilmoittautunut mukaan, mutta emme tietenkään kerro kuka tai ketkä. Voit sitten perua oman osallistumisesi, jos niin tahdot. Tämä on toinen syy nimienne kysymiselle.",
    "type" => "textarea",
    "required" => false,
  ],
  [ "subtitle" => "Muuta" ],
  [
    "id" => "info",
    "name" => "Muut asiat, jotka haluaisit meidän tietävän",
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "staysfornight",
    "name" => "Oletko jäämässä yöksi?",
    "type" => "radio",
    "choices" => ["Kyllä!", "En", "En tiedä vielä"],
    "info" => "Varaamme aamupalatarpeita sen mukaan, kuinka moni on syömässä.",
    "required" => true,
  ],
  [
    "id" => "codeword",
    "name" => "Kirjoita tähän koodisana ".SecretPassword,
    "type" => "riddle",
    "required" => true,
    "answer" => SecretPassword,
    "errormessage" => SecretPassword . "! Ei selleri!",
  ],
  [
    "id" => "consenttosave",
    "name" => "Suostutko siihen että henkilötietosi tallennetaan rakastajien killan osallistujarekisteriin",
    "checkboxlabel" => "Kyllä",
    "type" => "checkbox",
    "required" => true,
  ]
];
