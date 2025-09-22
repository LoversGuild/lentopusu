<?php

const SecretPassword = "porkkana";
const GPG_RECIPIENTS = [
  'E07F1F8EFF651D5D',
  '7B1B94F61F748759',
];

$event_dates = translate([
  'fi' => '7.4.-8.4.2018',
  'en' => '7th-8th Apr 2018'
]);

$invitation_letter_url = translate([
  'fi' => "https://kutsu.rakastajienkilta.fi/orgiat/{$event_id}/",
  'en' => "https://invitation.loversguild.org/gentle-orgies/{$event_id}/"
]);

$formTitle = [
  'fi' => "Ilmoittaudu Lempeisiin orgioihin {$event_dates}",
  'en' => 'Sign up for Gentle orgy on {$event_dates}'
];

$intro = [
'fi' => <<<END
<p>Tämä on {$event_dates} Lempeiden orgioiden ilmoittautumislomake, tervetuloa!
Lue
<a href="{$invitation_letter_url}">kutsukirje</a>
perusteellisesti ennen ilmoittautumista.
Lue myös lomakkeen ohjeet huolella kenttiä täyttäessäsi.
</p>
<p>Jos suljet lomakkeen keskeneräisenä, syöttämäsi tiedot katoavat.
Saat halutessasi sähköpostitse vahvistuksen tietojesi tallentumisesta lomakkeen lähettämisen jälkeen.
Jos haluat korjata tietojasi lomakkeen lähettämisen jälkeen, voit täyttää lomakkeen uudelleen.
</p>
END,
'en' => <<<END
<p>This is the registration form for the Gentle Orgy on {$event_dates}, welcome!
Please read
<a href="{$invitation_letter_url}">the invitation letter</a>
thoroughly before signing up.
Also read the instructions carefully as you fill out the fields.
</p>
<p>If you close the form before completing it, your information will be lost.
Optionally, you can receive a confirmation of your information being saved by email after submitting the form.
If you wish to correct your information after submitting the form, you can fill out the form again.
</p>
END
];

$interest_choices = [
  "<3" => ['fi' => "Erittäin halukas!", 'en' => "Very eager!"],
  ":*" => ['fi' => "Jokseenkin kiinnostunut", 'en' => "Somewhat interested"],
  ":)" => ['fi' => "Olen kokematon, mutta utelias", 'en' => "I'm inexperienced, yet curious"],
  ":/" => ['fi' => "Olen hyvin valikoiva", 'en' => "I'm very selective"],
  ":|" => ['fi' => "En lainkaan", 'en' => "Not at all"],
];

$fields = [
  [ "subtitle" => ['fi' => "Henkilötiedot", 'en' => "Identification information"] ],
  [
    "id" => "first_name",
    "name" => ['fi' => "Kutsumanimesi", 'en' => "Your given name"],
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "last_name",
    "name" => ['fi' => "Sukunimesi", 'en' => "Your surname"],
    "type" => "text",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "info" => [
      'fi' => "Pyydämme nimeäsi avoimuuden hengessä. Järjestämme orgiat avoimesti omilla nimillämme ja uskomme tämän luottamuksen olevan tärkeä osa orgioita.",
      'en' => "We request your name in the spirit of transparency. We organize orgies with our real names and believe that trust plays a key part in the orgies."
    ]
  ],
  [
    "id" => "email",
    "name" => ['fi' => "Sähköpostiosoitteesi", 'en' => "Your email address"],
    "type" => "email",
    "required" => true,
  ],
  [
    "id" => "phone_number",
    "name" => ['fi' => "Puhelinnumerosi", 'en' => "Your phone number"],
    "info" => [
      'fi' => "Otamme sinuun yhteyttä puhelimitse tai tekstiviestitse vain kiireellisissä asioissa, kuten tarjotaksemme peruutuspaikkaa.",
      'en' => "We will contact you by phone or SMS only for urgent matters—such as to offer a cancellation spot"
    ],
    "type" => "text",
    "required" => false,
    "class" => "half-width",
  ],
  [
    "id" => "birth_year",
    "name" => ['fi' => "Syntymävuotesi", 'en' => "Year of your birth"],
    "info" => [
      'fi' => <<<END
        Käytämme tätä tietoa osallistujia valitessamme lisätäksemme sopivien leikkitovereiden löytymisen todennäköisyyttä.
        Lisäksi kerromme ryhmän ikäjakauman kaikille osallistujille ennen orgioita.
END,
      'en' => <<<END
        We use this information in choosing participants to further increase the chances of finding suitable playmates.
        In addition, we tell the group’s age range too all participants before the orgy.
END
    ],
    "type" => "number",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "language_preference",
    "name" => ['fi' => "Mitä kieltä suosit?", 'en' => "Which language do you prefer?"],
    "type" => "radio",
    "choices" => [
      "fi" => ['fi' => "suomi", 'en' => "Finnish"],
      // "sv" => ['fi' => "ruotsi", 'en' => "Swedish"],
      "en" => ['fi' => "englanti", 'en' => "English"]
    ],
    "required" => true,
  ],
  [
    "id" => "allergies",
    "name" => [
      'fi' => "Allergiasi, joista järjestäjien on syytä tietää",
      'en' => "Your allergies of which the organizers should be aware"
    ],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "genitalia",
    "name" => [
      'fi' => "Mitkä sukuelimet sinulla on?",
      'en' => "What type of genitalia do you have?"
    ],
    "info" => [
      'fi' => "Hyödynnämme tätä tietoa mahdollisimman tasapainoisen osallistujaryhmän kokoamisessa.",
      'en' => "We use this information to build as balanced group as possible."
    ],
    "type" => "radio",
    "choices" => [
      "female" => ['fi' => "Vulva ja vagina", 'en' => "Vulva and vagina"],
      "male" => ['fi' => "Penis", 'en' => "Penis"],
      "other" => ['fi' => "Intersukupuoliset/muut sukuelimet", 'en' => "Intersex/Other genitalia"]
    ],
    "required" => true,
  ],
  [ "subtitle" => ['fi' => "Seksuaaliset mieltymyksesi", 'en' => "Your sexual preferences"] ],
  [
    "info" => [
      'fi' => <<<END
        Haluaisimme tietää onko rakastelukumppanien sukuelinten tyypillä sinulle merkitystä.
        Tarkoitamme tässä yhteydessä rakastelulla leikkejä, joissa molemmin puolin kosketetaan hyvin intiimisti toisen sukuelimiä, kuten yhdyntää ja suuseksiä.
        Käytämme tätä tietoa osallistujia valitessamme lisätäksemme sopivien leikkitovereiden löytymisen todennäköisyyttä.
END,
      'en' => <<<END
        We would like to know if the type of your lovemaking partners’ genitalia matters to you.
        In this context lovemaking refers to a play where all parties touch each other’s genitals very intimately, such as intercourse and oral sex.
        We use this information in choosing participants to further increase the chances of finding suitable playmates.
END
    ]
  ],
  [
    "id" => "interest_in_females",
    "name" => [
      'fi' => "Kuinka halukas olet rakastelemaan sellaisten kumppanien kanssa, joilla on naaraan sukuelimet (vulva ja vagina)?",
      'en' => "How eager are you to make love with partners who have female genitalia (vulva and vagina)?"
    ],
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "id" => "interest_in_males",
    "name" => [
      'fi' => "Kuinka halukas olet rakastelemaan sellaisten kumppanien kanssa, joilla on uroksen sukuelimet (penis)?",
      'en' => "How eager are you to make love with partners who have male genitalia (penis)?"
    ],
    "type" => "radio",
    "choices" => $interest_choices,
    "required" => true,
  ],
  [
    "info" => [
      'fi' => "Minkä ikäisistä ihmisistä olet yleensä kiinnostunut?",
      'en' => "What age range of people are you generally interested in?"
    ]
  ],
  [
    "id" => "age_min",
    "name" => [
      'fi' => "Vähimmäisikä",
      'en' => "Minimum age"
    ],
    "type" => "number",
    "required" => true,
    "class" => "half-width",
  ],
  [
    "id" => "age_max",
    "name" => [
      'fi' => "Enimmäisikä",
      'en' => "Maximum age"
    ],
    "type" => "number",
    "required" => true,
    "class" => "half-width",
  ],
  [ "subtitle" => [ 'fi' => "Henkilötoiveet", 'en' => "Preferences regarding individuals"]],
  [
    "id" => "avecs",
    "name" => ['fi' => "Mahdollisten avecciesi nimet", 'en' => "Names of your avecs, if you have them"],
    "info" => [
      "fi" => "Lue huolella ohjeet aveccien kutsumisesta kutsukirjeestä!",
      "en" => "Please read carefully instructions on inviting avecs from the invitation letter!"
    ],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "non_gratas",
    "name" => [
      'fi' => "Niiden henkilöiden nimet, joiden kanssa et koe voivasi osallistua orgioihin",
      'en' => "The names of those individuals with whom you feel you cannot attend the orgy"
    ],
    "info" => [
      'fi' => "Mikäli joku näistä henkilöistä valitaan osallistujaksi, emme joko valitse sinua osallistujaksi lainkaan tai ilmoitamme sinulle, että joku mainitsemistasi henkilöistä on osallistumassa. Emme kuitenkaan kerro sitä, kuka mainitsemistasi henkilöistä on osallistumassa.",
      'en' => "If any of the individuals you list are selected as participants, we will either not select you as a participant at all or notify you that someone you mentioned will be attending. However, we will not disclose which individual from your list is participating."
    ],
    "type" => "textarea",
    "required" => false,
  ],
  [ "subtitle" => [ "fi" => "Muut tiedot", "en" => "Miscellaneous information" ]],
  [
    "id" => "staying_overnight",
    "name" => [
      'fi' => "Oletko jäämässä yöksi?",
      'en' => "Will you stay overnight?"
    ],
    "type" => "radio",
    "choices" => [
      "yes" => ["fi" => "Jään varmasti!", "en" => "Yes, for sure!" ],
      "probably_yes" => ["fi" => "Jään luultavasti", "en" => "Yes, probably" ],
      "probably_not" => ["fi" => "Luultavasti en", "en" => "Probably not" ],
      "no" => ["fi" => "Ei kiitos", "en" => "No thank you" ]
    ],
    "info" => [
      'fi' => "Varaamme nukkumapaikkoja ja aamupalatarpeita sen mukaan, kuinka moni niitä tarvitsee.",
      'en' => "We will reserve sleeping spots and breakfast supplies based on how many people need them."
    ],
    "required" => true,
  ],
  [
    "id" => "info",
    "name" => [
      'fi' => "Muut asiat, jotka haluaisit meidän tietävän",
      'en' => "Anything else you want us to know"
    ],
    "type" => "textarea",
    "required" => false,
  ],
  [
    "id" => "magic_word",
    "name" => [
      'fi' => "Kirjoita tähän taikasana, jonka löysit kutsusta",
      'en' => "Type here the magic word which you found from the invitation"
    ],
    "type" => "riddle",
    "required" => true,
    "answer" => SecretPassword,
    "errormessage" => [
      'fi' => "Taikasana ei täsmää!", 'en' => "Incorrect magic word!"
    ],
  ],
  [
    "id" => "consent",
    "name" => [
      'fi' => "Suostumus henkilötietojesi tallentamiseen ja käsittelyyn",
      'en' => "Consent to the storage and processing of your personal data"
    ],
    "checkboxlabel" => [
      'fi' => "Olen lukenut ja hyväksyn tietojeni käsittelyn tietosuojaselosteen mukaisesti.",
      'en' => "I have read and I accept processing my personal information according to the Privacy Policy."
    ],
    "info" => [
      "fi" => <<<END
        <p>Henkilötietosi tallennetaan Rakastajien killan osallistujarekisteriin ja niitä käsitellään
          <a href='https://rakastajienkilta.fi/vastuullisuus/tietosuoja/osallistujarekisteri/'>Tietosuojaselosteemme</a>
          mukaisesti.</p>
        <p>Osa pyytämistämme tiedoista luokitellaan Suomen lainsäädännössä arkaluontoisiksi.
          Sinun tulee antaa suostumus sinua koskevan arkaluontoisen tiedon käsittelyyn ja tallentamiseen.</p>
END,
      "en" => <<<END
        <p>Your personal data will be stored in the Lovers’ Guild’s participant registry and processed in accordance with our
          <a href='https://rakastajienkilta.fi/vastuullisuus/tietosuoja/osallistujarekisteri/'>Privacy Policy</a>
          (unfortunately available in Finnish only, use translator).</p>
        <p>Some of the information we request is classified as sensitive under the Finnish law.
          You must provide consent for the processing and storage of sensitive information about yourself.</p>
END
    ],
    "type" => "checkbox",
    "required" => true,
  ]
];
