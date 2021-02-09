-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Kwi 2017, 10:28
-- Wersja serwera: 5.7.14
-- Wersja PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `notice2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin_logs`
--

CREATE TABLE IF NOT EXISTS `admin_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `logged` int(1) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin_session`
--

CREATE TABLE IF NOT EXISTS `admin_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `code` varchar(64) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `thumb` varchar(256) NOT NULL,
  `content` mediumtext NOT NULL,
  `content_short` varchar(512) NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `description` varchar(512) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `thumb` varchar(256) DEFAULT NULL,
  `path` text,
  `content` text,
  `h1` varchar(512) DEFAULT NULL,
  `title` varchar(512) DEFAULT NULL,
  `keywords` varchar(512) DEFAULT NULL,
  `description` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clipboard`
--

CREATE TABLE IF NOT EXISTS `clipboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `page` varchar(32) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `keywords` varchar(512) NOT NULL,
  `description` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `info`
--

INSERT INTO `info` (`id`, `position`, `name`, `slug`, `page`, `content`, `keywords`, `description`) VALUES
(1, 2, 'Polityka prywatności', 'polityka-prywatnosci', 'privacy_policy', '<p>Oto nasze stanowisko w sprawie gromadzenia, przetwarzania i wykorzystywania, wprowadzonych przez użytkownik&oacute;w serwisu, adres&oacute;w e-mail i numer&oacute;w telefon&oacute;w.</p>\r\n\r\n<p>Jaka jest polityka serwisu dotycząca adres&oacute;w e-mail?<br />\r\nPodany podczas dodawania ogłoszenia adres e-mail służy do weryfikacji osoby zamieszczającej ogłoszenie, oraz jest adresem kontaktowym, na kt&oacute;ry zostają odesłane oferty od os&oacute;b zainteresowanych ogłoszeniem. Serwis przechowuje adresy e-mail, numery telefon&oacute;w itp. związane tylko z aktualnie dostępnymi ogłoszeniami, oraz adresy e-mail os&oacute;b, kt&oacute;re wielokrotnie zamieszczały ogłoszenia niezgodne z regulaminem serwisu, aby uniemożliwić im dodawanie kolejnych ogłoszeń.&nbsp;</p>\r\n\r\n<p>Czy adresy e-mail i numery telefon&oacute;w są udostępniane innym osobom, lub firmom?<br />\r\nNie udostępniamy takich danych&nbsp;osobom trzecim lub firmom. Jednak należy mieć na uwadze, że podane w treści ogłoszenia dane (numery telefon&oacute;w, adresy e-mail) mogą zostać &quot;zapamiętane&quot; przez inne osoby lub firmy w okresie, w kt&oacute;rym ogłoszenie jest widoczne w serwisie, w celu p&oacute;źniejszego ich wykorzystania niezgodnie z przeznaczeniem.</p>\r\n\r\n<p>Ciasteczka (pliki cookie) i sygnalizatory WWW (web beacon)</p>\r\n\r\n<p>Zastrzegamy sobie możliwość do wykorzystania plik&oacute;w cookie (ciasteczek) oraz tzw session storage. Pliki te są zapisywane na Twoim komputerze. Służą one do:</p>\r\n\r\n<p>a) dostosowania zawartości serwisu&nbsp;do preferencji użytkownika oraz optymalizacji korzystania ze stron internetowych;,</p>\r\n\r\n<p>b) utrzymania sesji użytkownika serwisu internetowego (po zalogowaniu), dzięki kt&oacute;rej użytkownik nie musi na każdej podstronie serwisu ponownie wpisywać loginu i hasła,</p>\r\n\r\n<p>c) dostarczania użytkownikom treści reklamowych bardziej dostosowanych do ich zainteresowań.</p>\r\n\r\n<p>Serwis wyświetla reklamy pochodzące od zewnętrznych dostawc&oacute;w. Dostawcy reklam (np. Google) mogą używać ciasteczek i sygnalizator&oacute;w WWW, mogą uzyskać informację o Twoim adresie IP i typie używanej przeglądarki, sprawdzić czy zainstalowany jest dodatek Flash itp. Dzięki ciasteczkom, sygnalizatorom i znajomości adresu IP dostawcy reklam mogą decydować o treści reklam.&nbsp;</p>\r\n\r\n<p>Przeglądarki internetowe, oraz niekt&oacute;re Firewalle, umożliwiają wyłączenie obsługi ciasteczek i sygnalizator&oacute;w, lub jej ograniczenie dla wszystkich lub tylko dla wybranych stron WWW. Jednak wyłączenie obsługi ciasteczek i sygnalizator&oacute;w może uniemożliwić poprawne działanie naszego serwisu.&nbsp;</p>\r\n\r\n<p>Wsp&oacute;łczesne przeglądarki umożliwiają przeglądanie stron www tzw. &quot;trybie prywatnym (incognito)&quot; co zazwyczaj oznacza, że wszystkie odwiedzone strony www nie zostaną zapamiętane w lokalnej historii przeglądarki, a pobrane ciasteczka zostaną skasowane po zakończeniu pracy z przeglądarką. Szczeg&oacute;łowy opis &quot;trybu prywatnego&quot; jest dostępny w pomocy przeglądarki.</p>\r\n\r\n<p>Wyłączenie &quot;ciasteczek&quot; w najbardziej popularnych przeglądarkach:</p>\r\n\r\n<p><strong>Google Chrome</strong></p>\r\n\r\n<p>Należy kliknąć na menu (w prawym g&oacute;rnym rogu), zakładka Ustawienia &gt; Pokaż ustawienia zaawansowane. W sekcji &bdquo;Prywatność&rdquo; trzeba kliknąć przycisk Ustawienia treści. W sekcji &bdquo;Pliki cookie&rdquo; można zmienić następujące ustawienia plik&oacute;w Cookie:</p>\r\n\r\n<ul>\r\n	<li>Usuwanie plik&oacute;w Cookie,</li>\r\n	<li>Domyślne blokowanie plik&oacute;w Cookie,</li>\r\n	<li>Domyślne zezwalanie na pliki Cookie,</li>\r\n	<li>Domyślne zachowywanie plik&oacute;w Cookie i danych stron do zamknięcia przeglądarki</li>\r\n	<li>Określanie wyjątk&oacute;w dla plik&oacute;w Cookie z konkretnych witryn lub domen</li>\r\n</ul>\r\n\r\n<p><strong>Mozilla Firefox</strong></p>\r\n\r\n<p>Z menu przeglądarki: Narzędzia &gt; Opcje &gt; Prywatność. Uaktywnić pole Program Firefox: &bdquo;będzie używał ustawień użytkownika&rdquo;. O ciasteczkach (cookies) decyduje zaznaczenie &ndash; bądź nie &ndash; pozycji Akceptuj ciasteczka.</p>\r\n\r\n<p><strong>Opera</strong></p>\r\n\r\n<p>Z menu przeglądarki: Narzędzie &gt; Preferencje &gt; Zaawansowane. O ciasteczkach decyduje zaznaczenie &ndash; bądź nie &ndash; pozycji Ciasteczka.</p>\r\n\r\n<p><strong>Safari</strong></p>\r\n\r\n<p>W menu rozwijanym Safari trzeba wybrać Preferencje i kliknąć ikonę Bezpieczeństwo.<br />\r\nW tym miejscu wybiera się poziom bezpieczeństwa w obszarze ,,Akceptuj pliki cookie&rdquo;.</p>\r\n', '', ''),
(2, 3, 'Regulamin', 'regulamin', 'rules', '<ol>\r\n	<li>Regulamin stanowi prawną podstawę określającą zasady korzystania z naszej witryny. Odwiedzając naszą witrynę, akceptujesz aktualne postanowienia tego Regulaminu oraz zobowiązujesz się do przestrzegania wszystkich zawartych w nim zasad.<br />\r\n	Dopełnieniem Regulaminu jest nasza Polityka prywatności.</li>\r\n	<li>Charakter i cel witryny<br />\r\n	Witryna jest&nbsp;serwisem&nbsp;informacyjno-promocyjnymi mającym&nbsp;na celu gromadzenie ofert sprzedaży nieruchomości&nbsp;w Polsce i za granicą.</li>\r\n	<li>Rejestracja użytkownik&oacute;w i ochrona danych<br />\r\n	Osoba, kt&oacute;ra pragnie dodać do bazy swoją ofertę musi dokonać bezpłatnej rejestracji. Po zakończeniu rejestracji dana osoba będzie miała możliwość zalogowania się do Panelu umożliwiającego dodanie oferty.<br />\r\n	Dane przekazywane podczas rejestracji oraz inne dane osobowe, kt&oacute;re mogą być zbierane od użytkownik&oacute;w podczas korzystania z witryn, są gromadzone i wykorzystywane zgodnie z zasadami zawartymi w naszej Polityce Prywatności oraz Ustawie o ochronie danych osobowych.</li>\r\n	<li>Prawa i możliwości użytkownik&oacute;w witryn<br />\r\n	Rejestrując się w witrynie:\r\n	<ul>\r\n		<li>zgadzasz się podczas rejestracji dostarczyć prawdziwych informacji</li>\r\n		<li>akceptujesz w pełni ten Regulamin korzystania z witryn</li>\r\n		<li>zobowiązujesz się do utrzymania w tajemnicy Twego hasła i zgadzasz się ponosić odpowiedzialność za wszystkie skutki spowodowane zar&oacute;wno swoim, jak i nieuprawnionym dostępem do witryn przez osoby, kt&oacute;rym udostępnisz sw&oacute;j login i hasło</li>\r\n		<li>zobowiązujesz się zawiadomić nas natychmiast o jakimkolwiek nieupoważnionym dostępie do witryn za pomocą Twojego hasła albo o zarejestrowaniu się w witrynach z Twojego konta pocztowego</li>\r\n	</ul>\r\n	</li>\r\n	<li>Respektowanie praw własności, zastrzeżenie praw autorskich<br />\r\n	Udostępniając witrynę, zwracamy szczeg&oacute;lną uwagę na konieczność respektowania praw własności intelektualnej. Informujemy, że witryna&nbsp;zawieraja&nbsp;dokumenty chronione prawem autorskim, znaki towarowe i inne oryginalne materiały, w szczeg&oacute;lności teksty, zdjęcia i grafikę, a przyjęty w witrynie&nbsp;wyb&oacute;r i układ prezentowanych w nim&nbsp;treści stanowi samoistny przedmiot ochrony prawnoautorskiej. Wszystkie loga, znaki towarowe oraz grafika zamieszczone na tych stronach są własnością ich tw&oacute;rc&oacute;w.<br />\r\n	Serwis zastrzega możliwość blokowania kont w dowolnym czasie bez podania przyczyny.</li>\r\n	<li>Aktywność użytkownik&oacute;w w witrynach, przesyłanie materiał&oacute;w<br />\r\n	Masz prawo przesyłania do witryn swoich informacji, materiał&oacute;w, dokument&oacute;w. Z tym prawem wiąże się z jednej strony możliwość oddziaływania na innych użytkownik&oacute;w witryny, a z drugiej dostęp do pewnych obszar&oacute;w naszego systemu komputerowego, wrażliwych na zachowania, kt&oacute;re mogą zakł&oacute;cić sprawność jego działania.<br />\r\n	W związku z tym w pełni zgadzasz się, że Twoja aktywność w ramach witryn i konta:\r\n	<ul>\r\n		<li>nie może być sprzeczna z normami kultury, z powszechnie obowiązującymi przepisami prawa, nie może być dla innych w żaden spos&oacute;b niebezpieczna i w związku z tym nie będziesz przesyłać do witryn lub wykorzystując mechanizmy witryn żadnych informacji i materiał&oacute;w, naruszających og&oacute;lnie przyjęte normy kultury, wulgarnych, nieprzyzwoitych, obscenicznych, nielegalnych, informacji materiał&oacute;w i wypowiedzi, kt&oacute;re wzywają do nietolerancji, nienawiści, przemocy, okrucieństwa czy naruszania prawa w jakikolwiek spos&oacute;b</li>\r\n		<li>nie możesz naruszać praw innych użytkownik&oacute;w witryn, szczeg&oacute;lnie prawa do poszanowania godności, prywatności, do ochrony danych osobowych, do swobody wypowiedzi i w związku z tym powstrzymasz się od wypowiedzi obraźliwych lub agresywnych oraz nie będziesz zbierać lub usuwać jakichkolwiek danych o innych użytkownikach witryn</li>\r\n		<li>nie będziesz wykorzystywać mechanizm&oacute;w witryn do rozsyłania materiał&oacute;w niechcianych, uznawanych za spam</li>\r\n		<li>zgadzasz się, aby wydawca witryn miał prawo do modyfikacji bądź usunięcia każdego Twojego wpisu bez podania przyczyny</li>\r\n	</ul>\r\n	</li>\r\n	<li>Zawiadomienie o naruszeniu praw autorskich<br />\r\n	Jeżeli uważasz, że Twoje lub czyjekolwiek prawa autorskie, prawa własności intelektualnej zostały w jakikolwiek spos&oacute;b bądź w jakiejkolwiek formie naruszone w witrynach, prosimy o przesłanie informacji w tej sprawie do wydawcy witryny.</li>\r\n	<li>Wyłączenia gwarancji<br />\r\n	W pełni akceptujesz, że wydawca udostępnia witrynę&nbsp;taką jaka jest.<br />\r\n	Zdajesz sobie sprawę, że opublikowane w witrynie materiały mogą zawierać informacje nieprawdziwe lub w inny spos&oacute;b nie odpowiadające Twoim potrzebom i oczekiwaniom. Zgadzasz się, że korzystasz z witryny&nbsp;tylko i wyłącznie na własną odpowiedzialność i własne ryzyko.<br />\r\n	Wszystkie informacje, materiały lub usługi dostarczane za pośrednictwem witryny oferowane są bez jakiejkolwiek gwarancji, w szczeg&oacute;lności:<br />\r\n	wydawca witryny nie zapewnia gwarancji dotyczących prawidłowości lub kompletności jakichkolwiek materiał&oacute;w, informacji lub ustaleń umieszczonych w witrynie.<br />\r\n	Wydawca witryny nie gwarantuje, iż każda zamieszczona oferta sprosta oczekiwaniom każdego Użytkownika co do merytorycznej zawartości, dokładności czy przydatności uzyskanych informacji.</li>\r\n	<li>Odsyłacze do innych witryn, ogłoszenia i reklamy<br />\r\n	W witrynie są publikowane odsyłacze do innych witryn. Mogą r&oacute;wnież być publikowane ogłoszenia firm - naszych Klient&oacute;w. Wydawca witryny nie ponosi żadnej odpowiedzialności za treść, ścisłość, zawartość lub dostępność informacji, do kt&oacute;rych prowadzą odsyłacze.</li>\r\n	<li>Rozstrzyganie spor&oacute;w<br />\r\n	W związku z możliwością wystąpienia spor&oacute;w związanych z korzystaniem z witryn:\r\n	<ul>\r\n		<li>zgadzasz się, że niniejszy Regulamin korzystania z witryn podlega prawu polskiemu - wszelkie spory mogące wyniknąć z wykonania zobowiązań zawartych w niniejszych warunkach będą rozstrzygane przez właściwy terytorialnie i rzeczowo sąd powszechny w Polsce.</li>\r\n		<li>zgadzasz się, że w przypadku, gdyby kt&oacute;rekolwiek z postanowień tego Regulaminu zostało uznane za niezgodne z prawem przez właściwy sąd, to decyzja sądu nie powoduje uchylenia innych postanowień tego Regulaminu i w związku z tym wszystkie inne postanowienia zachowują swoją moc.</li>\r\n		<li>zgadzasz się, że w przypadku niezgodności pomiędzy warunkami opisanymi w konkretnym dokumencie w witrynie&nbsp;i sygnowanym przez Wydawcę, a warunkami przedstawionymi w niniejszym Regulaminie, zawsze przyjmuje się za ważniejsze warunki określone w dokumencie, z wyjątkiem wyrażonych gdziekolwiek gwarancji, o kt&oacute;rych mowa była w rozdziale Wyłączenia gwarancji.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Zmiany regulaminu korzystania z witryny<br />\r\n	Zgadzasz się, że Wydawca serwisu zastrzega sobie wyłączne prawo do wprowadzania zmian w witrynie w dowolnym czasie bez potrzeby informowania użytkownik&oacute;w. Użytkownicy odpowiedzialni są za regularne przeglądanie tych warunk&oacute;w oraz zastrzeżeń, a następujące po wszelkich zmianach korzystanie z witryn jest r&oacute;wnoznaczne z ich akceptacją.</li>\r\n	<li>Dodawanie obiekt&oacute;w poprzez nasz zesp&oacute;ł<br />\r\n	Godząc się na dodanie oferty poprzez Zesp&oacute;ł w serwisie zakładamy, że prawa własności materiał&oacute;w kt&oacute;re udostępniasz i z kt&oacute;rych korzystasz przy dodaniu oferty (strona internetowa, zdjęcia itd.) należą do Ciebie.<br />\r\n	Godząc się na dodanie oferty poprzez Zesp&oacute;ł w serwisie zobowiązujesz się do posiadania praw własności materiał&oacute;w wykorzystanych przez serwis. W przeciwnym wypadku zobowiązujesz się do zmiany materiał&oacute;w wyświetlanych w w witrynie.</li>\r\n</ol>\r\n\r\n<p><span style="color:#696969;">Ostatnia aktualizacja regulaminu: 1.01.2017</span></p>\r\n', '', ''),
(3, 1, 'Kontakt', 'kontakt', 'contact', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs_mail`
--

CREATE TABLE IF NOT EXISTS `logs_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(64) NOT NULL,
  `action` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs_offer`
--

CREATE TABLE IF NOT EXISTS `logs_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs_user`
--

CREATE TABLE IF NOT EXISTS `logs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `name` varchar(64) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `mails`
--

INSERT INTO `mails` (`name`, `full_name`, `subject`, `message`) VALUES
('contact_form', 'Contact form', 'Wiadomość z formularza kontaktowego strony {title}', '<p>Witaj!</p>\r\n\r\n<p>Została do Ciebie wysłana wiadomość z formularza kontaktowego ze strony {base_url}</p>\r\n\r\n<p>Nadawca: {name}</p>\r\n\r\n<p>Adres email: {email}</p>\r\n\r\n<p>Wiadomość: {message}</p>\r\n'),
('finish_promote', 'Finish promote', 'Zakończenie promowania ogłoszenia {offer_name}', '<p>Witaj,</p>\r\n\r\n<p>Twoje ogłoszenie&nbsp;<a href=\"{offer_url}\">{offer_url}</a>&nbsp;na stronie&nbsp;<a href=\"{base_url}\">{base_url}</a>&nbsp;przestało&nbsp;być promowane.</p>\r\n\r\n<p>Wyr&oacute;żnij się na tle konkurencji i ponownie wypromuj swoje ogłoszenie!</p>\r\n\r\n<p>Więcej szczeg&oacute;ł&oacute;w na stronie&nbsp;<a href=\"{offer_url}\">{offer_url}</a>&nbsp;w zakładce &quot;Promuj&quot;</p>\r\n\r\n<p>Pozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
('offer', 'Offer', 'Wiadomość do ogłoszenia {offer_name}', '<p>Witaj!</p>\r\n\r\n<p>Została do Ciebie wysłana wiadomość ze strony <a href=\"{base_url}\">{base_url}</a> dotycząca ogłoszenia&nbsp;<a href=\"{offer_url}\">{offer_url}</a></p>\r\n\r\n<p>Nadawca: {name}</p>\r\n\r\n<p>Adres email: {email}</p>\r\n\r\n<p>Wiadomość: {message}</p>\r\n'),
('offer_start', 'Offer - start displaying', 'Aktywacja ogłoszenia {offer_name}', '<p>Witaj!</p>\r\n\r\n<p>Dodałeś ogłoszenie&nbsp;<a href=\"{offer_url}\">{offer_url}</a>&nbsp;na stronie&nbsp;<a href=\"{base_url}\">{base_url}</a>.</p>\r\n\r\n<p>Dziękujemy za zainteresowanie naszym serwisem</p>\r\n\r\n<p>Pozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n'),
('offer_start_not_logged', 'Offer - start displaying (not logged)', 'Aktywacja ogłoszenia {offer_name}', '<p>Witaj!</p>\r\n\r\n<p>Aby aktywować ogłoszenie&nbsp;{offer_name} kliknij w link:&nbsp;<a href=\"{offer_activate_link}\">{offer_activate_link}</a>&nbsp;</p>\r\n\r\n<p>Link do edycji ogłoszenia:&nbsp;<a href=\"{offer_edit_link}\">{offer_edit_link}</a>&nbsp;</p>\r\n\r\n<p>Pozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n'),
('offers_finish', 'Offers - finish displaying', 'Zakończenie wyświetlania ogłoszenia w serwisie {title}', '<p>Witaj!</p>\r\n\r\n<p>Twoje ogłoszenia&nbsp;przestały&nbsp;być aktywne w serwisie &nbsp;<a href=\"{base_url}\">{base_url}</a>&nbsp;w dniu {date}:</p>\r\n\r\n<p><b>{offers_list}</b></p>\r\n\r\n<p>Aby je ponownie aktywować zaloguj się na swoje konto:&nbsp;<a href=\"{base_url}/moje_ogloszenia\">{base_url}/moje_ogloszenia</a></p>\r\n\r\n<p>Dziękujemy za zainteresowanie naszym serwisem</p>\r\n\r\n<p><br />\r\nPozdrawiamy<br />\r\n{title}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>{link_logo}</p>\r\n'),
('offers_finish_not_logged', 'Offers - finish displaying (not logged)', 'Zakończenie wyświetlania ogłoszenia w serwisie {title}', '<p>Witaj!</p>\r\n\r\n<p>Twoje ogłoszenia&nbsp;przestały&nbsp;być aktywne w serwisie &nbsp;<a href=\"{base_url}\">{base_url}</a>&nbsp;w dniu {date}:</p>\r\n\r\n<p><b>{offers_list}</b></p>\r\n\r\n<p>Dziękujemy za zainteresowanie naszym serwisem</p>\r\n\r\n<p><br />\r\nPozdrawiamy<br />\r\n{title}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>{link_logo}</p>\r\n'),
('profile', 'Profile', 'Wiadomość do profilu {username}', '<p>Witaj!</p>\r\n\r\n<p>Została do Ciebie wysłana wiadomość ze strony&nbsp;<a href=\"{base_url}\">{base_url}</a>&nbsp;ze strony Twojego profilu {username}</p>\r\n\r\n<p>Nadawca: {name}</p>\r\n\r\n<p>Adres email: {email}</p>\r\n\r\n<p>Wiadomość: {message}</p>\r\n'),
('register', 'Register', 'Witamy na stronie {title}', '<p>Witaj na stronie <a href=\"{base_url}\">{title}</a>!<br />\r\n<br />\r\nDziękujemy za rejestrację.<br />\r\n<br />\r\nŻeby ją dokończyć kliknij w link: <a href=\"{activation_link}\">{activation_link}</a><br />\r\n<br />\r\nInformujemy że link aktywacyjny jest ważny 24 godziny, po tym czasie nieaktywowane konta zostają usuwane.<br />\r\nJeśli to nie Ty się rejestrowałeś to zignoruj tą wiadomość<br />\r\n<br />\r\nPozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n'),
('register_fb', 'Register by Facebook', 'Witamy na stronie {title}', '<p>Witaj na stronie <a href=\"{base_url}\">{title}</a>!<br />\r\n<br />\r\nDziękujemy za rejestrację poprzez konto Facebook.</p>\r\n\r\n<p>Twoje losowo wygenerowane hasło to: {password}<br />\r\n<br />\r\nPozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n'),
('register_google', 'Register by Google', 'Witamy na stronie {title}', '<p>Witaj na stronie <a href=\"{base_url}\">{title}</a>!<br />\r\n<br />\r\nDziękujemy za rejestrację poprzez konto Google.</p>\r\n\r\n<p>Twoje losowo wygenerowane hasło to: {password}<br />\r\n<br />\r\nPozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n'),
('reset_password', 'Reset password', 'Reset hasła - {title}', '<p>Witaj {username}!<br />\r\n<br />\r\nAby zresetować swoje hasło do serwisu <a href=\"{base_url}\">{title}</a> kliknij w następujący link: <a href=\"{reset_password_link}\">{reset_password_link}</a><br />\r\n<br />\r\nPozdrawiamy<br />\r\n{title}</p>\r\n'),
('start_promote', 'Start promote', 'Rozpoczęcie promowania ogłoszenia {offer_name} ', '<p>Witaj!&nbsp;</p>\r\n\r\n<p>Twoje ogłoszenie&nbsp;<a href=\"{offer_url}\">{offer_url}</a>&nbsp;na stronie&nbsp;<a href=\"{base_url}\">{base_url}</a>&nbsp;zaczęło&nbsp;być promowane.</p>\r\n\r\n<p>Dzięki temu będzie się wyr&oacute;żniać na tle konkurencji!</p>\r\n\r\n<p>Pozdrawiamy<br />\r\n{title}<br />\r\n<br />\r\n<a href=\"{base_url}\">{link_logo}</a></p>\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mails_queue`
--

CREATE TABLE IF NOT EXISTS `mails_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(64) NOT NULL,
  `action` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `priority` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `price_negotiate` int(1) DEFAULT NULL,
  `price_free` int(1) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `address_lat` decimal(10,6) DEFAULT NULL,
  `address_long` decimal(10,6) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `state2_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `description` mediumtext,
  `active` int(1) NOT NULL DEFAULT '0',
  `admin_confirmed` int(1) DEFAULT NULL,
  `promoted` int(1) NOT NULL DEFAULT '0',
  `promoted_date_start` datetime DEFAULT NULL,
  `promoted_date_end` date DEFAULT NULL,
  `code` varchar(64) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_start` datetime NOT NULL,
  `days` int(11) NOT NULL,
  `date_finish` datetime NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer_days`
--

CREATE TABLE IF NOT EXISTS `offer_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `length` int(11) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `option`
--

CREATE TABLE IF NOT EXISTS `option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  `kind` varchar(16) DEFAULT NULL,
  `required` int(1) DEFAULT NULL,
  `categories_all` int(11) DEFAULT NULL,
  `search` int(1) DEFAULT NULL,
  `select_choices` text,
  `pernament` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


--
-- Zrzut danych tabeli `options`
--

INSERT INTO `option` (`id`, `name`, `slug`, `position`, `kind`, `required`, `categories_all`, `search`, `select_choices`, `pernament`) VALUES
(1, 'Price', 'price', 0, 'price', 0, 1, 1, '', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `option_category`
--

CREATE TABLE IF NOT EXISTS `option_category` (
  `option_id` int(11) NOT NULL,
  `option_category` int(11) NOT NULL,
  KEY `option_id` (`option_id`),
  KEY `option_category` (`option_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `option_value`
--

CREATE TABLE IF NOT EXISTS `option_value` (
  `offer_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `value` text NOT NULL,
  KEY `offer_id` (`offer_id`),
  KEY `option_id` (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(16) NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `status` varchar(16) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` varchar(16) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment_dotpay`
--

CREATE TABLE IF NOT EXISTS `payment_dotpay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dotpay_id` varchar(7) NOT NULL,
  `operation_status` varchar(10) NOT NULL,
  `operation_number` varchar(15) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `operation_amount` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment_p24`
--

CREATE TABLE IF NOT EXISTS `payment_p24` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(32) NOT NULL,
  `p24_order_id` int(11) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `sandbox` int(1) NOT NULL,
  `errors` text,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment_paypal`
--

CREATE TABLE IF NOT EXISTS `payment_paypal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `status` varchar(25) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `folder` varchar(16) NOT NULL,
  `thumb` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `offer_id` (`offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reset_password`
--

CREATE TABLE IF NOT EXISTS `reset_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `used` int(1) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `code` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `session_offer`
--

CREATE TABLE IF NOT EXISTS `session_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `session_user`
--

CREATE TABLE IF NOT EXISTS `session_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `code` varchar(64) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `name` varchar(64) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('add_cost', '0'),
('add_offers_not_logged', '0'),
('ads_1', ''),
('ads_2', ''),
('ads_3', ''),
('ads_4', ''),
('ads_side_1', ''),
('ads_side_2', ''),
('allow_comments_fb_article', '1'),
('allow_comments_fb_profile', '1'),
('allow_refresh_offer','1'),
('analytics', ''),
('automatically_activate_offers', '1'),
('base_url', ''),
('black_list_email', ''),
('black_list_ip', ''),
('black_list_words',''),
('check_ip_user', '1'),
('code_body', ''),
('code_head', ''),
('code_style', ''),
('currency', 'zł'),
('days_before_refresh', '7'),
('days_default', '30'),
('days_refresh', '30'),
('days_to_remove', '14'),
('description', ''),
('dotpay_currency', 'PLN'),
('dotpay_id', ''),
('dotpay_pin', ''),
('dotpay_test_mode', ''),
('email', ''),
('enable_articles', '1'),
('facebook_api', ''),
('facebook_lang', 'pl_PL'),
('facebook_login', '0'),
('facebook_secret', ''),
('facebook_side_panel', '0'),
('favicon', '/upload/images/favicon.png'),
('footer_bottom', '<p class="mb-2">Strona pokazowa skryptu ogłoszeń NOTICE2</p>\r\n'),
('footer_text', '<p class="small">Project 2017 - 2018 by <a href="http://wyremski.pl" target="_blank" title="Creating websites">Kamil Wyremski</a></p>'),
('footer_top', '<p>NOTICE2 to uniwersalny skrypt dla strony z ogłoszeniami. Umożliwia on stworzenie własnej strony internetowej z ogłoszeniami lokalnymi, krajowymi lub stronę międzynarodową. Skrypt jest bardzo łatwy w obsłudze zar&oacute;wno przez administratora jak i klient&oacute;w serwisu. Dzięki dużej licznie opcji konfiguracyjnych jest bardzo uniwersalny.</p>\r\n\r\n'),
('generate_sitemap', '1'),
('google_login','0'),
('google_id',''),
('google_maps', ''),
('google_maps_api', ''),
('google_maps_lat', '52.072754'),
('google_maps_long', '19.028321'),
('google_maps_zoom_add', '5'),
('google_maps_zoom_offer', '10'),
('google_secret',''),
('hide_data_not_logged', '1'),
('hide_email', '0'),
('hide_phone', '0'),
('hide_views', '0'),
('index_box_subcategories','1'),
('index_page', '<h3 style="text-align: center;">WITAJ W SKRYPCIE OGŁOSZEŃ NOTICE2</h3>\r\n\r\n<p style="text-align: center;">Prezentujemy Ci jeden z najlepszych skrypt&oacute;w strony z ogłoszeniami online! Skrypt umożliwia stworzenie strony z ogłoszeniami w każdej kategorii, lokalnej albo og&oacute;lnopolskiej. Dostępnych jest bardzo wiele opcji konfiguracyjnych, dzięki czemu można dostosować go do indywidualnych wymagań.&nbsp;</p>\r\n'),
('keywords', ''),
('lang', 'pl'),
('limit_page', '10'),
('limit_page_index', '12'),
('limit_similar_offer', '3'),
('lk', ''),
('ln', ''),
('login_page', '<h2>Skrypt ogłoszeniowy Notice2</h2>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>Zakładając konto w naszym serwisie&nbsp;uzyskasz dostęp do:</h4>\r\n\r\n<ul>\r\n	<li>Zarządzania w łatwy spos&oacute;b dodanymi ogłoszeniami</li>\r\n	<li>Listy&nbsp;wszystkich swoich ogłoszeń w jednym miejscu</li>\r\n	<li>Możliwości&nbsp;dodawania&nbsp;ogłoszeń&nbsp;do schowka i zarządzanie nimi</li>\r\n	<li>Podglądu danych os&oacute;b wystawiających ogłoszenie</li>\r\n	<li>Możliwości dodania awatara do swojego konta</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n'),
('logo', '/upload/images/logo.png'),
('logo_facebook', '/upload/images/logo.png'),
('mail_attachment', '1'),
('number_char_title','128'),
('p24_crc', ''),
('p24_pos_id', ''),
('p24_merchant_id', ''),
('p24_sandbox', ''),
('pay_by_dotpay', '0'),
('pay_by_p24',''),
('pay_by_paypal', '0'),
('paypal_currency', 'PLN'),
('paypal_email', ''),
('paypal_lc', 'PL'),
('paypal_test_mode', ''),
('photo_add', '1'),
('photo_max', '10'),
('photo_max_height', '0'),
('photo_max_size', '0'),
('photo_max_width', '0'),
('photo_quality', '75'),
('promote_cost', '2.46'),
('promote_days', '7'),
('promote_only_by_author','0'),
('required_address','0'),
('required_category', '1'),
('required_phone','0'),
('required_state', '0'),
('required_subcategory', '0'),
('required_type', '0'),
('rss', '1'),
('rodo_alert', ''),
('rodo_alert_text', '<p>Szanowny użytkowniku,<br />\r\npragniemy Cię poinformować, że nasz serwis internetowy może personalizować treści marketingowe do Twoich potrzeb. W związku z tym danymi osobowymi, kt&oacute;re przetwarzamy są np. Tw&oacute;j adres IP, dane pozyskiwane na podstawie plik&oacute;w cookies lub podobnych mechanizm&oacute;w na Twoim urządzeniu o ile pozwolą one na zidentyfikowanie Ciebie.&nbsp;<br />\r\nJeżeli klikniesz przycisk &bdquo;Wyrażam zgodę na przetwarzanie moich danych osobowych&rdquo; lub zamkniesz to okno, to wyrazisz zgodę na przetwarzanie Twoich danych przez właściciela witryny i jego zaufanych partner&oacute;w.<br />\r\nWyrażenie zgody jest dobrowolne. Masz prawo do: dostępu do Twoich danych, ich sprostowania oraz usunięcia. Więcej informacji odnośnie przetwarzania danych osobowych znajdziesz w naszej <a href=\"/info/1,polityka-prywatnosci\">Polityce Prywatności.</a></p>\r\n\r\n<p>Lista zaufanych partner&oacute;w:<br />\r\nGoogle - na stronie są zamieszczone kody reklam Adsense oraz Google Analytics, kt&oacute;re mają na celu wyświetlanie spersonalizowanych treści oraz zbieranie informacji o zachowaniu użytkownika w celu poprawy strony.<br />\r\nFacebook - na stronie zamieszczony jest kod Facebook mający na celu wyświetlanie boksu z komentarzami oraz panelu bocznego.</p>\r\n'),
('search_box_address', '1'),
('search_box_category', '1'),
('search_box_distance', '1'),
('search_box_keywords', '1'),
('search_box_options', '1'),
('search_box_price', '1'),
('search_box_state', '1'),
('search_box_type', '1'),
('show_breadcrumbs', '1'),
('show_contact_form_offer', '1'),
('show_contact_form_profile', '1'),
('show_number_offers_in_categories', '1'),
('show_similar_offer', '1'),
('smtp', ''),
('smtp_host', ''),
('smtp_mail', ''),
('smtp_password', ''),
('smtp_port', '587'),
('smtp_secure', 'tls'),
('smtp_user', ''),
('social_facebook', '1'),
('social_google_plus', '1'),
('social_pinterest', '1'),
('social_twitter', '1'),
('social_wykop', '1'),
('template', 'default'),
('title', 'Notice2 - skrypt ogłoszeń'),
('url_facebook', ''),
('url_privacy_policy', 'polityka-prywatnosci'),
('url_rules', 'regulamin'),
('watermark', '/upload/images/watermark.png'),
('watermark_add', '1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `slider`
--

INSERT INTO `slider` (`id`, `content`) VALUES
(1, '<p><img alt=\"Notice2\" class=\"d-block w-100\" src=\"/upload/images/slider1.jpg\" /></p>\r\n\r\n<div class=\"carousel-caption d-none d-md-block\">\r\n<h3>Skrypt ogłoszeniowy NOTICE 2</h3>\r\n\r\n<p>To jest pokazowa wersja skryptu. Prosimy nie dodawać prawdziwych ogłoszeń</p>\r\n</div>\r\n'),
(2, '<p><img alt=\"Notice2\" class=\"d-block w-100\" src=\"/upload/images/slider2.jpg\" /></p>\r\n\r\n<div class=\"carousel-caption d-none d-md-block\">\r\n<h3>STW&Oacute;RZ WŁASNY PORTAL OGŁOSZENIOWY</h3>\r\n\r\n<p>I zacznij zarabiać w ciągu kilku minut!</p>\r\n</div>\r\n'),
(3, '<p><img alt=\"Notice2\" class=\"d-block w-100\" src=\"/upload/images/slider3.jpg\" /></p>\r\n\r\n<div class=\"carousel-caption d-none d-md-block\">\r\n<h3>Znajdź szybko dokładnie to czego szukasz!</h3>\r\n\r\n<p>Dzięki zaawansowanej wyszukiwarce możesz znaleźć ogłoszenie idealnie spełniające&nbsp;Twoje oczekiwania.</p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `moderator` int(1) DEFAULT NULL,
  `description` text,
  `address` varchar(512) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `state2_id` int(11) DEFAULT NULL,
  `activation_code` varchar(64) NOT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  `register_fb` int(1) DEFAULT NULL,
  `register_google` int(1) DEFAULT NULL,
  `register_ip` varchar(40) NOT NULL,
  `activation_date` datetime DEFAULT NULL,
  `activation_ip` varchar(40) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `clipboard`
--
ALTER TABLE `clipboard`
  ADD CONSTRAINT `clipboard_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `clipboard_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`);

--
-- Ograniczenia dla tabeli `option_category`
--
ALTER TABLE `option_category`
  ADD CONSTRAINT `option_category_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`),
  ADD CONSTRAINT `option_category_ibfk_2` FOREIGN KEY (`option_category`) REFERENCES `category` (`id`);

--
-- Ograniczenia dla tabeli `option_value`
--
ALTER TABLE `option_value`
  ADD CONSTRAINT `option_value_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`),
  ADD CONSTRAINT `option_value_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`);

--
-- Ograniczenia dla tabeli `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `reset_password_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
