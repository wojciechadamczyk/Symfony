# PHP &ndash; Symfony
## Wstęp do Symfony

## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.


W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

### Zadanie 1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie **projekt_1** (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się &ndash; Symfony będzie  działać poprawnie).
Następnie wykonaj następujące kroki:
  1. Uruchom serwer deweloperski.
  2. Wejdź na stronę http://192.168.33.22:8080 i zobacz, czy wyświetla Ci się strona startowa Symfony.
  3. Jeśli strona startowa się wyświetla, to wejdź do profilera. Zobacz, jakie ma opcje i czego możesz się z niego dowiedzieć.
  4. Wejdź na stronę http://192.168.33.22:8080/noSuchPage. Zobacz, jaki komunikat błędu się wyświetla.
  5. Doinstaluj za pomocą odpowiedniej komendy konsolowej wszystkie potrzebne zasoby (assety).
  6. Wejdź jeszcze raz na stronę http://192.168.33.22:8080/noSuchPage. Czy jej wygląd się jakoś zmienił?

### Zadanie 2 &ndash; dodawanie bundla
W projekcie o nazwie **projekt_1** wykonaj następujące kroki:
  1. Dodaj nowego bundla (korzystając z komendy konsolowej) o nazwie CodersLabBundle. Pamiętaj o wybraniu annotacji, stworzeniu automatyczne całego katalogu i automatycznego dopisania informacji do Kernela i Routingu.
  2. Wejdź pod adres http://192.168.33.22:8080/hello/world. Jeżeli widzisz stronę, która wyświetla napis **Hello World** &ndash; Twój bundle działa poprawnie.
  3. Otwórz projekt w PHPStorm i przejrzyj katalog swojego nowego bundla.

### Zadanie 3 &ndash; usuwanie bundla
W projekcie o nazwie **projekt_1** usuń domyślnego bundla (o nazwie AppBundle) następująco:
  1. Usuń odpowiedni wpis znajdujący się w pliku `/app/config/routing.yml`,
  2. Usuń kod tworzący nowy obiekt Bundla w pliku `/app/AppKernel.php`,
  3. Usuń katalog Bundla.

Żeby potwierdzić, że domyślny Bundle został poprawnie usunięty, wykonaj następujące czynności:
  1. Wejdź na stronę http://192.168.33.22:8080/ &ndash; powinien się pokazać błąd: No route found for "GET /"
  2. Wejdź pod adres http://192.168.33.22:8080/hello/world. Strona powinna się poprawnie ładować.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
