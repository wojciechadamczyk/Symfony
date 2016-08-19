# PHP &ndash; Symfony
## kontrolery i routing

## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

## Część A &ndash; Podstawowy Kontroler

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie **projekt_controler** (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się – Symfony będzie działać poprawnie).

Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z zadań dotyczących Podstaw Symfony).

### Zadanie A2 &ndash; nowy kontroler
Wygeneruj nowy kontroler o nazwie `first` za pomocą odpowiedniej komendy konsolowej. Podczas generacji nie dodawaj mu żadnych akcji.
Następnie stwórz akcję, która będzie przypisana do adresu `/helloWorld`. Akcja ta ma wypisywać na stronie przywitanie. Pamiętaj o:
  1. Stworzeniu odpowiedniej adnotacji do routingu.
  2. Zwróceniu obiektu typu `Response` z akcji (nie zapomnij o dołączeniu zalinkowaniu klasy `Response` poprzez use &ndash; patrz slajd 12),
  3. Odpowiednim nazwaniu metody (musi się kończyć słowem **Action**).

## Część B &ndash; Podstawowy Routing

### Zadanie B1 &ndash; slug 1
Stwórz nową akcję przypisaną do adresu `/goodbye/{username}`, gdzie `{username}` jest slugiem. Akcja ma wyświetlać napis: „Goodbye ” + nazwa przekazana przez slug.

### Zadanie B2 &ndash; slug 2
Stwórz nową akcję przypisaną do adresu `/welcome/{name}/{surname}`, gdzie `{name}` i `{surname}` są slugami. Akcja ma wyświetlać napis: „Welcome ” + dane przekazane przez slugi.
Nadaj slugom wartości domyślne (np. Twoje imię i nazwisko).

### Zadanie B3 &ndash; slug 3
Stwórz nową akcję przypisaną do adresu `/showPost/{id}` gdzie `{id}` jest slugiem. Akcja ma wyświetlać napis: „Showing post ” + **id**. Dodaj odpowiednie adnotacje, tak aby **id** było liczbą.

### Zadanie B4 &ndash; metody
Stwórz dwie akcje:
  1. Pierwsza akcja ma być przypisana do adresu `/form` i metody `GET`. Ma ona wyświetlać formularz z polem do wpisania tekstu. Formularz ma wskazywać na ten sam adres.
  2. Druga akcja ma być przypisana do adresu `/form` i metody `POST`. Akcja ma &ndash; póki co &ndash; wyświetlać napis „Formularz przyjęty”. Nie przejmuj się &ndash; w tym etapie &ndash; przesłanymi danymi.

### Zadanie B5 &ndash; przedrostek
Dodaj do całego kontrolera przedrostek `/first`. Zobacz, jak zmieniły się adresy wszystkich do tej pory stworzonych przez Ciebie stron.

## Część C &ndash; Kontroler

### Zadanie C1 &ndash; obsługa formularza
Do drugiej akcji z zadania B4 dopisz kod, który będzie poprawnie będzie odczytywał dane z formularza i wyświetli je na stronie.

### Zadanie C2 &ndash; sesja
Stwórz dwie akcje:
  1. Pierwsza ma być przypisana do adresu `/setSession/{value}`. Ma zapisywać do sesji przekazaną wartość (pod kluczem „usertext”),
  2. Druga ma być przypisana do adresu `/getSession` i wczytywać zawartość sesji będącą pod kluczem „usertext” i wyświetlać ją na stronie (jeżeli w sesji nie ma żadnej wartości &ndash; to powinna się wyświetlać odpowiednia informacja).

### Zadanie C3 &ndash; ciasteczko
Stwórz trzy akcje:
  1. Pierwsza ma być przypisana do adresu `/setCookie/{value}`. Ma zapisywać do ciasteczka przekazaną wartość (pod kluczem „myCookie”).
  2. Druga ma być przypisana do adresu `/getCookie` i wczytywać zawartość ciasteczka „myCookie” i wyświetlać ją na stronie (jeżeli nie ma nic w tym ciasteczku &ndash; to powinna się wyświetlić odpowiednia informacja).
  3. Trzecia ma być przypisana do adresu `/deleteCookie` i powinna kasować ciasteczko o nazwie **myCookie**.

### Zadanie C4 &ndash; przekierowanie
Napisz akcje przypisaną do adresu `/redirectMe` i powinna przekierowywać do akcji z punktu 3. poprzedniego zadania. Pamiętaj o podaniu danych do sluga.

### Zadanie C5 &ndash; generowanie linków
Napisz akcje przypisaną do adresu `/showAllLinks`. Akcja powinna wyświetlać linki do wszystkich akcji, które dziś zrobiliśmy.
Wygeneruj linki na dwa sposoby:
* używając ścieżek względnych,
* używając całkowitych.

Pamiętaj o przekazywaniu slugów, jeżeli jest taka potrzeba.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
