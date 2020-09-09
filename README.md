# client-php
PHP SDK для CloudLoyalty API

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
#### Используется встроенный в библиотеку HTTP-клиент
```php
use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Generated\Model\ConfirmTicketRequest;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Exception\ProcessingException;

$apiClient = (new Client())
    ->setProcessingKey('<ваш_ключ>');

try {
    $result = $apiClient->confirmTicket(
        (new ConfirmTicketRequest())
            ->setTxid($txid)
            ->setTicket($ticket)
            ->setReceiptNum($txid)
    );
} catch (TransportException $e) {
    // ошибка обмена с сервером
} catch (ProcessingException $e) {
    // ошибка обработки запроса сервером
    // $e->getCode() - код
    // $e->getDescriptionRus() - описание ошибки
    // $e->getHint() - детали ошибки
}
```

#### Используется созданный ранее клиент Guzzle

```
$apiClient = (new Client())
    ->setHttpClient(new GuzzleBridgeClient($yourGuzzleClient))
    ->setProcessingKey('<ваш_ключ>');
```

### Статус бибилиотеки
Готова к использованию.

Обо всех обнаруженных проблемах сообщайте в [Issues](https://github.com/cloudloyalty/client-php/issues).
