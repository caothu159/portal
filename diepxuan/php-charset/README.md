# Vietnamese Converter
[![Version](https://img.shields.io/packagist/v/diepxuan/php-charset)](https://packagist.org/packages/diepxuan/php-charset)
[![Downloads](https://img.shields.io/packagist/dt/diepxuan/php-charset)](https://packagist.org/packages/diepxuan/php-charset)
[![License](https://img.shields.io/packagist/l/diepxuan/php-charset)](https://packagist.org/packages/diepxuan/php-charset)

A php class that converts Vietnamese characters into different character set

Require using composer
----------------------

```bash
composer require diepxuan/laravel-magento
```

Example
-------
```php
// include_once('vn_charset_conversion.php');
// $objVN = new vn_charset_conversion();
 
// echo $objVN -> convert('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.');
// Output: Toi ten la Ngo Chi Dung. Nguoi da tao ra cai phan mem nay.

//echo $objVN -> convert('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.','unicode','virq');
//Output: To^i te^n la\` Ngo^ Chi' Du~ng. Ngu+o+\`i d-a~ ta.o ra ca'i pha^\`n me^\`m na\`y.

vn_convert_encoding('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.')
Output: Toi ten la Ngo Chi Dung. Nguoi da tao ra cai phan mem nay.

vn_convert_encoding('Tôi tên là Ngô Chí Dũng. Người đã tạo ra cái phần mềm này.','unicode','virq')
Output: To^i te^n la\` Ngo^ Chi' Du~ng. Ngu+o+\`i d-a~ ta.o ra ca'i pha^\`n me^\`m na\`y.

```
Available Methods
-----------------
```php
- vn_convert_encoding($input)
- vn_convert_encoding($input,'unicode','virq');
- vn_convert_encoding($input,'unicode','vnet');
- vn_convert_encoding($input,'unicode','vni');
- vn_convert_encoding($input,'unicode','ascii');
// - tolower($input) 
// - toupper($input)
// - ucfirst($input)
// - ucwords($input)

Whereas $input = a unicode string
```

LICENSE
-------

The MIT License (MIT)

