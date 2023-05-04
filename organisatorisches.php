<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Organisatorisches DVCS 2023</title>
    <?php 
        $Name = "";
        $Universität = "";
        $Kontakt = "";
        $Abendessen = "";
        $Vegan = "";
        $Ausflug = "";
        $FalschEingaben = [];
    ?>
</head>
<body>
<header>
        <div class="heading__banner">
            <div class="container">
                <div class="heading__banner__flex">
                    <a class="heading__banner__item" href="./index.html">Home</a>
                    <a class="heading__banner__item" href="./programm.html">Programm</a>
                    <a class="heading__banner__item" href="./tagungsort.html">Tagungsort</a>
                    <a class="heading__banner__item" href="mailto:sinologie-dvcs2023@fau.de">Kontakt</a>
                </div>
            </div>
        </div>
        <div class="heading">
            <div class="container">     
                <div class="heading__titel">
                    <h1>Organisatorisches</h1>
                    <h4>DVCS XXXIV, Erlangen 24.-26.11.2023</h4>
                </div>
            </div>
        </div>
    </header>
    <main class="mainpart">
        <div class="container">
            <section>
                <h2>Teilnahme und Anmeldung</h2>
                <p>
                    Die Tagung wird in Präsenz in Erlangen (Kollegienhaus der FAU Erlangen-Nürnberg, Universitätsstraße 15, 91054 Erlangen) 
                    vom 24. bis zum 26. November 2023 stattfinden. 
                </p>
                <p>
                    Abstracts (ca. 250 Wörter) können <strong>bis zum 31. Juli 2023</strong> 
                    eingereicht werden. Die Einreichung erfolgt per Anmeldeformular unten.
                    Die Benachrichtigung über die Annahme von Vorträgen erfolgt bis zum 31. August 2023.
                </p>
                <p>
                    Anmeldungen für eine Teilnahme ohne Vortrag können <strong>bis zum 30. September 2023</strong> erfolgen.
                </p>
                <p>
                    Für Mitglieder der DVCS und Studierende bis zum Master oder gleichwertigem Abschluss ist die Teilnahme kostenlos. 
                    Nichtmitglieder zahlen eine Teilnahmegebühr <strong>in Höhe von 30 Euro</strong>.
                </p>
                <p>
                    Die allgemeine Tagungssprache ist Deutsch; Vorträge können in deutscher oder englischer Sprache gehalten werden.
                </p>
                    Die Veröffentlichung ausgewählter Beiträge zum Tagungsthema in Form 
                    des <a class="link__allgemein" href="https://www.dvcs.eu/publikationen.html" target="_blank">Jahrbuchs der DVCS</a> ist vorgesehen.
                </p>
                
            </section>
            <section>
                <h2>Dissertationsvorhaben</h2>
                <p>
                    Jüngst abgeschlossene Dissertationen oder bereits weit gediehene Dissertationsprojekte können im Rahmen eines 
                    separaten Präsentationsfensters, auch ohne direkten Bezug zum Tagungsthema, vorgestellt werden.
                </p>
            </section>
            <section>
                <h2>Rahmenprogramm</h2>
                <ul>
                    <li>
                        <p>
                            Die Mitgliederversammlung der DVCS wird voraussichtlich <strong>am Samstag, 
                            den 25. November, zwischen 12 und 14 Uhr</strong> stattfinden.
                        </p>
                    </li>
                    <li>
                        <p>
                            Für <strong>Samstag, den 25. November, um 20 Uhr,</strong> ist ein gemeinsames Abendessen 
                            in <a href="https://braeuschaenke.de/" class="link__allgemein" target="blank">Kitzmanns Bräuschänke</a> vorgesehen 
                            (Südliche Stadtmauerstraße 25, 91054 Erlangen, <strong>Essen à la carte, Gäste zahlen selbst</strong>). 
                            Um vorherige Teilnahmebestätigung im Zuge der Anmeldung wird gebeten.
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Am Sonntag, den 26. November,</strong> wird im Anschluss an die Tagung ein gemeinsamer 
                            Besuch des <a href="https://www.gnm.de/" class="link__allgemein" target="blank">Germanischen Nationalmuseums in 
                                Nürnber</a> angeboten. Alle Tagungsteilnehmer*innen sind hierzu herzlich eingeladen. 
                                Auch hier wird um vorherige Teilnahmebestätigung gebeten.
                        </p>
                    </li>
                </ul>
            </section>
            <br>
            <h3>
                Bei Fragen zu Anmeldung und Organisation wenden Sie sich gerne an: <a class="link__allgemein" href="mailto:sinologie-dvcs2023@fau.de">sinologie-dvcs2023@fau.de</a>.
            </h3>
            <br>
            <section class="mainpart__register">
                <h2 id="formular">Anmeldungsformular</h2>
                <div>
                    <?php
                        $Name = $_POST["name"] ?? "";
                        $Universität = $_POST["uni"] ?? "";
                        $Kontakt = $_POST["contact"] ?? "";
                        $Mitglied = $_POST["Mitglied"] ?? "";
                        $Student = $_POST["Student"] ?? "";
                        $Abendessen = $_POST["dinner"] ?? "";
                        $Vegan = $_POST["vegetarian"] ?? "";
                        $Ausflug = $_POST["tour"] ?? "";
                        $Info = $_POST["info"] ?? "";
                        $Datenschutz = $_POST["Datenschutzerklärung"] ?? "";

                        $msg = "";
                        if (isset($_POST["submit"])) {
                            if ($Name == "") {
                                $FalschEingaben["name"] = "Obligatorisches Feld!";
                            }

                            if ($Universität == "") {
                                $FalschEingaben["uni"] = "Obligatorisches Feld!";
                            }

                            if ($Kontakt == "") {
                                $FalschEingaben["contact"] = "Obligatorisches Feld!";
                            }
                            
                            if ($Datenschutz != "einverstanden") {
                                $FalschEingaben["Datenschutzerklärung"] = "Bitte Datenschutzerklärung einwilligen!";
                            }

                            if (empty($FalschEingaben)) {
                                $msg = "Formular und ggf. hochgeladene Datei gesendet. Vielen Dank für Ihre Anmeldung!";

                                $Datei = fopen("Anmeldungen.txt", "a+");
                                fwrite($Datei, $Name."§".$Universität."§".$Kontakt."§".$Mitglied."§".$Student."§".$_FILES["abstract"]["name"]."§".$Abendessen."§".$Vegan."§".$Ausflug."§".$Info."§"."\r\n");
                                fclose($Datei);
                                
                                $from = $_FILES["abstract"]["tmp_name"];
                                $to = "upload/" . $_FILES["abstract"]["name"];
                                move_uploaded_file($from, $to);

                                $empf = $Kontakt;
                                $betreff = "Anmelde-Bestätigung zu DVCS XXXIV, Erlangen 24.-26.11.2023";
                                $header = "From: DVCS XXXIV Erlangen <sinologie-dvcs2023@fau.de>\n";
                                $header .= "Reply-To: sinologie-dvcs2023@fau.de\n";
                                $header .= "Context-Type: text/html\n";
                                $text = "<p>Guten Tag,</p><p>vielen Dank f&uuml;r Ihre Anmeldung.</p><p>Sollten Sie in Holiday Inn Express 
                                oder Novotel Erlangen f&uuml;r die &Uuml;bernachtung Zimmer buchen m&ouml;chten (Informationen dazu finden Sie 
                                auf der Unterseite Tagungsort unserer Webseite), lautet das Stichwort f&uuml;r Buchung &uuml;ber Kontigent: 
                                DVCS 2023.<p>Bei R&uuml;ckfragen stehen wir Ihnen gerne zur Verf&uuml;gung</p><p>Mit freundlichen Gr&uuml;&szlig;en</p>
                                <p>DVCS XXXIV Erlangen</p>";
                                
                                $text = wordwrap($text, 70, "\r\n");
                                mail($empf, $betreff, $text, $header);
                            }
                            else {
                                $msg = "Bitte prüfen Sie Ihre Eingaben.";
                            }
                            /*
                            echo "<pre>";
                            var_dump($_FILES);
                            echo "</pre>";
                            */
                        }
                    ?>
                    <form class="mainpart__register__formular" action="./organisatorisches.php#formular" method="post" enctype="multipart/form-data">
                        <p>
                            <label for="1">Name:<span style="color: red;">*</span></label>
                            <input type="text" id="1" name="name" value="<?php echo $Name ?>"><br>
                            <span>(Mit <span style="color: red;">*</span> gekennzeichneten Felder sind obligatorisch.)</span>
                        </p>
                        <p>
                            <label for="2">Universität/Organisation:<span style="color: red;">*</span></label>
                            <input type="text" id="2" name="uni" value="<?php echo $Universität ?>">
                        </p>
                        <p>
                            <label for="3">Email-Addresse:<span style="color: red;">*</span></label>
                            <input type="text" id="3" name="contact" value="<?php echo $Kontakt ?>">
                        </p>
                        <p>
                            <input type="checkbox" name="Mitglied" value="vip" <?php echo ($Mitglied == "vip") ? 'checked="check"' : "" ?>>
                            <label>Ich bin DVCS-Mitglied.</label><br>
                        </p>
                        <p>
                            <input type="checkbox" name="Student" value="student" <?php echo ($Student == "student") ? 'checked="check"' : "" ?>>
                            <label>Ich bin Bachelor- bzw. Master-Student*in.</label><br>
                        </p>
                        <p>
                            <label>Abstract mit kurzem CV hochladen:</label>
                            <input type="file" name="abstract" accept=".doc,.docx,.pdf"><br>
                            <span >(Mögliche Datei-Type: .doc, .docx, .pdf; maximale Größe: 40MB.)</span>
                        </p>
                        <p>
                            <label>Anmeldung zu Rahmenprogrammen:</label><br>
                            <div class="mainpart__register__formular__eingerückt">
                                <input type="checkbox" name="dinner" value="dinner" <?php echo ($Abendessen == "dinner") ? 'checked="check"' : "" ?>>
                                <label>Ich werde am gemeinsamen Abendessen (25.11.) teilnehmen.</label><br>
                                <input type="checkbox" name="vegetarian" value="vegetarian" <?php echo ($Vegan == "vegetarian") ? 'checked="check"' : "" ?>>
                                <label>Ich bin vegetarisch.</label><br>
                                <input type="checkbox" name="tour" value="tour" <?php echo ($Ausflug == "tour") ? 'checked="check"' : "" ?>>
                                <label>Ich werde am Besuch des Germanischen Nationalmuseums in Nürnberg (26.11.) teilnehmen.</label><br>
                            </div>
                            <br>
                            <div class="mainpart__register__formular__eingerückt">
                                <label for="4">Wenn Sie Gäste zum gemeinsamen Dinner bzw. Museum-Besuch mitbringen möchten, 
                                    geben Sie bitte die Personenzahl und ggf. andere Informationen ein:</label><br><br>
                                <textarea rows="10" id="4" name="info" value="<?php echo $Info ?>" class="mainpart__register__formular__textarea"><?php echo $Info ?></textarea>
                            </div>
                        </p>
                        <p>
                            <input type="checkbox" name="Datenschutzerklärung" value="einverstanden" <?php echo ($Datenschutz == "einverstanden") ? 'checked="check"' : "" ?>>
                            <label>Die <a class="link__allgemein" href="https://www.sinologie.phil.fau.de/datenschutz/" target="_blank" style="color: red;">Hinweise zum Datenschutz</a> habe ich gelesen 
                                und willige in die Datenverarbeitung zum Zweck 
                                der Anmeldung für die Tagung DVCS 2023 ein.</label><br>
                        </p>
                        
                        <br>
                        <input type="submit" name="submit">        
                        <?php echo "<font color='#FF0000'>", $msg, "</font>" ?>
                    </form>
                </div> 
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__banner">
                <a class="footer__banner__item" target="_blank" href="https://www.sinologie.phil.fau.de/impressum/">Impressum</a>
                <a class="footer__banner__item" target="_blank" href="https://www.sinologie.phil.fau.de/datenschutz/">Datenschutz</a>
                <a class="footer__banner__item" target="_blank" href="https://www.sinologie.phil.fau.de/barrierefreiheit/">Barrierefreiheit</a>
            </div>
        </div>
    </footer>
</body>
</html>
