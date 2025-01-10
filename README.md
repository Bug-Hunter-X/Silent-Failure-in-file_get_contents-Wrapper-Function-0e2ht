# PHP Silent File Reading Error

This repository demonstrates a common but subtle error in PHP: silently ignoring errors when reading files using `file_get_contents`. The `bug.php` file shows the problematic code.  The `bugSolution.php` file provides a corrected version.

The issue arises from the use of the null coalescing operator (`?:`) to return an empty string if `file_get_contents` fails.  This hides errors and can lead to unexpected program behavior.  The solution demonstrates a more robust approach, either using explicit error handling or throwing exceptions for better error management.

This example highlights the importance of robust error handling and checking return values from file I/O operations in PHP.