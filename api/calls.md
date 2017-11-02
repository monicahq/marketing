---
layout: api
toc: true
title: Calls
---

## Overview

The Call object allows to record phone calls made with contacts. A call has to be
associated with an existing contact - it can't be orphan.

A call has a `called_at` field that lets you record the date the call happened.
The `called_at` field must be a valid date according to the strtotime PHP
function.

When retrieving a call, we always also return some basic information about the
related contact.

## List all the calls in your account

<url>
  GET /calls/
</url>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 3,
      "object": "call",
      "called_at": "2017-10-07T21:17:45Z",
      "content": "He called, we had fun.",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:17:45Z",
      "updated_at": "2017-10-07T21:17:45Z"
    },
    {
      "id": 5,
      "object": "call",
      "called_at": "2017-10-07T22:29:21Z",
      "content": "He called, we had fun and really awesome.",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T22:29:21Z",
      "updated_at": "2017-10-07T22:29:56Z"
    },
    {
      "id": 1,
      "object": "call",
      "called_at": "2017-10-07T21:00:56Z",
      "content": "We talked about nice stuff\r\n* And especially about their wedding",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:00:56Z",
      "updated_at": "2017-10-07T21:00:56Z"
    },
    {
      "id": 2,
      "object": "call",
      "called_at": "2017-10-07T21:02:57Z",
      "content": "Just laughed super hard.",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Henri",
        "last_name": "Troyat",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1987-01-01T21:56:44Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:02:57Z",
      "updated_at": "2017-10-07T21:02:57Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/calls?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/calls?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/calls",
    "per_page": 10,
    "to": 4,
    "total": 4
  }
}
{% endhighlight %}

## List all the calls of a specific contact

<url>
  GET /contacts/:id/calls
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 3,
      "object": "call",
      "called_at": "2017-10-07T21:17:45Z",
      "content": "He called, we had fun.",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:17:45Z",
      "updated_at": "2017-10-07T21:17:45Z"
    },
    {
      "id": 1,
      "object": "call",
      "called_at": "2017-10-07T21:00:56Z",
      "content": "We talked about nice stuff\r\n* And especially about their wedding",
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:00:56Z",
      "updated_at": "2017-10-07T21:00:56Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## Get a specific call

<url>
  GET /calls/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 1,
    "object": "call",
    "called_at": "2017-10-07T21:00:56Z",
    "content": "We talked about nice stuff\r\n* And especially about their wedding",
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T21:00:56Z",
    "updated_at": "2017-10-07T21:00:56Z"
  }
}
{% endhighlight %}

## Create a call

<url>
  POST /calls/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| content | string | <strong>Required</strong>. The description of the call. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |
| called_at | string | <strong>Required</strong>. The date the call happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

### Example

{% highlight json %}
{
  "content": "He called, we had fun.",
  "contact_id": 3,
  "called_at": "2018-02-02"
}
{% endhighlight %}

### Response

The API call returns a Call object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 5,
    "object": "call",
    "called_at": "2017-10-07T22:29:21Z",
    "content": "He called, we had fun.",
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T22:29:21Z",
    "updated_at": "2017-10-07T22:29:21Z"
  }
}
{% endhighlight %}

## Update a call

<url>
  PUT /calls/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| content | string | <strong>Required</strong>. The description of the call. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |
| called_at | string | <strong>Required</strong>. The date the called happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

### Example

{% highlight json %}
{
  "content": "He called, we had fun and really awesome.",
  "contact_id": 3,
  "called_at": "2018-02-02"
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 5,
    "object": "call",
    "called_at": "2017-10-07T22:29:21Z",
    "content": "He called, we had fun and really awesome.",
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T22:29:21Z",
    "updated_at": "2017-10-07T22:29:56Z"
  }
}
{% endhighlight %}

## Delete a call

<url>
  DELETE /calls/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
