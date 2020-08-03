1. How to build a docker image

From this folder, run the following command. 
docker build -t <dockerimage:tag> .
Example: docker build -t learnimage:1.0 .

2. How to run the docker image

Once the image is built, you'll have to use the following command to run the image.
docker run -P -d <imagename>
Example: docker run -P -d learnimage:1.0

3. How to connect to the appliction.

Run the following command to find the id of the running container.
docker ps
Example:
docker ps
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                   NAMES
a908c0b41bbf        learn:1.0           "docker-php-entrypoi…"   7 minutes ago       Up 7 minutes        0.0.0.0:32771->80/tcp   happy_jang

Now you can connect to the application using: http://localhost:32771/public/index.php
Note: the port 32771 may be different for your case. Check the ports section in the docker ps command output to find
out the actual port the application is running.


