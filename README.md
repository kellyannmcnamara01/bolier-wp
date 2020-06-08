# Boiler WP

## JS Actions
- When changing the state of an element with js use class names such as `is-open`, `is-hiding`, `is-fixed` to show/describe the change of state
- Elements that are targeted by js should have a duplicated class name with the addtiona of `js--` in front. An example of that is `clas-name js--class-name`, this way the scss will not get cluttered with the addtional `js--` and it is easier for a dev to see what elements within the html are targeted by js. This being said if there is a popup and a popup button, you only need to add the addtional `js--` to the button, which is the trigger. 


## Accessibility

### E-readers text
The global class `e-reader-only` will visually hide anything it is attached to but still allows an e-reader to get the content in order of the html. Best used on `div` or `span` tags

### Skip to main content btn
Part of Context's accessibility standards is to insure we have a working *Skip to Main Content* btn for e-readers. Within the header this button is included. It currently is set up to skip the top-bar and go to the html element with the id of `main-content`. It is citical that this is working on every template. 


## Ensuring IE Styling
- After the closing div of every `row` insure you add a div with the class `clear-float`
- The grid scss file is already set up to work so do not edit it unless necessary
- Duplicate the mixins, typography and variables from /src/styles/globals to src/ie-styles/globals
- Make the apportiate adjustments within the correct scss files/folders 


## Search Highlight
At the bottom of the search php page you will find a script. *It is required to be there due to the direct php we are echoing into the js.* At the very bottom of it you will see that the `highlightSearchedTerm()` is being called and passing through the elements that the function needs to look through. I have it set particularly like that so the page doesn't crash go through every element on it. Update the elements to adjust to your theme's html markup.
