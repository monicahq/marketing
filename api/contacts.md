---
layout: api
toc: true
title: Contacts
---

## Overview

The Contact object is the core of what Monica is all about. The API allows you
to create, delete and update your contacts. You can retrieve individual contacts
as well as a list of all your contacts.

It's important to understand that all the people in Monica are Contact objects -
that includes a kid or a significant other (also called partner). However, there
are two types of contacts:
* `real` contacts
* `partial` contacts.

A `real` contact is a contact that you have a lot of information about -
therefore you can attach activities, reminders, notes, etc... to the object.
Real contacts have their own contact sheet.

A `partial` contact, however, is a person you don't have a lot of information
about. This is typically the spouse of one of your friend, or their child for
whom you only need to remember the names and the date of birth. A `partial`
contact is always linked to a `real` contact. Partial contacts don't have their
own contact sheet and shouldn't have one.

A `partial` contact has the flag `is_partial` set to `true`.

When creating `real` contacts, the only rule is the uniqueness of the email
address in the user's account. If you try to use the same email address when
creating another contact in the account, the API will return an error.

## List all your contacts

<url>
  GET /contacts/
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
      "object": "contact",
      "first_name": "John",
      "last_name": "Doe",
      "gender": "female",
      "is_partial": false,
      "is_dead": false,
      "deceased_date": null,
      "last_called": null,
      "last_talked_to": null,
      "information": {
        "family": {
          "kids": {
            "total": 1,
            "kids": [
              {
                "id": 79172,
                "object": "contact",
                "first_name": "Héloïse",
                "last_name": null,
                "gender": "female",
                "is_partial": true,
                "information": {
                  "dates": [
                    {
                      "name": "birthdate",
                      "is_birthdate_approximate": "exact",
                      "birthdate": "2011-11-22T02:21:49Z"
                    }
                  ]
                },
                "account": {
                  "id": 1
                }
              }
            ]
          },
          "partners": {
            "total": 1,
            "partners": [
              {
                "id": 76934,
                "object": "contact",
                "first_name": "Roger",
                "last_name": null,
                "gender": "male",
                "is_partial": true,
                "information": {
                  "dates": [
                    {
                      "name": "birthdate",
                      "is_birthdate_approximate": "approximate",
                      "birthdate": "1976-01-01T02:43:04Z"
                    }
                  ]
                },
                "account": {
                  "id": 1
                }
              }
            ]
          },
          "progenitors": {
            "total": 0,
            "progenitors": [
              {
                "id": 76934,
                "object": "contact",
                "first_name": "Henri",
                "last_name": null,
                "gender": "male",
                "is_partial": true,
                "information": {
                  "dates": [
                    {
                      "name": "birthdate",
                      "is_birthdate_approximate": "approximate",
                      "birthdate": "1976-01-01T02:43:04Z"
                    }
                  ]
                },
                "account": {
                  "id": 1
                }
              }
            ]
          }
        },
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T19:10:42Z"
          }
        ],
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "gravatar_url": false
        },
        "food_preferencies": "Love oranges and pepper."
      },
      "addresses": [
        {
          "id": 3,
          "object": "address",
          "name": "default",
          "street": null,
          "city": "Scranton",
          "province": null,
          "postal_code": null,
          "country": {
            "id": 1,
            "object": "country",
            "name": "United States",
            "iso": "us"
          },
          "created_at": null,
          "updated_at": null
        }
      ],
      "tags": [
        {
          "id": 856,
          "object": "tag",
          "name": "friend",
          "name_slug": "friend",
          "account": {
            "id": 1
          },
          "created_at": "2017-09-26 20:51:59",
          "updated_at": "2017-09-26T20:51:59Z"
        },
        {
          "id": 857,
          "object": "tag",
          "name": "college",
          "name_slug": "college",
          "account": {
            "id": 1
          },
          "created_at": "2017-09-26 20:51:59",
          "updated_at": "2017-09-26T20:51:59Z"
        }
      ],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 1,
        "number_of_activities": 2,
        "number_of_reminders": 1,
        "number_of_tasks": 0,
        "number_of_gifts": 1,
        "number_of_debts": 0
      },
      "account": {
        "id": 1
      },
      "created_at": "2016-09-04T02:42:51Z",
      "updated_at": "2017-06-13T14:57:53Z"
    }
  ],
  "links": {
    "first": "https://app.monica.com/api/contacts?page=1",
    "last": "https://app.monica.com/api/contacts?page=15",
    "prev": null,
    "next": "https://app.monica.com/api/contacts?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 15,
    "path": "https://app.monica.com/api/contacts",
    "per_page": "2",
    "to": 2,
    "total": 30
  }
}
{% endhighlight %}

## Get a specific contact

### Get a `real` contact

<url>
  GET /contacts/:id
</url>

{% highlight json %}
{
  "data": {
    "id": 8,
    "object": "contact",
    "first_name": "Jim",
    "last_name": "Halpert",
    "gender": "male",
    "is_partial": false,
    "is_dead": false,
    "deceased_date": null,
    "last_called": null,
    "last_talked_to": "2013-08-31 00:00:00",
    "information": {
      "family": {
        "kids": {
          "total": 2,
          "kids": [
            {
              "id": 79120,
              "object": "contact",
              "first_name": "Cecelia Marie",
              "last_name": null,
              "gender": "female",
              "is_partial": true,
              "information": {
                "dates": [
                  {
                    "name": "birthdate",
                    "is_birthdate_approximate": "approximate",
                    "birthdate": "2013-01-01T23:55:58Z"
                  }
                ]
              },
              "account": {
                "id": 1
              }
            },
            {
              "id": 79121,
              "object": "contact",
              "first_name": "Philip",
              "last_name": null,
              "gender": "male",
              "is_partial": true,
              "information": {
                "dates": [
                  {
                    "name": "birthdate",
                    "is_birthdate_approximate": "approximate",
                    "birthdate": "2014-01-01T23:56:05Z"
                  }
                ]
              },
              "account": {
                "id": 1
              }
            }
          ]
        },
        "partners": {
          "total": 1,
          "partners": [
            {
              "id": 76936,
              "object": "contact",
              "first_name": "Pam Beesly",
              "last_name": "",
              "gender": "female",
              "is_partial": false,
              "information": {
                "dates": [
                  {
                    "name": "birthdate",
                    "is_birthdate_approximate": "exact",
                    "birthdate": "1979-04-26T00:00:00Z"
                  }
                ]
              },
              "account": {
                "id": 1
              }
            }
          ]
        },
        "progenitors": {
          "total": 0,
          "progenitors": []
        }
      },
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "exact",
          "birthdate": "1978-10-01T00:00:00Z"
        }
      ],
      "career": {
        "job": "Paper Salesman",
        "company": "Dunder Mifflin"
      },
      "avatar": {
        "url": "\/storage\/avatars\/NzeTsDx6RL9mkbPWVwRLJCOXyOiYVSpMXZHQeWDt_100.jpeg",
        "source": "internal"
      },
      "food_preferencies": null,
      "how_you_met": {
        "general_information": "I met him at a bar.",
        "first_met_date": "2008-09-01T00:00:00Z",
        "first_met_through_contact": {
          "id": 76936,
          "object": "contact",
          "first_name": "Pam Beesly",
          "last_name": "",
          "gender": "female",
          "is_partial": false,
          "is_dead": false,
          "deceased_date": null,
          "information": {
            "dates": [
              {
                "name": "birthdate",
                "is_birthdate_approximate": "exact",
                "birthdate": "1979-04-26T00:00:00Z"
              }
            ]
          },
          "account": {
            "id": 1
          }
        }
      }
    },
    "addresses": [
      {
        "id": 3,
        "object": "address",
        "name": "default",
        "street": null,
        "city": "Scranton",
        "province": null,
        "postal_code": null,
        "country": {
          "id": 1,
          "object": "country",
          "name": "United States",
          "iso": "us"
        },
        "created_at": null,
        "updated_at": null
      }
    ],
    "tags": [
      {
        "id": 1229,
        "object": "tag",
        "name": "dunder mifflin",
        "name_slug": "dunder-mifflin",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-03T12:06:19Z",
        "updated_at": "2017-11-03T12:06:19Z"
      }
    ],
    "statistics": {
      "number_of_calls": 1,
      "number_of_notes": 1,
      "number_of_activities": 1,
      "number_of_reminders": 5,
      "number_of_tasks": 0,
      "number_of_gifts": 2,
      "number_of_debts": 1
    },
    "account": {
      "id": 1
    },
    "created_at": "2016-10-18T23:54:13Z",
    "updated_at": "2017-11-27T16:28:57Z"
  }
}
{% endhighlight %}

### Get a `partial` contact

Partial contacts are partners or children.

<url>
  GET /contacts/:id
</url>

{% highlight json %}
{
  "statistics": {
    "id": 79172,
    "object": "contact",
    "first_name": "Héloïse",
    "last_name": null,
    "gender": "female",
    "is_partial": true,
    "is_dead": false,
    "deceased_date": null,
    "information": {
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "exact",
          "birthdate": "2011-11-22T02:21:49Z"
        }
      ],
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-05-30T02:21:49Z",
    "updated_at": "2017-05-30T02:21:49Z"
  }
}
{% endhighlight %}

## Create a contact

<url>
  POST /contacts/
</url>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| first_name | string | <strong>Required</strong>. The first name of the contact. Max 50 characters. |
| last_name | string | Last name of the contact. Max 100 characters. |
| gender | string | <strong>Required</strong>. The gender of the contact. Can be `male`, `female` or `unknown`. |
| birthdate | string | The birthdate of the contact. Format: 'YYYY-MM-DD'. |
| is_birthdate_approximate | string | Can be `exact`, `approximate` or `unknown`. |
| age | integer | The age of the contact. |
| job | string | The job title of the contact. Max 255 characters. |
| company | string | The company which employs the contact. Max 255 characters. |
| food_preferencies | string | The food preferencies of the contact. Max 100000 characters. |
| linkedin_profile_url | string | The LinkedIn URL of the contact. Max 255 characters. |
| first_met_information | string | The information (ie where and how) the user has met the contact. Max 1000000 characters. |
| first_met_date | string | The date the user has met this person. Format: 'YYYY-MM-DD'. |
| first_met_through_contact_id | integer | The contact whose made the introduction to this person. |
| is_partial | integer | <strong>Required</strong>. Indicates whether a contact is `real` or `partial`. Can be `0` (false) or `1` (true). |
| is_dead | integer | <strong>Required</strong>. Indicates whether a contact is deceased. Can be `0` (false) or `1` (true). |
| deceased_date | string | The date of death of the contact. Format: 'YYYY-MM-DD'. |
| avatar_url | string | The URL of an external image that would serve as the avatar of the contact. Max 400 characters. |

### Example

{% highlight json %}
{
  "first_name":"henri",
  "last_name":"troyat",
  "gender":"male",
  "birthdate":"1981-02-02 00:00:00",
  "is_birthdate_approximate":"approximate",
  "age":30,
  "job":"Animator",
  "company":"Star Wars",
  "food_preferencies":"Fish and fresh potatoes.",
  "linkedin_profile_url":"https://linkedin.com/johndoe",
  "first_met_information":"we met a bar.",
  "first_met_date":"2013-03-03",
  "first_met_through_contact_id":2,
  "is_partial":0,
  "is_dead": 1,
  "deceased_date": "2017-09-11",
  "avatar_url": "https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/p160x160/23561695_738743569647668_3975953680386408_n.jpg?oh=c32aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F"
}
{% endhighlight %}

### Response

The API call returns a contact object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 116154,
    "object": "contact",
    "first_name": "henri",
    "last_name": "troyat",
    "gender": "male",
    "is_partial": false,
    "is_dead": true,
    "deceased_date": "2017-09-11T00:00:00Z",
    "last_called": null,
    "last_talked_to": null,
    "information": {
      "family": {
        "kids": {
          "total": 0,
          "kids": []
        },
        "partners": {
          "total": 0,
          "partners": []
        },
        "progenitors": {
          "total": 0,
          "progenitors": []
        }
      },
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "approximate",
          "birthdate": "1987-01-01T16:55:36Z"
        }
      ],
      "career": {
        "job": "Animator",
        "company": "Star Wars"
      },
      "avatar": {
        "url": "https:\/\/scontent-yyz1-1.xx.fbcdn.net\/v\/t1.0-1\/p160x160\/23561695_738743569647668_3975953680386680408_n.jpg?oh=c32fe55aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F",
        "source": "external"
      },
      "food_preferencies": "Fish and fresh potatoes.",
      "how_you_met": {
        "general_information": "I've met him at a bar. It was a great night.",
        "first_met_date": "2013-03-03T00:00:00Z",
        "first_met_through_contact": null
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 0,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 0,
      "number_of_debts": 0
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-11-27T16:55:36Z",
    "updated_at": "2017-11-27T16:55:36Z"
  }
}
{% endhighlight %}

## Update a contact

<url>
  PUT /contacts/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| first_name | string | <strong>Required</strong>. The first name of the contact. Max 50 characters. |
| last_name | string | Last name of the contact. Max 100 characters. |
| gender | string | <strong>Required</strong>. The gender of the contact. Can be `male`, `female` or `unknown`. |
| birthdate | string | The birthdate of the contact. Format: 'YYYY-MM-DD'. |
| is_birthdate_approximate | string | Can be `exact`, `approximate` or `unknown`. |
| age | integer | The age of the contact. |
| job | string | The job title of the contact. Max 255 characters. |
| food_preferencies | string | The food preferencies of the contact. Max 100000 characters. |
| linkedin_profile_url | string | The LinkedIn URL of the contact. Max 255 characters. |
| is_partial | integer | <strong>Required</strong>. Indicates whether a contact is `real` or `partial`. Can be `0` (false) or `1` (true). |
| is_dead | integer | <strong>Required</strong>. Indicates whether a contact is deceased. Can be `0` (false) or `1` (true). |
| deceased_date | string | The date of death of the contact. Format: 'YYYY-MM-DD'. |
| avatar_url | string | The URL of an external image that would serve as the avatar of the contact. Max 400 characters. |

### Example

{% highlight json %}
{
  "first_name":"Henri",
  "last_name":"Troyat",
  "gender":"male",
  "birthdate":"1981-02-02 00:00:00",
  "is_birthdate_approximate":"approximate",
  "age":30,
  "job":"Animator",
  "company":"Star Wars",
  "food_preferencies":"Fish and fresh potatoes.",
  "linkedin_profile_url":"https://linkedin.com/johndoe",
  "first_met_information":"I've met him at a bar. It was a great night.",
  "first_met_date":"2013-03-03",
  "first_met_through_contact_id":null,
  "is_partial":0,
  "is_dead": 1,
  "deceased_date": "2017-09-11",
  "avatar_url": "https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/p160x160/23561695_738743569647668_3975953680386680408_n.jpg?oh=c32fe55aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F"
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 116154,
    "object": "contact",
    "first_name": "Henri",
    "last_name": "Troyat",
    "gender": "male",
    "is_partial": false,
    "is_dead": true,
    "deceased_date": "2017-09-11T00:00:00Z",
    "last_called": null,
    "last_talked_to": null,
    "information": {
      "family": {
        "kids": {
          "total": 0,
          "kids": []
        },
        "partners": {
          "total": 0,
          "partners": []
        },
        "progenitors": {
          "total": 0,
          "progenitors": []
        }
      },
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "approximate",
          "birthdate": "1987-01-01T19:16:36Z"
        }
      ],
      "career": {
        "job": "Animator",
        "company": "Star Wars"
      },
      "avatar": {
        "url": "https:\/\/scontent-yyz1-1.xx.fbcdn.net\/v\/t1.0-1\/p160x160\/23561695_738743569647668_3975953680386680408_n.jpg?oh=c32fe55aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F",
        "source": "external"
      },
      "food_preferencies": "Fish and fresh potatoes.",
      "how_you_met": {
        "general_information": "I've met him at a bar. It was a great night.",
        "first_met_date": "2013-03-03T00:00:00Z",
        "first_met_through_contact": null
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 0,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 0,
      "number_of_debts": 0
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-11-27T16:55:36Z",
    "updated_at": "2017-11-27T19:16:36Z"
  }
}
{% endhighlight %}

## Delete a contact

<url>
  DELETE /contacts/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 93135
}
{% endhighlight %}

## Partners

Each contact can have one or multiple partners (even if polygamy is somewhat
forbidden in some countries, well...). A partner can be either a `real` contact
or a `partial` contact. Before being able to associate two contacts together,
both contacts need to exist in the database. In practice, you don't need to
worry about the concept of  when you do create the relationship.

When you define a relationship, only one call is necessary to link the two
contacts together.

### Link a partner with a contact

<url>
  POST /contacts/:id/partners
</url>

#### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| partner_id | integer | <strong>Required</strong>. The ID of the contact ID that will be set as the partner of the given contact. |

{% highlight json %}
{
  "partner_id":2
}
{% endhighlight %}

This call returns a standard Contact object.

### Unlink a partner and a contact

<url>
  POST /contacts/:id/partners/unset
</url>

#### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| partner_id | integer | <strong>Required</strong>. The ID of the contact ID that needs to be unset. |

{% highlight json %}
{
  "partner_id":2
}
{% endhighlight %}

This call returns a standard Contact object.

## Children

Each contact can have one or multiple children. A child can be either a `real` contact
or a `partial` contact. Before being able to associate two contacts together,
both contacts need to exist in the database. In practice, you don't need to
worry about the concept of  when you do create the relationship.

When you define a relationship, only one call is necessary to link the two
contacts together.

### Link a child to a contact

<url>
  POST /contacts/:id/kids
</url>

#### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| child_id | integer | <strong>Required</strong>. The ID of the contact ID that will be set as the partner of the given contact. |

{% highlight json %}
{
  "child_id":2
}
{% endhighlight %}

This call returns a standard Contact object.

### Unlink a child and a contact

<url>
  POST /contacts/:id/kids/unset
</url>

#### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| child_id | integer | <strong>Required</strong>. The ID of the contact ID that needs to be unset. |

{% highlight json %}
{
  "child_id":2
}
{% endhighlight %}

This call returns a standard Contact object.