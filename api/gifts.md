---
layout: api
toc: true
title: Gifts
---

## Overview

The Gift object allows to record gifts you have offered, or wish to offer to
your contacts. A gift has to be associated with an existing contact - it can't
be orphan.

Apart from being linked to a contact, a gift can also be linked to a partner or
a child of the given contact. This is defined by the `is_for` tab.

When retrieving a gift, we always also return some basic information about the
related contact.

## List all the gifts in your account

<url>
  GET /gifts/
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
      "id": 1,
      "object": "gift",
      "is_for": null,
      "name": "Nice gift for Dwight",
      "comment": "I'm sure he'll love it",
      "url": "https:\/\/www.amazon.ca\/Culturenik-815-640-AMA-Office-Worlds-Television\/dp\/B00PCVCW80\/ref=sr_1_1?ie=UTF8&qid=1508272830&sr=8-1&keywords=dunder+mifflin+mug",
      "value": "123",
      "is_an_idea": true,
      "has_been_offered": false,
      "date_offered": null,
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
      "created_at": "2017-10-17T16:40:38Z",
      "updated_at": "2017-10-17T16:40:38Z"
    },
    {
      "id": 2,
      "object": "gift",
      "is_for": null,
      "name": "For my friend Ron Swanson",
      "comment": "",
      "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
      "value": "43",
      "is_an_idea": false,
      "has_been_offered": true,
      "date_offered": null,
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
      "created_at": "2017-10-17T16:41:27Z",
      "updated_at": "2017-10-17T16:41:27Z"
    },
    {
      "id": 3,
      "object": "gift",
      "is_for": {
        "id": 4,
        "object": "contact",
        "first_name": "Ben",
        "last_name": "Wyatt",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1974-01-01T16:42:11Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "name": "A giant cup of tea",
      "comment": "",
      "url": "",
      "value": "21",
      "is_an_idea": false,
      "has_been_offered": true,
      "date_offered": null,
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
      "created_at": "2017-10-17T16:42:25Z",
      "updated_at": "2017-10-17T16:42:25Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/gifts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/gifts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/gifts",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}
{% endhighlight %}

## List all the gifts of a specific contact

<url>
  GET /contacts/:id/gifts
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 2,
      "object": "gift",
      "is_for": null,
      "name": "For my friend Ron Swanson",
      "comment": "",
      "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
      "value": "43",
      "is_an_idea": false,
      "has_been_offered": true,
      "date_offered": null,
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
      "created_at": "2017-10-17T16:41:27Z",
      "updated_at": "2017-10-17T16:41:27Z"
    },
    {
      "id": 3,
      "object": "gift",
      "is_for": {
        "id": 4,
        "object": "contact",
        "first_name": "Ben",
        "last_name": "Wyatt",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1974-01-01T16:42:11Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "name": "A giant cup of tea",
      "comment": "",
      "url": "",
      "value": "21",
      "is_an_idea": false,
      "has_been_offered": true,
      "date_offered": null,
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
      "created_at": "2017-10-17T16:42:25Z",
      "updated_at": "2017-10-17T16:42:25Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## Get a specific gift

<url>
  GET /gifts/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 2,
    "object": "gift",
    "is_for": null,
    "name": "For my friend Ron Swanson",
    "comment": "",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "value": "43",
    "is_an_idea": false,
    "has_been_offered": true,
    "date_offered": null,
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
    "created_at": "2017-10-17T16:41:27Z",
    "updated_at": "2017-10-17T16:41:27Z"
  }
}
{% endhighlight %}

## Create a gift

<url>
  POST /gifts/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the gift is associated with. |
| is_for | integer | The ID of the contact the gift is for. It is either one of the partner or a child of the contact. |
| name | string | <strong>Required</strong>. The description of the gift. Max 255 characters. |
| comment | string | <strong>Required</strong>. More details about the gift. Max 1000000 characters. |
| url | string | The URL where the gift can be find (for instance, on Amazon). Max 1000000 characters. |
| value | string | The value (in the currency of the user) of the gift. Max 255 characters. |
| is_an_idea | boolean | Indicates whether the gift is an idea or not (ie not yet bought). Value: 0 (false) or 1 (true). |
| has_been_offered | boolean | Indicates whether the gift has been offered or not. Value: 0 (false) or 1 (true). |
| date_offered | string | The date the gift has been offered. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

### Example

{% highlight json %}
{
  "is_for": 1,
  "name":"For my friend Ron Swanson",
  "comment":"This is going to be so awesome",
  "url":"https://www.amazon.ca/Culturenik-182-390-Recreation-Swanson-Pyramid/dp/B00UTPTOHG/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
  "value":"291",
  "is_an_idea":0,
  "has_been_offered":1,
  "date_offered":"2015-02-24",
  "contact_id": 3
}
{% endhighlight %}

### Response

The API gift returns a gift object if the gift succeeds.

{% highlight json %}
{
  "data": {
    "id": 676,
    "object": "gift",
    "is_for": {
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
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "name": "For my friend Ron Swanson",
    "comment": "This is going to be so awesome",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "value": "291",
    "is_an_idea": false,
    "has_been_offered": true,
    "date_offered": {
      "date": "2015-02-24 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "US\/Eastern"
    },
    "account": {
      "id": 1
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "David",
      "last_name": "Olsdwaer",
      "gender": "male",
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
        "id": 1
      }
    },
    "created_at": "2017-10-19T21:51:15Z",
    "updated_at": "2017-10-19T21:51:15Z"
  }
}
{% endhighlight %}

## Update a gift

<url>
  PUT /gifts/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the gift is associated with. |
| is_for | integer | The ID of the contact the gift is for. It is either one of the partner or a child of the contact. |
| name | string | <strong>Required</strong>. The description of the gift. Max 255 characters. |
| comment | string | <strong>Required</strong>. More details about the gift. Max 1000000 characters. |
| url | string | The URL where the gift can be find (for instance, on Amazon). Max 1000000 characters. |
| value | string | The value (in the currency of the user) of the gift. Max 255 characters. |
| is_an_idea | boolean | Indicates whether the gift is an idea or not (ie not yet bought). Value: 0 (false) or 1 (true). |
| has_been_offered | boolean | Indicates whether the gift has been offered or not. Value: 0 (false) or 1 (true). |
| date_offered | string | The date the gift has been offered. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

### Example

{% highlight json %}
{
  "is_for": null,
  "name":"For my friend Ron Swanson",
  "comment":"This is going to be so awesome",
  "url":"https://www.amazon.ca/Culturenik-182-390-Recreation-Swanson-Pyramid/dp/B00UTPTOHG/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
  "value":"293",
  "is_an_idea":0,
  "has_been_offered":1,
  "date_offered":"2015-02-24",
  "contact_id": 3
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 678,
    "object": "gift",
    "is_for": null,
    "name": "For my friend Ron Swanson",
    "comment": "This is going to be so awesome",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "value": "293",
    "is_an_idea": false,
    "has_been_offered": true,
    "date_offered": {
      "date": "2015-02-24 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "US\/Eastern"
    },
    "account": {
      "id": 1
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "David",
      "last_name": "Olsdwaer",
      "gender": "male",
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
        "id": 1
      }
    },
    "created_at": "2017-10-19T21:52:53Z",
    "updated_at": "2017-10-19T21:52:53Z"
  }
}
{% endhighlight %}

## Delete a gift

<url>
  DELETE /gifts/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
