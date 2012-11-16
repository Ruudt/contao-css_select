Contao Extension "css_select"
=============================

Change the CSS ID and class to a selectbox. This makes it possible to enable this field for most people so they can choose values instead of typing.



## Intro ##

This is an extension for the [Contao Open Source CMS][1]. If you are not a software developer, please download or install from the [Contao Extension Repository][2].


## Description ##
The extension can change the CSS ID and Class text fields of any Contao core element that has such fields into a selectbox of which the options can be defined.

Most people (ex. customers) do not fully understand when they get instructions to insert the word "darkblock" into the second text field so that the text content element gets a dark background. The text field gets changed into a select box that includes the option "dark_block", labeled "Dark box". Of course all options are free to choose.

Both CSS ID and CSS class can be changed into a selectbox in the system settings. After enabling the available options can be chosen.

This works for:

    1. Page -> Classes
    2. Article -> ID/Classes
    3. Content elements -> ID/Classes
    4. News -> Classes (Contao 3 and up)
    5. Calender events -> Classes
    6. Forms -> ID/Classes
    7. Form fields -> Classes

## Usage ##

After installation, you will see a new section "CSS id/class presets" in System->Settings. Here you can enable the select box per content type and then choose values and their labels. When enabled you can no longer free type in the corresponding fields, you can only select from the selectbox options.

Note that an empty option can be added using an empty value and label "-".


## Dependencies ##

There are no other external dependencies then Contao 2.10 or newer (including 3.0+).



[1]: http://contao.org/
[2]: http://contao.org/en/extension-list.html
