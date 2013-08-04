USAGE
=====

Create an OpenShift aplication, you are free to replace *owncloud* with a different name:

    $ rhc app-create owncloud php mysql --from-code https://github.com/C5OK5Y/owncloud-openshift-quickstart.git

Optionally add this repository as *upstream*:

    $ cd owncloud
    $ git remote add upstream -m master https://github.com/C5OK5Y/owncloud-openshift-quickstart.git

CREDENTIALS
-----------
The default username is `admin` and password `password`.
