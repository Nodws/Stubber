# Stubber
Create Unique strings from ID's and back

### Usage

```php
require("stubber.php");

 // The Input, Get ID from database
$url = short(9999);
// Result: 7pr   
// so you may use it as: http://site.com/7pr

// Revert it
$id = short($url,1);
// Result: 9999
// So just look it up "SELECT * FROM videos WHERE id = $id"
```
