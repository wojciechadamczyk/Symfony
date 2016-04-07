# PHP - Symfony 2 - Walidacja

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_validation (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Encja Ksi��ka. 
W projekcie stw�rz now� encj� � ksi��k�. Encja ma posiada� nast�puj�ce pola i walidacje:
  1. Id,
  2. Title � napis, co najmniej 5 znak�w,
  3. Raiting � float w przedziale od 0.00 do 10.00,
  4. Description � tekst, maksymalnie 600 znak�w,
  5. Pages � int, wi�kszy od 0.
  
### �wiczenie 3 - Encja Autor.
W projekcie stw�rz now� encj� � Autora. Encja ma posiada� nast�puj�ce pola i walidacje:
  1. Id,
  2. Name � napis, co najmniej 5 znak�w,
  3. Description � tekst, maksymalnie 600 znak�w,
  4. Age � int, co najmniej 18,

### �wiczenie 4 - Relacje.
Po��cz stworzone encje relacj� wiele do jednego (dwukierunkow�). Pami�taj o wygenerowaniu odpowiednich seter�w i geter�w dla relacji (u�yj do tego konsoli).
Pami�taj o walidacji � w przypadku ksi��ki autor musi by� nastawiony (nie mo�e by� null)!

### �wiczenie 5 - CRUD.
Stw�rz kontrolery dla ksi��ki i autora. Stw�rz w nich wszystkie akcje potrzebne do implementacji CRUD.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request