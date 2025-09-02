<?php
const OutputFile = "data/form_data.json";
const SecretPassword = "porkkana";

$formTitle = ['fi' => "Ilmoittaudu", 'en' => 'Sign up'];
$intro = [
'fi' => <<<END
<p>Lorem ipsum. Tervetuloa ja niin edelleen. Täytä kentät</p>
END,
'en' => <<<END
<p>Lorem ipsum. Tervetuloa ja niin edelleen. Täytä kentät</p>
END
];

$interest_choices = [
  ['fi' => "Kyllä kiitos!", 'en' => "Kyllä kiitos!"],
  ['fi' => "Riippuu ihmisestä", 'en' => "Riippuu ihmisestä"],
  ['fi' => "Ehkä", 'en' => "Ehkä"],
  ['fi' => "Ei kiitos", 'en' => "Ei kiitos"],
];

$fields = [
  [ "subtitle" => ['fi' => "Henkilötiedot", 'en' => "Henkilötiedot"] ],
  [
    "id" => "givenname",
    "name" => ['fi' => "Kutsumanimesi", 'en' => "Kutsumanimesi"],
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "surname",
    "name" => ['fi' => "Sukunimi", 'en' => "Sukunimi"],
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "info" => ['fi' => "Pyydämme nimeäsi avoimuuden hengessä. Me järjestämme juhlat avoimesti omilla nimillämme ja uskomme tämän luottamuksen olevan tärkeä osa orgioita.", 'en' => "Pyydämme nimeäsi avoimuuden hengessä. Me järjestämme juhlat avoimesti omilla nimillämme ja uskomme tämän luottamuksen olevan tärkeä osa orgioita."]
  ],
  [
    "id" => "email",
    "name" => ['fi' => "Sähköpostiosoitteesi", 'en' => "Email"],
    "type" => "email",
    "required" => false,
  ],
  [
    "id" => "phone",
    "name" => ['fi' => "Puhelinnumero", 'en' => "Puhelinnumero"],
    "info" => ['fi' => "Soitamme sinulle vain tiedottaaksemme äkillisistä muutoksista.", 'en' => "Soitamme sinulle vain tiedottaaksemme äkillisistä muutoksista."],
    "type" => "text",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "birthyear",
    "name" => ['fi' => "Syntymävuotesi", 'en' => "Syntymävuotesi"],
    "info" => ['fi' => "Käytämme tätä tietoa osallistujien ikäjakauman selvittämiseen.", 'en' => "Käytämme tätä tietoa osallistujien ikäjakauman selvittämiseen."],
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "languagepreference",
    "name" => ['fi' => "Mitä kieltä suosit?", 'en' => "Mitä kieltä suosit?"],
    "type" => "radio",
    "choices" => [
      ['fi' => "suomi", 'en' => "suomi"],
      ['fi' => "ruotsi", 'en' => "ruotsi"],
      ['fi' => "englanti", 'en' => "englanti"]
    ],
    "required" => true,
  ],
  [
    "id" => "allegies",
    "name" => ['fi' => "Terveydelle vaaralliset allergiat, joista järjestäjien on syytä tietää", 'en' => "Terveydelle vaaralliset allergiat, joista järjestäjien on syytä tietää"],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "sexorgans",
    "name" => ['fi' => "Millaiset sukuelimet sinulla on?", 'en' => "Millaiset sukuelimet sinulla on?"],
    "info" => ['fi' => "Yhdessä kiinnostustesi kanssa hyödynnämme tätä tietoa mahdollisimman tasapainoisen osallistujaryhmän kokoamisessa.", 'en' => "Yhdessä kiinnostustesi kanssa hyödynnämme tätä tietoa mahdollisimman tasapainoisen osallistujaryhmän kokoamisessa."],
    "type" => "radio",
    "choices" => [
      ['fi' => "naaras", 'en' => "naaras"],
      ['fi' => "uros", 'en' => "uros"],
      ['fi' => "muu", 'en' => "muu"]
    ],
    "required" => true,
  ],
  [ "subtitle" => ['fi' => "Kiinnostukset", 'en' => "Kiinnostukset"] ],
  [
    "info" => ['fi' => "Jos rakastelukumppanien sukupuolielinten tyypillä on sinulle jotakin merkitystä, kerro siitä meille.", 'en' => "Jos rakastelukumppanien sukupuolielinten tyypillä on sinulle jotakin merkitystä, kerro siitä meille."]
  ],
  [
    "id" => "interest-in-females",
    "name" => ['fi' => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on naaraan sukuelimet?", 'en' => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on naaraan sukuelimet?"],
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "id" => "interest-in-males",
    "name" => ['fi' => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on uroksen sukuelimet?", 'en' => "Kuinka kiinnostunut olet lempimään sellaisten ihmisten kanssa, joilla on uroksen sukuelimet?"],
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "info" => ['fi' => "Minkä ikäisistä olet kiinnostunut?", 'en' => "Minkä ikäisistä olet kiinnostunut?"]
  ],
  [
    "id" => "min-age",
    "name" => ['fi' => "Vähimmäisikä", 'en' => "Vähimmäisikä"],
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "max-age",
    "name" => ['fi' => "Enimmäisikä", 'en' => "Enimmäisikä"],
    "type" => "number",
    "required" => false,
    "class" => "half-width",
  ],
  [ "subtitle" => ['fi' => "Avecit ja epätoivotut henkilöt", 'en' => "Avecit ja epätoivotut henkilöt"] ],
  [
    "id" => "avecs",
    "name" => ['fi' => "Mahdollisten avecciesi nimet ja sähköpostiosoitteet", 'en' => "Mahdollisten avecciesi nimet ja sähköpostiosoitteet"],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "nongratas",
    "name" => ['fi' => "Niiden henkilöiden nimet, joiden kanssa et koe voivasi osallistua orgioihin ja joiden uskot voivan osallistua näihin juhliin", 'en' => "Niiden henkilöiden nimet, joiden kanssa et koe voivasi osallistua orgioihin ja joiden uskot voivan osallistua näihin juhliin"],
    "info" => ['fi' => "Kerromme sinulle onko joku heistä ilmoittautunut mukaan, mutta emme tietenkään kerro kuka tai ketkä. Voit sitten perua oman osallistumisesi, jos niin tahdot. Tämä on toinen syy nimienne kysymiselle.", 'en' => "Kerromme sinulle onko joku heistä ilmoittautunut mukaan, mutta emme tietenkään kerro kuka tai ketkä. Voit sitten perua oman osallistumisesi, jos niin tahdot. Tämä on toinen syy nimienne kysymiselle."],
    "type" => "textarea",
    "required" => false,
  ],
  [ "subtitle" => "Muuta" ],
  [
    "id" => "info",
    "name" => ['fi' => "Muut asiat, jotka haluaisit meidän tietävän", 'en' => "Muut asiat, jotka haluaisit meidän tietävän"],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "staysfornight",
    "name" => ['fi' => "Oletko jäämässä yöksi?", 'en' => "Oletko jäämässä yöksi?"],
    "type" => "radio",
    "choices" => ["Kyllä!", "En", "En tiedä vielä"],
    "info" => ['fi' => "Varaamme aamupalatarpeita sen mukaan, kuinka moni on syömässä.", 'en' => "Varaamme aamupalatarpeita sen mukaan, kuinka moni on syömässä."],
    "required" => true,
  ],
  [
    "id" => "codeword",
    "name" => ['fi' => "Kirjoita tähän koodisana ".SecretPassword, 'en' => "Kirjoita tähän koodisana ".SecretPassword],
    "type" => "riddle",
    "required" => true,
    "answer" => SecretPassword,
    "errormessage" => ['fi' => SecretPassword . "! Ei selleri!", 'en' => '??'],
  ],
  [
    "id" => "consenttosave",
    "name" => ['fi' => "Suostutko siihen että henkilötietosi tallennetaan rakastajien killan osallistujarekisteriin", 'en' => "Suostutko siihen että henkilötietosi tallennetaan rakastajien killan osallistujarekisteriin"],
    "checkboxlabel" => ['fi' => "Kyllä", 'en' => "Kyllä"],
    "type" => "checkbox",
    "required" => true,
  ]
];
