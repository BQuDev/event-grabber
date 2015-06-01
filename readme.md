## Events Grabber

[![Build Status](https://travis-ci.org/BQumobile/ls-master-sheet.svg)](https://travis-ci.org/BQumobile/ls-master-sheet)

This API designed by Damith Harischandrathilaka @ BQuservices(PVT)LTD. All the public notifications will update here.

API follows all basic routes. ( index , post , put , delete , update & get )

## Official Documentation

Guide lines
** Use basic Authentication for access.



API methods,

Event 
GET -{base}/api/v1/events
GET -{base}/api/v1/events/{event id}
POST -{base}/api/v1/events
DELETE -{base}/api/v1/events/{event id}
POST - {base}/api/v1/events/{event id}



## RAW URLs

+--------+------------------------------------------+-------------------------+----------------------------+----------------+---------------+
| Domain | URI                                      | Name                    | Action                     | Before Filters | After Filters |
+--------+------------------------------------------+-------------------------+----------------------------+----------------+---------------+
|        | GET|HEAD /                               |                         | Closure                    |                |               |
|        | GET|HEAD api/v1/keywords                 | api.v1.keywords.index   | KeywordsController@index   | auth.basic     |               |
|        | GET|HEAD api/v1/keywords/create          | api.v1.keywords.create  | KeywordsController@create  | auth.basic     |               |
|        | POST api/v1/keywords                     | api.v1.keywords.store   | KeywordsController@store   | auth.basic     |               |
|        | GET|HEAD api/v1/keywords/{keywords}      | api.v1.keywords.show    | KeywordsController@show    | auth.basic     |               |
|        | GET|HEAD api/v1/keywords/{keywords}/edit | api.v1.keywords.edit    | KeywordsController@edit    | auth.basic     |               |
|        | PUT api/v1/keywords/{keywords}           | api.v1.keywords.update  | KeywordsController@update  | auth.basic     |               |
|        | PATCH api/v1/keywords/{keywords}         |                         | KeywordsController@update  | auth.basic     |               |
|        | DELETE api/v1/keywords/{keywords}        | api.v1.keywords.destroy | KeywordsController@destroy | auth.basic     |               |
|        | GET|HEAD api/v1/events                   | api.v1.events.index     | EventsController@index     | auth.basic     |               |
|        | GET|HEAD api/v1/events/create            | api.v1.events.create    | EventsController@create    | auth.basic     |               |
|        | POST api/v1/events                       | api.v1.events.store     | EventsController@store     | auth.basic     |               |
|        | GET|HEAD api/v1/events/{events}          | api.v1.events.show      | EventsController@show      | auth.basic     |               |
|        | GET|HEAD api/v1/events/{events}/edit     | api.v1.events.edit      | EventsController@edit      | auth.basic     |               |
|        | PUT api/v1/events/{events}               | api.v1.events.update    | EventsController@update    | auth.basic     |               |
|        | PATCH api/v1/events/{events}             |                         | EventsController@update    | auth.basic     |               |
|        | DELETE api/v1/events/{events}            | api.v1.events.destroy   | EventsController@destroy   | auth.basic     |               |
|        | GET|HEAD api/v1/users                    | api.v1.users.index      | UsersController@index      | auth.basic     |               |
|        | GET|HEAD api/v1/users/create             | api.v1.users.create     | UsersController@create     | auth.basic     |               |
|        | POST api/v1/users                        | api.v1.users.store      | UsersController@store      | auth.basic     |               |
|        | GET|HEAD api/v1/users/{users}            | api.v1.users.show       | UsersController@show       | auth.basic     |               |
|        | GET|HEAD api/v1/users/{users}/edit       | api.v1.users.edit       | UsersController@edit       | auth.basic     |               |
|        | PUT api/v1/users/{users}                 | api.v1.users.update     | UsersController@update     | auth.basic     |               |
|        | PATCH api/v1/users/{users}               |                         | UsersController@update     | auth.basic     |               |
|        | DELETE api/v1/users/{users}              | api.v1.users.destroy    | UsersController@destroy    | auth.basic     |               |
|        | GET|HEAD api/v1/friends                  | api.v1.friends.index    | FriendsController@index    | auth.basic     |               |
|        | GET|HEAD api/v1/friends/create           | api.v1.friends.create   | FriendsController@create   | auth.basic     |               |
|        | POST api/v1/friends                      | api.v1.friends.store    | FriendsController@store    | auth.basic     |               |
|        | GET|HEAD api/v1/friends/{friends}        | api.v1.friends.show     | FriendsController@show     | auth.basic     |               |
|        | GET|HEAD api/v1/friends/{friends}/edit   | api.v1.friends.edit     | FriendsController@edit     | auth.basic     |               |
|        | PUT api/v1/friends/{friends}             | api.v1.friends.update   | FriendsController@update   | auth.basic     |               |
|        | PATCH api/v1/friends/{friends}           |                         | FriendsController@update   | auth.basic     |               |
|        | DELETE api/v1/friends/{friends}          | api.v1.friends.destroy  | FriendsController@destroy  | auth.basic     |               |
+--------+------------------------------------------+-------------------------+----------------------------+----------------+---------------+


## Security Vulnerabilities

Since using basic auth , it is easy to access. So keep your Auth. safe.
