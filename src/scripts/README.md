# Pivotal Tracker

Browser and node module for making API requests against [Pivotal Tracker](https://www.pivotaltracker.com/services/{version}).

**Please note: This module uses [Popsicle](https://github.com/blakeembrey/popsicle) to make API requests. Promises must be supported or polyfilled on all target environments.**

## Installation

```
npm install pivotal-tracker --save
bower install pivotal-tracker --save
```

## Usage

### Node

```javascript
var PivotalTracker = require('pivotal-tracker');

var client = new PivotalTracker();
```

### Browsers

```html
<script src="pivotal-tracker/index.js"></script>

<script>
  var client = new PivotalTracker();
</script>
```

### Options

You can set options when you initialize a client or at any time with the `options` property. You may also override options for a single request by passing an object as the second argument of any request method. For example:

```javascript
var client = new PivotalTracker({ ... });

client.options = { ... };

client.resource('/').get(null, {
  baseUri: 'http://example.com',
  headers: {
    'Content-Type': 'application/json'
  }
});
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a client with a base URI. For example:

```javascript
new PivotalTracker({
  baseUri: 'https://example.com'
});
```

#### Base URI Parameters

If the base URI has parameters inline, you can set them by updating the `baseUriParameters` property. For example:

```javascript
client.options.baseUriParameters.version = 'v5';
```

### Resources

All methods return a HTTP request instance of [Popsicle](https://github.com/blakeembrey/popsicle), which allows the use of promises (and streaming in node).

#### resources.me

```js
var resource = client.resources.me;
```

##### GET

In addition to authenticating this request like other API requests, this request can be made with authentication using "basic auth" to pass the user's normal Pivotal Tracker login credentials (their email address or user name plus their password). In this way, client software can use the user's name and password to obtain their API Token, and then use that token to authenticate future API requests made on behalf of that user. Obviously, the user's password should not be stored or otherwise retained.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.my.notifications

```js
var resource = client.resources.my.notifications;
```

##### GET

Return list of the notifications

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

The standard formatting parameters cannot be included in requests for this operation. In particular, envelope= is prohibited and Tracker behaves as if envelope=true had been provided.

* **created_after** _string_

Show notifications created after this date/time. If this parameter is not provided, the default is 10 days prior to the request time.

#### resources.my.notifications.mark_read

```js
var resource = client.resources.my.notifications.mark_read;
```

##### PUT

Marks the person's notifications as read up to the given notification id.

```js
resource.put().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.put(null, { query: { ... } });
```

* **before** _integer_

Mark all notifications before this id as read

#### resources.my.notifications.notification_id(notification_id)

* **notification_id** _string_

```js
var resource = client.resources.my.notifications.notification_id(notification_id);
```

##### GET

Retrieve particular notification

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### PUT

Mark the notification as read.

```js
resource.put().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.put(null, { query: { ... } });
```

* **read_at** _string_

Time notification was read.

#### resources.my.activity

```js
var resource = client.resources.my.activity;
```

##### GET

Return list of the selected activity for the authenticated person.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **occurred_before** _string_

Activity will be returned only for operations that occurred before the time specified by this parameter.

* **occurred_after** _string_

Activity will be returned only for operations that occurred after the time specified by this parameter.

#### resources.my.workspaces

```js
var resource = client.resources.my.workspaces;
```

##### GET

Return list of workspaces for the authenticated person.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Create a new workspace for the authenticated person.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "name" : {
      "type" : "string" ,
      "required" : false
    } ,
    "project_ids" : {
      "type" : "array" ,
      "required" : false ,
      "items" : [
        {
          "type" : "number"
        }
      ]
    }
  }
}
```

#### resources.my.workspaces.workspace_id(workspace_id)

* **workspace_id** _string_

```js
var resource = client.resources.my.workspaces.workspace_id(workspace_id);
```

##### GET

Return a workspace for the authenticated person.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

permanently delete the workspace.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Return the specified workspace.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "project_ids" : {
      "type" : "array" ,
      "required" : false ,
      "items" : [
        {
          "type" : "number"
        }
      ]
    }
  }
}
```

#### resources.people.person_id(person_id).notifications.since.timestamp(timestamp)

* **timestamp** _string_

```js
var resource = client.resources.people.person_id(person_id).notifications.since.timestamp(timestamp);
```

##### GET

Returns list of notifications for the specified person whose updated_at values are less than the timestamp.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.projects

```js
var resource = client.resources.projects;
```

##### GET

Get all of a user's active projects.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

* **account_ids** _string_

A comma separated list of account ids whose projects should be returned

##### POST

Create a new empty project.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "account_id" : {
      "type" : "number" ,
      "required" : false
    } ,
    "atom_enabled" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "automatic_planning" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "bugs_and_chores_are_estimatable" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "enable_incoming_emails" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "enable_tasks" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "initial_velocity" : {
      "type" : "number" ,
      "required" : false
    } ,
    "iteration_length" : {
      "type" : "number" ,
      "required" : false
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    } ,
    "number_of_done_iterations_to_show" : {
      "type" : "number" ,
      "required" : false
    } ,
    "point_scale" : {
      "type" : "string" ,
      "required" : false
    } ,
    "public" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "start_date" : {
      "type" : "string" ,
      "required" : false
    } ,
    "time_zone" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "kind" : {
          "type" : "string" ,
          "required" : false
        } ,
        "olson_name" : {
          "type" : "string" ,
          "required" : false
        } ,
        "offset" : {
          "type" : "string" ,
          "required" : false
        }
      }
    } ,
    "velocity_averaged_over" : {
      "type" : "number" ,
      "required" : false
    } ,
    "week_start_day" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id)

* **project_id** _string_

```js
var resource = client.resources.projects.project_id(project_id);
```

##### GET

Fetch the content of the specified project.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Permanently delete the specified project.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Update the specified project.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "account_id" : {
      "type" : "number" ,
      "required" : false
    } ,
    "atom_enabled" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "automatic_planning" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "bugs_and_chores_are_estimatable" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "enable_incoming_emails" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "enable_tasks" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "initial_velocity" : {
      "type" : "number" ,
      "required" : false
    } ,
    "iteration_length" : {
      "type" : "number" ,
      "required" : false
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    } ,
    "number_of_done_iterations_to_show" : {
      "type" : "number" ,
      "required" : false
    } ,
    "point_scale" : {
      "type" : "string" ,
      "required" : false
    } ,
    "public" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "start_date" : {
      "type" : "string" ,
      "required" : false
    } ,
    "time_zone" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "kind" : {
          "type" : "string" ,
          "required" : false
        } ,
        "olson_name" : {
          "type" : "string" ,
          "required" : false
        } ,
        "offset" : {
          "type" : "string" ,
          "required" : false
        }
      }
    } ,
    "velocity_averaged_over" : {
      "type" : "number" ,
      "required" : false
    } ,
    "week_start_day" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).iterations

```js
var resource = client.resources.projects.project_id(project_id).iterations;
```

##### GET

Return a set of iterations from the project.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **envelope** _boolean_

* **scope** _string, one of (backlog, done, current, current_backlog), default: backlog_

Restricts the state of iterations to return. If not specified, it defaults to all iterations including done.

#### resources.projects.project_id(project_id).integrations

```js
var resource = client.resources.projects.project_id(project_id).integrations;
```

##### GET

Returns a project's integrations.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Create a new integration for a project.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "base_url" : {
      "type" : "string" ,
      "required" : false
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).integrations.integration_id(integration_id)

* **integration_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).integrations.integration_id(integration_id);
```

##### GET

Returns a project integration.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes a project integration.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates a project integration.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

#### resources.projects.project_id(project_id).integrations.integration_id(integration_id).stories

```js
var resource = client.resources.projects.project_id(project_id).integrations.integration_id(integration_id).stories;
```

##### GET

Provides external_story records for all of the potential stories available through the selected integration (already configured on the selected project). The content of the objects returned is suitable for use as parameters to create stories 'imported from' the selected integration.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **exclude_linked** _string_

When this parameter is present and true, response will not include external stories which already have matching Pivotal Tracker stories.

#### resources.projects.project_id(project_id).iteration_overrides.iteration_number(iteration_number)

* **iteration_number** _string_

```js
var resource = client.resources.projects.project_id(project_id).iteration_overrides.iteration_number(iteration_number);
```

##### PUT

Updates an iterration's overrides.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "length" : {
      "type" : "number" ,
      "required" : false
    } ,
    "team_strength" : {
      "type" : "number" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).memberships

```js
var resource = client.resources.projects.project_id(project_id).memberships;
```

##### GET

List all of the memberships in a project.

```js
resource.get().then(function (res) { ... });
```

##### POST

Add a user to the project

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "person_id" : {
      "type" : "number" ,
      "required" : false
    } ,
    "project_color" : {
      "type" : "string" ,
      "required" : false
    } ,
    "role" : {
      "type" : "string" ,
      "required" : false
    } ,
    "email" : {
      "type" : "string" ,
      "required" : false
    } ,
    "initials" : {
      "type" : "string" ,
      "required" : false
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).memberships.membership_id(membership_id)

* **membership_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).memberships.membership_id(membership_id);
```

##### GET

Returns the specified project membership.

```js
resource.get().then(function (res) { ... });
```

##### PUT

Updates the specified project membership.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "role" : {
      "type" : "string" ,
      "required" : false
    } ,
    "project_color" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

##### DELETE

Deletes the specified project membership.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).labels

```js
var resource = client.resources.projects.project_id(project_id).labels;
```

##### GET

Provides all of the project's labels.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Creates a label on the project.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).labels.label_id(label_id)

* **label_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).labels.label_id(label_id);
```

##### GET

Provides a project's label.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Delete a project's label.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates a project's label.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories

```js
var resource = client.resources.projects.project_id(project_id).stories;
```

##### GET

Provides selected stories.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **envelope** _boolean_

* **filter** _string_

This parameter supplies a search string; only stories that match the search criteria are returned.

* **with_label** _string, one of (delivered, accepted, unscheduled, rejected, finished, started, planned, unstarted), default: delivered_

A story's current_state which all returned stories must match.

* **accepted_before** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are accepted before.

* **accepted_after** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are accepted after.

* **created_before** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are created before.

* **created_after** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are created after.

* **updated_before** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are updated before.

* **updated_after** _string_

A date and time (ISO 8601 format or milliseconds) which all returned stories are updated after.

* **deadline_before** _string_

A date and time (ISO 8601 format or milliseconds) that release dates fall before.

* **deadline_after** _string_

A date and time (ISO 8601 format or milliseconds) that release dates fall after.

##### POST

Create a new story.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "comment" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "text" : {
          "type" : "string" ,
          "required" : false
        } ,
        "file_attachments" : {
          "type" : "array" ,
          "required" : false ,
          "items" : [
            {
              "type" : "object" ,
              "properties" : {
                "type" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "filename" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "created_at" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "uploader_id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "thumbnailable" : {
                  "type" : "boolean" ,
                  "required" : false
                } ,
                "height" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "width" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "size" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "download_url" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "thumbnail_url" : {
                  "type" : "string" ,
                  "required" : false
                }
              }
            }
          ]
        }
      }
    } ,
    "current_state" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id)

* **story_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id);
```

##### GET

Returns the specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes a story.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates a story.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "comment" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "text" : {
          "type" : "string" ,
          "required" : false
        } ,
        "file_attachments" : {
          "type" : "array" ,
          "required" : false ,
          "items" : [
            {
              "type" : "object" ,
              "properties" : {
                "type" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "filename" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "created_at" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "uploader_id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "thumbnailable" : {
                  "type" : "boolean" ,
                  "required" : false
                } ,
                "height" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "width" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "size" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "download_url" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "thumbnail_url" : {
                  "type" : "string" ,
                  "required" : false
                }
              }
            }
          ]
        }
      }
    } ,
    "current_state" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).tasks

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).tasks;
```

##### GET

Returns the tasks on a specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Returns the task that was created.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "complete" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "position" : {
      "type" : "number" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).tasks.task_id(task_id)

* **task_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).tasks.task_id(task_id);
```

##### GET

Returns the specified task on a specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes the specified task

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates the specified task

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "complete" : {
      "type" : "boolean" ,
      "required" : false
    } ,
    "position" : {
      "type" : "number" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).labels

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).labels;
```

##### GET

Returns the labels on a specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Returns the label that was created.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).labels.label_id(label_id)

* **label_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).labels.label_id(label_id);
```

##### DELETE

Removes the label from the story.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).owners

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).owners;
```

##### GET

Returns the owners of a specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Add a user as an owner of the story.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "id" : {
      "type" : "number" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).owners.person_id(person_id)

* **person_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).owners.person_id(person_id);
```

##### DELETE

Removes ownership of a story from a person.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).comments

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).comments;
```

##### GET

Returns the specified story's comments.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Add a new comment.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "text" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id)

* **comment_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id);
```

##### GET

Gets a comment.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes a comment.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates a comment.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "text" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id).google_attachments.google_attachment_id(google_attachment_id)

* **google_attachment_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id).google_attachments.google_attachment_id(google_attachment_id);
```

##### DELETE

Deletes a google attachment.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id).file_attachments.file_attachment_id(file_attachment_id)

* **file_attachment_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).comments.comment_id(comment_id).file_attachments.file_attachment_id(file_attachment_id);
```

##### DELETE

Deletes a google attachment.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).stories.story_id(story_id).activity

```js
var resource = client.resources.projects.project_id(project_id).stories.story_id(story_id).activity;
```

##### GET

Return list of the selected story's activity.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **occurred_before** _string_

Activity will be returned only for operations that occurred before the time specified by this parameter.

* **occurred_after** _string_

Activity will be returned only for operations that occurred after the time specified by this parameter.

* **since_version** _string_

Activity will be returned only for operations that occurred after the specified version.

#### resources.projects.project_id(project_id).epics

```js
var resource = client.resources.projects.project_id(project_id).epics;
```

##### GET

Returns a list of all epics in the project.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

* **filter** _string_

This parameter supplies a search string; only epics that match the search criteria are returned.

##### POST

Create a new epic.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "comments" : {
      "type" : "array" ,
      "required" : false ,
      "items" : [
        {
          "type" : "object" ,
          "properties" : {
            "text" : {
              "type" : "string" ,
              "required" : false
            } ,
            "file_attachments" : {
              "type" : "array" ,
              "required" : false ,
              "items" : [
                {
                  "type" : "object" ,
                  "properties" : {
                    "id" : {
                      "type" : "number" ,
                      "required" : false
                    } ,
                    "uploader_id" : {
                      "type" : "number" ,
                      "required" : false
                    } ,
                    "size" : {
                      "type" : "number" ,
                      "required" : false
                    } ,
                    "uploaded" : {
                      "type" : "boolean" ,
                      "required" : false
                    } ,
                    "thumbnail_url" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "download_url" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "filename" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "big_url" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "thumbnailable" : {
                      "type" : "boolean" ,
                      "required" : false
                    } ,
                    "content_type" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "created_at" : {
                      "type" : "string" ,
                      "required" : false
                    } ,
                    "width" : {
                      "type" : "number" ,
                      "required" : false
                    } ,
                    "height" : {
                      "type" : "number" ,
                      "required" : false
                    }
                  }
                }
              ]
            }
          }
        }
      ]
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).epics.epic_id(epic_id)

* **epic_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).epics.epic_id(epic_id);
```

##### GET

Returns the specified epic.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes an epic.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates an epic.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "description" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).epics.epic_id(epic_id).activity

```js
var resource = client.resources.projects.project_id(project_id).epics.epic_id(epic_id).activity;
```

##### GET

Return list of the selected epic's activity.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **occurred_before** _string_

Activity will be returned only for operations that occurred before the time specified by this parameter.

* **occurred_after** _string_

Activity will be returned only for operations that occurred after the time specified by this parameter.

* **since_version** _string_

Activity will be returned only for operations that occurred after the specified version.

#### resources.projects.project_id(project_id).epics.epic_id(epic_id).comments

```js
var resource = client.resources.projects.project_id(project_id).epics.epic_id(epic_id).comments;
```

##### GET

Returns the specified epic's comments.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Add a new comment.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "text" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).epics.epic_id(epic_id).comments.comment_id(comment_id)

* **comment_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).epics.epic_id(epic_id).comments.comment_id(comment_id);
```

##### GET

Gets a comment.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes a comment.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates a comment.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "text" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).uploads

```js
var resource = client.resources.projects.project_id(project_id).uploads;
```

##### POST

Upload a file to the Tracker server. Tracker will create a matching file_attachment object which can be attached to a future comment on a story.

```js
resource.post().then(function (res) { ... });
```

##### Body

**multipart/form-data**

{
  "comment": {
    "description": "The comment with which the file attachment will be associated.",
    "displayName": "comment",
    "type": "string"
  },
  "file": {
    "description": "The content of the file being uploaded. It is expected to be incorporated in the multipart data with a 'Content-Disposition' of 'form-data; name=\"file\"; filename=\"imperial_banner.png\"'. \nA Content-Type that describes the file being uploaded should be supplied if possible.\n",
    "required": true,
    "displayName": "file",
    "type": "string"
  }
}

#### resources.projects.project_id(project_id).search

```js
var resource = client.resources.projects.project_id(project_id).search;
```

##### GET

Search for stories and epics.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **query** _string, default: label%3Amnt_

String containing the search terms and options.

#### resources.projects.project_id(project_id).my.searches

```js
var resource = client.resources.projects.project_id(project_id).my.searches;
```

##### GET

Provides a list of the searches which have been saved by the current person.

```js
resource.get().then(function (res) { ... });
```

##### POST

Saves a new search.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "name" : {
      "type" : "string" ,
      "required" : false
    } ,
    "query" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).my.searches.search_id(search_id)

* **search_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).my.searches.search_id(search_id);
```

##### DELETE

Deletes a saved search.

```js
resource.delete().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).activity

```js
var resource = client.resources.projects.project_id(project_id).activity;
```

##### GET

Return list of the selected project activity.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **limit** _string_

The number of iterations to return relative to the offset.

* **offset** _integer_

The offset of first iteration to return, relative to the set of iterations specified by 'scope', with zero being the first iteration in the scope. Defaults to zero. For the 'Done' scope, negative numbers can be passed, which specifies the number of iterations preceding the 'Current' iteration.

* **occurred_before** _string_

Activity will be returned only for operations that occurred before the time specified by this parameter.

* **occurred_after** _string_

Activity will be returned only for operations that occurred after the time specified by this parameter.

* **since_version** _string_

Activity will be returned only for operations that occurred after the specified version.

#### resources.projects.project_id(project_id).export

```js
var resource = client.resources.projects.project_id(project_id).export;
```

##### POST

POSTing to an individual project resource's URL is used to send story-selection parameters. The server responds with a CSV export file containing data from the selected stories.

```js
resource.post().then(function (res) { ... });
```

#### resources.projects.project_id(project_id).webhooks

```js
var resource = client.resources.projects.project_id(project_id).webhooks;
```

##### GET

Return the project's webhooks.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### POST

Creates a webhook on the project.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "webhook_url" : {
      "type" : "string" ,
      "required" : false
    } ,
    "webhook_version" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.projects.project_id(project_id).webhooks.webhook_id(webhook_id)

* **webhook_id** _string_

```js
var resource = client.resources.projects.project_id(project_id).webhooks.webhook_id(webhook_id);
```

##### GET

Return the specified project webhook.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Delete the specified project webhook.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Update the specified project webhook.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "webhook_url" : {
      "type" : "string" ,
      "required" : false
    } ,
    "webhook_version" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.accounts

```js
var resource = client.resources.accounts;
```

##### GET

Get all of the accounts a user is an owner or admin of.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.accounts.account_id(account_id)

* **account_id** _string_

```js
var resource = client.resources.accounts.account_id(account_id);
```

##### GET

Fetch the content of the specified account.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.accounts.account_id(account_id).memberships

```js
var resource = client.resources.accounts.account_id(account_id).memberships;
```

##### GET

List all of the memberships in an account.

```js
resource.get().then(function (res) { ... });
```

##### POST

Create a new membership in an account.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "email" : {
      "type" : "string" ,
      "required" : false
    } ,
    "initials" : {
      "type" : "string" ,
      "required" : false
    } ,
    "name" : {
      "type" : "string" ,
      "required" : false
    } ,
    "person_id" : {
      "type" : "number" ,
      "required" : false
    }
  }
}
```

#### resources.accounts.account_id(account_id).memberships.person_id(person_id)

* **person_id** _string_

```js
var resource = client.resources.accounts.account_id(account_id).memberships.person_id(person_id);
```

##### GET

Returns the specified account membership.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Delete the specified account membership.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates the specified account membership.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "project_creator" : {
      "type" : "boolean" ,
      "required" : false
    }
  }
}
```

#### resources.stories.story_id(story_id)

* **story_id** _string_

```js
var resource = client.resources.stories.story_id(story_id);
```

##### GET

Returns the specified story.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

##### DELETE

Deletes the specified story.

```js
resource.delete().then(function (res) { ... });
```

##### PUT

Updates the specified story.

```js
resource.put().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "comment" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "text" : {
          "type" : "string" ,
          "required" : false
        } ,
        "file_attachments" : {
          "type" : "array" ,
          "required" : false ,
          "items" : [
            {
              "type" : "object" ,
              "properties" : {
                "type" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "filename" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "created_at" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "uploader_id" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "thumbnailable" : {
                  "type" : "boolean" ,
                  "required" : false
                } ,
                "height" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "width" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "size" : {
                  "type" : "number" ,
                  "required" : false
                } ,
                "download_url" : {
                  "type" : "string" ,
                  "required" : false
                } ,
                "thumbnail_url" : {
                  "type" : "string" ,
                  "required" : false
                }
              }
            }
          ]
        }
      }
    } ,
    "current_state" : {
      "type" : "string" ,
      "required" : false
    }
  }
}
```

#### resources.stories.export

```js
var resource = client.resources.stories.export;
```

##### POST

POSTing is used to send story-selection parameters. The server responds with a CSV export file containing data from the selected stories.

```js
resource.post().then(function (res) { ... });
```

#### resources.epics.epic_id(epic_id)

* **epic_id** _string_

```js
var resource = client.resources.epics.epic_id(epic_id);
```

##### GET

Returns the specified epic.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.file_attachments.file_attachment_id(file_attachment_id).download

```js
var resource = client.resources.file_attachments.file_attachment_id(file_attachment_id).download;
```

##### GET

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

* **inline** _boolean_

Determines if server should include response headers that would cause a browser to show the attachment in a new tab or window (inline=true) or show a Save dialog box (inline=false). Default is false.

#### resources.google_attachments

```js
var resource = client.resources.google_attachments;
```

##### GET

Fetch items describing the user's available Google resources.

```js
resource.get().then(function (res) { ... });
```

##### Query Parameters

```javascript
resource.get({ ... });
```

* **envelope** _boolean_

#### resources.source_commits

```js
var resource = client.resources.source_commits;
```

##### POST

Creates a comment associated with a commit in a Source Control system.

```js
resource.post().then(function (res) { ... });
```

##### Body

**application/json**

```
{
  "required" : true ,
  "$schema" : "http://json-schema.org/draft-03/schema" ,
  "type" : "object" ,
  "properties" : {
    "source_commit" : {
      "type" : "object" ,
      "required" : false ,
      "properties" : {
        "commit_id" : {
          "type" : "string" ,
          "required" : false
        } ,
        "message" : {
          "type" : "string" ,
          "required" : false
        } ,
        "url" : {
          "type" : "string" ,
          "required" : false
        } ,
        "author" : {
          "type" : "string" ,
          "required" : false
        }
      }
    }
  }
}
```

#### resources.aggregator

```js
var resource = client.resources.aggregator;
```

##### POST

Unimplemented.
The aggregator allows the client to make a single request that returns the same information as several separate GETs to other endpoints.

```js
resource.post().then(function (res) { ... });
```



### Custom Resources

You can make requests to a custom path in the API using the `#resource(path)` method.

```javascript
client.resource('/example/path').get();
```

## License

Apache 2.0
