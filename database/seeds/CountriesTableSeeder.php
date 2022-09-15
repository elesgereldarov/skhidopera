<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $countriesEn = [
        'AF' => 'Afghanistan',
        'AX' => 'Åland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua & Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AC' => 'Ascension Island',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia',
        'BA' => 'Bosnia & Herzegovina',
        'BW' => 'Botswana',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory',
        'VG' => 'British Virgin Islands',
        'BN' => 'Brunei',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'IC' => 'Canary Islands',
        'CV' => 'Cape Verde',
        'BQ' => 'Caribbean Netherlands',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'EA' => 'Ceuta & Melilla',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros',
        'CG' => 'Congo - Brazzaville',
        'CD' => 'Congo - Kinshasa',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CI' => 'Côte d’Ivoire',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CW' => 'Curaçao',
        'CY' => 'Cyprus',
        'CZ' => 'Czechia',
        'DK' => 'Denmark',
        'DG' => 'Diego Garcia',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'EZ' => 'Eurozone',
        'FK' => 'Falkland Islands',
        'FO' => 'Faroe Islands',
        'FJ' => 'Fiji',
        'FI' => 'Finland',
        'FR' => 'France',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong SAR China',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'XK' => 'Kosovo',
        'KW' => 'Kuwait',
        'KG' => 'Kyrgyzstan',
        'LA' => 'Laos',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macau SAR China',
        'MK' => 'Macedonia',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia',
        'MD' => 'Moldova',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar (Burma)',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'NL' => 'Netherlands',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'KP' => 'North Korea',
        'MP' => 'Northern Mariana Islands',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PW' => 'Palau',
        'PS' => 'Palestinian Territories',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn Islands',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RU' => 'Russia',
        'RW' => 'Rwanda',
        'WS' => 'Samoa',
        'SM' => 'San Marino',
        'ST' => 'São Tomé & Príncipe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SX' => 'Sint Maarten',
        'SK' => 'Slovakia',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia & South Sandwich Islands',
        'KR' => 'South Korea',
        'SS' => 'South Sudan',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'BL' => 'St. Barthélemy',
        'SH' => 'St. Helena',
        'KN' => 'St. Kitts & Nevis',
        'LC' => 'St. Lucia',
        'MF' => 'St. Martin',
        'PM' => 'St. Pierre & Miquelon',
        'VC' => 'St. Vincent & Grenadines',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard & Jan Mayen',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland',
        'SY' => 'Syria',
        'TW' => 'Taiwan',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad & Tobago',
        'TA' => 'Tristan da Cunha',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks & Caicos Islands',
        'TV' => 'Tuvalu',
        'UM' => 'U.S. Outlying Islands',
        'VI' => 'U.S. Virgin Islands',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom',
        'UN' => 'United Nations',
        'US' => 'United States',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VA' => 'Vatican City',
        'VE' => 'Venezuela',
        'VN' => 'Vietnam',
        'WF' => 'Wallis & Futuna',
        'EH' => 'Western Sahara',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe'
      ];

      $countriesRu = [
        'AU' => 'Австралия',
        'AT' => 'Австрия',
        'AZ' => 'Азербайджан',
        'AX' => 'Аландские о-ва',
        'AL' => 'Албания',
        'DZ' => 'Алжир',
        'AS' => 'Американское Самоа',
        'AI' => 'Ангилья',
        'AO' => 'Ангола',
        'AD' => 'Андорра',
        'AQ' => 'Антарктида',
        'AG' => 'Антигуа и Барбуда',
        'AR' => 'Аргентина',
        'AM' => 'Армения',
        'AW' => 'Аруба',
        'AF' => 'Афганистан',
        'BS' => 'Багамы',
        'BD' => 'Бангладеш',
        'BB' => 'Барбадос',
        'BH' => 'Бахрейн',
        'BY' => 'Беларусь',
        'BZ' => 'Белиз',
        'BE' => 'Бельгия',
        'BJ' => 'Бенин',
        'BM' => 'Бермуды',
        'BG' => 'Болгария',
        'BO' => 'Боливия',
        'BQ' => 'Бонэйр, Синт-Эстатиус и Саба',
        'BA' => 'Босния и Герцеговина',
        'BW' => 'Ботсвана',
        'BR' => 'Бразилия',
        'IO' => 'Британская территория в Индийском океане',
        'BN' => 'Бруней-Даруссалам',
        'BF' => 'Буркина-Фасо',
        'BI' => 'Бурунди',
        'BT' => 'Бутан',
        'VU' => 'Вануату',
        'VA' => 'Ватикан',
        'GB' => 'Великобритания',
        'HU' => 'Венгрия',
        'VE' => 'Венесуэла',
        'VG' => 'Виргинские о-ва (Британские)',
        'VI' => 'Виргинские о-ва (США)',
        'UM' => 'Внешние малые о-ва (США)',
        'TL' => 'Восточный Тимор',
        'VN' => 'Вьетнам',
        'GA' => 'Габон',
        'HT' => 'Гаити',
        'GY' => 'Гайана',
        'GM' => 'Гамбия',
        'GH' => 'Гана',
        'GP' => 'Гваделупа',
        'GT' => 'Гватемала',
        'GN' => 'Гвинея',
        'GW' => 'Гвинея-Бисау',
        'DE' => 'Германия',
        'GG' => 'Гернси',
        'GI' => 'Гибралтар',
        'HN' => 'Гондурас',
        'HK' => 'Гонконг (специальный административный район)',
        'GD' => 'Гренада',
        'GL' => 'Гренландия',
        'GR' => 'Греция',
        'GE' => 'Грузия',
        'GU' => 'Гуам',
        'DK' => 'Дания',
        'JE' => 'Джерси',
        'DJ' => 'Джибути',
        'DG' => 'Диего-Гарсия',
        'DM' => 'Доминика',
        'DO' => 'Доминиканская Республика',
        'EG' => 'Египет',
        'ZM' => 'Замбия',
        'EH' => 'Западная Сахара',
        'ZW' => 'Зимбабве',
        'IL' => 'Израиль',
        'IN' => 'Индия',
        'ID' => 'Индонезия',
        'JO' => 'Иордания',
        'IQ' => 'Ирак',
        'IR' => 'Иран',
        'IE' => 'Ирландия',
        'IS' => 'Исландия',
        'ES' => 'Испания',
        'IT' => 'Италия',
        'YE' => 'Йемен',
        'CV' => 'Кабо-Верде',
        'KZ' => 'Казахстан',
        'KY' => 'Каймановы о-ва',
        'KH' => 'Камбоджа',
        'CM' => 'Камерун',
        'CA' => 'Канада',
        'IC' => 'Канарские о-ва',
        'QA' => 'Катар',
        'KE' => 'Кения',
        'CY' => 'Кипр',
        'KG' => 'Киргизия',
        'KI' => 'Кирибати',
        'CN' => 'Китай',
        'KP' => 'КНДР',
        'CC' => 'Кокосовые о-ва',
        'CO' => 'Колумбия',
        'KM' => 'Коморы',
        'CG' => 'Конго - Браззавиль',
        'CD' => 'Конго - Киншаса',
        'XK' => 'Косово',
        'CR' => 'Коста-Рика',
        'CI' => 'Кот-д’Ивуар',
        'CU' => 'Куба',
        'KW' => 'Кувейт',
        'CW' => 'Кюрасао',
        'LA' => 'Лаос',
        'LV' => 'Латвия',
        'LS' => 'Лесото',
        'LR' => 'Либерия',
        'LB' => 'Ливан',
        'LY' => 'Ливия',
        'LT' => 'Литва',
        'LI' => 'Лихтенштейн',
        'LU' => 'Люксембург',
        'MU' => 'Маврикий',
        'MR' => 'Мавритания',
        'MG' => 'Мадагаскар',
        'YT' => 'Майотта',
        'MO' => 'Макао (специальный административный район)',
        'MK' => 'Македония',
        'MW' => 'Малави',
        'MY' => 'Малайзия',
        'ML' => 'Мали',
        'MV' => 'Мальдивы',
        'MT' => 'Мальта',
        'MA' => 'Марокко',
        'MQ' => 'Мартиника',
        'MH' => 'Маршалловы Острова',
        'MX' => 'Мексика',
        'MZ' => 'Мозамбик',
        'MD' => 'Молдова',
        'MC' => 'Монако',
        'MN' => 'Монголия',
        'MS' => 'Монтсеррат',
        'MM' => 'Мьянма (Бирма)',
        'NA' => 'Намибия',
        'NR' => 'Науру',
        'NP' => 'Непал',
        'NE' => 'Нигер',
        'NG' => 'Нигерия',
        'NL' => 'Нидерланды',
        'NI' => 'Никарагуа',
        'NU' => 'Ниуэ',
        'NZ' => 'Новая Зеландия',
        'NC' => 'Новая Каледония',
        'NO' => 'Норвегия',
        'AC' => 'о-в Вознесения',
        'IM' => 'о-в Мэн',
        'NF' => 'о-в Норфолк',
        'CX' => 'о-в Рождества',
        'SH' => 'о-в Св. Елены',
        'TC' => 'о-ва Тёркс и Кайкос',
        'AE' => 'ОАЭ',
        'OM' => 'Оман',
        'UN' => 'Организация Объединенных Наций',
        'CK' => 'Острова Кука',
        'PN' => 'острова Питкэрн',
        'PK' => 'Пакистан',
        'PW' => 'Палау',
        'PS' => 'Палестинские территории',
        'PA' => 'Панама',
        'PG' => 'Папуа – Новая Гвинея',
        'PY' => 'Парагвай',
        'PE' => 'Перу',
        'PL' => 'Польша',
        'PT' => 'Португалия',
        'PR' => 'Пуэрто-Рико',
        'KR' => 'Республика Корея',
        'RE' => 'Реюньон',
        'RU' => 'Россия',
        'RW' => 'Руанда',
        'RO' => 'Румыния',
        'SV' => 'Сальвадор',
        'WS' => 'Самоа',
        'SM' => 'Сан-Марино',
        'ST' => 'Сан-Томе и Принсипи',
        'SA' => 'Саудовская Аравия',
        'SZ' => 'Свазиленд',
        'MP' => 'Северные Марианские о-ва',
        'SC' => 'Сейшельские Острова',
        'BL' => 'Сен-Бартелеми',
        'MF' => 'Сен-Мартен',
        'PM' => 'Сен-Пьер и Микелон',
        'SN' => 'Сенегал',
        'VC' => 'Сент-Винсент и Гренадины',
        'KN' => 'Сент-Китс и Невис',
        'LC' => 'Сент-Люсия',
        'RS' => 'Сербия',
        'EA' => 'Сеута и Мелилья',
        'SG' => 'Сингапур',
        'SX' => 'Синт-Мартен',
        'SY' => 'Сирия',
        'SK' => 'Словакия',
        'SI' => 'Словения',
        'US' => 'Соединенные Штаты',
        'SB' => 'Соломоновы Острова',
        'SO' => 'Сомали',
        'SD' => 'Судан',
        'SR' => 'Суринам',
        'SL' => 'Сьерра-Леоне',
        'TJ' => 'Таджикистан',
        'TH' => 'Таиланд',
        'TW' => 'Тайвань',
        'TZ' => 'Танзания',
        'TG' => 'Того',
        'TK' => 'Токелау',
        'TO' => 'Тонга',
        'TT' => 'Тринидад и Тобаго',
        'TA' => 'Тристан-да-Кунья',
        'TV' => 'Тувалу',
        'TN' => 'Тунис',
        'TM' => 'Туркменистан',
        'TR' => 'Турция',
        'UG' => 'Уганда',
        'UZ' => 'Узбекистан',
        'UA' => 'Украина',
        'WF' => 'Уоллис и Футуна',
        'UY' => 'Уругвай',
        'FO' => 'Фарерские о-ва',
        'FM' => 'Федеративные Штаты Микронезии',
        'FJ' => 'Фиджи',
        'PH' => 'Филиппины',
        'FI' => 'Финляндия',
        'FK' => 'Фолклендские о-ва',
        'FR' => 'Франция',
        'GF' => 'Французская Гвиана',
        'PF' => 'Французская Полинезия',
        'TF' => 'Французские Южные территории',
        'HR' => 'Хорватия',
        'CF' => 'ЦАР',
        'TD' => 'Чад',
        'ME' => 'Черногория',
        'CZ' => 'Чехия',
        'CL' => 'Чили',
        'CH' => 'Швейцария',
        'SE' => 'Швеция',
        'SJ' => 'Шпицберген и Ян-Майен',
        'LK' => 'Шри-Ланка',
        'EC' => 'Эквадор',
        'GQ' => 'Экваториальная Гвинея',
        'ER' => 'Эритрея',
        'EE' => 'Эстония',
        'ET' => 'Эфиопия',
        'ZA' => 'ЮАР',
        'GS' => 'Южная Георгия и Южные Сандвичевы о-ва',
        'SS' => 'Южный Судан',
        'JM' => 'Ямайка',
        'JP' => 'Япония',
        'EZ' => 'Eurozone'
      ];

      $countriesUa = [
        'AU' => 'Австралія',
        'AT' => 'Австрія',
        'AZ' => 'Азербайджан',
        'AX' => 'Аландські острови',
        'AL' => 'Албанія',
        'DZ' => 'Алжир',
        'AS' => 'Американське Самоа',
        'AI' => 'Ангілья',
        'AO' => 'Ангола',
        'AD' => 'Андорра',
        'AQ' => 'Антарктика',
        'AG' => 'Антигуа і Барбуда',
        'AR' => 'Аргентина',
        'AW' => 'Аруба',
        'AF' => 'Афганістан',
        'BS' => 'Багамські Острови',
        'BD' => 'Бангладеш',
        'BB' => 'Барбадос',
        'BH' => 'Бахрейн',
        'BZ' => 'Беліз',
        'BE' => 'Бельгія',
        'BJ' => 'Бенін',
        'BM' => 'Бермудські острови',
        'BY' => 'Білорусь',
        'BG' => 'Болгарія',
        'BO' => 'Болівія',
        'BA' => 'Боснія і Герцоговина',
        'BW' => 'Ботсвана',
        'BR' => 'Бразилія',
        'VG' => 'Британські Віргінські острови',
        'IO' => 'Британські території в Індійському океані',
        'BN' => 'Бруней',
        'BF' => 'Буркіна-Фасо',
        'BI' => 'Бурунді',
        'BT' => 'Бутан',
        'VU' => 'Вануату',
        'VA' => 'Ватикан',
        'GB' => 'Велика Британія',
        'VE' => 'Венесуела',
        'UM' => 'Віддалені острови США',
        'VI' => 'Віргінські острови, США',
        'AM' => 'Вірменія',
        'WF' => 'Волліс і Футуна',
        'VN' => 'Вʼєтнам',
        'GA' => 'Габон',
        'HT' => 'Гаїті',
        'GM' => 'Гамбія',
        'GH' => 'Гана',
        'GY' => 'Гаяна',
        'GP' => 'Гваделупа',
        'GT' => 'Гватемала',
        'GN' => 'Гвінея',
        'GW' => 'Гвінея-Бісау',
        'GG' => 'Гернсі',
        'GI' => 'Гібралтар',
        'HN' => 'Гондурас',
        'HK' => 'Гонконг, О.А.Р. Китаю',
        'GD' => 'Гренада',
        'GL' => 'Гренландія',
        'GR' => 'Греція',
        'GE' => 'Грузія',
        'GU' => 'Гуам',
        'DK' => 'Данія',
        'JE' => 'Джерсі',
        'DJ' => 'Джибуті',
        'DG' => 'Дієго-Гарсія',
        'DM' => 'Домініка',
        'DO' => 'Домініканська Республіка',
        'EC' => 'Еквадор',
        'GQ' => 'Екваторіальна Гвінея',
        'ER' => 'Еритрея',
        'EE' => 'Естонія',
        'ET' => 'Ефіопія',
        'EG' => 'Єгипет',
        'YE' => 'Ємен',
        'ZM' => 'Замбія',
        'EH' => 'Західна Сахара',
        'ZW' => 'Зімбабве',
        'IL' => 'Ізраїль',
        'IN' => 'Індія',
        'ID' => 'Індонезія',
        'IQ' => 'Ірак',
        'IR' => 'Іран',
        'IE' => 'Ірландія',
        'IS' => 'Ісландія',
        'ES' => 'Іспанія',
        'IT' => 'Італія',
        'JO' => 'Йорданія',
        'CV' => 'Кабо-Верде',
        'KZ' => 'Казахстан',
        'KY' => 'Кайманові острови',
        'KH' => 'Камбоджа',
        'CM' => 'Камерун',
        'CA' => 'Канада',
        'IC' => 'Канарські острови',
        'QA' => 'Катар',
        'KE' => 'Кенія',
        'KG' => 'Киргизстан',
        'CN' => 'Китай',
        'CY' => 'Кіпр',
        'KI' => 'Кірибаті',
        'CC' => 'Кокосові (Кілінгові) острови',
        'CO' => 'Колумбія',
        'KM' => 'Коморські острови',
        'CG' => 'Конго – Браззавіль',
        'CD' => 'Конго – Кіншаса',
        'XK' => 'Косово',
        'CR' => 'Коста-Рика',
        'CI' => 'Кот-д’Івуар',
        'CU' => 'Куба',
        'KW' => 'Кувейт',
        'CW' => 'Кюрасао',
        'LA' => 'Лаос',
        'LV' => 'Латвія',
        'LS' => 'Лесото',
        'LT' => 'Литва',
        'LR' => 'Ліберія',
        'LB' => 'Ліван',
        'LY' => 'Лівія',
        'LI' => 'Ліхтенштейн',
        'LU' => 'Люксембург',
        'MU' => 'Маврикій',
        'MR' => 'Мавританія',
        'MG' => 'Мадагаскар',
        'YT' => 'Майотта',
        'MO' => 'Макао, О.А.Р Китаю',
        'MK' => 'Македонія',
        'MW' => 'Малаві',
        'MY' => 'Малайзія',
        'ML' => 'Малі',
        'MV' => 'Мальдіви',
        'MT' => 'Мальта',
        'MA' => 'Марокко',
        'MQ' => 'Мартиніка',
        'MH' => 'Маршаллові Острови',
        'MX' => 'Мексика',
        'FM' => 'Мікронезія',
        'MZ' => 'Мозамбік',
        'MD' => 'Молдова',
        'MC' => 'Монако',
        'MN' => 'Монголія',
        'MS' => 'Монтсеррат',
        'MM' => 'Мʼянма (Бірма)',
        'NA' => 'Намібія',
        'NR' => 'Науру',
        'NP' => 'Непал',
        'NE' => 'Нігер',
        'NG' => 'Нігерія',
        'NL' => 'Нідерланди',
        'BQ' => 'Нідерландські Карибські острови',
        'NI' => 'Нікарагуа',
        'DE' => 'Німеччина',
        'NU' => 'Ніуе',
        'NZ' => 'Нова Зеландія',
        'NC' => 'Нова Каледонія',
        'NO' => 'Норвегія',
        'AE' => 'Обʼєднані Арабські Емірати',
        'OM' => 'Оман',
        'UN' => 'Організація Об’єднаних Націй',
        'AC' => 'Острів Вознесіння',
        'IM' => 'Острів Мен',
        'NF' => 'Острів Норфолк',
        'CX' => 'Острів Різдва',
        'SH' => 'Острів Святої Єлени',
        'CK' => 'Острови Кука',
        'PN' => 'Острови Піткерн',
        'SJ' => 'Острови Свальбард і Ян-Маєн',
        'TC' => 'Острови Теркс і Кайкос',
        'PK' => 'Пакистан',
        'PW' => 'Палау',
        'PS' => 'Палестинські території',
        'PA' => 'Панама',
        'PG' => 'Папуа Нова Гвінея',
        'PY' => 'Парагвай',
        'PE' => 'Перу',
        'GS' => 'Південна Джорджія та Південні Сандвічеві острови',
        'KR' => 'Південна Корея',
        'SS' => 'Південний Судан',
        'ZA' => 'Південно-Африканська Республіка',
        'KP' => 'Північна Корея',
        'MP' => 'Північні Маріанські Острови',
        'PL' => 'Польща',
        'PT' => 'Португалія',
        'PR' => 'Пуерто-Рико',
        'RE' => 'Реюньйон',
        'RU' => 'Росія',
        'RW' => 'Руанда',
        'RO' => 'Румунія',
        'SV' => 'Сальвадор',
        'WS' => 'Самоа',
        'SM' => 'Сан-Марино',
        'ST' => 'Сан-Томе і Прінсіпі',
        'SA' => 'Саудівська Аравія',
        'SZ' => 'Свазіленд',
        'SC' => 'Сейшельські Острови',
        'BL' => 'Сен-Бартельмі',
        'MF' => 'Сен-Мартен',
        'PM' => 'Сен-Пʼєр і Мікелон',
        'SN' => 'Сенегал',
        'VC' => 'Сент-Вінсент і Гренадини',
        'KN' => 'Сент-Кітс і Невіс',
        'LC' => 'Сент-Люсія',
        'RS' => 'Сербія',
        'EA' => 'Сеута і Мелілья',
        'SY' => 'Сирія',
        'SG' => 'Сінгапур',
        'SX' => 'Сінт-Мартен',
        'SK' => 'Словаччина',
        'SI' => 'Словенія',
        'SB' => 'Соломонові Острови',
        'SO' => 'Сомалі',
        'SD' => 'Судан',
        'SR' => 'Суринам',
        'US' => 'США',
        'SL' => 'Сьєрра-Леоне',
        'TJ' => 'Таджикистан',
        'TH' => 'Таїланд',
        'TW' => 'Тайвань',
        'TZ' => 'Танзанія',
        'TL' => 'Тимор-Лешті',
        'TG' => 'Того',
        'TK' => 'Токелау',
        'TO' => 'Тонга',
        'TT' => 'Тринідад і Тобаго',
        'TA' => 'Трістан-да-Кунья',
        'TV' => 'Тувалу',
        'TN' => 'Туніс',
        'TR' => 'Туреччина',
        'TM' => 'Туркменістан',
        'UG' => 'Уганда',
        'HU' => 'Угорщина',
        'UZ' => 'Узбекистан',
        'UA' => 'Україна',
        'UY' => 'Уругвай',
        'FO' => 'Фарерські Острови',
        'FJ' => 'Фіджі',
        'PH' => 'Філіппіни',
        'FI' => 'Фінляндія',
        'FK' => 'Фолклендські острови',
        'FR' => 'Франція',
        'GF' => 'Французька Гвіана',
        'PF' => 'Французька Полінезія',
        'TF' => 'Французькі Південні Території',
        'HR' => 'Хорватія',
        'CF' => 'Центральноафриканська Республіка',
        'TD' => 'Чад',
        'CZ' => 'Чехія',
        'CL' => 'Чилі',
        'ME' => 'Чорногорія',
        'CH' => 'Швейцарія',
        'SE' => 'Швеція',
        'LK' => 'Шрі-Ланка',
        'JM' => 'Ямайка',
        'JP' => 'Японія',
        'EZ' => 'Eurozone'
      ];

      foreach($countriesEn as $code => $countryNameEn) {
        $countryNameEn = $countriesEn[$code];
        $countryNameRu = $countriesRu[$code];
        $countryNameUa = $countriesUa[$code];
        factory(\App\Models\Country::class, 'country', 1)->create(['code' => $code])->each(function($country) use ($countryNameEn, $countryNameRu, $countryNameUa)  {
          $country->translate('en')->save(factory(\App\Models\CountryTranslation::class, 'country_en')->create(['country_id' => $country->id, 'title' => $countryNameEn]));
          $country->translate('ru')->save(factory(\App\Models\CountryTranslation::class, 'country_ru')->create(['country_id' => $country->id, 'title' => $countryNameRu]));
          $country->translate('ua')->save(factory(\App\Models\CountryTranslation::class, 'country_ua')->create(['country_id' => $country->id, 'title' => $countryNameUa]));
        });
      }
    }
}
