# client-php
PHP SDK для CloudLoyalty API _Beta_

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
