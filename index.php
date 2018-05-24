<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/css/main.css">
  <title>Grey Wizard - zadanie - F. Andruszkiewicz</title>
</head>

<body>

  <div class="svgcolor">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1024 1024" preserveAspectRatio="none" id="green1"
      fill="#5cb65e">
      <linearGradient id="green" x1="0" y1="0" x2="0" y2="100%">
        <stop offset="0" style="stop-color: #48c3d0" />
        <stop offset="1" style="stop-color: #48c3d0" />
      </linearGradient>
  </div>

  <?php
function dd($val) {
  die(var_dump($val));
}

$data = [
  'header' => [
    'logo' => 'img/svg/top_logo.svg',
    'items' => [
      'Add site' => '#',
      'Support' => '#'
    ],
    'user' => [
      'icon' => [
      'img/svg/user_icon.svg',
      'img/svg/dropdown_icon.svg',
      ],
      'text' => ['Profil', 'Wyloguj']
    ]
  ],
  'section1' => [
    'name' => 'Dodaj stronę',
    'text' => 'Samodzielna Konfiguracja Tarczy nie jest skomplikowana i nie wymaga specjalistycznej wiedzy.'
  ],
  'section2' => [
    'name' => 'Lista domen',
    'tableHeader' => [
      'Domena/Subdomena',
      'Adres IP',
      'SSL'
      ],
    'sslChoice' => ['No', 'Pink', 'Orange'],
    'bttn' => 'Gotowe'
  ],
  'section3' => [
    'name' => 'Wybierz pakiet ochrony',
    'packet' => [
      'basic' => [
        'recommended' => '',
        'price' => '<strong>5</strong> pln/miesiąc',
        'desc' => [
          'intro' => 'Zawiera między innymi:',
          'leftCol' => [
            '<50Mbps ruchu generowanego przez stronę',
            '10Gbps Ochrony przed DDoS',
            'Obsługa SSL',
            'Wsparcie SLA '
          ],
          'rightCol' => [
            'Web application firewall (WAF)',
            'Statystyki i wykresy',
            'API',
            '24/7 Wsparcie E-mail'
          ],
          'more' => 'Więcej informacji o tym i pozostałych planach',
          'bttn' => 'Wybieram',
          'extras' => '10 dni gratis'
        ]
      ],
      'business' => [
        'recommended' => 'Rekomendowany',
        'price' => '<strong>10</strong> pln/miesiąc',
        'desc' => [
          'intro' => 'Zawiera między innymi:',
          'leftCol' => [
            '<100Mbps ruchu generowanego przez stronę',
            '20Gbps Ochrony przed DDoS',
            'Obsługa SSL',
            'Wsparcie SLA '
          ],
          'rightCol' => [
            'Web application firewall (WAF)',
            'Statystyki i wykresy',
            'API',
            '24/7 Wsparcie E-mail'
          ],
          'more' => 'Więcej informacji o tym i pozostałych planach',
          'bttn' => 'Wybieram',
          'extras' => '10 dni gratis'
        ]
      ],
      'pro' => [
        'recommended' => '',
        'price' => '<strong>100</strong> pln/miesiąc',
        'desc' => [
          'intro' => 'Zawiera między innymi:',
          'leftCol' => [
            '<100Mbps ruchu generowanego przez stronę',
            '20Gbps Ochrony przed DDoS',
            'Obsługa SSL',
            'Wsparcie SLA '
          ],
          'rightCol' => [
            'Web application firewall (WAF)',
            'Statystyki i wykresy',
            'API',
            '24/7 Wsparcie E-mail'
          ],
          'more' => 'Więcej informacji o tym i pozostałych planach',
          'bttn' => 'Wybieram',
          'extras' => '10 dni gratis'
        ]
      ],
      'enterprise' => [
        'recommended' => '',
        'price' => 'Wycena indywidualna',
        'desc' => [
          'intro' => 'Zawiera między innymi:',
          'leftCol' => [
            '<100Mbps ruchu generowanego przez stronę',
            '20Gbps Ochrony przed DDoS',
            'Obsługa SSL',
            'Wsparcie SLA '
          ],
          'rightCol' => [
            'Web application firewall (WAF)',
            'Statystyki i wykresy',
            'API',
            '24/7 Wsparcie E-mail'
          ],
          'more' => 'Więcej informacji o tym i pozostałych planach',
          'bttn' => 'Wybieram',
          'extras' => '10 dni gratis'
        ]
      ]
    ]
  ],
  'section4' => [
    'name' => 'Autoryzuj swoją rejestrację i włącz ochronę',
    'info' => 'Spokojnie, nie obciążymy Twojej karty bez uprzedniej zgody.<br>Zawsze możesz zrezygnować.',
    'inputs' => ['Numer karty', 'Kod bezp.', 'Ważność', 'Imię', 'Nazwisko'],
    'tooltip' => 'Jesteś chroniony już w momencie rejestracji!<br><small>W każdej chwili możesz zrezygnować!</small>',
    'bttn' => 'WŁącz OBRONĘ',
  ],
  'footer' => [
    'data' => [
      'icon' => 'img/svg/footer_logo.svg',
      'text' => [
        'Support' => '#',
        'GreyWizard.com' => 'https://greywizard.com'
        ]
    ],
    'social' => [
      'https://www.facebook.com/' => 'img/svg/fb.svg',
      'https://twitter.com' => 'img/svg/twitter.svg',
      'https://linkedin.com' => 'img/svg/linkedin.svg']
  ]
];

$header = $data['header'];
$section1 = $data['section1'];
$section2 = $data['section2'];
$section3 = $data['section3'];
$section4 = $data['section4'];
$footer = $data['footer'];

//dd($header['items'])
?>

    <header class="header">
      <div class="wrapper">
        <div class="header__logo">
          <div class="header__logoSvg">
            <a href="https://greywizard.com">
              <?= file_get_contents( $header['logo'] );?>
            </a>
          </div>
        </div>
        <div class="header__items">
          <?php foreach ( $header['items'] as $key => $val) : ?>
          <a href="<?= $val; ?>" class="header__itemsLink">
            <div class="header__itemsBox">
              <?= $key; ?>
            </div>
          </a>
          <?php endforeach; ?>
          <div class="header__itemsLink">
            <div class="header__itemsBox">
              <div class="header__itemsBoxSvg">
                <?= file_get_contents( $header['user']['icon'][0] );?>
              </div>
              <div class="header__itemsBoxSvg">
                <?= file_get_contents( $header['user']['icon'][1] );?>
              </div>
              <ul class="header__itemsBox header__submenu">
                <?php foreach ( $header['user']['text'] as $key ) : ?>
                <li>
                  <a href="#">
                    <?= $key; ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <button class="burger" id="burger">
          <div class="burger__stripe"></div>
        </button>

      </div>
    </header>
    <section class="section section1">
      <div class="wrapper">
        <div class="container">
          <h1>
            <?= $section1['name']?>
          </h1>
          <p>
            <?= $section1['text']?>
          </p>
        </div>
      </div>
    </section>
    <section>
      <div class="wrapper">
        <form action="" class="form" id="form">
          <fieldset id="domain">
            <h2>
              <?= $section2['name']?>
            </h2>
            <div class="domains">
              <div class="domains__list">
                <div class="domains__listHeader">
                  <div class="domains__listHeaderItem">
                    <?= $section2['tableHeader'][0]?>
                  </div>
                  <div class="domains__listHeaderItem">
                    <?= $section2['tableHeader'][1]?>
                  </div>
                  <div class="domains__listHeaderItem">
                    <?= $section2['tableHeader'][2]?>
                  </div>
                </div>
                <div class="domains__listWrapper">

                  <div class="domains__listContent">
                    <div class="domains__listContentItem box">
                      <div class="domains__listHeaderItemRwd">
                        <?= $section2['tableHeader'][0]?>
                      </div>
                      <div class="domains__listContentItemInput domains__input">
                        <input class="domains__inputField" value="" name="domain"/>
                        <div class="domains__inputSvg">
                          <?= file_get_contents('img/svg/check_icon_green.svg');?>
                        </div>
                      </div>
                    </div>
                    <div class="domains__listContentItem box">
                      <div class="domains__listHeaderItemRwd">
                        <?= $section2['tableHeader'][1]?>
                      </div>
                      <div class="domains__listContentItemInput domains__input">
                        <input class="domains__inputField" value="" maxlength="15" name="ipaddress" />
                        <div class="domains__inputSvg">
                          <?= file_get_contents('img/svg/check_icon_green.svg');?>
                        </div>
                      </div>
                    </div>
                    <div class="domains__listContentItem box">
                      <div class="domains__listHeaderItemRwd">
                        <?= $section2['tableHeader'][2]?>
                      </div>
                      <div class="domains__listContentItemInput domains__input">
                        <select name="ssl" id="sslChoice" class="domains__inputSelect sslChoice">
                          <?php foreach ( $section2['sslChoice'] as $key ) : ?>
                          <option value="<?= $key; ?>">
                            <?= $key; ?>
                          </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>

                    <div class="domains__listContentRemove">
                      <?= file_get_contents('img/svg/delete_icon.svg');?>
                    </div>

                  </div>
                </div>

                <div class="domains__addDomain">
                  <div class="domains__listContentItem">
                    <div class="domains__listContentItemInput domains__input">
                      <div class="domains__inputBtn">
                        <span class="domains__inputBtnSvg">
                          <?= file_get_contents('img/svg/plus_icon.svg');?>
                        </span>
                        <span class="domains__inputBtnTxt">
                          Dodaj domenę...
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="domains__footer">
              <button class="domains__footerBttn btn" type="button">
                <?= $section2['bttn']; ?>
              </button>
            </div>
          </fieldset>
          <fieldset id="packet" class="closed">
            <h2>
              <?= $section3['name']?>
            </h2>
            <div class="packet">
              <?php foreach ( $section3['packet'] as $key => $val ) : ?>
              <div class="packet__item  <?= $key=='business'?'packet__item--selected':''; ?>">
                <div class="packet__itemBox">
                  <label class="packet__itemBoxLabel">
                    <input type="radio" value="$key" name="packet" class="packet__itemBoxRadio" <?= $key=='business'?'checked="checked"':''; ?>>
                    <div class="packet__itemBoxRadioFake"></div>
                  </label>
                  <div class="packet__itemHeader">
                    <?= $key; ?>
                  </div>
                  <?php if ( $val['recommended'] !== '' ) : ?>
                  <div class="packet__itemRecommended">
                    <?= $val['recommended']; ?>
                  </div>
                  <?php endif;?>
                  <div class="packet__itemPrice">
                    <?= $val['price']; ?>
                  </div>
                </div>
                <div class="packet__itemBox">
                  <div class="packet__itemContent">
                    <div class="packet__itemContentIntro">
                      <?= $val['desc']['intro'] ?>
                    </div>
                    <div class="packet__itemContentCol">
                      <ul>
                        <?php foreach ( $val['desc']['leftCol'] as $key ) : ?>
                        <li>
                          <?= $key; ?>
                        </li>
                        <?php endforeach; ?>
                    </div>
                    <div class="packet__itemContentCol">
                      <ul>
                        <?php foreach ( $val['desc']['rightCol'] as $key ) : ?>
                        <li>
                          <?= $key; ?>
                        </li>
                        <?php endforeach; ?>
                    </div>
                    <div class="packet__itemContentFooter">
                      <a href="#" class="packet__itemContentFooterMore">
                        <?= $val['desc']['more'] ?>
                      </a>
                      <div class="packet__itemContentFooterWrap">
                        <button class="packet__itemContentFooterBttn btn" type="button">
                          <?= $val['desc']['bttn'] ?>
                        </button>
                        <div class="btnTooltip btnTooltip--gratis">
                          <span>10</span>
                          <span>dni gratis!</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </fieldset>
          <fieldset id="payment" class="closed">
            <h2>
              <?= $section4['name']?>
            </h2>
            <div class="data">
              <p class="data__info">
                <?= $section4['info']?>
              </p>
              <div class="data__inputs">
                <div class="row">

                  <div class="box">
                    <div class="box__field">
                      <label for="cardNum" class="box__fieldLabel">
                        <?= $section4['inputs'][0]?>
                          <span>
                            <?= file_get_contents('img/svg/check_icon_green.svg');?>
                          </span>
                      </label>
                      <img src="img/mastercard.png">
                      <input class="box__fieldInput" value="" id="cardNum" maxlength="4" name="cardNum">
                      <input class="box__fieldInput" value="" id="cardNum2" maxlength="4" name="cardNum2">
                      <input class="box__fieldInput" value="" id="cardNum3" maxlength="4" name="cardNum3">
                      <input class="box__fieldInput" value="" id="cardNum4" maxlength="4" name="cardNum4">
                    </div>
                  </div>

                  <div class="box">
                    <div class="box__field">
                      <label for="cardCode" class="box__fieldLabel">
                        <?= $section4['inputs'][1]?>
                          <span>
                            <?= file_get_contents('img/svg/check_icon_green.svg');?>
                          </span>
                      </label>
                      <input class="box__fieldInput" value="" id="cardCode" maxlength="3" name="cardCode">
                      <span class="box__fieldSvg">
                        <?= file_get_contents('img/svg/credit_card_element.svg');?>
                      </span>
                    </div>
                  </div>

                  <div class="box">
                    <div class="box__field">
                      <label for="cardExpiration" class="box__fieldLabel">
                        <?= $section4['inputs'][2]?>
                          <span>
                            <?= file_get_contents('img/svg/check_icon_green.svg');?>
                          </span>
                      </label>
                      <input class="box__fieldInput" value="" id="cardExpiration" maxlength="2" name="cardExpiration">
                      <span>/</span>
                      <input class="box__fieldInput" value="" id="cardExpiration2" maxlength="2" name="cardExpiration2">
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="box">
                    <div class="box__field">
                      <label for="firstName" class="box__fieldLabel">
                        <?= $section4['inputs'][3]?>
                          <span>
                            <?= file_get_contents('img/svg/check_icon_green.svg');?>
                          </span>
                      </label>
                      <input class="box__fieldInput" value="" id="firstName" maxlength="50" name="firstName">
                    </div>
                  </div>

                  <div class="box">
                    <div class="box__field">
                      <label for="lastName" class="box__fieldLabel">
                        <?= $section4['inputs'][4]?>
                          <span>
                            <?= file_get_contents('img/svg/check_icon_green.svg');?>
                          </span>
                      </label>
                      <input class="box__fieldInput" value="" id="lastName" maxlength="50" name="lastName">
                    </div>
                  </div>

                </div>
              </div>
              <div class="data__footer">
                <div class="data__footerTooltip">
                  <?= $section4['tooltip']?>
                </div>
                <button class="data__footerBttn btn" type="submit">
                  <?= $section4['bttn']?>
                </button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </section>
    <footer class="footer">
      <div class="wrapper">
        <div class="footer__items">
          <div class="footer__itemsBox">
            <div class="footer__itemsBoxSvg">
              <?= file_get_contents( $footer['data']['icon'] ); ?>
            </div>
          </div>
          <?php foreach ( $footer['data']['text'] as $key => $val) : ?>
          <div class="footer__itemsBox">
            <a href="<?= $val; ?>" class="footer__itemsBoxLink">
              <?= $key; ?>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="footer__social">
          <?php foreach ( $footer['social'] as $key => $val) : ?>
          <a href="<?= $key; ?>" class="footer__socialSvg">
            <?= file_get_contents( $val ); ?>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </footer>

    <script src="dist/js/main.js"></script>

</body>

</html>