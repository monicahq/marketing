---
layout: api
toc: true
title: Contact fields
---

## Overview

A contact can be contacted in multiple ways. It can be a phone number, an email address, a Twitter profile, a Telegram nickname, etc... We call these a contact field.

When retrieving a contact field, we always also return some basic information about the related contact.

## List all the contact fields of a specific contact

<url>
  GET /contact/:id/contactfields
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 1,
      "object": "contactfield",
      "data": "jim@dundermifflin.com",
      "contact_field_type": {
        "id": 1,
        "object": "contactfieldtype",
        "name": "Email",
        "fontawesome_icon": "fa fa-envelope-open-o",
        "protocol": "mailto:",
        "delible": false,
        "type": "email",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    },
    {
      "id": 2,
      "object": "contactfield",
      "data": "18003221",
      "contact_field_type": {
        "id": 2,
        "object": "contactfieldtype",
        "name": "Phone",
        "fontawesome_icon": "fa fa-volume-control-phone",
        "protocol": "tel:",
        "delible": false,
        "type": "phone",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    },
    {
      "id": 3,
      "object": "contactfield",
      "data": "https:\/\/facebook.com",
      "contact_field_type": {
        "id": 3,
        "object": "contactfieldtype",
        "name": "Facebook",
        "fontawesome_icon": "fa fa-facebook-official",
        "protocol": null,
        "delible": true,
        "type": null,
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    }
  ],
  "links": {
    "first": "http:\/\/monica.app\/api\/contacts\/8\/contactfields?page=1",
    "last": "http:\/\/monica.app\/api\/contacts\/8\/contactfields?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.app\/api\/contacts\/8\/contactfields",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}
{% endhighlight %}

## Get a specific contact field

<url>
  GET /contactfields/:id
</url>

### Response

{% highlight json %}
{
  "id": 1,
  "object": "contactfield",
  "data": "jim@dundermifflin.com",
  "contact_field_type": {
    "id": 1,
    "object": "contactfieldtype",
    "name": "Email",
    "fontawesome_icon": "fa fa-envelope-open-o",
    "protocol": "mailto:",
    "delible": false,
    "type": "email",
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
  },
  "account": {
    "id": 1
  },
  "created_at": "2017-11-24T11:19:18Z",
  "updated_at": null
}
{% endhighlight %}

## Create a contact field

<url>
  POST /contactfields/
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
