# Nightingale 2.0 WordPress Theme for NHS Frontend Library

### This is in a pre-release version. Do not use on production sites

## Dependancies
 - This theme requires an active WordPress install of *version 5 or higher*
 - This theme works best with the [NHSL-Blocks plugin](https://github.com/NHSLeadership/nhsl-wp-blocks) and the [Advanced Custom Fields Pro plugin](https://www.advancedcustomfields.com/pro/) - generously they have given us an NHS wide license key
 - You will need to either be able to run node, or to run node locally to build the scss files then upload
 - This theme will pull in the NHS Frontend Library via node commands
 
## Installation
 - Add to your WordPress files, in the `wp-content/themes` folder
 - If you have command line access, run `npm install` then `npm run build`. This will generate your output css files.
  Any time you edit the scss, you will need to rerun `npm run build` in the command line
 - If you dont have command line access to your server, you will need to run these commands locally to generate the 
 output css before uploading
 - Activate the theme 
 - email tony.blacker@leadershipacademy.nhs.uk for the ACF Pro license key, and you will need to install this manually
 - Activate the `ACF Pro` and `NHS Leadership Academy Blocks for Gutenburg` plugins - either from the themes page or in plugins. *Install and enable ACF Pro before the blocks plugin to ensure full functionality*
 
## To be aware of
 - XML/RPC will be disabled on activation of the theme. This is a sensible security setting, and if you currently use
  XML RPC I suggest you have a Google to see exactly why its a bad idea to leave it turned on.
  
## Progress
 - [x] Load in the NHS Frontend library
 - [x] Style header, amend markup to match expected output
 - [x] Provide zone for WordPress controlled menu
 - [x] Provide alternative header for NHS Organisations with white logo including title
 - [x] Add Hero banner (via NHSL Blocks plugin)
 - [x] Style sidebar to match contents list styling
 - [x] Pagination styling
 - [x] Footer styling and WordPress menu inclusion
 - [x] Re-style core images output
 - [x] Re-style core buttons output
 - [x] Provide multiple button styles (via NHSL-Blocks plugin)
 - [x] Style tables
 - [x] Restrict Editor colour palettes to NHS Brand guideline colours
 - [x] Search results page layout
 - [ ] Add icons
 - [x] Template layout code
 - [ ] Typographic classes
 - [x] Custom Gutenburg Blocks (via NHSL-Blocks plugin)
 - [x] Breadcrumb trail styling and addition
 - [ ] Emergency alert
 - [ ] Feedback Banner
 - [ ] Forms elements
 - [ ] Add Gravity Forms compatability
 - [x] Composer build (including auto load NHSL Blocks plugin)
 - [x] Dependancy hint to suggest or force plugin dependancy load (for non-composer install)
 - [ ] Widgetize footer region
 - [x] Alternative navigation aid to Tabs
 - [ ] Device checks (mobile, tablet, TV etc)
 - [ ] Print layout / styling
 - [ ] Accesibility audit
 
 ## Licence
 
 The codebase is released under the Open Government 3.0 licence, unless stated otherwise. This covers both the codebase and any sample code in the documentation. The documentation is © Crown copyright and available under the terms of the Open Government 3.0 licence.
