# Per aprire il progetto

Aprire un primo terminale su VScode:

```
npm install
npm run dev
```

Aprire un secondo terminale su VScode:

```
composer install
php artisan serve
```

Poi copia il file `.env.example` in `.env` e configura la connessione al Database

## Obiettivi del progetto

Creare un progetto Laravel 9 per gestire un archivio di fumetti.

### Milestone 1

Tramite gli appositi comandi artisan creare un model con relativa migration e un resource controller.

### Milestone 2

Iniziare a definire le prime operazioni CRUD con le relative view:

    index()
    show()
    create()
    store()

Bonus:

creare il seeder per la tabella comics utilizzando il file in allegato.

### Milestone 3

Completare le operazioni CRUD.

Bonus:
tramite javascript (integrato in Bootstrap), quando l'utente clicca sul pulsante "delete", chiedere conferma della cancellazione, prima di eliminare l'elemento.
