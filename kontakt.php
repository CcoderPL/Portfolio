<!DOCTYPE HTML>
<html lang="pl">
<head>
      <meta charset="utf-8" />
      <title>Portfolio Pawła Mołka</title>
      <meta name="description" content="Portfolio początkującego programisty, tworzącego jak na razie wszystko hobbystycznie,
        ale z nadzieją że uda się to robić zawodowo !" />
      <meta name="keywords" content="programista cpp, programista c++, początkujący programista, początkujący programista php, początkujący
      programistat webowy, początkujący programista php, junior cpp developer, junior php developer, junior web developer, Paweł Mołek,
      Pawel Molek" />
      <!-- teraz tag dla Internet explorera -->
      <meta http-http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <link rel="stylesheet" href="css/style.css" type="text/css" />
      <link rel="stylesheet" href="css/fontello.css" type="text/css" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Lobster&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

</head>
<body>
      <header>
            <div id="logo">
                  <h1>Paweł Mołek</h1>
            </div>
      </header>
      <main>
            <div class="Container">
                  <article>
                        <div class="SideLeft">
                            <div id="formularz">
                                <?php
                                // sprawdzamy, czy zmienna $submit jest pusta
                                if (empty($_POST['submit'])) {
                                    // wyświetlamy formularz
                                    echo "<table border=\"0\"><form method=\"post\">
                                <tr>
                                <td>Treść wiadomości</td>
                                <td><textarea name=\"tresc\" type=\"text\" style=\"width: 200px; height: 100px\"></textarea></td>
                                </tr>

                                <tr>
                                <td>Imię, nazwisko lub nick</td>
                                <td><input type=\"text\" name=\"imie\" style=\"width: 200px\"></td>
                                </tr>

                                <tr>
                                <td>Adres e-mail</td>
                                <td><input type=\"text\" name=\"email\" style=\"width: 200px\"></td>
                                </tr>

                                <tr>
                                <td>&nbsp;</td>
                                <td><input type=\"submit\" name=\"submit\" value=\"Wyślij\">&nbsp;
                              </form>
                                </tr>
                                </table>";
                                }
                                // sprawdzamy, czy zmienne przesłane z formularza nie są puste
                                elseif (!empty($_POST['tresc']) && !empty($_POST['imie']) && !empty($_POST['email'])) {
                                    // jeżeli powyższy warunek jest spełniony tworzona jest wiadomość
                                    // zmienna $message zawiera treść wiadomości
                                    $message = "Treść wiadomości:\n$_POST[tresc]\nWysłał: $_POST[imie]\ne-mail: $_POST[email]";
                                    // zmienna $header zawiera przede wszystkim adres zwrotny
                                    $header = "From: $_POST[imie] <$_POST[email]>";
                                    // funkcja mail() za pomocą której wiadomość zostanie wysłana
                                    @mail("pawel.molek@gmail.com","Wiadomosc ze strony WWW","$message","$header")
                                    or die('Nie udało się wysłać wiadomości');
                                    // wyświetlenie komunikatu w przypadku powodzenia
                                    echo "<div align=\"center\"><strong>Wiadomość została wysłana poprawnie!</strong></div>";
                                }
                                // lub w przypadku nie wypełnienia formularza do końca
                                else echo "<span style=\"color: #FF0000; text-align: center;\">Wypełnij wszystkie pola formularza!</span>";

                                ?>
                            </div>
                            <br />
                            <br />
                            <br />
                            <div class="linkKod">
                              <a href="mailto:pawel.molek@gmail.com e-mail">pawel.molek@gmail.com</a>
                            </div>
                        </div>
                  </article>


                  <div class="SideRight">
                        <a href="index.php" class="links">
                              <div id="window1">
                                    <i class="icon-adult"></i>
                                    <br />
                                    <p>O mnie</p>
                              </div>
                        </a>
                        <a href="kod.php" class="links">
                              <div id="window2">
                                    <i class="icon-code"></i>
                                    <br />
                                    <p>Mój kod</p>
                              </div>
                        </a><br/>
                        <div style="clear:both;"></div>

                        <a href="certyfikaty.php" class="links">
                              <div id="window3">
                                    <i class="icon-certificate-outline"></i>
                                    <br />
                                    <p>Certyfikaty</p>
                              </div>
                        </a>

                        <a href="kontakt.php" class="links">
                              <div id="window4">
                                    <i class="icon-contacts"></i>
                                    <br />
                                    <p>Kontakt</p>
                              </div>
                        </a>
                        <br/>

                        <div style="clear:both;"></div>

                        <a href="#" class="links">
                              <div id="window5">
                                    <i class="icon-facebook"></i>
                                    <br />
                                    <p>Facebook</p>
                              </div>
                        </a>
                        <a href="https://pl.linkedin.com/public-profile/in/pawe%C5%82-mo%C5%82ek-737274142?challengeId=AQFd-FZbkAM3NwAAAXc-UeJDmiFfe1A-JNekzBYc8ingIs2uKeFLZvHo7_lqdE7ZP7zfRYfx4T3j15bRR2PLWaVoQycdKsFBJQ&submissionId=e00d4fe4-acc2-5d16-68b5-ff6cf1c8972c" class="links" target ="_blank">
                              <div id="window6">
                                    <i class="icon-linkedin"></i>
                                    <br />
                                    <p>Linkedin</p>
                              </div>
                        </a><br/>
                        <div style="clear:both;"></div>
                  </div>
                  <div style="clear:both;"></div>
            </div>
      </main>
</body>
</html>
