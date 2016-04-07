# PHP - Symfony 2 - Formularze

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_form (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Tweet. 
Wygeneruj model Tweet. Tweet ma zawieraæ:
  * Id,
  * Nazwê,
  * Tekst.
Wygeneruj dla niego Kontroler z nastêpuj¹cymi akcjami:
  * create,
  * new,
  * showAll,
Na razie napisz akcjê showAll która wyœwietli tytu³y wszystkich Tweetów w bazie danych.
  
### Æwiczenie 3 - Tworzenie Tweeta.
Napisz akcje `/create` i `/new` dla Tweeta. Akcja new ma wyœwietlaæ formularz, akcja create na jego podstawie tworzyæ now¹ encjê i zapisywaæ do bazy danych.

### Æwiczenie 4 - Modyfikacja Tweeta.
Dopisz akcjê `/update/{id}`.

Je¿eli wejdziemy na ni¹ metod¹ GET to ma wczytaæ Tweet o podanym id i nastêpnie wyœwietliæ do niego formularz do edycji.

Je¿eli wejdziemy na ni¹ metod¹ POST to powinna zapamiêtaæ wys³ane informacjê do bazy danych.

### Æwiczenie Dodatkowe.
Popraw rozwi¹zania do zajêæ z Doctrine i modeli tak ¿eby korzystaæ z formularzy wbudowanych w Symfony.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request