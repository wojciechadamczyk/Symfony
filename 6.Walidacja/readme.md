# PHP - Symfony 2 - Walidacja

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_validation (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Encja Ksi¹¿ka. 
W projekcie stwórz now¹ encjê – ksi¹¿kê. Encja ma posiadaæ nastêpuj¹ce pola i walidacje:
  1. Id,
  2. Title – napis, co najmniej 5 znaków,
  3. Raiting – float w przedziale od 0.00 do 10.00,
  4. Description – tekst, maksymalnie 600 znaków,
  5. Pages – int, wiêkszy od 0.
  
### Æwiczenie 3 - Encja Autor.
W projekcie stwórz now¹ encjê – Autora. Encja ma posiadaæ nastêpuj¹ce pola i walidacje:
  1. Id,
  2. Name – napis, co najmniej 5 znaków,
  3. Description – tekst, maksymalnie 600 znaków,
  4. Age – int, co najmniej 18,

### Æwiczenie 4 - Relacje.
Po³¹cz stworzone encje relacj¹ wiele do jednego (dwukierunkow¹). Pamiêtaj o wygenerowaniu odpowiednich seterów i geterów dla relacji (u¿yj do tego konsoli).
Pamiêtaj o walidacji – w przypadku ksi¹¿ki autor musi byæ nastawiony (nie mo¿e byæ null)!

### Æwiczenie 5 - CRUD.
Stwórz kontrolery dla ksi¹¿ki i autora. Stwórz w nich wszystkie akcje potrzebne do implementacji CRUD.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request