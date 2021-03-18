<?php

return [

    'whoops'              => 'Hoppala!',
    'hello'               => 'Hallo!',
    'salutation'          => 'Mit freundlichen Grüßen,<br> :company_name',
    'subcopy'             => 'Wenn Sie Probleme damit haben den „:text“ Button zu drücken, kopieren Sie bitte die nachfolgende URL in Ihren Webbrowser. [:url](:url)',

    'update' => [

        'mail' => [

            'subject' => '⚠️ Aktualisierung fehlgeschlagen auf :domain',
            'message' => 'Die Aktualisierung von :alias von :current_version auf :new_version ist im <strong>:step</strong> Schritt mit der folgenden Nachricht fehlgeschlagen: :error_message',

        ],

        'slack' => [

            'message' => '⚠️ Aktualisierung fehlgeschlagen auf :domain',

        ],

    ],

];
