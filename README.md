USAGE
=====

Create the OpenShift aplication (replace APPNAME with anything):

    $ rhc app-create APPNAME php-5.3 mysql-5.1 --from-code https://github.com/C5OK5Y/owncloud-openshift-quickstart.git

Due to a [bug][504], creating the application may fail:
[504]: https://bugzilla.redhat.com/show_bug.cgi?format=multiple&id=975540

    Creating application 'APPNAME' ... Server returned an unexpected error code: 504

Despite the error, it's probable, that the application was created successfully. The error prevents the application repository from being automatically cloned, clone it manually:

    $ rhc git-clone APPNAME

CREDENTIALS
-----------
The default username is `admin` and password `password`.

UPDATING
========

The easiest way to update the application is by pulling the updates from this repository. To enable that, add this repository as a remote to your cloned repository:

    $ cd APPNAME
    $ git remote add upstream -m master https://github.com/C5OK5Y/owncloud-openshift-quickstart.git

Then pull the updates into your cloned repository and push them:

    $ git pull upstream master
    $ git push
