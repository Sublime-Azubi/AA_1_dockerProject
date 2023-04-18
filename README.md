# AA_1_dockerProject

VERSION 2

The version 2 of the application is a dockerised application. The next stage is a build a docker Immage of our exixting application such that is is easily shipped and deployed in any other enviroment with less opeartional over head

#BUILD DOCKER IMAGE Created Dockerfile in the root directory using variant that contains a web server . php:-cli – (php:8.0-apache) Docker build command

_> docker build -t php-apache .

Run the Docker image docker run -it --rm --name m-apache-app php-apache_ image

#Push Docker Immage to Docker Hub To do this, we need to configure our local terminal with the docker id where i have to push the image.

_ $ docker image tag rhel-httpd:latest registry-host:5000/myadmin/rhel-httpd:latest $ docker image push registry-host:5000/myadmin/rhel-httpd:latest _

##Pull the image using the docker build command.

#BUILDM TAG AND PUSH IMAGE TO REGISTRY

To build, tag and push docker image to Elastic Container registry, there are a few steps. The steps bellow highlights the steps to achieve this.

- CREATE REPOSITORY. (Private or public)

NOTE: AWS ECR allows the creation of private and public repositories. A private repository can be created in any region, while the public one can only be created in the region us-east-1.

You can store your Docker image in a Private or public repository. The images pushed on a public repository can be pulled by anyone with the URI, while those on the private repository are restricted to people with permission to pull. Pushing images on a public repository is free, while on a private repository, you have 500MB of storage each month for one year

_In the project, we will be using a public repository._

To start, we must create a repository; I will use the console. You can use AWS CLI if you wish

-Go to the ECR page in the console to create a repository:

The repository visibility is set to private by default, change to public Give the name of the repository,

croll to the bottom and click on the button to create a repository.

You can create a private repository in the AWS region you want. Still, choosing the region close to where the service will pull images from this repository is recommended. I will use the region eu-west-3.

We can now push the image on the repository using the AWS CLI in three steps: image

** push the image on the repository using the AWS CLI in three steps**

Retrieve an authentication token and authenticate your Docker client to your registry. Replace <account_id> with your AWS account ID aws ecr-public get-login-password --region us-east-1 | docker login --username AWS --password-stdin public.ecr.aws/<repository_alias>

Tag the Docker image we want to push. replave with the application name docker tag node-app:latest public.ecr.aws/x9y5g9l2/:latest

Push the image to the repository docker push public.ecr.aws/x9y5g9l2/:latest

That is it, Wait for the push to complete and check out the repository in the AWS console

You can copy the URL of the image and be able to pull the image using the docker pull command.
