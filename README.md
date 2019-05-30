# Foundation for Sites Template

**Please open all issues with this template on the main [Foundation for Sites](https://github.com/zurb/foundation-sites/issues) repo.**

This is the basic starter project for [Foundation for Sites 6](http://foundation.zurb.com/sites). It includes a Sass compiler and a starter HTML file for you.

## Installation

To use this template, your computer needs:

- [NodeJS](https://nodejs.org/en/) (0.12 or greater)
- [Git](https://git-scm.com/)

This template can be installed with the Foundation CLI, or downloaded and set up manually.

### Using the CLI

Install the Foundation CLI with this command:

```bash
npm install foundation-cli --global
```

Use this command to set up a blank Foundation for Sites project with this template:

```bash
foundation new --framework sites --template basic
```

The CLI will prompt you to give your project a name. The template will be downloaded into a folder with this name.

### Manual Setup

To manually set up the template, first download it with Git:

```bash
git clone https://github.com/zurb/foundation-sites-template projectname
```

Then open the folder in your command line, and install the needed dependencies:

```bash
cd projectname
npm install
```

Finally, run `npm start` to run the Sass compiler. It will re-run every time you save a Sass file.


---

# Friends of Battye Library Developer Notes

## PAGE SETUP
View newpage.php for page setup example

Include header at the very beginning of each page:
    `<?php $pageTitle ="Home"; include 'templates/header.php';?>`

Include footer at the very bottom of each page:
    `<?php include 'templates/footer.php';?>`

Wrap all page content within `<main>` tags.


## INCLUDING MODULES
Include modules within `<section>` tags:
    `//COMMENT SECTION NAME & INFO`
    `<?php include 'modules/MODULE-NAME-HERE';?>`
    Give sections the class `.mod`.

## DEVELOPING MODULES
### Class naming conventions:
Naming modules:
    mod-MODULETYPE-MODULENAME
    e.g.   mod-section-fw

Unique class for targeting specific modules:
    mod-MODULETYPE-MODULENAME
    e.g.   mod-section-index

Nested elements:
    Retain parent class name and add onto it
    mod-MODULETYPE-MODULENAME-CHILDNAME
    e.g.    mod-section-fw-img,
            mod-section-fw-txt

    This makes it easier to target nested elements in SASS
    e.g.    mod-section-fw {
                &:img {
                    //styling
                }
                &:txt {
                    //styling
                }
            }

Images:
    Give all image containers the class `img-styling`