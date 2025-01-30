# 🎮 Aplikacja do Losowania Map w CS2

Prosta aplikacja do losowania map do gry w **Counter-Strike 2** (CS2). Projekt został stworzony w celu ułatwienia wyboru mapy podczas rozgrywek, zapewniając losowy wybór mapy spośród dostępnych opcji. 


🌐 Dostępna online pod tym [Linkiem](https://sandbox-lt-247bdf7f7b20.herokuapp.com/)

## Technologie 🛠

- **PHP** – Backend aplikacji.
- **JavaScript** – Obsługa interakcji na froncie.
- **Symfony** – Framework PHP, który ułatwia rozwój aplikacji.
- **HTML/CSS** – Prosty interfejs użytkownika.
- **PostgreSQL** - Baza do przechowywania dancyh

## Instalacja 👷‍♂️

Aby uruchomić aplikację lokalnie, wykonaj poniższe kroki:

### 1. Klonowanie repozytorium 

```
git clone https://github.com/Tark0s/Sandbox.git
```

### 2. Instalacja zależności 

Zainstaluj zależności PHP za pomocą Composer:

```
cd sandbox
composer install
```

### 3. Konfiguracja środowiska

Dostosuj zmienne środowiskowe do swoich potrzeb (np. baza danych, klucze API itp.).

### 4. Uruchomienie serwera

Aby uruchomić serwer lokalny Symfony:

```
symfony serve
```

Aplikacja powinna być dostępna pod adresem `http://localhost:8000`.

## Jak korzystać z aplikacji

1. Przejdź do strony aplikacji w przeglądarce.
2. Kliknij przycisk "Pick", aby aplikacja wylosowała jedną mapę spośród wybranych.
