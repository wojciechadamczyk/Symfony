# PHP - Symfony 2 - Formularze

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_form (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Tweet. 
Wygeneruj model Tweet. Tweet ma zawiera�:
  * Id,
  * Nazw�,
  * Tekst.
Wygeneruj dla niego Kontroler z nast�puj�cymi akcjami:
  * create,
  * new,
  * showAll,
Na razie napisz akcj� showAll kt�ra wy�wietli tytu�y wszystkich Tweet�w w bazie danych.
  
### �wiczenie 3 - Tworzenie Tweeta.
Napisz akcje `/create` i `/new` dla Tweeta. Akcja new ma wy�wietla� formularz, akcja create na jego podstawie tworzy� now� encj� i zapisywa� do bazy danych.

### �wiczenie 4 - Modyfikacja Tweeta.
Dopisz akcj� `/update/{id}`.

Je�eli wejdziemy na ni� metod� GET to ma wczyta� Tweet o podanym id i nast�pnie wy�wietli� do niego formularz do edycji.

Je�eli wejdziemy na ni� metod� POST to powinna zapami�ta� wys�ane informacj� do bazy danych.

### �wiczenie Dodatkowe.
Popraw rozwi�zania do zaj�� z Doctrine i modeli tak �eby korzysta� z formularzy wbudowanych w Symfony.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request