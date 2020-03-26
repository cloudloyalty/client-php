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
$apiClient = new \CloudLoyalty\Api\Client();

$apiClient->setProcessingKey('<ваш_ключ>')
    ->confirmTicket(
        (new ConfirmTicketRequest())
            ->setTxid($txid)
            ->setTicket($ticket)
            ->setReceiptNum($txid)
    );
```

### Статус бибилиотеки
Могут буть незначительные недоработки.

Все замечания направляйте на [support@cloudloyalty.ru](mailto:support@cloudloyalty.ru) или в Telegram @livinbelievin.
