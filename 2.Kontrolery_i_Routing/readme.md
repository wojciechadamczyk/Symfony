# PHP - Symfony 2 - Kontrolery i Routing 

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_controler (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie `first` za pomoc¹ odpowiedniej komendy konsolowej. Podczas generacji nie dodawaj mu ¿adnych akcji.

Nastêpnie stwórz akcje która bêdzie przypisana do adresu `/helloWorld`. Akcja ta ma wypisywaæ na stronie przywitanie. Pamiêtaj o:
  1. Stworzeniu odpowiedniej adnotacji do routingu,
  2. Zwróceniu obiektu typu `Response` z akcji (nie zapomnij o do³¹czeniu zalinkowaniu klasy Response poprzez use – patrz slajd 12),
  3. Odpowiednim nazwaniu metody (musi siê koñczyæ na s³owo Action).
  
  
### Æwiczenie 3 - Slug.
Stwórz now¹ akcjê przypisan¹ do adresu `/goodbye/{username}` gdzie `{username}` jest slugiem. Akcja ma wyœwietlaæ napis: „Goodbye ” + nazwa przekazana przez slug.

### Æwiczenie 4 - Slug 2.
Stwórz now¹ akcjê przypisan¹ do adresu `/welcome/{name}/{surname}` gdzie `{name}` i `{surname}` s¹ slugami. Akcja ma wyœwietlaæ napis: „Welcome ” + dane przekazane przez slugi.

Nadaj slugom wartoœci domyœlne (np. twoje imiê i nazwisko).

### Æwiczenie 5 - Slug 3.
Stwórz now¹ akcjê przypisan¹ do adresu `/showPost/{id}` gdzie `{id}` jest slugiem. Akcja ma wyœwietlaæ napis: „Showing post ” + id. Dodaj odpowiednie adnotacje ¿eby wymusiæ ¿eby id by³o liczb¹.

### Æwiczenie 6 - Metody.
Stwórz 2 akcje:
  1. Jedna akcja ma byæ przypisana do adresu `/form` i metody `GET`. Ma ona wyœwietlaæ formularz z polem do wpisania tekstu. Formularz ma wskazywaæ na ten sam adres.
  2. Druga akcja ma byæ przypisana do adresu `/form` i metody `POST`. Akcja na razie ma tylko wyœwietlaæ napis „Formularz przyjêty”. Na razie nie przejmuj siê przes³anymi danymi.
  
### Æwiczenie 7 - Przedrostek.
Dodaj do ca³ego kontrolera przedrostek `/first`. Zobacz jak zmieni³y siê adresy wszystkich stron które do tej pory stworzy³eœ.

### Æwiczenie 8 - Obs³uga formularza.
Do drugiej akcji z zadania 6 dopisz kod który poprawnie bêdzie poprawnie bêdzie odczytywaæ dane z formularza i wyœwietliæ je na stronie.

### Æwiczenie 9 - Sesja.
Stwórz 2 akcje:
  1. Pierwsza ma byæ przypisana do adresu /setSession/{value}. Ma zapisywaæ do sesji przekazan¹ wartoœæ (pod kluczem „usertext”),
  2. Druga ma byæ przypisana do adresu /getSession i wczytywaæ zawartoœæ sesji bêd¹c¹ pod kluczem „usertext” i wyœwietlaæ j¹ na stronie (je¿eli w sesji nie ma ¿adnej wartoœci to powinna siê wyœwietlaæ odpowiednia informacja).

### Æwiczenie 10 - Ciasteczko.
Stwórz 3 akcje:
  1. Pierwsza ma byæ przypisana do adresu /setCookie/{value}. Ma zapisywaæ do ciasteczka przekazan¹ wartoœæ (pod kluczem „myCookie”),
  2. Druga ma byæ przypisana do adresu /getCookie i wczytywaæ zawartoœæ ciasteczka „myCookie” i wyœwietlaæ j¹ na stronie (je¿eli nie ma nic w tym ciasteczku to powinna siê wyœwietliæ odpowiednia informacja),
  3. Trzecia ma byæ przypisana do adresu /deleteCookie i powinna kasowaæ ciasteczko o nazwie „myCookie”.

### Æwiczenie 11 - Przekierowanie.
Napisz akcje przypisan¹ do adresu /redirectMe i powinna przekierowywaæ do akcji z punktu 3. Pamiêtaj o podaniu danych do sluga.

### Æwiczenie 12 - Generowanie linków.
Napisz akcje przypisan¹ do adresu /showAllLinks. Akcja powinna wyœwietlaæ linki do wszystkich akcji które dziœ zrobiliœmy.
Wygeneruj linki na dwa sposoby: raz u¿ywaj¹c œcie¿ek wzglêdnych, drugi raz u¿ywaj¹c ca³kowitych.
Pamiêtaj o przekazywaniu slugów je¿eli jest taka potrzeba.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request