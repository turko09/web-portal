# Driver API
Driver API contains operations for manipulating driver information including adding a new one, uploading files related to them, getting drivers, updating them, and deleting them.


## Adding a new driver:

### ENDPOINT
`[website base address]/api/driver/create.php`

### REQUEST DETAILS

#### Request Method:
`POST`

#### Request Body:
|Member|Data Type|Comment|
|--|--|--|
|firstname|string||
|lastname|string||
|email|string||
|password|string||
|address|string||
|mobile|string||

### RESPONSE DETAILS

#### Response Status Codes:
|Status|Description|
|--|--|
|200|Success|
|400|Bad Request|
|405|Method Not Allowed|

#### Response Body:
|Member|Data Type|Comment|
|--|--|--|
|message|string||
|driverId|numeric|Present only if operation is successful|

### SAMPLES

#### Sample Request:
~~~~
POST [website base address]/api/driver/create.php HTTP/1.1
Content-Type: application/json

{
    "firstname": "Juan",
    "lastname": "Dela Cruz",
    "email": "juan@delacruz.com",
    "password": "hidden",
    "address": "Manila, Philippines",
    "mobile": "09200000000"
}  
~~~~

#### Sample Response:
~~~~
Access-Control-Allow-Methods: POST
Access-Control-Allow-Orgin: *
Content-Length: 58
Content-Type: application/json; charset=UTF-8
Date: Sat, 24 Mar 2018 08:53:01 GMT
Location: /api/driver/get.php?id=2063593744
Status: 200

{
    "message": "Driver record created.",
    "driverId": 2063593744
}
~~~~


## Getting a driver:

### ENDPOINT
`[website base address]/api/driver/get.php`

### REQUEST DETAILS

#### Request Method:
`GET`

#### Request Parameter:
|Name|Description|
|--|--|
|id|Id of the driver|

### RESPONSE DETAILS

#### Response Status Codes:
|Status|Description|
|--|--|
|200|Success|
|404|Not Found|
|405|Method Not Allowed|

#### Response Body:
|Member|Data Type|Comment|
|--|--|--|
|id |numeric||
|firstname|string||
|lastname|string||
|email|string||
|password|string||
|address|string||
|mobile|string||

### SAMPLES

#### Sample Request:
~~~~
GET [website base address]/api/driver/get.php?id=100 HTTP/1.1 
~~~~

#### Sample Response:
~~~~
Access-Control-Allow-Methods: GET
Access-Control-Allow-Orgin: *
Connection: keep-alive
Content-Length: 155
Content-Type: application/json; charset=UTF-8
Date: Sat, 24 Mar 2018 11:10:54 GMT
Status: 200

{
    "id": 100,
    "firstname": "Juan",
    "lastname": "Dela Cruz",
    "email": "juan@delacruz.com",
    "password": "hidden",
    "address": "Manila, Philippines",
    "mobile": "09200000000"
}
~~~~


## Getting all drivers:

### ENDPOINT
`[website base address]/api/driver/get.php`

### REQUEST DETAILS

#### Request Method:
`GET`

### RESPONSE DETAILS

#### Response Status Codes:
|Status|Description|
|--|--|
|200|Success|
|405|Method Not Allowed|

#### Response Body:
**Array of:**

|Member|Data Type|Comment|
|--|--|--|
|id|numeric||
|firstname|string||
|lastname|string||
|email|string||
|password|string||
|address|string||
|mobile|string||

### SAMPLES

#### Sample Request:
~~~~
GET [website base address]/api/driver/get.php HTTP/1.1 
~~~~

#### Sample Response:
~~~~
Access-Control-Allow-Methods: GET
Access-Control-Allow-Orgin: *
Connection: keep-alive
Content-Length: 445
Content-Type: application/json; charset=UTF-8
Date: Sat, 24 Mar 2018 11:19:18 GMT
Status: 200

[
    {
        "id": 1,
        "firstname": "Juan",
        "lastname": "Dela Cruz",
        "email": "juan@delacruz.com",
        "password": "hidden",
        "address": "Manila, Philippines",
        "mobile": "09200000000"
    },
    {
        "id": 2,
        "firstname": "John",
        "lastname": "Doe",
        "email": "john@doe.com",
        "password": "hidden",
        "address": "Laguna, Philippines",
        "mobile": "09211111111"
    },
    {
        "id": 3,
        "firstname": "Joe",
        "lastname": "Bloggs",
        "email": "joe@bloggs.com",
        "password": "hidden",
        "address": "Taguig, Philippines",
        "mobile": "09222222222"
    }
]
~~~~


## Editing a driver:

### ENDPOINT
`[website base address]/api/driver/edit.php`

### REQUEST DETAILS

#### Request Method:
`POST`

#### Request Body:
|Member|Data Type|Comment|
|--|--|--|
|id|numeric||
|firstname|string||
|lastname|string||
|email|string||
|password|string||
|address|string||
|mobile|string||

### RESPONSE DETAILS

#### Response Status Codes:
|Status|Description|
|--|--|
|200|Success|
|400|Bad Request|
|404|Not Found|
|405|Method Not Allowed|

#### Response Body:
|Member|Data Type|Comment|
|--|--|--|
|message|string||
|driverId|numeric|Present only if operation is successful|

### SAMPLES

#### Sample Request:
~~~~
POST [website base address]/api/driver/edit.php HTTP/1.1
Content-Type: application/json

{
    "id": 100,
    "firstname": "Juan",
    "lastname": "Dela Cruz",
    "email": "juan@delacruz.com",
    "password": "hidden",
    "address": "Manila, Philippines",
    "mobile": "09200000000"
} 
~~~~

#### Sample Response:
~~~~
Access-Control-Allow-Methods: POST
Access-Control-Allow-Orgin: *
Connection: keep-alive
Content-Length: 347
Content-Type: application/json; charset=UTF-8
Date: Sat, 24 Mar 2018 11:30:52 GMT
Status: 200

{
    "message": "Driver record modified.",
    "driverId": 100
}
~~~~


## Deleting a driver:

### ENDPOINT
`[website base address]/api/driver/delete.php`

### REQUEST DETAILS

#### Request Method:
`POST`

#### Request Body:
|Member|Data Type|Comment|
|--|--|--|
|id|numeric||

### RESPONSE DETAILS

#### Response Status Codes:
|Status|Description|
|--|--|
|200|Success|
|400|Bad Request|
|404|Not Found|
|405|Method Not Allowed|

#### Response Body:
|Member|Data Type|Comment|
|--|--|--|
|message|string||
|driverId|numeric|Present only if operation is successful|

### SAMPLES

#### Sample Request:
~~~~
POST [website base address]/api/driver/delete.php HTTP/1.1
Content-Type: application/json

{
    "id": 100
}
~~~~

#### Sample Response:
~~~~
Access-Control-Allow-Methods: POST
Access-Control-Allow-Orgin: *
Connection: keep-alive
Content-Length: 51
Content-Type: application/json; charset=UTF-8
Date: Sat, 24 Mar 2018 11:35:09 GMT
Status: 200

{
    "message": "Driver record deleted.",
    "driverId": 100
}
~~~~