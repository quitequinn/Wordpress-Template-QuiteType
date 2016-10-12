# Wordpress Template QuiteType

This is a boiler plate of sorts that includes Wordpress, AWS Elatic Beanstalk, AWS S3, Gulp, Live Reload, Bootstrap, Underscores Wordpress Theme, and a grouping of other usfull utilities for theme creation, javascript linting and writing, as well as Style writing.


## Table of Contents

- [Table of Contents](#table-of-contents)
- [Get Started](#get-started)
- [Server Choice](#server-choice)
- [Sync Wordpress to Elastic Beanstalk](#sync-wordpress-to-elastic-beanstalk)
- [Editor](#editor)
- [Preprocessor](#preprocessor)
- [Styling](#styling)
- [Javascript](#javascript)
- [SVGs](#svgs)
- [Images and Cursors](#images-and-cursors)
- [Static Files](#static-files)
- [Usefull Utilities](#usefull-utilities)



## Get Started

The easiest way to get started is to clone the repository.

Then you should rename your root folder, theme folder and Wordpress_Template_QuiteType.sublime-project file to your project name. 

Finally open your new ####.sublime-project file. Search/Change every occurance of Wordpress_Template_QuiteType to your project name — **as well as in your Sublime Project file** — with spaces as underscores. Also search/change every occurance of Wordpress–Template–QuiteType to your project name with spaces as hyphens.

```bash
# Install NPM dependencies
$ npm install

# command + t
$ gulp && gulp watch
```



## Server Choice

We serve our wordpress builds from AWS. Elastic beanstalk provides a easily horizatally scallable setup for any size web app. We also us S3 for file managment often with a CloudFront cdn configuration. 
https://aws.amazon.com/

If you want to read up on a alternative proccess you can find one here:
https://www.otreva.com/blog/deploying-wordpress-amazon-web-services-aws-ec2-rds-via-elasticbeanstalk/

First create you elastic bean stalk instance on the AWS console. At the moment we use 64bit Amazon Linux 2015.09 v2.0.4 running PHP 5.6. Then you can set it up via your command line.

```bash
############
## EB CLI ##
############

#download and install EB CLI
brew install awsebcli

#update EB CLI
brew upgrade awsebcli

#verify EB CLI
eb --version

#create instance
eb init
```



## Sync Wordpress to Elastic Beanstalk 

You can work with two accounts by creating two profiles on the aws command line. It will prompt you for your AWS Access Key ID, AWS Secret Access Key and desired region, so have them ready.

Examples:
```bash
aws configure --profile account1
aws configure --profile account2
```

You can then switch between the accounts by passing the profile on the command.

Examples:
```bash
aws dynamodb list-tables --profile account1
aws s3 ls --profile account2
```

This allows you to push your git repo to the EB instance. Make sure you have commited and pushed a current version of the site to github. After the deploy make sure you remember to refresh the WP permalinks.

```bash
##################
## DELOY SERVER ##
##################

eb deploy --profile ACCOUNT_NAME
```



## Editor

We prefer to use sublime for our editor. There are a lot of great reasons why but to keep it short this setup is customized for sublime because we've created a sublime project file with all the relavent files in it. Inorder to get started just double click on the sublime-project file.



## Preprocessor

We use gulp as our preprocessor. There are a bunch of usfull utilities connected to gulp such as opimizing and linting javascript and css, live relad, optimizing images and svgs. I would recomend you open up the gulp file and look at how this is done if your curious. The most important thing to remember is that these files are compiled from WP_THEME/src and outputted to WP_THEME/dist.



## Styling

We use SCSS for our style generation. Styles are placed in WP_THEME/src/sass. I would recommend you take a look at some of the utilites included but at a glance I've included **Utility OpenType**, **normalize.css**, **font-awesome**, **bootstrap**, **elusive-iconfont**, and **color + mixin utilities**. I recomend you place individual page styles in partials/ and modules in your components/ folder. Finally global styles are placed in your global.scss and all of the styles are compiled within site.scss,



## Javascript

Javascript is placed in  WP_THEME/src/js. The primary file is main.js but this pulls in the partials and functions files on compilation. I would recomend you create a new partial for every page you are working on. 



## SVGs

SVGs are placed in the WP_THEME/src/svg folder. These will be optimized on compilation. 



## Images and Cursors

Images and Cursors are placed in the WP_THEME/src/cursors anf WP_THEME/src/img folder. These will be optimized on compilation. 



## Static Files

Static files are placed in WP_THEME/src/static. 



## Usefull Utilities


### SSH into EC2 instance

You shouldn't have to ssh into the ec2 instance.. but incase you do this is how its done.

```bash

# Fix pem file's permissions
sudo chmod 400 "####.pem"

# SSH in (address might change)
ssh -i "####.pem" ec2-user@###-##-##-###-###.us-####-#.compute.amazonaws.com
```



### Upload files to bucket

```bash

aws s3 sync /YOUR_FOLDER s3://YOUR_BUCKET/

```



### mySQL Edits

```bash

# access msSQL
mysql -h ##########.#########.us-####-#.rds.amazonaws.com -u ##### -p ebdb

```

In sql.

```mysql

# show tables
show tables

# drop Tables
drop table wp_posts, wp_usermeta;

```
