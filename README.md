# client-php _β_
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

### Статус бибилиотеки
Могут буть незначительные недоработки.

Обо всех обнаруженных проблемах сообщайте в [Issues](https://github.com/cloudloyalty/client-php/issues).
