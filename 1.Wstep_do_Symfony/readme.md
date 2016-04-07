# PHP - Symfony 2 - Wstep do Symfony2 

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_1 (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Uruchom server developerski.
  2. WejdŸ na stronê http://192.168.33.22:8080/ - zobacz czy wyœwietla Ci siê strona startowa Symfony.
  3. Je¿eli tak to wejdŸ do profilera – zobacz jakie ma opcje, i czego mo¿esz siê z niego dowiedzieæ.
  4. WejdŸ na stronê http://192.168.33.22:8080/noSuchPage. Zobacz jaki komunikat b³êdu siê wyœwietla.
  5. Doinstaluj za pomoc¹ odpowiedniej komendy konsolowej wszystkie potrzebne zasoby (assety).
  6. WejdŸ jeszcze raz na stronê http://192.168.33.22:8080/noSuchPage. Czy jej wygl¹d siê jakoœ zmieni³?

### Æwiczenie 2 - Dodawanie Bundla.
W projekcie o nazwie projekt_1:
  1. Dodaj nowego bundla (korzystaj¹c z komendy konsolowej) o nazwie CodersLabBundle. Pamiêtaj o wybraniu annotacji, stworzeniu automatyczne ca³ego katalogu i automatycznego dopisania informacji do Kernela i Routingu.
  2. WejdŸ pod adres http://192.168.33.22:8080/hello/world. Je¿eli widzisz stronê która wyœwietla napis Hello World twój bundle dzia³a poprawnie.
  3. Otwórz projekt w PHPStorm i przejrzyj katalog swojego nowego bundla.
  
  
### Æwiczenie 3 -  Usuwanie Bundla.
W projekcie o nazwie projekt_1 usuñ domyœlnego bundla (o nazwie AppBundle). ¯eby to zrobiæ:
  1. Usuñ odpowiedni wpis znajduj¹cy siê w pliku /app/config/routing.yml,
  2. Usuñ kod tworz¹cy nowy obiekt Bundla w pliku /app/AppKernel.php,
  3. Usuñ katalog Bundla.

¯eby potwierdziæ ¿e defaultowy Bundle zosta³ poprawnie usuniêty sprawdŸ nastêpuj¹ce rzeczy:
  1. WejdŸ na stronê http://192.168.33.22:8080/ - powinien siê pokazaæ b³¹d: No route found for "GET /"
  2. WejdŸ pod adres http://192.168.33.22:8080/hello/world. Strona powinna siê poprawnie ³adowaæ.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request