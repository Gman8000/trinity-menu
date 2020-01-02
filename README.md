# Trinity Menu

The purpose of this project is to learn. Learn how to set up a simple static website that uses HTML and CSS that shows the menu for the Trinity website. You can view the live version at [https://gerhardtjvr.github.io/trinity-menu/](https://gerhardtjvr.github.io/trinity-menu/)

## Getting started

To get this project set up locally, follow these steps:

1. Clone this repo to a local folder by running `git clone git@github.com:gerhardtjvr/trinity-menu.git`.
2. CD into the root of the folder with `cd trinity-menu`.
3. Ensure that docker is installed and running.
4. In the root of this folder, run `docker-compose up`.

This should start an Apache server on http://localhost:8080 hosting the code in the /public folder.

This should also start Adminer on http://localhost:8081. To restore the DB, go to http://localhost:8081/?server=db&username=root and select the files from the /migrations folder.

