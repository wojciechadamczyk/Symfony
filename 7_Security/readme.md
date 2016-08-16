# PHP &ndash; Symfony
## Security

## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

## Część A &ndash; Statyczny user

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `project_static_user` (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się &ndash; Symfony będzie poprawnie działać).
Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z ćwiczeń dotyczących podstaw Symfony).

### Zadanie A2 &ndash; nowy kontroler
W projekcie stwórz kontroler z dwoma akcjami:
  * `/all`,
  * `/restricted`.

Następnie skonfiguruj Symfony tak, żeby akcja `restricted` była dostępna tylko po zalogowaniu.
Zrób to używając komponentu Security i statycznych użytkowników (wpisanych na stałe do plików konfiguracyjnych).

## Część B &ndash; FosUserBundle

### Zadanie B1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `project_fos_user` (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się &ndash; Symfony będzie poprawnie działać).
Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z ćwiczeń dotyczących podstaw Symfony).

### Zadanie B2
W nowym projekcie uruchom `FosUserBundle`. Projekt &ndash; póki co &ndash; ma dawać następujące możliwości:
* logowania,
* rejestracji,
* wylogowywania,
* edycji swojego konta.

Poza podstawowymi informacjami, które trzyma `FosUserBundle`, nasz użytkownik powinien jeszcze trzymać swój opis.
Spróbuj podmienić widoki na własne (żeby nie używać widoków przegotowanych przez FOS).

## Część C &ndash;

### Zadanie C1
Do ostatnich warsztatów doimplementuj funkcjonalność użytkowników. Każdy z nich powinien mieć swoją książkę adresową.
Stwórz potrzebną Ci encję i połącz ją z kontaktami (relacja wiele do jednego &ndash; jednokierunkowa).

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
