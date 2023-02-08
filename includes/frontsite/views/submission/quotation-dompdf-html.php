<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prijsindicatie</title>
    <link rel="stylesheet" href="<?= EPC_ASSETS_DIR_PATH . '/dist/css/project-calculator-output-pdf.css' ?>">
    <style media="screen">
      /*
      * Uses dynamic background-image
      **/
      .closing-footer__pixel {
        background-image: url('data:image/png;base64,<?= base64_encode(file_get_contents(EPC_ASSETS_DIR_PATH . '/dist/images/pattern-pixels.png')) ?>');
      }
    </style>
  </head>
  <body>
    <div class="root">
      <!-- first page start -->
      <div class="u-text-align--center">
        <div class="logo">
          <img src="<?= EPC_ASSETS_DIR_PATH . '/dist/images/output-pdf-header-banner.png' ?>">
        </div>
        <div class="project-title">
          <?= $form_details['title'] ?>
        </div>
        <div class="project-subtitle">
          <?= __( 'Prijsindicatie', EPC_LANG_DOMAIN ) ?>
        </div>
        <div class="project-date">
          <?= date('d/m/Y') ?>
        </div>
      </div>
      <!-- first page end -->

      <!-- second page start -->
      <div class="page-break">
        <h2 class="u-color--primary u-font-size--4x-large">Een project bij Epicode</h2>
        <p>
          Samen met prijsindicatie leggen we in deze gids uit hoe een project bij ons verloopt. Wij
          geloven in een duidelijke en concrete aanpak. Daarom zijn wij transparant in het
          kostenplaatje zodat je nooit voor vervelende verassingen komt te staan.
        </p>
        <p>
          We hebben ook een aantal voorbeelden van “Blocks” toegevoegd zodat je alvast kan laten
          inspireren over de mogelijkheden. De extra’s die je gekozen hebt in de calculator worden
          ook kort uiteengezet.
        </p>
        <p>
          Wij weten uit ervaring dat onze werkwijze tot resultaten leidt, ongeacht de grootte van je
          project.
        </p>
        <p>
          We nemen uiteraard contact met je op, maar zijn we niet snel genoeg horen wij graag van
          je!
        </p>

        <figure class="u-margin-top--x-huge u-text-align--center">
          <img src="<?= EPC_ASSETS_DIR_PATH . '/dist/images/logo.png' ?>" width="350" height="85">
        </figure>
      </div>
      <!-- second page end -->

      <!-- third page end -->
      <div class="page-break">
        <h2 class="u-color--primary u-font-size--4x-large">Prijsindicatie</h2>
        <h3 class="u-text-align--center u-color--grey"><?= $form_details['title'] ?></h3>
        <div class="u-margin-top">
          <h4><?= $form_details['subtitle'] ?></h4>
          <hr class="hr">
          <?php
          foreach ( $quote_items['costs'] as $interval => $costs ) { ?>
          <table class="table table--fixed u-margin-top--large">
          <?php
            foreach ( $costs as $cost ) { ?>
            <tr>
              <td>
                <b><?= $cost['label'] ?></b>
              </td>
              <td class="u-text-align--right">
                <b><?= $cost['costs']['costFormatted'] ?></b>
              </td>
            </tr>
          <?php
          } ?>
            <?php if ( $interval == 'once' ) { ?>
            <tr>
              <td class="u-padding-top--2x-small" colspan="2">
                <b><?= sprintf(_n( '%s Block', '%s Blocks', $quote_items['blocks_count'], EPC_LANG_DOMAIN ), $quote_items['blocks_count'])?></b>
              </td>
            </tr>
          <?php } ?>
            <tr><td class="u-padding-top--2x-small"></td></tr>
            <tr><td colspan="2"><b>Extras</b></td></tr>

            <tr>
              <td colspan="2">
                <ul class="u-padding-left--2x-small">
                <?php
                foreach ( $quote_items['extras'][$interval] as $extra ) { ?>
                  <li><?= $extra['label'] ?></li>
                <?php
                } ?>
                </ul>
              </td>
              <!-- <td class="u-text-align--right">
                <b><?= $extra['costFormatted'] ?></b>
              </td> -->
            </tr>
            <tr>
              <td colspan="2">
                <hr class="hr">
              </td>
            </tr>
            <tr>
              <td>
                <b>Totaal (<?= $interval == 'once' ? 'Eenmalig' : 'Maandelijks' ?>)</b>
              </td>
              <td class="u-text-align--right">
                <b><?= $quote_items['costsTotal'][$interval]['totalFormatted'] ?></b>
              </td>
            </tr>
          </table>
        <?php
        } ?>
          <p class="u-color--grey">
            <i>
              Bovenstaande prijzen dienen ter indicatie. De kosten van o.a. hosting kunnen afwijken
              afhangend van de grootte en eisen gesteld aan het project. Aan deze prijsindicatie kunnen
              geen rechten worden ontleend. Epicode BV zal altijd voorafgaand aan de werkzaamheden
              een officiële offerte overeenkomen.
            </i>
          </p>
        </div>
      </div>
      <!-- third page end -->

      <div class="page-break">
        <h2 class="u-color--primary u-font-size--4x-large">Blocks</h2>
        <p>
          Omdat wij altijd maatwerk leveren ben je ervan verzekerd dat je teksten en media altijd
          correct worden weergegeven, ongeacht de grootte van het scherm. Met deze blocks kan je
          eindeloos combineren en pagina’s opbouwen.
        </p>
        <p>
          Het beheren van je pagina’s wordt eenvoudig met onze handige tools. Via je admin panel
          krijg je eenvoudig toegang en wij bouwen een duidelijke, op maat gemaakte omgeving voor
          je.
        </p>
      </div>

      <div class="page-break">
        <h2 class="u-color--primary u-font-size--4x-large">Extra's</h2>
        <ul>
          <?php
          $extras = array_merge($quote_items['extras']['once'], $quote_items['extras']['monthly']);
          foreach ( $extras as $extra ) { ?>
          <li>
            <h2 class="u-color--grey"><?= $extra['label'] ?></h2>
            <!-- logo here -->
            <?php if ( ! empty( $extra['image'] ) ) { ?>
              <figure class="extra-image">
                <img src="<?= ABSPATH . wp_make_link_relative( $extra['image'] ) ?>" alt="<?= $extra['image'] ?>">
              </figure>
            <?php } ?>
            <p><?= $extra['description'] ?></p>
          </li>
          <?php } ?>
        </ul>
      </div>

      <div class="page-break">
        <h2 class="u-color--primary u-font-size--4x-large">Werkwijze</h2>
        <p>
          Bij Epicode houden we van een duidelijke afspraken en een strak plan. We starten elk
          project met een kick-off sessie waarbij we de wensen en mogelijkheden bespreken.
        </p>
        <p>
          Vaak beginnen we tijdens de eerste meeting met het formuleren van paden die gebruikers
          van het product bewandelen. Aan de hand van deze informatie kunnen we een volledig
          beeld vormen van alle zaken die ontworpen en ontwikkeld dienen te worden.
        </p>
        <p>
          Voordat we met de designfase aanvangen, stellen we een tijdlijn op waaraan we kunnen
          vasthouden tijdens het gehele project. Dit is zowel voor ons als voor de klant iets om altijd
          aan vast te kunnen houden.
        </p>
        <p>
          In samenwerking met de cliënt stellen we een briefing op voor de designer zodat deze gelijk
          gericht aan de slag kan. Omdat we een interactief feedback systeem hanteren, kunnen
          klanten eenvoudig vanaf afstand op en aanmerkingen toevoegen aan de designs.
        </p>
        <p>
          Als de designs zijn goedgekeurd door de klant, beginnen we met de ontwikkeling. Bij de
          meeste projecten zijn klanten in staat op onderdelen te testen op onze development
          omgeving. Hierdoor voorkomen we verrassingen tijdens de oplevering.
        </p>
        <p>
          Tijdens de laatste twee weken van de ontwikkeling maken we het project klaar voor de
          lancering. We testen alle mogelijke functies en zorgen ervoor dat er een probleemloze start
          kan plaatsvinden. Tijdens deze weken is het gebruikelijk dat we samen met de klant door het
          beheer doorlopen om na de lancering verrassingen te voorkomen.
        </p>
        <p>
          Een maand na de lancering plannen we een feedback meeting in om nog eens alle ins en
          outs van het project door te nemen.
        </p>
      </div>

      <div class="page-break">
        <h3 class="u-color--grey">Klaar voor de start?</h3>
        <h2 class="u-color--primary u-font-size--4x-large">Slotwoord</h2>
        <p>
          Hopelijk heb je na al deze uitleg nog meer zin om je project te starten! Wij nemen over een
          paar dagen contact met je op voor een vrijblijvend gesprek. Mocht je dat niet snel genoeg
          vinden kan je altijd contact met ons opnemen.
        </p>
        <p>
          Groeten,
        </p>
        <p>
          Team <span class="u-color--primary">Epicode</span>
        </p>

        <div class="closing-footer">
          <table class="closing-footer__info">
            <tr>
              <td colspan="2">
                <figure>
                  <img src="<?= EPC_ASSETS_DIR_PATH . '/dist/images/logo-white.png' ?>" width="160" height="40">
                </figure>
              </td>
            </tr>
            <tr>
              <td class="u-padding-top--2x-small">
                <address class="u-font-size--small u-color--white">
                  Zwolle <br>
                  Westerlaan 51 <br>
                  8011 CA Zwolle
                </address>
              </td>
              <td class="u-padding-top--2x-small u-padding-left--2x-small">
                <address class="u-font-size--small u-color--white">
                  Amsterdam <br>
                  Klaprozenweg 75 H<br>
                  1033 NN Amsterdam
                </address>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="u-padding-top--2x-small">
                <a href="tel:+0853030050" class="u-font-size--small u-color--white">085 - 30 300 50</a><br>
                <a href="mailto:hello@epicode.nl" class="u-font-size--small u-color--white">hello@epicode.nl</a>
              </td>
            </tr>
          </table>
          <div class="closing-footer__pixel"></div>
        </div>
      </div>
    </div>

    <footer class="page-footer">
      <div class="page-number"></div>
    </footer>
  </body>
</html>
