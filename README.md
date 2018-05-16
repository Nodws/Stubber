# Stubber
Create Unique strings from ID's and back

### Usage

```php
require("stubber-lib.php");

 // The Input, Get ID from database
$url = stub(9999);
// Result: 7pr   
// so you may use it as: http://site.com/7pr

// Revert it
$id = stub($url,1);
// Result: 9999
// So just look it up "SELECT * FROM stubs WHERE id = $id"
```

### If using inside sub directory
modify your path in htaccess
`RewriteBase /subdir/`
