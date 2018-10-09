# Content Warnings Extension For BoltCMS

This is a simple extension which adds customisable warnings to the listing page of the admin area and the dashboard.

The extension will check if a flagged contenttype contains any content and will trigger a warning if not. It was made as an alternative to required fields, allowing records to be saved with content missing to be completed at a later date.

To use this extension, you will need to add the following entries to your contenttypes.yml:

    warning: true

    warningtext: # Title is empty

Optionally, you may further check whether a field should be flagged. Using:

    warningoperator: # "<" (quotes are required)

    warningcondition: # 99

you may select an operator and a condition. The available operators are: 

    "empty" # default
    "<"
    ">"
    "="
    "!="
    "<="
    ">="
    "length<"
    "length>"

This extension does not differentiate between strings and integers so please note that using "<" on a field that contains a string will always trigger a warning.

The last two operators compare the length of the field, useful for text based content.

