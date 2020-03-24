# Progetto COVID-19
> Implementazione di un semplice sito WEB con Codeigniter per la visualizzazione di dati su COVID-19

## ATTENZIONE

>Il progetto è ancora in fase di sviluppo, non è ancora stata rilasciata una versione da ritenersi stabile.

Molte pagine potrebberò essere lente a caricare a causa della cattiva gestione della richiesta dei dati (*vedi Idee per il futuro in fondo*)

## Getting started

### Supporti esterni
All'interno del progetto mi sono appoggiato alle seguenti librerie open souce per migliorare l'estetica e le funzionalità:
 - Boostrap v.4: permette l'utilizzo di molti fogli di stile (`CSS`) per il rendering grafico
 - FontAwersome (consigliato anche da Bootstrap): per le icone
 - JQuery: nota libreria per migliorare e velocizzare il codice in Javascript
 - [Chart.JS](https://www.chartjs.org/): per i grafici
 - [LeafletJS](https://leafletjs.com/): per le mappe

### Fonte di dati

I dati sono forniti da una repository gestita dalla protezione civile ([link](https://github.com/pcm-dpc/COVID-19)). I dati sono forniti in maniera gratuita e continuativa, e sono aggiornati una volta al giorno, in concomitanza con l'uscita del bollettino nazionale.

## Sviluppo

### Idea principale

Il progetto si basa su 3 controller come segue

|Controller   |Funzioni   |Note   |
|---|---|---|
|`Go.php`|Lanciare la Homepage da cui sarà poi disponibile navigare all'interno del sito| -- |
|`Mappa.php`|Renderizzare la pagine relativa alla visualizzazione dei dati su una mappa| Ancora in fase di sviluppo a causa dell'API utilizzata che crea conflitti con boostrap e cattiva gestione del flusso dei dati asincrono|
|`Storico.php`|Renderizza tutte le pagine adibite alla visualizzazione dei dati| Ancora in fase di sviluppo|

### Supporto al salvataggio dei dati in database mySQL

>Attualmente solo per i dati nazionali (beta)

È stato implementato (beta) un servizio che automaticamente verifica se all'interno del database in locale installato nella macchina sono presenti gli ultimi dati disponibili, e in caso di discrepanze salva all'interno del database i dati mancanti.

**Idee per il futuro**: 
- Integrazione dello stesso servizio anche per i dati regionali e provinciali
- Implementazione della possibilità di utilizzare i dati presenti in locale nel database e non quelli forniti dalla repository
- Integrazione di un Controller che ottenga i dati, e rimanga in ascolto in maniera asincrona rispetto al sito, e che possa contemporaneamente fornire i dati da lui in possesso alle pagine che lo richiedono in modo da cosumare meno banda e anche da ottenere più reattività nella visualizzazione di dati.