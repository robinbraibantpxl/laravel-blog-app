# Opzetten van het project
Na het clonen het project moet je volgende stappen nog uitvoeren:
- Installeer de dependecies met `composer install`
- Maak een `.env` bestand aan en kopieer hierin de inhoud van het `.env.example` bestand
- Genereer een nieuwe `App Key` met het commando `php artisan key:generate`
- Maak een databank aan en pas de gegevens in het `.env` bestand aan naar de gegevens van jouw databank
- Voer tenslotte het commando `php artisan migrate` uit om de migraties toe te passen op de databank.
