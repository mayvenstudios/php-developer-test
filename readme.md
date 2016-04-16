# Code My Views PHP Developer Test

## Goal

Please spend no more than 10 hours on this task.  We do not necessarily expect you to be able to finish this entire task in 10 hours, we simply want to see what you can complete in that time frame.

## Delivery

Please fork this project into a Git repo, and notify connor@codemyviews.com when it is ready for review.

## Task Description

Please create a new Laravel 5.2 application that fulfills the following functionality.

1. A user can add people
2. A user can connect people together as families
3. A user can see a family tree to any particular Person in the application 
4. Each time a new person is added, a new background job should be dispatched.  The background job should post a message to this Slack endpoint: https://hooks.slack.com/services/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 - with the name of the Person added

## Task Requirements

1. Please use Laravel 5.2
2. Please use Vue.js on the front end
3. Please use Twitter Bootstrap for any “look and feel” HTML/CSS elements
4. Please use the default Laravel authentication for user login and user registration.
5. Please use Laravel Elixir with Gulp for any static asset compiling

## Task Details

For the sake of the test, you will be evaluated solely on two items:

1. Your PHP code
2. Your Vue.js code

You do not need to focus at all on the “look and feel” of the application.  The colors of the buttons, the layout, the HTML/CSS - these things do not matter in the case of this test.

The most important part is that we should be able to quickly look at the basic front end you build for this app - and after that, we will directly evaluate your PHP and Vue.js code.  Do not get stuck focusing on the visual / look-and-feel because we are not evaluating you on this.


## Technical Specs

To further expand on the functionality requirements outlined above, here are some more details on what we see as the requirements for this app:

### Views

1. Add Person View - a view where a user can add a new person to the application, and can also optionally add the person to a family.
2. Person Detail View - a view where a user can see the specific details about a person in the system, and also modify the family of the person.
3. All People View - a view where a user can see a list of all people in the application
4. Family Tree View - a view where a user can see the family tree of a specific family


### Models

1. Person
2. Family
3. User (this is included with Laravel by default, and you should be able to use the default Laravel authentication here)


### Background Jobs

1. Post to slack - we included a slack endpoint above.  Please integrate the Slack composer package (https://github.com/maknz/slack), and setup a Job that can be dispatched to send Slack messages.  In this specific example, with the provided Slack API endpoint (https://hooks.slack.com/services/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) - you will be posting to the #general channel in our company Slack account.

