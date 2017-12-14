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

### Special dates

Some dates about a contact are considered "special". Currently three dates have this special type:
* birthdate
* deceased date
* first met date

Those dates are special because they can be based on different factors:
* User knows the exact date: Oct 29 1981.
* User knows only the month and day, but not the year: Oct 29.
* User knows the age, but not the date.
* User doesn't know the date at all.

When you retrieve one of these dates, here is what you get:

{% highlight json %}
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": "1994-01-27T00:00:00Z"
}
{% endhighlight %}

* If the `date` field is present and not null, that means we know a date for the birthdate of the contact.
* `is_age_based`: this indicates whether the date is based on the age provided by the user or not. When it is, `date` is set with the right year, but the month and the day should be set to `01`. We can't set a reminder to a date that is age-based.
* `is_year_unknown`: this indicates whether we know the year of birth of the contact or not. If we don't know the year, `date` has to be set to the current year.

Note that `is_year_unknown` and `is_age_based` are mutually exclusive. That means, if `is_age_based` is true, `is_year_unknown` has to be false and vice versa.

Below is a summary of the different use-cases. We assume the current year is 2017.

**I don't know the date of birth of a contact**

Query:
{% highlight json %}
...
"birthdate": null,
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": false,
"birthdate_age": null,
...
{% endhighlight %}

Response:
{% highlight json %}
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": null
}
{% endhighlight %}

**I only know the age of a contact**

Query:
{% highlight json %}
...
"birthdate": null,
"birthdate_is_age_based": true,
"birthdate_is_year_unknown": false,
"birthdate_age": 29,
...
{% endhighlight %}

Response:
{% highlight json %}
"birthdate": {
  "is_age_based": true,
  "is_year_unknown": false,
  "date": "1994-01-01T00:00:00Z"
}
{% endhighlight %}

**I know the day and month of birth of a contact**

Query:
{% highlight json %}
...
"birthdate": "2017-10-29 00:00:00",
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": true,
"birthdate_age": null,
...
{% endhighlight %}

Response:
{% highlight json %}
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": true,
  "date": "2017-10-29T00:00:00Z"
}
{% endhighlight %}

**I know the day, month and year of birth of a contact**

Query:
{% highlight json %}
...
"birthdate": "1994-03-21 00:00:00",
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": false,
"birthdate_age": null,
...
{% endhighlight %}

Response:
{% highlight json %}
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": "1994-03-21T00:00:00Z"
}
{% endhighlight %}

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
      "first_name": "Justen",
      "last_name": "Flatley",
      "gender": "male",
      "is_partial": false,
      "is_dead": false,
      "last_called": null,
      "last_activity_together": {
        "date": "1977-07-17 00:00:00.000000",
        "timezone_type": 3,
        "timezone": "US\/Eastern"
      },
      "information": {
        "family": {
          "kids": {
            "total": 4,
            "kids": [
              {
                "id": 2,
                "object": "contact",
                "first_name": "Oscar",
                "last_name": "Tremblay",
                "gender": "male",
                "is_partial": true,
                "information": {
                  "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2017-11-29T00:00:00Z"
                  }
                },
                "account": {
                  "id": 1
                }
              },
              {
                "id": 3,
                "object": "contact",
                "first_name": "Makayla",
                "last_name": null,
                "gender": "female",
                "is_partial": false,
                "information": {
                  "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2017-02-27T00:00:00Z"
                  }
                },
                "account": {
                  "id": 1
                }
              },
              {
                "id": 4,
                "object": "contact",
                "first_name": "Johnathon",
                "last_name": "Stark",
                "gender": "male",
                "is_partial": true,
                "information": {
                  "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2017-09-24T00:00:00Z"
                  }
                },
                "account": {
                  "id": 1
                }
              },
              {
                "id": 5,
                "object": "contact",
                "first_name": "Karianne",
                "last_name": null,
                "gender": "female",
                "is_partial": true,
                "information": {
                  "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2017-09-25T00:00:00Z"
                  }
                },
                "account": {
                  "id": 1
                }
              }
            ]
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
        "dates": {
          "birthdate": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "deceased_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          }
        },
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "url": "https:\/\/randomuser.me\/api\/portraits\/men\/39.jpg",
          "source": "external"
        },
        "food_preferencies": "Alice was a paper label, with the distant sobs of the March Hare. Visit either you like: they're both mad.' 'But I don't believe you do lessons?' said Alice, 'because I'm not myself, you see.' 'I.",
        "how_you_met": {
          "general_information": "King exclaimed.",
          "first_met_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "first_met_through_contact": {
            "id": 4,
            "object": "contact",
            "first_name": "Johnathon",
            "last_name": "Stark",
            "gender": "male",
            "is_partial": true,
            "is_dead": false,
            "information": {
              "birthdate": {
                "is_age_based": false,
                "is_year_unknown": true,
                "date": "2017-09-24T00:00:00Z"
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "account": {
              "id": 1
            }
          }
        }
      },
      "addresses": [],
      "tags": [],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 5,
        "number_of_activities": 3,
        "number_of_reminders": 0,
        "number_of_tasks": 3,
        "number_of_gifts": 7,
        "number_of_debts": 1
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-12-12T09:57:15Z",
      "updated_at": "2017-12-12T09:57:15Z"
    },
    {
      "id": 3,
      "object": "contact",
      "first_name": "Makayla",
      "last_name": null,
      "gender": "female",
      "is_partial": false,
      "is_dead": false,
      "last_called": null,
      "last_activity_together": null,
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
            "total": 1,
            "progenitors": [
              {
                "id": 1,
                "object": "contact",
                "first_name": "Justen",
                "last_name": "Flatley",
                "gender": "male",
                "information": {
                  "birthdate": {
                    "is_age_based": null,
                    "is_year_unknown": null,
                    "date": null
                  }
                },
                "account": {
                  "id": 1
                }
              }
            ]
          }
        },
        "dates": {
          "birthdate": {
            "is_age_based": false,
            "is_year_unknown": true,
            "date": "2017-02-27T00:00:00Z"
          },
          "deceased_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          }
        },
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "url": null,
          "source": null
        },
        "food_preferencies": null,
        "how_you_met": {
          "general_information": null,
          "first_met_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "first_met_through_contact": null
        }
      },
      "addresses": [],
      "tags": [],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 0,
        "number_of_activities": 0,
        "number_of_reminders": 1,
        "number_of_tasks": 0,
        "number_of_gifts": 0,
        "number_of_debts": 0
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-12-12T09:57:15Z",
      "updated_at": "2017-12-12T09:57:15Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.app\/api\/contacts?page=1",
    "last": "http:\/\/monica.app\/api\/contacts?page=104",
    "prev": null,
    "next": "http:\/\/monica.app\/api\/contacts?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 104,
    "path": "http:\/\/monica.app\/api\/contacts",
    "per_page": "2",
    "to": 2,
    "total": 208
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
    "id": 1,
    "object": "contact",
    "first_name": "Justen",
    "last_name": "Flatley",
    "gender": "male",
    "is_partial": false,
    "is_dead": false,
    "last_called": null,
    "last_activity_together": {
      "date": "1977-07-17 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "US\/Eastern"
    },
    "information": {
      "family": {
        "kids": {
          "total": 4,
          "kids": [
            {
              "id": 2,
              "object": "contact",
              "first_name": "Oscar",
              "last_name": "Tremblay",
              "gender": "male",
              "is_partial": true,
              "information": {
                "birthdate": {
                  "is_age_based": false,
                  "is_year_unknown": true,
                  "date": "2017-11-29T00:00:00Z"
                }
              },
              "account": {
                "id": 1
              }
            },
            {
              "id": 3,
              "object": "contact",
              "first_name": "Makayla",
              "last_name": null,
              "gender": "female",
              "is_partial": false,
              "information": {
                "birthdate": {
                  "is_age_based": false,
                  "is_year_unknown": true,
                  "date": "2017-02-27T00:00:00Z"
                }
              },
              "account": {
                "id": 1
              }
            },
            {
              "id": 4,
              "object": "contact",
              "first_name": "Johnathon",
              "last_name": "Stark",
              "gender": "male",
              "is_partial": true,
              "information": {
                "birthdate": {
                  "is_age_based": false,
                  "is_year_unknown": true,
                  "date": "2017-09-24T00:00:00Z"
                }
              },
              "account": {
                "id": 1
              }
            },
            {
              "id": 5,
              "object": "contact",
              "first_name": "Karianne",
              "last_name": null,
              "gender": "female",
              "is_partial": true,
              "information": {
                "birthdate": {
                  "is_age_based": false,
                  "is_year_unknown": true,
                  "date": "2017-09-25T00:00:00Z"
                }
              },
              "account": {
                "id": 1
              }
            }
          ]
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
      "dates": {
        "birthdate": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      },
      "career": {
        "job": null,
        "company": null
      },
      "avatar": {
        "url": "https:\/\/randomuser.me\/api\/portraits\/men\/39.jpg",
        "source": "external"
      },
      "food_preferencies": "Alice was a paper label, with the distant sobs of the March Hare. Visit either you like: they're both mad.' 'But I don't believe you do lessons?' said Alice, 'because I'm not myself, you see.' 'I.",
      "how_you_met": {
        "general_information": "King exclaimed.",
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": {
          "id": 4,
          "object": "contact",
          "first_name": "Johnathon",
          "last_name": "Stark",
          "gender": "male",
          "is_partial": true,
          "is_dead": false,
          "information": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": true,
              "date": "2017-09-24T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "account": {
            "id": 1
          }
        }
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 5,
      "number_of_activities": 3,
      "number_of_reminders": 0,
      "number_of_tasks": 3,
      "number_of_gifts": 7,
      "number_of_debts": 1
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T09:57:15Z",
    "updated_at": "2017-12-12T09:57:15Z"
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
  "data": {
    "id": 10,
    "object": "contact",
    "first_name": "Casandra",
    "last_name": null,
    "gender": "female",
    "is_partial": true,
    "is_dead": false,
    "information": {
      "dates": {
        "birthdate": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1994-01-27T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T09:57:16Z",
    "updated_at": "2017-12-12T09:57:16Z"
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
| birthdate_is_age_based | boolean | <strong>Required</strong>. Indicates whether the birthdate is age based or not. |
| birthdate_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| birthdate_age | integer | The number of years between the birthdate and the current year. |
| job | string | The job title of the contact. Max 255 characters. |
| company | string | The company which employs the contact. Max 255 characters. |
| food_preferencies | string | The food preferencies of the contact. Max 100000 characters. |
| linkedin_profile_url | string | The LinkedIn URL of the contact. Max 255 characters. |
| first_met_information | string | The information (ie where and how) the user has met the contact. Max 1000000 characters. |
| first_met_date | string | The date you first met the contact. Format: 'YYYY-MM-DD'. |
| first_met_date_is_age_based | boolean | <strong>Required</strong>. Indicates whether the first_met_date is age based or not. |
| first_met_date_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| first_met_date_age | integer | The number of years between the first_met_date and the current year. |
| first_met_through_contact_id | integer | The contact whose made the introduction to this person. |
| is_partial | integer | <strong>Required</strong>. Indicates whether a contact is `real` or `partial`. Can be `0` (false) or `1` (true). |
| is_dead | integer | <strong>Required</strong>. Indicates whether a contact is deceased. Can be `0` (false) or `1` (true). |
| deceased_date | string | The date you first met the contact. Format: 'YYYY-MM-DD'. |
| deceased_date_is_age_based | boolean | <strong>Required</strong>. Indicates whether the deceased_date is age based or not. |
| deceased_date_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| deceased_date_age | integer | The number of years between the deceased_date and the current year. |
| avatar_url | string | The URL of an external image that would serve as the avatar of the contact. Max 400 characters. |

### Example

{% highlight json %}
{
  "first_name":"henri",
  "last_name":"troyat",
  "gender":"male",
  "birthdate": null,
  "birthdate_is_age_based": true,
  "birthdate_is_year_unknown": false,
  "birthdate_age": 29,
  "is_birthdate_approximate":"approximate",
  "age":30,
  "job":"Animator",
  "company":"Star Wars",
  "food_preferencies":"Fish and fresh potatoes.",
  "linkedin_profile_url":"https://linkedin.com/johndoe",
  "first_met_information":"we met a bar.",
  "first_met_date":"1981-02-02",
  "first_met_date_is_age_based": false,
  "first_met_date_is_year_unknown": false,
  "first_met_date_age": null,
  "first_met_through_contact_id":2,
  "is_partial":0,
  "is_dead": 1,
  "deceased_date":"2017-02-02",
  "deceased_date_is_age_based": false,
  "deceased_date_is_year_unknown": true,
  "deceased_date_age": null,
  "avatar_url": "https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/p160x160/23561695_738743569647668_3975953680386408_n.jpg?oh=c32aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F"
}
{% endhighlight %}

### Response

The API call returns a contact object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 383,
    "object": "contact",
    "first_name": "henri",
    "last_name": "troyat",
    "gender": "male",
    "is_partial": false,
    "is_dead": true,
    "last_called": null,
    "last_activity_together": null,
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
      "dates": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "1988-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": false,
          "is_year_unknown": true,
          "date": "2017-02-02T00:00:00Z"
        }
      },
      "career": {
        "job": "Animator",
        "company": "Star Wars"
      },
      "avatar": {
        "url": "https:\/\/scontent-yyz1-1.xx.fbcdn.net\/v\/t1.0-1\/p160x160\/23561695_738743569647668_3975953680386408_n.jpg?oh=c32aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F",
        "source": "external"
      },
      "food_preferencies": "Fish and fresh potatoes.",
      "how_you_met": {
        "general_information": "we met a bar.",
        "first_met_date": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1981-02-02T00:00:00Z"
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 0,
      "number_of_reminders": 1,
      "number_of_tasks": 0,
      "number_of_gifts": 0,
      "number_of_debts": 0
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T11:03:17Z",
    "updated_at": "2017-12-12T11:03:17Z"
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
| birthdate_is_age_based | boolean | <strong>Required</strong>. Indicates whether the birthdate is age based or not. |
| birthdate_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| birthdate_age | integer | The number of years between the birthdate and the current year. |
| job | string | The job title of the contact. Max 255 characters. |
| company | string | The company which employs the contact. Max 255 characters. |
| food_preferencies | string | The food preferencies of the contact. Max 100000 characters. |
| linkedin_profile_url | string | The LinkedIn URL of the contact. Max 255 characters. |
| first_met_information | string | The information (ie where and how) the user has met the contact. Max 1000000 characters. |
| first_met_date | string | The date you first met the contact. Format: 'YYYY-MM-DD'. |
| first_met_date_is_age_based | boolean | <strong>Required</strong>. Indicates whether the first_met_date is age based or not. |
| first_met_date_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| first_met_date_age | integer | The number of years between the first_met_date and the current year. |
| first_met_through_contact_id | integer | The contact whose made the introduction to this person. |
| is_partial | integer | <strong>Required</strong>. Indicates whether a contact is `real` or `partial`. Can be `0` (false) or `1` (true). |
| is_dead | integer | <strong>Required</strong>. Indicates whether a contact is deceased. Can be `0` (false) or `1` (true). |
| deceased_date | string | The date you first met the contact. Format: 'YYYY-MM-DD'. |
| deceased_date_is_age_based | boolean | <strong>Required</strong>. Indicates whether the deceased_date is age based or not. |
| deceased_date_is_year_unknown | boolean | <strong>Required</strong>. Indicates whether we know the year or not. |
| deceased_date_age | integer | The number of years between the deceased_date and the current year. |
| avatar_url | string | The URL of an external image that would serve as the avatar of the contact. Max 400 characters. |

### Example

{% highlight json %}
{
  "first_name":"henri",
  "last_name":"troyat",
  "gender":"male",
  "birthdate": null,
  "birthdate_is_age_based": true,
  "birthdate_is_year_unknown": false,
  "birthdate_age": 29,
  "is_birthdate_approximate":"approximate",
  "age":30,
  "job":"Animator",
  "company":"Star Wars",
  "food_preferencies":"Fish and fresh potatoes.",
  "linkedin_profile_url":"https://linkedin.com/johndoe",
  "first_met_information":"we met a bar.",
  "first_met_date":"1981-02-02",
  "first_met_date_is_age_based": false,
  "first_met_date_is_year_unknown": false,
  "first_met_date_age": null,
  "first_met_through_contact_id":2,
  "is_partial":0,
  "is_dead": 1,
  "deceased_date":null,
  "deceased_date_is_age_based": true,
  "deceased_date_is_year_unknown": false,
  "deceased_date_age": 98,
  "avatar_url": "https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/p160x160/23561695_738743569647668_3975953680386408_n.jpg?oh=c32aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F"
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 388,
    "object": "contact",
    "first_name": "henri",
    "last_name": "troyat",
    "gender": "male",
    "is_partial": false,
    "is_dead": true,
    "last_called": null,
    "last_activity_together": null,
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
      "dates": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "1978-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": false,
          "is_year_unknown": true,
          "date": "2017-02-02T00:00:00Z"
        }
      },
      "career": {
        "job": "Animator",
        "company": "Star Wars"
      },
      "avatar": {
        "url": "https:\/\/scontent-yyz1-1.xx.fbcdn.net\/v\/t1.0-1\/p160x160\/23561695_738743569647668_3975953680386408_n.jpg?oh=c32aa5f5c6c8d2ca927cbd2fcaa3&oe=5AA2632F",
        "source": "external"
      },
      "food_preferencies": "Fish and fresh potatoes.",
      "how_you_met": {
        "general_information": "we met a bar.",
        "first_met_date": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1981-02-02T00:00:00Z"
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 0,
      "number_of_reminders": 1,
      "number_of_tasks": 0,
      "number_of_gifts": 0,
      "number_of_debts": 0
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T11:13:12Z",
    "updated_at": "2017-12-12T11:18:40Z"
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