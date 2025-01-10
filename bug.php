This code suffers from a silent failure. If the file specified by \$filename does not exist, the function will return an empty string without any indication of an error.  This can lead to unexpected behavior in applications relying on the function's output.

```php
function read_file_contents(string $filename): string {
    return file_get_contents($filename) ?: '';
}
```