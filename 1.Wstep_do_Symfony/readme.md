# PHP - Symfony 2 - Wstep do Symfony2 

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_1 (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Uruchom server developerski.
  2. Wejd� na stron� http://192.168.33.22:8080/ - zobacz czy wy�wietla Ci si� strona startowa Symfony.
  3. Je�eli tak to wejd� do profilera � zobacz jakie ma opcje, i czego mo�esz si� z niego dowiedzie�.
  4. Wejd� na stron� http://192.168.33.22:8080/noSuchPage. Zobacz jaki komunikat b��du si� wy�wietla.
  5. Doinstaluj za pomoc� odpowiedniej komendy konsolowej wszystkie potrzebne zasoby (assety).
  6. Wejd� jeszcze raz na stron� http://192.168.33.22:8080/noSuchPage. Czy jej wygl�d si� jako� zmieni�?

### �wiczenie 2 - Dodawanie Bundla.
W projekcie o nazwie projekt_1:
  1. Dodaj nowego bundla (korzystaj�c z komendy konsolowej) o nazwie CodersLabBundle. Pami�taj o wybraniu annotacji, stworzeniu automatyczne ca�ego katalogu i automatycznego dopisania informacji do Kernela i Routingu.
  2. Wejd� pod adres http://192.168.33.22:8080/hello/world. Je�eli widzisz stron� kt�ra wy�wietla napis Hello World tw�j bundle dzia�a poprawnie.
  3. Otw�rz projekt w PHPStorm i przejrzyj katalog swojego nowego bundla.
  
  
### �wiczenie 3 -  Usuwanie Bundla.
W projekcie o nazwie projekt_1 usu� domy�lnego bundla (o nazwie AppBundle). �eby to zrobi�:
  1. Usu� odpowiedni wpis znajduj�cy si� w pliku /app/config/routing.yml,
  2. Usu� kod tworz�cy nowy obiekt Bundla w pliku /app/AppKernel.php,
  3. Usu� katalog Bundla.

�eby potwierdzi� �e defaultowy Bundle zosta� poprawnie usuni�ty sprawd� nast�puj�ce rzeczy:
  1. Wejd� na stron� http://192.168.33.22:8080/ - powinien si� pokaza� b��d: No route found for "GET /"
  2. Wejd� pod adres http://192.168.33.22:8080/hello/world. Strona powinna si� poprawnie �adowa�.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request