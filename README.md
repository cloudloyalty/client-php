# client-php
PHP SDK для MAXMA API

![Run tests](https://github.com/cloudloyalty/client-php/workflows/Run%20tests/badge.svg)

### Требования
- PHP >= 5.4
- ext-json

### Установка
#### Используется composer
```bash
composer require cloudloyalty/client-php
```

#### Вручную

1. Скачайте [архив](https://github.com/cloudloyalty/client-php/archive/master.zip),
   распакуйте его и скопируйте каталог lib в нужное место в вашем проекте.
2. В коде вашего проекта подключите автозагрузку файлов нашего клиента:
```php
require __DIR__ . '/lib/autoload.php';
```

### Пример кода
```php
use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Generated\Model\ConfirmTicketRequest;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Exception\ProcessingException;

// Используется встроенный в библиотеку HTTP-клиент
$apiClient = (new Client())
    ->setProcessingKey('<ваш_ключ>');

// Используется созданный ранее клиент Guzzle
//$apiClient = (new Client())
//    ->setHttpClient(new GuzzleBridgeClient($yourGuzzleClient))
//    ->setProcessingKey('<ваш_ключ>');

// Передача созданного ранее PSR-3 логгера для дампа запросов
// и ответов от сервера (с уровнем debug)
//$apiClient->setLogger(new PsrBridgeLogger($yourPsrLogger));

try {
    $result = $apiClient->confirmTicket(
        (new ConfirmTicketRequest())
            ->setTxid($txid)
            ->setTicket($ticket)
            ->setReceiptNum($txid)
    );
} catch (TransportException $e) {
    // Ошибка обмена с сервером
} catch (ProcessingException $e) {
    // Ошибка обработки запроса сервером
    // $e->getCode() - код
    // $e->getDescription() - описание ошибки
    // $e->getHint() - детали ошибки
}
```

### Статус бибилиотеки
Готова к использованию.

Обо всех обнаруженных проблемах сообщайте в [Issues](https://github.com/cloudloyalty/client-php/issues).
