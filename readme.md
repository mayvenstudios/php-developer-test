# Code My Views PHP Developer Test

## Goal

Please spend no more than 10 hours on this task.  If you cannot complete the entire task in less than 10 hours, please commit what you are able to finish within that time frame.

## Delivery

Please fork this project into a Git repo, and notify connor@codemyviews.com when it is ready for review.

## Task Description

Please create a new Laravel 5.2 application that fulfills the following functionality.

1. A user can add people
2. A user can connect people together as families
3. A user can see a family tree to any particular Person in the application 
4. Each time a new person is added, a new background job should be dispatched.  The background job should post a message to this Slack endpoint: https://hooks.slack.com/services/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 - with the name of the Person added.  Please integrate the Slack composer package (https://github.com/maknz/slack), and setup a Job that can be dispatched to send Slack messages.  In this specific example, with the provided Slack API endpoint, you will be posting to the #general channel in our company Slack account.

## Task Requirements

1. Please use Laravel 5.2 (you can fork this repo)
2. Please use Vue.js or React.js on the front end
3. Please use Twitter Bootstrap for any “look and feel” HTML/CSS elements
4. Please use the default Laravel authentication for user login and user registration.
5. Please use Laravel Elixir with Gulp for any static asset compiling

## Task Details

For the sake of the test, you will be evaluated solely on two items:

1. Your PHP code
2. Your Vue.js code (or React.js if you want to use React)

You do not need to focus at all on the “look and feel” of the application.  The colors of the buttons, the layout, the HTML/CSS - these things do not matter in the case of this test.

The most important part is that we should be able to quickly look at and understand how to use the front end you build for this app - and after that, we will directly evaluate your PHP and Vue.js/React.js code.  Do not get stuck focusing on the visual / look-and-feel because we are not evaluating you on this.
