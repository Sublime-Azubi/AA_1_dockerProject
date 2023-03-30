# AA_1_dockerProject
This is Sublime docker docker project

This project aims to dockerise a php application and and subsequently run the container on an aws ECS cluster. aws Fargate launch type will be used in this case.


Applicaction is a simple phpapplication wish a php server-side scripting that processes the submission throuh a web form

![image](https://user-images.githubusercontent.com/104580680/228970260-6b6041a2-bdf8-446c-969b-91a454adf739.png)


#BUILD DOCKER IMAGE
Created Dockerfile in the root directory using variant that contains a web server . php:<version>-cli – (php:8.0-apache)
Docker build command
  
> docker build -t php-apache .
>Run the Docker image
> docker run -it --rm --name m-apache-app php-apache
![image](https://user-images.githubusercontent.com/104580680/228970922-b636cf38-d7d6-41ba-abdd-94a1cd76433b.png)
