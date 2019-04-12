# pterodactyl-PHP-POST
[![Build Status](https://travis-ci.com/rubentalstra/pterodactyl-PHP.svg?branch=v1.0)](https://travis-ci.com/rubentalstra/pterodactyl-PHP)


pterodactyl api PHP post scripts



### language options
---
here are the language options for

language name | language code
------------ | -------------
Deutsch | de
English | en
Español | es
Eesti, Eesti Keel | et
Français, Langue Française | fr
Italiano | it
Nederlands, Vlaams | nl
Limba Română | ro
Русский | ru
Türkçe | tr
中文 (Zhōngwén), 汉语, 漢語 | zh



### PHP script output Create user
---
This will be your output of the PHP file 

```JSON
  {
  "object": "user",
  "attributes": {
    "id": 1,
    "external_id": null,
    "uuid": "68b23b39-f172-4cd3-ba4a-ef5761c01374",
    "username": "example",
    "email": "example@example.com",
    "first_name": "John",
    "last_name": "Doe",
    "language": "en",
    "root_admin": false,
    "2fa": false,
    "created_at": "2019-11-20T03:05:23+00:00",
    "updated_at": "2019-11-20T03:05:23+00:00"
  },
  "meta": {
    "resource": "https:\/\/YOUR_URL_HERE\/api\/application\/users\/1"
  }
}
```
