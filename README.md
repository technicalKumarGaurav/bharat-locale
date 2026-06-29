# Bharat Locale

🇮🇳 Indian localization toolkit for PHP applications.

Format Indian numbers, currencies, dates, and build multilingual applications with ease.

## Installation

```bash
composer require technicalkumargaurav/bharat-locale
```

## Features

- Indian number formatting (`12,34,56,789`)
- Indian currency formatting (`₹12,34,567.00`)
- Aadhaar masking
- PAN masking
- Mobile number masking
- Email masking
- Lightweight and framework agnostic
- Works with Laravel, CodeIgniter, and plain PHP

## Usage

### Number Formatting

```php
use Technicalkumargaurav\BharatLocale\Bharat;

echo Bharat::formatNumber(123456789);
// 12,34,56,789
```

### Currency Formatting

```php
echo Bharat::currency(1234567);
// ₹12,34,567.00

echo Bharat::currency(1234.5);
// ₹1,234.50

echo Bharat::currency(-5000);
// -₹5,000.00
```

### Aadhaar Masking

```php
echo Bharat::maskAadhaar('123412341234');
// XXXX-XXXX-1234
```

### PAN Masking

```php
echo Bharat::maskPan('ABCDE1234F');
// ABC****34F
```

### Mobile Masking

```php
echo Bharat::maskMobile('9876543210');
// XXXXXX3210
```

### Email Masking

```php
echo Bharat::maskEmail('kumar@example.com');
// ku***@example.com
```

## Roadmap

- [x] Indian number formatting
- [x] Indian currency formatting
- [x] Masking utilities
- [ ] Amount in words (English/Hindi)
- [ ] Date localization
- [ ] Indian holidays
- [ ] States and districts dataset
- [ ] Bhashini integration
- [ ] Transliteration

## Contributing

Contributions, issues, and feature requests are welcome.

## License

MIT
